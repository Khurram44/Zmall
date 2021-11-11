<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloggridController extends Controller
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
            $blog =  \DB::table('blogs')->get();
            return view('blog_grid',array(
            'blog'=>$blog
        ));
    }
     public function blogdetail($id)
    {
           $blogdetail =  \DB::table('blogs')->orderBy('id', 'desc')->get();
            $GetData =  \DB::table('blogs')->where('id', $id)->first();
            return view('blog_detail',array(
            'GetData'=>$GetData,
            'blogdetail'=>$blogdetail
        ));
    }
}
