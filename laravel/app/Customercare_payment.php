<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customercare_payment extends Model
{
    public $table = 'customercare_payment';
    public $timestamps = false;

    public function userinfo()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
}