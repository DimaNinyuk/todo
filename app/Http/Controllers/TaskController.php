<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\Task;

class TaskController extends Controller
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
    public function addTask(){
        $nameTask = $_POST['nameTask'];
        $descriptionTask = $_POST['descriptionTask'];
        $dateSTask = $_POST['dateSTask'];
        $dateETask = $_POST['dateETask'];
        $countUserTask = $_POST['countUserTask'];
        $user_id = $_POST['user_id'];
        $project_id = $_POST['pr_id'];
        $task=Task::create([
            'name'=>$nameTask,
            'description'=>$descriptionTask,
            'date_end'=>$dateETask,
            'date_start' => $dateSTask,
            'count_workers' =>$countUserTask,
            'user_id' =>$user_id,
            'project_id'=>$project_id,
        ]);
        Status::create([
            'name'=>'В процессе',
            'task_id'=>$task->id,

        ]);
        return redirect(url()->previous());
    }
}
