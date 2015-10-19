<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{	
    /**
     * Residents of this county
     * 
     * @return App\User Residents
     */
    public function residents()
    {
    	return $this->hasMany('App\User');
    }

     /**
     * County positions: A position in a county must be held by a county member
     * 
     * @return App\Positions
     */
    public function positions()
    {
        return $this->hasManyThrough('App\Position', 'App\User', 'county_id', 'user_id');
    }
}
