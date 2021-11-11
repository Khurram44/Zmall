<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    public $table = 'cities';
     public $timestamps = false;

     public function province_info()
	{
	    return $this->belongsTo('App\Province', 'province_id');
	}

    public function Province()
    {
        return $this->belongsTo('App\Province');
    }

}