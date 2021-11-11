<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FollowedStore extends Model
{
    public $table = 'followed_stores';
     public $timestamps = false;

     public function user_info()
	{
	    return $this->belongsTo('App\User', 'vendor_user_id');
	}


}