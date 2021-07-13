<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name','description','date_start', 'date_end', 'date_finish','count_workers','user_id',
    ];
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function roles(){
        return $this->hasMany(Role::class);
    }
    public function statuses(){
        return $this->hasMany(Status::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
