<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	/**
	 * Users under this position
	 * 
	 * @return App\User
	 */
    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
