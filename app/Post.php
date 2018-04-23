<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = [];
    //
   public function user()
	{
	    return $this->belongsTo('App\User');
	}
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    public function like()
    {
        return $this->hasMany('App\Like');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
