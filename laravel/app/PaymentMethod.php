<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
     public $table = 'user_payment_method';
     public $timestamps = false;
}
