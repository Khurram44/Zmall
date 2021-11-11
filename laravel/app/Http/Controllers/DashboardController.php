<?php

namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Encryption\EncryptionServiceProvider;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\User;
use App\Manage;
use App\blueex_cities;
use App\Orders;
use App\campaign;
use App\zmall_vouchers;
use App\subscriptionData;
use App\services;
use App\ContactBook;
use App\OrderProducts;
use App\PaymentMethod;
use App\product_attribute;
use App\product_color;
use App\notification;
use App\Mail\shipmentMail;
use App\storeDetail;
use App\Amount;
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

class DashboardController extends Controller
{
    public function GetProductDetail($id)
    {     
     echo json_encode(Products::where('id', $id)->get());
    }


    public function GetOrderDetail($id)
    {  
     echo json_encode(Orders::where('id', $id)->get());
    }


    public function GetOrderImage($id)
    {
    $pro = OrderProducts::where('order_id', $id)->first();
    echo json_encode(Products::where('id', $pro->product_id)->get());
    }


    public function GetProductDetailAttribute($id)
    {     
     echo json_encode(product_color::where('product_id', $id)->get());
    }
    public function Getcatagories($id)
    {    
        echo json_encode(Manage::where('module_id', 2)->where('parent_id', $id)->where('is_deleted', 0)->orderBy('name')->get());
    }
    public function getcategorytype($id)
    {    
        echo json_encode(Manage::where('module_id', 3)->where('parent_id', $id)->where('is_deleted', 0)->orderBy('name')->get());
    }

    public function analysis()
    {
        $outOfStock = Products::where('added_by',Auth::id())->where('quantity',0)->where('is_deleted',0)->get();
        $soonOutOfStock = Products::where('added_by',Auth::id())->where('quantity','<=',5)->where('is_deleted',0)->get();
     return view('dashboard.analysis',compact('outOfStock','soonOutOfStock'));
    }

    public function services()
    {     
     return view('dashboard.services');
    }
    public function mystore($id)
    { 
        $storeDetail = storeDetail::where('owner_id',$id)->first();
        $followers = FollowedStore::where('vendor_user_id',Auth::id())->count();
        $product = Products::where('added_by',$id)->where('is_deleted', 0)->where('permission','Approved')->get();
        return view('store.mystore',compact('storeDetail','product','followers'));
    }
    public function store($id)
    {
        $storeDetail = storeDetail::where('owner_id',$id)->first();
        $iffollowing = FollowedStore::where('followed_by',Auth::id())->where('vendor_user_id',$id)->first();
        $followers = FollowedStore::where('vendor_user_id',$id)->count();
        $product = Products::where('added_by',$id)->where('is_deleted', 0)->where('permission','Approved')->latest('added_on')->get();
        $itemSold = Orders::where('vendor_id',$id)->where('status','placed')->count(); 
        return view('store.mystore',compact('storeDetail','product','followers','iffollowing','itemSold'));
    }


