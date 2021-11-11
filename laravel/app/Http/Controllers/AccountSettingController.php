<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\ContactBook;
use App\storeDetail;
use App\financial_Details_store;
use DB;
use Illuminate\Support\Facades\Auth;
class AccountSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit_Seller_Account()
    {
        if (isset($_POST['selleraccount'])){
        extract($_POST);
        $userid = Auth::id();
        User::where('id',$userid)->update([
            'first_name' => $f_name,
            'last_name' => $l_name,
            'email' => $email,
            'phone' => $phone,
        ]);
        storeDetail::where('owner_id',$userid)->update([
            'store_name' => $shopname
        ]);
        return redirect()->back()->with('status', 'Seller Account Settings Updated!');
    }
    }
    public function edit_business_info()
    {
        if (isset($_POST['businessinfo'])){
        extract($_POST);
        $userid = Auth::id();
        dd($city);
        if($state == 247) {
                $province = 'Punjab';
            }
            elseif($state == 248) {
                $province = 'KPK';
            }
            elseif($state == 249) {
                $province = 'Sindh';
            }
            elseif($state == 250) {
                $province = 'Balochistan';
            }
            elseif($state == 251) {
                $province = 'Gilgit Baltistan';
            }
            elseif($state == 252) {
                $province = 'Islamabad Capital Territory';
            }
        storeDetail::where('owner_id',$userid)->update([
            'store_name' => $Bname,
            'city' => $city,
            'state' => $province,
            'address' => $store_address,
        ]);
        return redirect()->back()->with('status', 'Business Info Settings Updated!');
    }
    }

    public function edit_actual_address()
    {
        if (isset($_POST['actualaddress'])){
        extract($_POST);
        $Userid = Auth::id();
        ContactBook::where('added_by',$Userid)->update([
            'name' => $f_name,
            'email' =>$email,
            'address' => $address,
            'telephone' => $phone,
            'state' =>$state,
            'city' => $city,
        ]);
        return redirect()->back()->with('status', 'Actual Address Settings Updated!');
     }
    }
    public function edit_return_address(Request $req)
    {
        if ($req->yes == "yes") {
            $Userid = Auth::id();
            $address = ContactBook::where('added_by',$Userid)->first();
            ContactBook::where('added_by',$Userid)->update([
            'return_name' => $address->name,
            'return_email' =>$address->email,
            'return_address' => $address->address,
            'return_telephone' => $address->telephone,
            'return_state' =>$address->state,
            'return_city' => $address->city,
        ]);
        return redirect()->back()->with('status', 'Return Address Settings Updated!');
        }
        if (isset($_POST['returnaddress'])){
        extract($_POST);
        $Userid = Auth::id();
        ContactBook::where('added_by',$Userid)->update([
            'return_name' => $return_name,
            'return_email' =>$return_email,
            'return_address' => $return_address,
            'return_telephone' => $return_telephone,
            'return_state' =>$return_state,
            'return_city' => $return_city,
        ]);
        return redirect()->back()->with('status', 'Return Address Settings Updated!');
     }
    }

    public function edit_seller_logo(Request $req)
    {
        if (isset($_POST['sellerlogo'])) {
            extract($_POST);
            $userid = Auth::id();
            if(!empty($editor1)){
                storeDetail::where('owner_id',$userid)->update([
                'description' => $editor1,
            ]);
            }
            #########logo#############
            if (!empty($req->new_logo)) {
                $logo = $req->new_logo;
            $destinationPath = 'public/frontend/storage/uploads/';
            $time   = date("ymdhis");
            $filename = $logo->getClientOriginalName();
            $new_name = $time.$filename;
            $logo->move($destinationPath, $new_name);
            $fullPath =  $new_name;
            storeDetail::where('owner_id',$userid)->update([
                'logo' => $fullPath,
            ]);
            }
            ######################
            #########banner#############
            if(!empty($req->new_banner)){
            $banner = $req->new_banner;
            $destinationPath = 'public/frontend/storage/uploads/';
            $time   = date("ymdhis");
            $filename = $banner->getClientOriginalName();
            $new_name = $time.$filename;
            $banner->move($destinationPath, $new_name);
            $fullPathbanner =  $new_name;
            storeDetail::where('owner_id',$userid)->update([
                'img' => $fullPathbanner,
                 ]);
            }
            ######################
            
            return redirect()->back()->with('status', 'Logo Settings Updated!');
        }
    }


    #################################################
    public function index()
    {
        $Userid =  Auth::id();
        $user_info= User::where('id', $Userid)->first();
         $current_route_name = Route::currentRouteName();
        return view('account_setting.index',compact('user_info','current_route_name','Userid'));
    }
    public function edit_email()
    {
        $Userid= Auth::id();
        $admin= User::where ('id',$Userid)->first();
        return view('account_setting.email',compact('admin','Userid'));
    }

    public function update_email()
    {
        if (isset($_POST['updatemail']))
         {
            $Userid= Auth::id();
            extract($_POST);
            $update_email=User::where('id',$Userid)->first();
            $update_email->email=$email;
            if ($update_email->save()) 
            {
                return redirect('account-setting')->with('status','Email updated successfully');
            }
        }
    }


    public function edit_phone()

    {
        $Userid= Auth::id();
        $admin= User::where ('id',$Userid)->first();
        return view('account_setting.phone',compact('admin','Userid'));
    }

      public function update_phone()
    {
        if (isset($_POST['updatephone']))
         {
            $Userid=Auth::id();
            extract($_POST);
            $update_phone=User::where('id',$Userid)->first();
            $update_phone->phone=$phone;
            if ($update_phone->save()) 
            {
                return redirect('account-setting')->with('status','Email update successfully');
            }
        }
    }

    public function edit_profile()
    {   $Userid =  Auth::id();
        $admin=User::where('id', $Userid)->first();
        return view('account_setting.profile',compact('admin','Userid'));
    }

    public function update_profile()
    {
        if (isset($_POST['updateprofile']))
        {
            extract($_POST);
            $Userid =  Auth::id();
            $update_profile= User::where('id', $Userid)->first();
            $update_profile->first_name = $first_name;
            $update_profile->last_name= $last_name;
            $update_profile->gender = $gender;
            if ($update_profile->save()) 
            {
                if($Userid == 'vendor')
                {
                   $update_profile->business_name= $business_name;
                   $update_profile->save();
                  return redirect('account-setting')->with('profile_update', 'Profile has been updated successfully');
                 }
                 else
                 {
                    return redirect('account-setting')->with('profile_update', 'Profile has been updated successfully');

                 }

            }
        }

    }

    public function edit_aboutus()
    {
        $Userid =  Auth::id();
        $admin=User::where('id', $Userid)->first();
        return view('account_setting.about_us',compact('admin','Userid'));
    }

    public function update_aboutus()
    {
        if (isset($_POST['updateaboutus']))
        {
            extract($_POST);
            $Userid =  Auth::id();
            $update_aboutus= User::where('id', $Userid)->first();
             $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $update_aboutus->image;
                    }
            $update_aboutus->image= $mainimage;
             $file_path = storage_path('uploads/');
            if(!empty($_FILES['banner']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['banner']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['banner']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $banner = $SaveFileName2; 
                    }else{
                        $banner = $update_aboutus->banner;
                    }
                  $update_aboutus->banner=$banner;
            $update_aboutus->description = $description;
          
            if ($update_aboutus->save()) 
            {
               return redirect('account-setting')->with('profile_update', 'About Us has been updated successfully');
            }
        }


    }
}
