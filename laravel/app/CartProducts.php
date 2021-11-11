<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartProducts extends Model
{
    //
    public $table = 'cart_products';
    public $timestamps = false;

    public function productinfo()
	{
	    return $this->belongsTo('App\Products', 'product_id');
	}
}
