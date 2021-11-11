<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customercare_accounts extends Model
{
    public $table = 'customercare_accounts';
    public $timestamps = false;

    public function userinfo()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
}