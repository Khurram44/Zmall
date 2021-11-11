<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flayer_order extends Model
{
    public $table = 'flayer_order';
    public $timestamps = false;
    
    public function Userinfo()
	{
	    return $this->belongsTo('App\User', 'owner_id');
	}
}
