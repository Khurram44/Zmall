<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customercare_prouct extends Model
{
    public $table = 'customercare_prouct';
    public $timestamps = false;

    public function userinfo()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
}