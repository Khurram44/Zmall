<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqssController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getdata =  \DB::table('faq')->get();
        return view('faq',array('getdata'=>$getdata,));
    }
}
