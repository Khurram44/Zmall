<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public $table = 'wish_list';
     public $timestamps = false;

     public function productinfo()
	{
	    return $this->belongsTo('App\Products', 'product_id');
	}


}