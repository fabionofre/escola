<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function address()
	{
    	return $this->belongsTo('App\Address');
	}
}
