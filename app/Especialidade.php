<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Especialidade extends Model
{
    public function consultore()
    {
    	return $this->belongsToMany('App\consultore');
    }

}
