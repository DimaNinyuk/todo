<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\raw;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date=(new DateTime());

        $mon = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',1)->count('id');
        $tue = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',2)->count('id');
        $wed = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',3)->count('id');
        $thu = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',4)->count('id');
        $fri = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',5)->count('id');
        $sat = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',6)->count('id');
        $san = Task::whereYear('date_start','=',$date->format('Y'))->whereMonth('date_start','=',7)->count('id');
        $tasks = Task::where('user_id', Auth::user()->id)->paginate(2);
        return view('home', compact('mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'san', 'tasks'));
    }
    public function changeProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('task.changeprofile', compact('user'));
    }
    public function updateProfile()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        if (isset($_FILES['file'])) {
            $uploaddir = public_path() . '/img';
            $namefile = time() . rand(0, 1000000) . '_' . basename($_FILES['file']['name']);
            $uploadfile = $uploaddir . '/' . $namefile;
            move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
            $imgstring='/img/'.$namefile;
            User::where('id', Auth::user()->id)->update([
                'name' => $name,
                'email' => $email,
                'img' => $imgstring,

            ]);
        } else {
            User::where('id', Auth::user()->id)->update([
                'name' => $name,
                'email' => $email,
            ]);
        }
        return redirect(url()->previous());
    }
}
