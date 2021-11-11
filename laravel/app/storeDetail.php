<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storeDetail extends Model
{
     protected $table= "storeDetails";
    public $primarykey ="id";
    public $timestamp = false;
  public function finalinfo()
	{
	    return $this->belongsTo('App\financial_Details_store', 'store_id');
	}
	public function userinfo()
     {
         return $this->belongsTo('App\User', 'owner_id');
     }
     public function cityinfo()
     {
         return $this->belongsTo('App\Cities', 'city','name');
     }
}
