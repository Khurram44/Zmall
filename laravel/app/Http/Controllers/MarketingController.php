<?php

namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Encryption\EncryptionServiceProvider;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\User;
use App\freeShippingPromotion;
use App\Manage;
use App\blueex_cities;
use App\Orders;
use App\services;
use App\campaign;
use App\ContactBook;
use App\zmall_vouchers;
use App\OrderProducts;
use App\PaymentMethod;
use App\product_attribute;
use App\product_color;
use App\discount_promotion;
use App\Mail\shipmentMail;
use App\storeDetail;
use App\Amount;
use App\vouchers;
use App\FollowedStore;
use App\Payout_History;
use App\financial_Details_store;
use App\Wishlist;
use App\Products;
use App\ProductAttributes;
use App\Review;
use App\Cities;
use App\Province;
use App\flayer_order;

class MarketingController extends Controller
{
    public function marketing_center(){
        return view('dashboard.marketing-center');
    }
    public function vouchers(){
        $userId = Auth::id();
        $voucherList = vouchers::where('user_id',$userId)->get();
        $activeVoucher = vouchers::where('user_id',$userId)->where('status', 'Active')->get();
        $upcomingVoucher = vouchers::where('user_id',$userId)->where('status', 'upcoming')->get();
        $expiredVoucher = vouchers::where('user_id',$userId)->where('status', 'Expired')->get();
        return view('dashboard.marketing.voucher',compact('voucherList','activeVoucher','upcomingVoucher','expiredVoucher'));
    }
    public function vouchers_new(){
        $userId = Auth::id();
        $products = Products::where('added_by',$userId)->where('is_deleted', 0)->where('permission','Approved')->get();
        return view('dashboard.marketing.voucher-new', compact('products'));
    }
    public function savenewvoucher(Request $request){
        if(isset($_POST['V_shop']))
        {

        extract($_POST);
        $userId = Auth::id();
        $voucher = new vouchers;
        $voucher->user_id = $userId;
        $voucher->type= 'shop voucher';
        $voucher->voucher_name = $voucher_name;
        $voucher->voucher_code = 'Zmall'.$voucher_code;
        $voucher->starting_time = $starting;
        $voucher->ending_time = $ending;
        $voucher->discount_type = $dis_type;
        $voucher->discount_number = $dis_amount;
        $voucher->min_price = $min_price;
        $voucher->quantity = $quantity;
        $voucher->status = 'Active' ; 
        $voucher->save();
        }
        if(isset($_POST['P_shop']))
        {
            extract($_POST); 
        $userId = Auth::id();
        $voucher = new vouchers;
        $voucher->user_id = $userId;
        $voucher->type= 'Product voucher';
        $voucher->voucher_name = $voucher_name;
        $voucher->voucher_code = 'Zmall'.$voucher_code;
        $voucher->starting_time = $starting;
        $voucher->ending_time = $ending;
        $voucher->discount_type = $dis_type;
        $voucher->discount_number = $dis_amount;
        $voucher->min_price = $min_price;
        $voucher->quantity = $quantity;
        $voucher->status = 'Active' ;
        $voucher->product = json_encode($id);
        $voucher->save();
        }
        return redirect('/Vendor/vouchers');
    }

    public function deactivate($id){
        vouchers::where('id',$id)->update([
            'status' => 'Expired',
        ]);
        return redirect()->back();
    }
    public function campaign_details($id){
        $campaign = campaign::where('id',$id)->first();
        return view('dashboard.campaign-details',compact('campaign'));
    }
    public function add_campaign($id){
        $userId = Auth::id();
        $campaign = campaign::where('id',$id)->first();
        $voucher = zmall_vouchers::where('user_id',$userId)->where('voucher_code',$campaign->campaign_code)->get();
        return view('dashboard.add-campaign',compact('campaign','voucher'));
    }
    public function add_new_campaign($id){
        $userId = Auth::id();
        $campaign = campaign::where('id',$id)->first();
        $products = Products::where('added_by',$userId)->where('is_deleted', 0)->where('permission','Approved')->get();
        return view('dashboard.add-campaign-new',compact('campaign','products'));
    }
    public function savenewcampaign(Request $request){
        if(isset($_POST['V_shop']))
        {
        extract($_POST);
        $userId = Auth::id();
        $isCampaign = campaign::where('id',$campaign_id)->first();
        $isCampaign->total_seller = $isCampaign->total_seller+1;
        $products = Products::where('added_by',$userId)->where('is_deleted', 0)->where('permission','Approved')->get();
        foreach ($products as $p) {
            $isCampaign->total_products = $isCampaign->total_products+1;
        }
        $isCampaign->save();
        $voucher = new zmall_vouchers;
        $voucher->user_id = $userId;
        $voucher->type= 'Shop voucher';
        $voucher->voucher_name = $voucher_name;
        $voucher->voucher_code = $voucher_code;
        $voucher->starting_time = $starting;
        $voucher->ending_time = $ending;
        $voucher->discount_type = $dis_type;
        $voucher->amount = $dis_amount;
        $voucher->min_price = $min_price;
        $voucher->quantity = $quantity;
        $voucher->save();
        }
        if(isset($_POST['P_shop']))
        {
        extract($_POST); 
        $userId = Auth::id();
        $isCampaign = campaign::where('id',$campaign_id)->first();
        $isCampaign->total_seller = $isCampaign->total_seller+1;
        $products = Products::where('added_by',$userId)->where('is_deleted', 0)->where('permission','Approved')->get();
        foreach ($id as $p) {
            $isCampaign->total_products = $isCampaign->total_products+1;
        }
        $isCampaign->save();
        $voucher = new zmall_vouchers;
        $voucher->user_id = $userId;
        $voucher->type= 'Product voucher';
        $voucher->voucher_name = $voucher_name;
        $voucher->voucher_code = $voucher_code;
        $voucher->starting_time = $starting;
        $voucher->ending_time = $ending;
        $voucher->discount_type = $dis_type;
        $voucher->amount = $dis_amount;
        $voucher->min_price = $min_price;
        $voucher->quantity = $quantity;
        $voucher->product = json_encode($id);
        $voucher->save();
        }
        return redirect('/Vendor/add-campaign/'.$campaign_id);
    }

