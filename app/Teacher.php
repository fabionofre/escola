<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function matters()
    {
        return $this->belongsToMany('App\Matter', 'teacher_teachs', 'teacher_id', 'matter_id');
    }
}
