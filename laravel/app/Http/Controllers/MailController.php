<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ordermail;


class MailController extends Controller
{
   public static function sendOrderPlaced ($name,$email)
   {
   	$data = [
   		'name' => $name
   	];
   	Mail::to($email)->send(new ordermail($data));
   }
}
