<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function address()
	{
    	return $this->belongsTo('App\Address');
	}

	public function responsible()
	{
    	return $this->belongsTo('App\Responsible');
	}

	public function class()
    {
        return $this->belongsTo('App\Class');
    }

}
