<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    //
    public $table = 'product_gallery';
    public $timestamps = false;

    public function productinfo()
	{
	    return $this->belongsTo('App\Products', 'product_id');
	}
}
