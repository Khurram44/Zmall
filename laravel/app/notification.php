<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    public $table = 'notification';
    public $timestamps = true;
		public function userinfo()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
}
