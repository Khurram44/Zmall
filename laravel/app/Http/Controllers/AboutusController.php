<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
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
        $GetData =  \DB::table('pages')->where('id', 1)->first();
        $ourteam =  \DB::table('our_team')->get();
        return view('about_us',array(
            'GetData'=>$GetData,
            'ourteam'=>$ourteam,
        ));
    }
}
