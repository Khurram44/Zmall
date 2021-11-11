<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
   // public $table = 'provinces';
    // public $timestamps = false;
     
     public function Cities()
     {
         return $this->hasMany('App\Cities');
     }
}