    public function manage_orders()
    {
        if(auth()->user()->role == 'vendor'){
            $pending_orders = OrderProducts::where('vendor_id', Auth::id())->where('status', 'pending')->get();
            $pending_orders_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'pending')->count();
            $awaiting_pick = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->get();
            $awaiting_pick_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->where('is_shipped',0)->count();
            $transit = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->where('is_shipped',1)->get();
            $transit_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->where('is_shipped',1)->count();
            $cancel = OrderProducts::where('vendor_id', Auth::id())->where('status', 'cancel')->get();
            $cancel_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'cancel')->count();
            return view('dashboard.manage-order',compact('pending_orders','pending_orders_no','awaiting_pick','awaiting_pick_no','transit','transit_no','cancel_no','cancel'));
            
        }
    }
    public function order_view($id){
        if(auth()->user()->role == 'vendor'){
            notification::where('id',$id)->update([
            'read_at' => now(),
            ]);
            $pending_orders = OrderProducts::where('vendor_id', Auth::id())->where('status', 'pending')->get();
            $pending_orders_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'pending')->count();
            $awaiting_pick = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->get();
            $awaiting_pick_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->where('is_shipped',0)->count();
            $transit = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->where('is_shipped',1)->get();
            $transit_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'placed')->where('is_shipped',1)->count();
            $cancel = OrderProducts::where('vendor_id', Auth::id())->where('status', 'cancel')->get();
            $cancel_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'cancel')->count();
            return view('dashboard.manage-order',compact('pending_orders','pending_orders_no','awaiting_pick','awaiting_pick_no','transit','transit_no','cancel_no','cancel'));
            
        }
    }
    public function requestPickUp($id)
    {
        $savecart = Orders::where('id',$id)->first();
        $OrderProducts = OrderProducts::where('order_id', $savecart->id)->first();
       $store =StoreDetail::where('owner_id', $OrderProducts->vendor_id)->first();
       if(!empty($store->delivery_from))
       {
        $vendorDetail = User::where('id', $OrderProducts->vendor_id)->first();
        $origin_city = blueex_cities::where('city_name', $store->city)->first();
        $city_leopard = Cities::where('name',$store->city)->first();
        $destination_city = Cities::where('name', $savecart->city)->first();
        $customer_shipper = blueex_cities::where('city_name',$destination_city->name)->first();
        $datetime = new \DateTime();
        $orderRefNum ="Blueex".$datetime->format('YmdHis');
     //   if($store->delivery_from == 'Leopard'){
        ######################## LEOPARD API ##########################################
  //       $curl_handle = curl_init();
  //           curl_setopt($curl_handle, CURLOPT_URL, 'http://new.leopardscod.com/webservice/bookPacket/format/json/');
  //           curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  //           curl_setopt($curl_handle, CURLOPT_POST, 1);
  //           curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
  //           'api_key'                       => 'ABF72076098C098CCBFDF3EB54D1D821',
  //           'api_password'                  => 'zmall1234',
  //           'booked_packet_weight'          => 500,  
  //           'booked_packet_vol_weight_w'    =>   null,
  //           'booked_packet_vol_weight_h'    =>    null,
  //           'booked_packet_vol_weight_l'    => null,
  //           'booked_packet_no_piece'        => $OrderProducts->quantity,
  //           'booked_packet_collect_amount'  => $savecart->grand_total,
  //           'booked_packet_order_id'        => $savecart->order_no,
            
  //           'origin_city'                   => $city_leopard->leopard_id,
            
  //           'destination_city'              => $destination_city->leopard_id,
            
  //           'shipment_name_eng'             => $store->store_name, 
  //           'shipment_email'                => $vendorDetail->email,
  //           'shipment_phone'                => $vendorDetail->phone,
  //           'shipment_address'              => $store->address, 
  //           'consignment_name_eng'          => $savecart->first_name.' '.$savecart->last_name,
  //           'consignment_email'             => $savecart->email,
  //           'consignment_phone'             => $savecart->phone,
  //           'consignment_phone_two'         => '',   
  //           'consignment_phone_three'       => '',  
  //           'consignment_address'           => $savecart->address,  
  //           'special_instructions'          => 'no',  
  //           'shipment_type'                 => '',
  //       ));

  //       $buffer = curl_exec($curl_handle);
  //       $a = json_decode($buffer, true);
  //       $savecart->tracking_no =  $a['track_number'];
  //       $savecart->download_invoice = $a['slip_link'];
  //       $savecart->is_shipped = 1;
  //       $OrderProducts->is_shipped = 1;
  //       $OrderProducts->save();
  //       $savecart->shipped_comments = 'Product Pick Up Request has Been Send To Courier Company.';
  //       $savecart->shipped_at = Carbon::now()->toDateString();
  //       $savecart->shipped_by = 'Leopard';
  //       $savecart->save();
  //     curl_close($curl_handle);
  //       $data = array( 
  //               'address'     =>   $store->address." ".$origin_city->name, 
  //               'type'     =>   'light',
  //               'no_of_shipment' => '1', 
  //                 'date'     =>   date("d F, Y"),
  //                   );
  //       Mail::to('pickup.isb@leopardscourier.com')->send(new shipmentMail($data));
  //     return redirect()->back();
  //      ######################## LEOPARD API END ##########################################
  // }
  // elseif($store->delivery_from == 'BlueEx'){
  //       ######################## BlueEx API ##########################################
  //       $curl = curl_init();
  //       $postData = array( 
  //         "shipper_name"=> $store->store_name,
  //         "shipper_email"=> $vendorDetail->email,
  //         "shipper_contact"=> $vendorDetail->phone,
  //         "shipper_address"=> $store->address,
  //         "shipper_city"=> $origin_city->city_code,
  //         "customer_name"=> $savecart->first_name,
  //         "customer_email"=> $savecart->email,
  //         "customer_contact"=> $savecart->phone,
  //         "customer_address"=> $savecart->address,
  //         "customer_city"=> $customer_shipper->city_code,
  //         "customer_country"=> "PK",
  //         "customer_comment"=> "no",
  //         "shipping_charges"=> "0",
  //         "payment_type"=> "COD",
  //         "service_code"=> "BE",
  //         "total_order_amount"=> $savecart->grand_total,
  //         "total_order_weight"=> "1",
  //         "order_refernce_code"=> $orderRefNum,
  //         "fragile"=> "N",
  //         "parcel_type"=> "P",
  //         "insurance_require" => "N",
  //         "insurance_value" => "0",
  //         "testbit"=> "N",
  //         "cn_generate"=> "Y",
  //         "multi_pickup"=> "N",
  //         "products_detail" => '[
  //             "product_code" => $OrderProducts->productinfo->id,
  //             "product_name" => $OrderProducts->productinfo->title,
  //             "product_price"=> $OrderProducts->productinfo->price,
  //             "product_weight"  => "0.1",
  //             "product_quantity" => "1",
  //             "product_variations" => "",
  //             "sku_code"=> $OrderProducts->productinfo->sku,
  //       ]',
  //       );
  //       curl_setopt_array($curl, array(
  //         CURLOPT_URL => 'https://bigazure.com/api/json_v3/shipment/create_shipment.php',
  //         CURLOPT_RETURNTRANSFER => true,
  //         CURLOPT_ENCODING => '',
  //         CURLOPT_MAXREDIRS => 10,
  //         CURLOPT_TIMEOUT => 0,
  //         CURLOPT_FOLLOWLOCATION => true,
  //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //         CURLOPT_CUSTOMREQUEST => 'POST',
  //         CURLOPT_POSTFIELDS => json_encode($postData),
  //         CURLOPT_HTTPHEADER => array(
  //           'Authorization: Basic SVNCLTAwOTcwOndRcWwxS0pmc1JKbld6SUVJRHQ=',
  //           'Content-Type: application/json'
  //         ),
  //       ));
        
  //       $response = curl_exec($curl);
  //       curl_close($curl);
  //       $a = json_decode($response, true);
  //       $savecart->download_invoice = $a['cn'];
  //       $savecart->is_shipped = 1;
  //       $OrderProducts->is_shipped = 1;
  //       $OrderProducts->save();
  //       $savecart->shipped_comments = 'Product Pick Up Request has Been Send To Courier Company.';
  //       $savecart->shipped_at = Carbon::now()->toDateString();
  //       $savecart->shipped_by = 'BlueEx';
  //       $savecart->save();
        
  //       return redirect()->back();
  //   }
    ######################## BlueEx API END ##########################################
    ######################## Trax API START ##########################################
    if($store->delivery_from == 'Trax'){
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://sonic.pk/api/shipment/book',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('service_type_id' => '1','pickup_address_id' => $store->trax_pick_up_id,'information_display' => '0','consignee_city_id' => $savecart->cityinfo->trax_id,'consignee_name' => $savecart->first_name.$savecart->last_name,'consignee_address' => $savecart->address,'consignee_phone_number_1' => $savecart->phone,'consignee_email_address' => $savecart->email,'item_product_type_id' => '8','item_description' => 'This is the product of zmall.pk','item_quantity' => $OrderProducts->quantity,'item_insurance' => '0','pickup_date' => date('Y-m-d'),'estimated_weight' => '1','shipping_mode_id' => '1','amount' => $savecart->grand_total,'payment_mode_id' => '1','charges_mode_id' => '4'),
          CURLOPT_HTTPHEADER => array(
            'Authorization: S1ZubnlBejh6YThMNnBWRFBOajNNRkV4MlNoMXVpSWJYaFR3SG5TaTZHZkJvZHpzN2wydHhIc1ZMRnNB60dd798d340f3'
          ),
        ));

        $response = curl_exec($curl);
        $a = json_decode($response, true);
        $savecart->tracking_no = $a['tracking_number'];
        $savecart->is_shipped = 1;
        $OrderProducts->is_shipped = 1;
        $OrderProducts->save();
        $savecart->shipped_comments = 'Product Pick Up Request has Been Send To Courier Company.';
        $savecart->shipped_at = Carbon::now()->toDateString();
        $savecart->shipped_by = 'Trax';
        $savecart->save();
        curl_close($curl);
        ###############For Slip################
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://sonic.pk/api/shipment/air_waybill?tracking_number='.$a['tracking_number'].'&type=1',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Authorization: S1ZubnlBejh6YThMNnBWRFBOajNNRkV4MlNoMXVpSWJYaFR3SG5TaTZHZkJvZHpzN2wydHhIc1ZMRnNB60dd798d340f3'
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $downloadPath = "frontend/traxSlip/".$savecart->order_id."Slip.pdf";
        $file = fopen($downloadPath, "w+");
        fputs($file, $response);
        fclose($file);
        $savecart->download_invoice = $downloadPath;
        $savecart->save();
        ##################################
        return redirect()->back();
    }
    ######################## Trax API END ##########################################
    }
    else{
        return redirect()->back()->with('status','FIRST PLEASE SELECT DELIVERY SERVICE IN (myaccount>delivery).');
    }
    }

    public function downloadTraxSlip($id){
        $data = Orders::where('tracking_no',$id)->first();
        if(empty($data)){
            $data = User::where('trax_track_no',$id)->first();
            if(empty($data)){
                $data = flayer_order::where('track_number',$id)->first();
                $file= $data->download_slip;
            }
            else{
            $file= $data->download_slip;
            }
        }
        else{
            $file= $data->download_invoice;
        }

    $headers = array(
              'Content-Type: application/pdf',
            );

    return FacadeResponse::download($file, 'filename.pdf', $headers);
       
    }

    public function processed_orders()
    {
        $cancel = OrderProducts::where('vendor_id', Auth::id())->where('status', 'cancel')->get();
        $cancel_no = OrderProducts::where('vendor_id', Auth::id())->where('status', 'cancel')->count();
        return view('dashboard.process-products',compact('cancel_no','cancel'));
    }


    public function addproduct()
    { 
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
     return view('dashboard.product.add-products',compact('Categories'));
    }


    public function manage_products()
    {
     return view('dashboard.manage-product');
    }


    public function promotions()
    {     
     return view('dashboard.promotions');
    }


    public function catalog()
    {     
     return view('dashboard.catalog');
    }

    public function order_conformation($id)
    {
        Orders::where('id',$id)->update([
            'status' => 'placed',
        ]);
        OrderProducts::where('order_id',$id)->update([
            'status' => 'placed',
        ]);
        $id = Auth::id();
     $store = storeDetail::where('owner_id',$id)->first();
        if(empty($store->trax_pick_up_id)){
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://sonic.pk/api/pickup_address/add',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('person_of_contact' => $store->store_name,'phone_number' => $store->phone,'email_address' => $store->userinfo->email,'address' => $store->address,'city_id' => $store->cityinfo->trax_id),
              CURLOPT_HTTPHEADER => array(
                'Authorization: S1ZubnlBejh6YThMNnBWRFBOajNNRkV4MlNoMXVpSWJYaFR3SG5TaTZHZkJvZHpzN2wydHhIc1ZMRnNB60dd798d340f3'
              ),
            ));

            $response = curl_exec($curl);
            $a = json_decode($response, true);
            $store->trax_pick_up_id = $a['id'];
            $store->save();
            curl_close($curl);
    }
        return redirect()->back();
    }

    public function bank_account()
    {
        $Userid= Auth::id();
        $bankDetail = financial_Details_store::where('user_id',$Userid)->get();
        return view('dashboard.bank-account',compact('bankDetail'));

    }
    public function bank_account_save()
    {
        $Userid= Auth::id();
        extract($_POST);
        $new = new financial_Details_store;
        $new->user_id = $Userid;
        $new->bank = $select_bank;
        $new->account_no = $acc_no;
        $new->bank_title = $title;
        $new->save();
        return redirect()->back();

    }
    public function delete_bank_detail($id)
    {
        financial_Details_store::where('id',$id)->delete();
        return redirect()->back();
    }
    public function myaccount()
    {     
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first();
        $cities = Cities::all();
        $province = Province::all();
        $storeDetail = storeDetail::where('owner_id',$Userid)->first();
        if(!empty($storeDetail)){
        $contact = ContactBook::where('added_by',$Userid)->first();
        return view('dashboard.myaccount.profile',compact('user','contact','storeDetail','province','cities'));
        }
        else{
            return redirect()->back()->withErrors(['name' => 'Please First Enter Your Store Details']);
        }
    }
    public function sellerlogo()
    {
        $Userid= Auth::id();
        $storeDetail = storeDetail::where('owner_id',$Userid)->first();
     return view('dashboard.myaccount.sellerlogo',compact("storeDetail"));
    }
    public function commision()
    {
        $user = User::where('id',Auth::id())->first();
        return view('dashboard.myaccount.commision',compact('user'));
    }
    public function delivery()
    {   
        return view('dashboard.myaccount.delivery');
    }
    public function dashboard(){
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first();
        $flyerstatus = flayer_order::where('owner_id',$Userid)->first();
        $store_status =  storeDetail::where('owner_id',$Userid)->first();
        if(!empty($store_status)){
        $finastatus = financial_Details_store::where('user_id',$Userid)->first();
        }
        else{
            $finastatus = "";
        }
        $product_added = Products::where('is_deleted', 0)->where('added_by', $Userid)->count();
        $today_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->whereDate('added_on', '=', Carbon::today())->sum('total_price');
        $week_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->whereBetween('added_on', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total_price');
       $month_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->whereMonth('added_on', date('m'))->whereYear('added_on', date('Y'))->sum('total_price');
       $total_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->sum('total_price');
       $campaign = campaign::where('register_time', '>', now())->get();
       $total_order = Orders::where('vendor_id',$Userid)->get();
        return view('dashboard.dashboard',compact('Userid','user','product_added','total_earnings','today_earnings','week_earnings','month_earnings','flyerstatus','store_status','finastatus','campaign','total_order'));
    }


    public function approved_product()
    {
        if(auth()->user()->role == 'vendor'){
            $approved_product = Products::where('added_by', Auth::id())->where('permission','Approved')->where('is_deleted',0)->latest('added_on')->get();
            $approved_product_no = Products::where('added_by', Auth::id())->where('permission','Approved')->where('is_deleted',0)->count();
            $allProductNo = Products::where('added_by', Auth::id())->count();
            $allProduct= Products::where('added_by', Auth::id())->get();
            $pending_product = Products::where('added_by', Auth::id())->where('permission','Pending')->where('is_deleted',0)->get();
            $pending_product_no = Products::where('added_by', Auth::id())->where('permission','Pending')->where('is_deleted',0)->count();
            $rejected_product = Products::where('added_by', Auth::id())->where('permission','Rejected')->where('is_deleted',0)->get();
            $rejected_product_no = Products::where('added_by', Auth::id())->where('permission','Rejected')->where('is_deleted',0)->count();
            $delisted_product = Products::where('added_by', Auth::id())->where('is_deleted',1)->get();
            $delisted_product_no = Products::where('added_by', Auth::id())->where('is_deleted',1)->count();
            return view('dashboard.product.approved-products',compact("delisted_product_no","delisted_product","approved_product","allProductNo","allProduct","approved_product_no","pending_product","pending_product_no","rejected_product","rejected_product_no"));
        }
    }
    public function storeupdate()
    {
    $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->paginate(7);
    $cities = Cities::all();
    $province = Province::all();
    return view("dashboard.storeupdate",compact("Categories","province","cities"));
    }

    public function updatestoredetail(Request $request)
  {
    extract($_POST);
    $user = User::where('id',Auth::id())->first();
    $owner_id = $store_details = new storeDetail;
    $store_details->owner_id = $user->id;
    $store_details->store_name = $store_name;
    $store_details->category = $store_category;
    $store_details->address = $store_address;
    $store_details->phone = $store_phone;
    $store_details->state = $store_state;
    $store_details->city = $store_city;
    $store_details->save();
    return redirect("/Vendor/dashboard");
  }
  public function showupdatefinancial(){
    return view('dashboard.showfinan');
  }
  public function updatefinancial(Request $request)
    {
        $validatedData = $request->validate([
            'selectid'=>'required',
            'id_code'=>'required',
            'select_bank'=>'required',
            'acc_no'=>'required',
            'confrm_details'=>'required',
        ]);
        $details = new financial_Details_store;
        $user = User::where('id',Auth::id())->first();
        $ifuser = storeDetail::where('owner_id',$user->id)->first();
        $details->store_id = $ifuser->id;
        $details->id_type = $request->selectid;
        $details->id_number = $request->id_code;
        $details->bank = $request->select_bank;
        $details->account_no = $request->acc_no;
            $details->phone = $request->phone;
            $details->address = $request->address;
            $details->landline = $request->landmark;
            $details->city = $request->city;
        $details->save();
        $contact = new ContactBook;
        $contact->added_by = $user->id;
        $contact->save();
        return redirect('/Vendor/dashboard');
    }

    // -----------------------------old-----------------------

    public function dbrdcustaccsetting()
    {

        return view('dbrdcustaccsetting');
    }
    public function my_billing_address()
    {
        $Userid= Auth::id();
        $billing_address =PaymentMethod::where('user_id',$Userid)->get();
        return view('my_billing_address.all',compact('billing_address'));
    }
    public function add_billing_address()
    {
        $Userid = Auth::id();
        if (isset($_POST['addbillingaddress'])) {
            extract($_POST);
            $mdule = PaymentMethod::where('user_id', $Userid)->where('payment_method', $payment_method)->first();
            if(empty($mdule)){
                $mdule = new Payout_History();
            }
            $mdule->payment_method = $payment_method;
            $mdule->bank_name = $bank_name;
            $mdule->cnic = $cnic;
            $mdule->phone_number = $phone_number;
            $mdule->branch_code = $branch_code;
            $mdule->account_number = $account_number;
            $mdule->account_title = $account_title;
            $mdule->account_number = $account_number; 
            $mdule->user_id = $Userid;
            if ($mdule->save()) {
                if($type == 1){
                    return redirect('/dashboard')->with('status','Billing Address Successfully Added');
                }else{
                    return redirect('/dashboard')->with('status','Billing Address Successfully Added');
                }
                
            }
        }
    }    
   
    public function add_request()
    {
        $Userid= Auth::id();
        if (isset($_POST['addrequest'])) 
        {
            extract($_POST);
            $request = new Payout_History();
            $request->amount_balance= $amount;
            $request->payment_method = $payment_method;
            $request->bank_name = $bank_name;
            $request->cnic = $cnic;
            $request->phone_number = $phone_number;
            $request->branch_code = $branch_code;
            $request->account_title = $account_title;
            $request->account_number = $account_number; 
            $request->user_id= $Userid;
            $request->status= 'pending';

            if ($request->save()) {
                return redirect('/dashboard')->with('status', 'Request Submitted Successfully');
            }
        }

    }
    public function orders()
    {
        
        if(auth()->user()->role == 'user'){
            $all_orders_no = Orders::where('added_by', Auth::id())->count();
            $all_orders = OrderProducts::all();
            return view('user_dashboard.orderSummaries',compact("all_orders","all_orders_no"));
        }
    }    

    public function processed()
    {
        if(auth()->user()->role == 'vendor'){
            $orders = OrderProducts::distinct()->where('vendor_id', Auth::id())->where('status', 'processed')->get(['order_id']);
            $order_id = [];
            if($orders->count() > 0){
                foreach ($orders as $o) {
                    $order_id[] = $o->order_id;
                }
            }
            $all_orders = Orders::whereIn('id', $order_id)->where('status', 'processed')->paginate(5);
        }else{
            $all_orders = Orders::where('added_by', Auth::id())->where('status', 'processed')->paginate(5);
        }
        
        return view('order.processed',compact("all_orders"));
    }

    public function shipped()
    {
        if(auth()->user()->role == 'vendor'){
            $orders = OrderProducts::distinct()->where('vendor_id', Auth::id())->where('status', 'shipped')->get(['order_id']);
            $order_id = [];
            if($orders->count() > 0){
                foreach ($orders as $o) {
                    $order_id[] = $o->order_id;
                }
            }
            $all_orders = Orders::whereIn('id', $order_id)->where('status', 'shipped')->paginate(5);
        }else{
            $all_orders = Orders::where('added_by', Auth::id())->where('status', 'shipped')->paginate(5);
        }
        
        return view('order.shipped',compact("all_orders"));
    }

    public function delivered()
    {
        if(auth()->user()->role == 'vendor'){
            $orders = OrderProducts::distinct()->where('vendor_id', Auth::id())->where('status', 'delivered')->get(['order_id']);
            $order_id = [];
            if($orders->count() > 0){
                foreach ($orders as $o) {
                    $order_id[] = $o->order_id;
                }
            }
             $all_orders = Orders::whereIn('id', $order_id)->where('status', 'delivered')->paginate(5);
        }else{
            $all_orders = Orders::where('added_by', Auth::id())->where('status', 'delivered')->paginate(5);
        }
        
        return view('order.delivered',compact("all_orders"));
    }

    public function dispute()
    {
        if(auth()->user()->role == 'vendor'){
            $orders = OrderProducts::distinct()->where('vendor_id', Auth::id())->where('status', 'dispute')->get(['order_id']);
            $order_id = [];
            if($orders->count() > 0){
                foreach ($orders as $o) {
                    $order_id[] = $o->order_id;
                }
            }
             $all_orders = Orders::whereIn('id', $order_id)->where('status', 'dispute')->paginate(5);
        }else{
            $all_orders = Orders::where('added_by', Auth::id())->where('status', 'dispute')->paginate(5);
        }
        
        return view('order.dispute',compact("all_orders"));
    }

    public function cancelled(Request $req)
    {
        Orders::where('id',$req->order_id)->update([
            'status' => 'cancel',
            'is_cancelled' => 1,
            'cancelled_at' => now(),
            'cancelled_comments' => $req->reason,
            'cancelled_by' => 'vendor'
        ]);
        OrderProducts::where('order_id',$req->order_id)->update([
            'status' => 'cancel',
        ]);
        return redirect()->back();
    }

    
    public function stores_followed()
    {
        $followed_stores = FollowedStore::where('followed_by', Auth::id())->get();
        return view('followed_stores.all_stores_followed',compact('followed_stores'));
    }
    public function processedorder()
    {
        return view('order.processed');
    }

    public function dbrdcustorderpending()
    {

        return view('order.pending');
    }

    public function dbrdvendorordershipped()
    {

        return view('order.shipped');
    }

    public function dbrdvendororderdelivered()
    {

        return view('order.delivered');
    }

    public function dbrdvendororderdispute()
    {

        return view('order.dispute');
    }

    public function wishlist()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        $wishlistno= Wishlist::where('user_id', Auth::id())->count();
        return view('user_dashboard.wishlist',compact('wishlist','wishlistno'));
    }
      public function delete_wishlist_product($id)
    {
        $wishlist = Wishlist::where('id', $id)->first();

        if($wishlist->delete())
        {
            return redirect()->back()->with('status', 'item Deleted Successfully.');
       }
    }

    public function payout_history()
    {

        return view('payout_history');
    }
    
    public function orderdetails($id)
    {
       // $id = base64_decode($id);
        $order_detail = Orders::where('order_no', $id)->first();
        $order_products = OrderProducts::where('order_id', $order_detail->id)->get();
        //echo "<pre>"; print_r($order_detail); die;
        return view('order.orderdetails',compact("order_detail","order_products"));
    }

    public function save_review()
    {
        $Userid= Auth::id();
        if (isset($_POST['savereview'])) {
            //secho "<pre>"; print_r($_POST); die;
            extract($_POST);
            $review = new Review();
             $order_products = OrderProducts::where('product_id', $product_id)->first();
            $review->review_description = $review_description;
            $review->star_rating = $selected_rating;
            $review->user_id = $Userid;
            $review->product_id = $product_id;
            $review->vendor_id =$order_products->vendor_id;
            $review->order_no = $order_id;
            $review->created_at = now();
            if ($review->save()) {
                return redirect()->back();
            }
        }
    }

    public function update_status()
    {
        if (isset($_POST['update_status'])) 
        { 

            extract($_POST);
            $order_detail = Orders::where('id', $rowid)->first();
            $order_detail->status = $status;
            if($status == 'processed')
                {
                    $order_detail->is_processed = 1;
                    $order_detail->processed_at = now();
                    $order_detail->processed_comments=$status_comment;
                }
                elseif($order_detail->status == 'shipped')
                {
                    $order_detail->is_shipped = 1;
                    $order_detail->shipped_at = now();
                    $order_detail->shipped_comments=$status_comment;
                }
                 elseif($order_detail->status == 'delivered')
                {
                    $order_detail->is_delivered = 1;
                    $order_detail->delivered_at = now();
                    $order_detail->delivered_comments=$status_comment;
                }
                 elseif($order_detail->status == 'cancelled')
                {
                    $order_detail->is_cancelled = 1;
                    $order_detail->cancelled_at = now();
                    $order_detail->cancelled_comments=$status_comment;
                }
                elseif($order_detail->status == 'disputed')
                {
                    $order_detail->is_disputed = 1;
                    $order_detail->disputed_at = now();
                    $order_detail->disputed_comments=$status_comment;
                }
            if ($order_detail->save())
            {
                
                return redirect()->back();
            }

            
        }
    }
       
    public function dbrdcustcontactbook()
    {

        return view('dbrdcustcontactbook');
    }

    public function change_pass()
    {
        $Userid= Auth::id();
        $admin= User::where('id', $Userid)->first();
        return view('user_dashboard.change_pass', compact('admin','Userid'));
    }

    public function update_pass(Request $request)
    {
    
            $vadlidatepass= $request->validate([
                'oldpass'=> 'required',
                'password'=> 'required|confirmed',
                
             ]);

            $Userid=Auth::id();
            $old_password =$request->oldpass;
            

            $user = User::where('id', $Userid)->first();
            

            // if ($user) {
                if (!Hash::check($old_password, $user->password)) {
                   return redirect('change-pass')->with('old_password_not_matched', 'Please enter your correct current password');
                 } 
                 else
                 {
                    $user->password=Hash::make($request->password);
                   if($user->save())
                   {
                    return redirect('change-pass')->with('status', 'Password has been changed');
                   }
                 }
    }

    public function addtest()
    {
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        return view('dashboard.product.addtest',compact('Categories'));
    }
    public function LogoDesign(){
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first(); 
        $store = storeDetail::where('owner_id',$user->id)->first();
        return view('dashboard.services.logodesign',compact('store',"user"));
    }
    public function ContentWriting(){
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first(); 
        $store = storeDetail::where('owner_id',$user->id)->first();
        return view('dashboard.services.contentwriting',compact('store',"user"));
    }
    public function SEO(){
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first(); 
        $store = storeDetail::where('owner_id',$user->id)->first();
        return view('dashboard.services.seo',compact('store',"user"));
    }
    public function PhotoEdit(){
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first(); 
        $store = storeDetail::where('owner_id',$user->id)->first();
        return view('dashboard.services.photoedit',compact('store',"user"));
    }
    public function storeservice(Request $request,$id)
    {
        extract($_POST);
        if($id == 'con'){
            $type = "Content Wrtier";
        }
        elseif($id == 'seo'){
            $type = "SEO";
        }
        elseif($id == 'PE'){
            $type = "Photo Edit ";
        }
        elseif($id == 'LD'){
            $type = "Logo Design";
        }
        $new = new services;
        $new->first_name = $first_name;
        $new->last_name = $last_name;
        $new->cell_no = $cell_no;
        $new->service = $type;
        $new->email = $email;
        $new->description = $description;
        $new->store_name = $store_name;
        $new->status = "pending";
        if($request->hasFile('image'))
         {
            $allImages = "";
            if(isset($_FILES['image']['name'])){
            $destinationPath = '/frontend/storage/uploads/';
                $time   = date("ymdhis");
                $filename = $image->getClientOriginalName();
                $new_name = $time.$filename;
                $image->move($destinationPath, $new_name);
                $fullPath =  $new_name;
            $new->file = $fullPath;
            
            }
        }
        $new->save();
        return redirect('/Vendor/services');
    }

    public function order_review()
    {
    $userId = Auth::id();
    $pendingOrder = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 0)->get();
    $clearOrder = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus', 0)->get();
    $withdrawOrder = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus', 1)->get();
    $order_detail = OrderProducts::where('status','placed')->get();
    return view('dashboard.finance.order-review',compact('pendingOrder','clearOrder','withdrawOrder','order_detail'));
    }
    public function statement(){
        $userId = Auth::id();
        $ordertotal = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus',0)->sum('grand_total');
        $shipmenttotal = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus',0)->sum('shipment_charges');
        $total = $ordertotal - $shipmenttotal;
        return view('dashboard.finance.statement',compact('ordertotal','shipmenttotal','total'));
    }

    public function saveYourSubscription(Request $req){
        $dateNow = date('Y-m-d');
        extract($_POST);
        $userId = Auth::id();
        $userDetail = user::where('id',$userId)->first();
        if($req->type == '6_month'){
            if(isset($_POST['basic'])){
                $sub = new subscriptionData;
                if(!empty($req->screenshot)){
                    $destinationPath = 'frontend/transactions/';
                    $time   = date("ymdhis");
                    $filename = $req->File('screenshot')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $req->File('screenshot')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $userDetail->subscription_screenshot = $fullPath;
                    $sub->screenshot = $fullPath;
                    $userDetail->save();
                }
                if(!empty($req->transaction_id)){
                    $userDetail->subscription_transtion_id = $transaction_id;
                    $sub->t_id = $transaction_id;
                }
                $userDetail->subscription = 1;
                $userDetail->starting_date = $dateNow;
                $sub->starting_date = $dateNow;
                $userDetail->ending_date = date('Y-m-d', strtotime($dateNow. ' + 180 days'));
                $sub->ending_date = date('Y-m-d', strtotime($dateNow. ' + 180 days'));
                $userDetail->subscription_package = 'Basic';
                $sub->package = 'Basic';
                $userDetail->package_type = '6 Months';
                $sub->package_type = '6 Months';
                $userDetail->subscription_amount = '600';
                $sub->package_amount = '6000';
                $userDetail->account_status = 'pending';
                $sub->name = $userDetail->first_name." ".$userDetail->last_name;
                $sub->email = $userDetail->email;
                $sub->phone = $userDetail->phone;
                $sub->store_name = $userDetail->storeinfo->store_name;
                $sub->save();
                $userDetail->save();
            }
            elseif(isset($_POST['standard'])){
                $sub = new subscriptionData;
                if(!empty($req->screenshot)){
                $destinationPath = 'frontend/transactions/';
                $time   = date("ymdhis");
                $filename = $req->File('screenshot')->getClientOriginalName();
                $new_name = $time.$filename;
                $req->File('screenshot')->move($destinationPath, $new_name);
                $fullPath =  $new_name;
                $userDetail->subscription_screenshot = $fullPath;
                $sub->screenshot = $fullPath;
                $userDetail->save();
                }
                if(!empty($req->transaction_id)){
                    $userDetail->subscription_transtion_id = $transaction_id;
                    $sub->t_id = $transaction_id;
                }
                $userDetail->subscription = 1;
                $userDetail->starting_date = $dateNow;
                $sub->starting_date = $dateNow;
                $userDetail->ending_date = date('Y-m-d', strtotime($dateNow. ' + 365 days'));
                $sub->ending_date = date('Y-m-d', strtotime($dateNow. ' + 356 days'));
                $userDetail->subscription_package = 'Standard';
                $sub->package = 'Standard';
                $userDetail->package_type = '1 Year';
                $sub->package_type = '1 Year';
                $userDetail->subscription_amount = '15000';
                $sub->package_amount = '15000';
                $userDetail->account_status = 'pending';
                $sub->name = $userDetail->first_name." ".$userDetail->last_name;
                $sub->email = $userDetail->email;
                $sub->phone = $userDetail->phone;
                $sub->store_name = $userDetail->storeinfo->store_name;
                $sub->save();
                $userDetail->save();
            }
            elseif(isset($_POST['premium'])){
                $sub = new subscriptionData;
                if(!empty($req->screenshot)){
                $destinationPath = 'frontend/transactions/';
                $time   = date("ymdhis");
                $filename = $req->File('screenshot')->getClientOriginalName();
                $new_name = $time.$filename;
                $req->File('screenshot')->move($destinationPath, $new_name);
                $fullPath =  $new_name;
                $userDetail->subscription_screenshot = $fullPath;
                $sub->screenshot = $fullPath;
                $userDetail->save();
                }
                if(!empty($req->transaction_id)){
                    $userDetail->subscription_transtion_id = $transaction_id;
                    $sub->t_id = $transaction_id;
                }
                $userDetail->subscription = 1;
                $userDetail->starting_date = $dateNow;
                $sub->starting_date = $dateNow;
                $userDetail->ending_date = date('Y-m-d', strtotime($dateNow. ' + 365 days'));
                $sub->ending_date = date('Y-m-d', strtotime($dateNow. ' + 365 days'));
                $userDetail->subscription_package = 'Preimum';
                $sub->package = 'Preimum';
                $userDetail->package_type = '1 Year';
                $sub->package_type = '1 Year';
                $userDetail->subscription_amount = '12,000';
                $sub->package_amount = '12,000';
                $userDetail->account_status = 'pending';
                $sub->name = $userDetail->first_name." ".$userDetail->last_name;
                $sub->email = $userDetail->email;
                $sub->phone = $userDetail->phone;
                $sub->store_name = $userDetail->storeinfo->store_name;
                $sub->save();
                $userDetail->save();
            }
        }
        return redirect('/Vendor/commision');
    }
}

