<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Orders;
use App\OrderProducts;
use App\PaymentMethod;
use App\Amount;
use App\FollowedStore;
use App\Cities;
use App\Province;
use App\Payout_History;
use App\financial_Details_store;
use App\storeDetail;
use App\Wishlist;
use App\Products;
use App\Review;

class ProfileController extends Controller
{
  public function contact()
  {
    $Userid= Auth::id();
    $user=User::where('id',$Userid)->first(); 
    return view('user_dashboard.contact',compact('user'));
  }
  public function vouchers()
  {
    return view('user_dashboard.vouchers');
  }
  public function cashback()
  {
    return view('user_dashboard.cashback');
  }
  public function new_address()
  {
    $cities = Cities::all();
    $province = Province::all();
    return view('user_dashboard.new_address',compact('cities','province'));
  }
  public function address()
  {
    return view('user_dashboard.address');
  }
  public function orderSummaries()
  {
    return view('user_dashboard.orderSummaries');
  }

  public function follow_store($id)
    {
        if(isset($_POST['follow_store']))
        {
            $followed_store = new FollowedStore();
            $followed_store->vendor_user_id = $id;
            $followed_store->followed_by= Auth::id();
            if($followed_store->save())
            {
                return redirect()->back();
            }

        }
    }
}

