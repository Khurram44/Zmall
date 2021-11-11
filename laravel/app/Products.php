<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    public $table = 'products';
    public $timestamps = false;

    public function categoryinfo()
	{
	    return $this->belongsTo('App\Manage', 'category');
	}

	public function subcategory()
	{
	    return $this->belongsTo('App\Manage', 'sub_category_id');
	}

	public function typeinfo()
	{
	    return $this->belongsTo('App\Manage', 'type_id');
	}

	public function brandinfo()
	{
	    return $this->belongsTo('App\Manage', 'brand_id');
	}

	public function sizeinfo()
	{
	    return $this->belongsTo('App\Manage', 'size');
	

	}
	public function userinfo()
	{
	    return $this->belongsTo('App\User', 'added_by');
	}
	public function storeinfo()
	{
	    return $this->belongsTo('App\storeDetail', 'owner_id');
	}
	public function colorinfo()
	{
	    return $this->belongsTo('App\product_color', 'product_id');
	}
}
