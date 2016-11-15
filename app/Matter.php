<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    public function teachers()
    {
        return $this->belongsToMany('App\Teacher', 'teacher_teachs', 'matter_id', 'teacher_id');
    }

    public function subjects()
    {
    	return $this->hasMany('App\Subject');
    }

    public function classes()
    {
        return $this->belongsToMany('App\Class', 'matters_class', 'matter_id', 'class_id');
    }
}
