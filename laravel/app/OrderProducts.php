<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    //
    public $table = 'order_products';
    public $timestamps = false;

    public function productinfo()
	{
	    return $this->belongsTo('App\Products', 'product_id');
	}
	public function orderinfoproduct()
	{
	    return $this->belongsTo('App\Orders', 'order_id');
	}
	
}
