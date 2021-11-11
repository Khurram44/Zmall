<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customercare_cupons extends Model
{
    public $table = 'customercare_cupons';
    public $timestamps = false;

    public function userinfo()
	{
	    return $this->belongsTo('App\User', 'user_id');
	}
}