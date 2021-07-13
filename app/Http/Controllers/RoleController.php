<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    //
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
    public function addRole(){
        $name=$_POST['name'];
        $user_id=$_POST['user_id'];
        $project_id=$_POST['project_id'];
        Role::create([
            'name'=>$name,
            'user_id'=>$user_id,
            'project_id'=>$project_id,
        ]);
        return redirect(url()->previous());
    }
    
}
