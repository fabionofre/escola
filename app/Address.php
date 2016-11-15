<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function responsibles()
    {
        return $this->hasMany('App\Responsible');
    }
}
