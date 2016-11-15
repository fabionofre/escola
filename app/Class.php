<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    public function matters()
    {
        return $this->belongsToMany('App\Matter', 'matters_class', 'class_id', 'matter_id');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }


}
