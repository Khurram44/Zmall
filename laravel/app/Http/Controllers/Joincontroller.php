<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class Joincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('classes',compact('data')); die;
       
      // return veiw('home');

        }

        // if(isset($_POST['editworker']))
        // {

        //     extract($_POST);
        //     $add= User::where('id', $rowid)->first();
        //     $add->name = $name;
        //     $add->email = $email;
        //     $add->country_id = $country_id;
        //     $add->state = $state;
        //     $add->city = $city;
        //     $add->address = $address;
        //     $add->password =bcrypt($password);
        //     $add->status = $active;
        //     $add->role = 'worker';
        //     $add->image = $request->image->store('images');
        //     if($add->save())
        //     {
        //         return redirect ('worker')->with('status', 'New worker add successfully');
        //     }

        // }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(isset($_POST['register']))
        {

            extract($_POST);
            $add= new User;
            $add->first_name = $firstname;
            $add->last_name = $lastname;
            $add->username = $username;
            $add->email = $email;
            $add->password =bcrypt($password);
        
            $add->role = 'user';
            if($add->save())
            {
                return redirect ('/home')->with('status', 'you are registered successfully');
            }
        }

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
