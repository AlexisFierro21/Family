<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Consultore extends Model
{
    public function especialidade()
    {
    	return $this->belongsToMany('App\especialidade');
    }
}