<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $fillable = [
        'name', 'task_id', 'project_id',
    ];
    
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function task(){
        return $this->belongsTo(Status::class);
    }
}
