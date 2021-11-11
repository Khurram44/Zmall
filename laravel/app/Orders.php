<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    public $table = 'orders';
    public $timestamps = false;

    	public function userinfo()
	{
	    return $this->belongsTo('App\User', 'vendor_id');
	}
	public function cityinfo()
     {
         return $this->belongsTo('App\Cities', 'city','name');
     }
}
