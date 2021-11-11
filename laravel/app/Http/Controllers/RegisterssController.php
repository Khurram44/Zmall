<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class RegisterssController extends Controller
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
        return view('register');
    }

    public function registar ()
    {
        if(isset($_POST['register']))
        {
            extract($_POST);
            $register= new User;
            $register->first_name= $firstname;
            
        }
    }
}
