<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
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
    public function getComment($id){
        $projects = Project::where('id',$id)->get();
        return view('task.commentproject',compact('projects'));
    }
    public function addComment(){
       
        $description=$_POST['description'];
        
        $user_id=Auth::user()->id;
        $task_id=$_POST['task_id'];
        $today = date("Y-m-d");  
        Comment::create([
            
            'description'=>$description,
            'date'=>$today,
            'user_id'=>$user_id,
            'task_id'=>$task_id,
            
        ]);
        return redirect(url()->previous());
    }
}
