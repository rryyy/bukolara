<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    //
   public function user()
	{
	    return $this->belongsTo('App\User');
	}
   public function post()
	{
	    return $this->belongsTo('App\Post');
	}
    public function boosts()
    {
        return $this->hasMany('App\User');
    }
}
