<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Project;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Status;
use App\Task;
use App\User;

class ProjectController extends Controller
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
    public function allProject()
    {
        $projects = Project::where('user_id',Auth::user()->id)->paginate(10);
        return view('task.allproject',compact('projects'));
    }
    public function detailProject($id){
        $projectdetails = Project::where('id',$id)->first();
        return view('task.detailproject',compact('projectdetails'));
    }
    public function editProject($id){
        $projectedit = Project::where('id',$id)->first();
        $users = User::get();
        return view('task.editproject',compact('projectedit','users'));
    }
    public function updateProject(){
        $nameProject = $_POST['nameProject'];
        $descriptionProject = $_POST['descriptionProject'];
        $dateS = $_POST['dateS'];
        $dateE = $_POST['dateE'];
        $countUser = $_POST['countUser'];
        $id= $_POST['id'];
        Project::where('id',$id)->update([
            'name'=>$nameProject,
            'description'=>$descriptionProject,
            'date_end'=>$dateE,
            'date_start' => $dateS,
            'count_workers' =>$countUser,
        ]);
        
        return redirect(url()->previous());
    }
    public function newProject(){
        $projects = Project::where('user_id',Auth::user()->id)->get();
        $users = User::get();
        return view('task.newproject',compact('projects','users'));
    }
    public function addProject(){
        $nameProject = $_POST['nameProject'];
        $descriptionProject = $_POST['descriptionProject'];
        $dateS = $_POST['dateS'];
        $dateE = $_POST['dateE'];
        $countUser = $_POST['countUser'];
        $id = $_POST['id'];
        $project=Project::create([
            'name'=>$nameProject,
            'description'=>$descriptionProject,
            'date_end'=>$dateE,
            'date_start' => $dateS,
            'count_workers' =>$countUser,
            'user_id' =>$id,
        ]);
        Status::create([
            'name'=>'В процессе',
            'project_id'=>$project->id,

        ]);
        return redirect(url()->previous());
    }
    
    public function deleteProject(){
        
        $id= $_POST['project_id'];
        $tasksdelete=Task::where('project_id',$id)->get();
        $statusesdelete=Status::where('project_id',$id)->get();
        Role::where('project_id',$id)->delete();
        foreach($tasksdelete as $taskdelete){
            Comment::where('task_id',$taskdelete->id)->delete();
        }
        
        foreach($statusesdelete as $statusdelete){
            Status::where('project_id',$id)->delete();
        }
        foreach($tasksdelete as $taskdelete){
            Status::where('task_id',$taskdelete->id)->delete();

        }
        Task::where('project_id',$id)->delete();
        
        
        Project::find($id)->delete();
        return redirect(url()->previous());
    }
    public function completedProject(){
        $projects = Project::where('user_id',Auth::user()->id)->paginate(10);
        return view('task.completedproject',compact('projects'));
    }
    public function unfulfilledProject(){
        $projects = Project::where('user_id',Auth::user()->id)->paginate(10);
        return view('task.unfulfilledproject',compact('projects'));
    }
    
    
}
