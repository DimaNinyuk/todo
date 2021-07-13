<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name','description','date_start', 'date_end', 'date_finish','count_workers','user_id','project_id',
    ];
   
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function statuses(){
        return $this->hasMany(Status::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
