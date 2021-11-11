<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    //
    public $table = 'product_attributes';
    public $timestamps = false;

    public function productinfo()
	{
	    return $this->belongsTo('App\Products', 'product_id');
	}
	public function attributeinfo()
	{
	    return $this->belongsTo('App\Manage', 'value');
	}
}
