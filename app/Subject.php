<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function matter()
    {
        return $this->belongsTo('App\Matter');
    }
}
