<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    public $table = 'community_members';
    
    
	public function communityid()
	{
	    return $this->belongsTo('App\Community', 'comunity_id');
	}
}
