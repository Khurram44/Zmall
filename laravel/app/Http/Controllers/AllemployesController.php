<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Applanguage;
use App\Language;
use App\Friendlist;
class AllemployesController extends Controller
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
        $account_type='Employee';
        $GetData =  \DB::table('pages')->where('id', 1)->first();
        $employeusers =  \DB::table('users')->where('account_type',$account_type)->get();
       // echo "<pre>";print_r($employeusers);die();
        return view('myemploye',array(
            'GetData'=>$GetData,
            'employeusers'=>$employeusers,
        ));
    }
 
    public function employesdetail($id)
    {
        $account_type='Employee';
        $Userid =  Auth::id();
        $Friendlist =  Friendlist::where('user_id',$id)->orWhere('friend_id',$id)->get();
        $checkforcurrentuser =  Friendlist::where('friend_id',$Userid)->where('friend_id',$Userid)->first();
        $languages =  Language::where('user_id',$Userid)->get();
        $educational =  \DB::table('educational_info')->where('user_id',$Userid)->get();
        $experience =  \DB::table('professional_experience_info')->where('user_id',$Userid)->get();
        $GetData =  \DB::table('users')->where('id', $id)->first();
        return view('employeedetail',array(
            'GetData'=>$GetData,
            'experience'=>$experience,
            'educational'=>$educational,
            'loginid'=>$Userid,
            'Userid'=>$id,
            'Friendlist'=>$Friendlist,
            'checkforcurrentuser'=>$checkforcurrentuser,
            'languages'=>$languages
        ));
    }
}
