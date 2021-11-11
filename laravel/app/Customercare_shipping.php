<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customercare_shipping extends Model
{
    public $table = 'customercare_shipping';
    public $timestamps = false;

    public function userinfo()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
}