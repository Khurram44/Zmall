<?php

namespace App\Http\Controllers;
use App\User;
use Session;
use App\storeDetail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\forgetPassword;
use App\Manage;
use App\ContactBook;
use App\user_backup;
use App\Cities;
use App\financial_Details_store;
use App\Province;
use App\flayer_order;

class LoginController extends Controller
{
    public function index()
    {
        return view('login_register');
    }
  public function login_register()
    {
    Session::put('getemail',"");
        return view('login_register');
    }
  
   public function login_register_vendor()
    {
    Session::put('getemail',"");
        return view('login_register_vendor');
    }

    public function morestoreinfo(Request $request)
    { 
      if (isset($_POST['proced'])) 
      {
        if(Auth::id())
        {
            $flayer = new flayer_order;
            $user = User::where('id',Auth::id())->first();
            $flayer->owner_id = $user->id;
            $flayer->order_no = date("Ymdhis");    
            $flayer->quantity = $request->quantity;
            $flayer->size = $request->size;
            $flayer->total_amount = $request->total;
            $flayer->save();
            return redirect('/Vendor/dashboard');
        }
      }
    }
    public function authlogin($flag)
    { 

       extract($_POST);
       if($flag == 'user')
        if (Auth::attempt(['email' => $username, 'password' => $password, 'role' => 'user'])) {
            return response(['response'=> "200",'status'=> "success"]);
        }
        else{
          return response(['response'=> "401",'status'=> "Invalid username or password"]);
        }
        elseif($flag == 'vendor')
        {   $regemail = Session::get('loginemail');
            $regpass = Session::get('loginpass');
            if (!empty($regpass) && !empty($regemail)) {
                if (Auth::attempt(['email' => $regemail, 'password' => $regpass, 'role' => 'vendor'])){
                    return response(['response'=> "200",'status'=> "success"]);
                }
                else{
                return response(['response'=> "401",'status'=> "Invalid username or password"]);
            }
            }
            elseif (Auth::attempt(['email' => $username, 'password' => $password, 'role' => 'vendor'])) {
                    return response(['response'=> "200",'status'=> "success"]);
            }
            else{
                return response(['response'=> "401",'status'=> "Invalid username or password"]);
            }
        }

    }
  public function logindirect($flag){
    extract($_POST);
  if (Auth::attempt(['email' => $username, 'password' => $password, 'role' => 'user'])) {
            return redirect('/dashboard');
        }
        else{
          return redirect()->back()->with('wrong email or password');
        }
  }
    public function authsignup(Request $request)
    {
            $duplicate_email = User::where('email', $request->email)->get();
            $duplicate_username = User::where('username', $request->username)->get();

        if($duplicate_email->count() > 0){
         return response(['status'=> "duplicate email",'message'=> "The email has already been taken"]);
        }elseif($duplicate_username->count() > 0){
         return response(['status'=> "duplicate username",'message'=> "The Phone No has already been taken"]);
        }

       $validatedData = $request->validate([
            'first_name'=>'required',
            'username'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required',
        ]);
            $create_user = new User;
            $back = new user_backup;
            $create_user->phone = $request->username;
            $back->phone_no = $request->username;
            $create_user->email = $request->email;
            $back->email = $request->email;
            $create_user->first_name = $request->first_name;
            $back->first_name = $request->first_name;
            if (!empty($request->gender)){
                $create_user->gender = $request->gender;
            }
            $create_user->password = bcrypt($request->password);
            $create_user->role = $request->role;
            $back->role = $request->role;
            $no = rand(11111111,99999999);
            $create_user->temp_id = $no;
            $back->temp_id = $no;
             Session::put('temp_id',$no);
            if($request->role == 'vendor'){
                Session::put('loginemail',$request->email);
                Session::put('loginpass',$request->password);
            }
            if ($request->role == 'vendor') {
                $as_user = new User;
                $as_user->phone = $request->username;
                $as_user->email = $request->email;
                $as_user->first_name = $request->first_name;
                if (!empty($request->gender)){
                $as_user->gender = $request->gender;
                }
                $as_user->password = bcrypt($request->password);
                $as_user->role = 'user';
                $as_user->save();
            }
            $back->save();
            if ($create_user->save()) {
            return response(['status'=> "success",'message'=> "Your new account created successfully. Please login to continue!"]);
            }else{
              return response(['status'=> "error"]);
            }
       

    }
  public function storedetails()
  {
    $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->paginate(7);
    $cities = Cities::all();
    $province = Province::all();
    return view("storedetails",compact("Categories","province","cities"));
  }