    public function all_sellers(){
        $userId = Auth::id();
        $promotionList = discount_promotion::where('user_id',$userId)->get();
        $activePromotion = discount_promotion::where('user_id',$userId)->where('status', 'Active')->get();
        $upcomingPromotion = discount_promotion::where('user_id',$userId)->where('status', 'upcoming')->get();
        $expiredPromotion = discount_promotion::where('user_id',$userId)->where('status', 'Expired')->get();
        return view('dashboard.marketing.all-seller',compact('promotionList','activePromotion','upcomingPromotion','expiredPromotion'));
    }
    public function all_sellers_new(){
         return view('dashboard.marketing.all-seller-new');
    }
    public function savenewpromotion(Request $req){
        extract($_POST);
        $products = Products::where('added_by',Auth::id())->where('is_deleted', 0)->where('permission','Approved')->get();
        $new = new discount_promotion;
        $new->user_id = Auth::id();
        $new->type = 'Shop Voucher';
        $new->promotion_name = $promotion_name;
        $new->starting_time = $starting;
        $new->ending_time = $ending;
        $new->discount_type = $discount_type;
        $new->discount_amount = $discount_amount;
        $new->quantity = $quantity;
        $new->status = 'Active';
        $new->save();
        Products::where('added_by',Auth::id())->where('is_deleted', 0)->where('permission','Approved')->update([
            'promotion_discount' => $discount_amount,
        ]);
        return redirect('/Vendor/all-sellers');
    }
    public function promotionDeactivate($id){
        discount_promotion::where('id',$id)->update([
            'status' => 'Expired',
        ]);
        Products::where('added_by',Auth::id())->where('is_deleted', 0)->where('permission','Approved')->update([
            'promotion_discount' => null,
        ]);
        return redirect()->back();
    }

    public function freeShippingNew(){
        $userId = Auth::id();
        $products = Products::where('added_by',$userId)->where('is_deleted', 0)->where('permission','Approved')->get();
        return view('dashboard.marketing.free-shipping-new', compact('products'));
    }

    public function freeShipping(){
        $userId = Auth::id();
        $shippingList = freeShippingPromotion::where('user_id',$userId)->get();
        $activeShipping = freeShippingPromotion::where('user_id',$userId)->where('status', 'Active')->get();
        $upcomingShipping = freeShippingPromotion::where('user_id',$userId)->where('status', 'upcoming')->get();
        $expiredShipping = freeShippingPromotion::where('user_id',$userId)->where('status', 'Expired')->get();
        return view('dashboard.marketing.free-shipping',compact('shippingList','activeShipping','upcomingShipping','expiredShipping'));
    }

    public function savenewshipping(Request $request){
        extract($_POST);
        $userId = Auth::id();
        $freeShipping = new freeShippingPromotion;
        $freeShipping->user_id = $userId;
        $freeShipping->type= $type;
        $freeShipping->promotion_name = $promotion_name;
        $freeShipping->starting_time = $starting;
        $freeShipping->ending_time = $ending;
        $freeShipping->delivery_type = $delivery_type;
        $freeShipping->min_price = $min_price;
        $freeShipping->region = json_encode($region);
        $freeShipping->status = 'Active' ; 
        if($type == 'Product voucher'){
            $freeShipping->products = json_encode($id);
        }
        $freeShipping->save();
        return redirect('/Vendor/free-shipping');
    }
    public function freeShippingDeactivate($id){
        freeShippingPromotion::where('id',$id)->update([
            'status' => 'Expired',
        ]);
        return redirect()->back();
    }
}