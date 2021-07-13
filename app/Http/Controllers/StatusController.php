<?php

namespace App\Http\Controllers;

use App\Role;
use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    //
    public function updateProjectStatuses(){
        $name=$_POST['name'];
       
        $project_id=$_POST['project_id'];
        $id=Status::where('project_id',$project_id)->first()->id;
        if(!empty($id)){
            Status::where('id',$id)->update([
                'name'=>$name,
            ]);
        }
        else{
            Status::create([

                'name'=>$name,
                'project_id'=>$project_id,
            ]);

        }
        
        return redirect(url()->previous());
    }
    
}