  public function savestoredetails(Request $request)
  {
    extract($_POST);
    $user = User::where('temp_id',Session::get('temp_id'))->first();
    $back = user_backup::where('temp_id',Session::get('temp_id'))->first();
    $owner_id = $store_details = new storeDetail;
    $store_details->owner_id = $user->id;
    $store_details->store_name = $store_name;
    $back->store_name = $store_name;
    $store_details->category = $store_category;
    $back->store_category = $store_category;
    $store_details->address = $store_address;
    $back->address = $store_address;
    $store_details->phone = $store_phone;
    $back->store_no = $store_phone;
    $store_details->state = $store_state;
    $back->province = $store_state;
    $store_details->city = $store_city;
    $back->city = $store_city;
    $store_details->save();
    $back->save();
    $contact = new ContactBook;
    $contact->added_by = $user->id;
    $contact->save();
    $back->save();
    User::where('temp_id', Session::get('temp_id'))->update(['temp_id' => null ]);
    user_backup::where('temp_id', Session::get('temp_id'))->update(['temp_id' => null ]);
    Session::put('temp_id',"");
    $this->authlogin('vendor');
    return redirect('/Vendor/dashboard');
  }

    public function forgetPasswordVendor(Request $request){
         $code = rand(1000,9999);
         $user = User::where('email', $request->email)->where('role','vendor')->first();
         if($user){
                 $reseturl = env('APP_URL')."resetVendor/".base64_encode($user->email);
                        //==========Start Send Email=================//
                        $data = array( 
                                    'name'     =>   $user->first_name." ".$user->last_name, 
                                    'date'     =>   date("d F, Y"),
                                    'verification_code'     =>   $code,
                                    'reseturl'     =>   $reseturl,
                             );
                        Mail::to($user->email)->send(new forgetPassword($data));
                        return response(['status'=> "success",'message'=> "A password reset link has been sent to your email address. Please use that link to update your password!"]);
                        //==========Start Send Email=================//
         }else{
                return response(['status'=> "error",'message'=> "This email does not exit"]);
         }
    }
    public function forgetPasswordUser(Request $request){
         $code = rand(1000,9999);
         $user = User::where('email', $request->email)->where('role','user')->first();
         if($user){
                 $reseturl = env('APP_URL')."resetUser/".base64_encode($user->email);
                        //==========Start Send Email=================//
                        $data = array( 
                                    'name'     =>   $user->first_name." ".$user->last_name, 
                                    'date'     =>   date("d F, Y"),
                                    'verification_code'     =>   $code,
                                    'reseturl'     =>   $reseturl,
                             );
                        Mail::to($user->email)->send(new forgetPassword($data));
                        return response(['status'=> "success",'message'=> "A password reset link has been sent to your email address. Please use that link to update your password!"]);
                        //==========Start Send Email=================//
         }else{
                return response(['status'=> "error",'message'=> "This email does not exit"]);
         }
    }
    public function forgot_password($flag)
    {
        $id = $flag;
        if($id == 'resetVendor'){
        return view('reset_password_vendor',compact("id"));
        }
        elseif($id == 'User'){
            return view('reset_password_user',compact("id"));
        }
    }
    public function flayers()
    {
        return view('flayers');;
    }
    public function resetVendor(Request $request){
        
        if(isset($_POST['update_password'])){
            $this->validate($request, [
                'password' => 'required|confirmed',
            ]);

             $user = User::where('email', base64_decode($request->email))->where('role','vendor')->first();
             $user->password = bcrypt($request->password);
             if($user->save()){
                return redirect()->back()->with('success', 'Your new password updated successfully!'); 
             }

        }
                 
         return view('auth.resetVendor');
        
    }
    public function resetUser(Request $request){
        
        if(isset($_POST['update_password'])){
            $this->validate($request, [
                'password' => 'required|confirmed',
            ]);

             $user = User::where('email', base64_decode($request->email))->where('role','user')->first();
             $user->password = bcrypt($request->password);
             if($user->save()){
                return redirect()->back()->with('success', 'Your new password updated successfully!'); 
             }

        }
                 
         return view('auth.resetUser');
        
    }
}
