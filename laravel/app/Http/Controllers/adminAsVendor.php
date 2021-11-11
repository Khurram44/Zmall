<?php

namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Encryption\EncryptionServiceProvider;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\Crypt;
use App\Manage;
use Carbon\Carbon;
use Session;
use App\ProductGallery;
use App\User;
use App\blueex_cities;
use App\Orders;
use App\ContactBook;
use App\OrderProducts;
use App\PaymentMethod;
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

class adminAsVendor extends Controller
{
    public function dashboard(){
        $Userid= session::get('asVendor');
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
        return view('admin.users.vendor_dashboard.dashboard',compact('Userid','user','product_added','total_earnings','today_earnings','week_earnings','month_earnings','flyerstatus','store_status','finastatus'));
    }
    public function approved_product()
    {
        $approved_product = Products::where('added_by', session::get('asVendor'))->where('permission','Approved')->where('is_deleted',0)->get();
        $approved_product_no = Products::where('added_by', session::get('asVendor'))->where('permission','Approved')->where('is_deleted',0)->count();
        $allProductNo = Products::where('added_by', session::get('asVendor'))->count();
            $allProduct= Products::where('added_by', session::get('asVendor'))->get();
            $pending_product = Products::where('added_by', session::get('asVendor'))->where('permission','Pending')->where('is_deleted',0)->get();
            $pending_product_no = Products::where('added_by', session::get('asVendor'))->where('permission','Pending')->where('is_deleted',0)->count();
            
            $rejected_product = Products::where('added_by', session::get('asVendor'))->where('permission','Rejected')->where('is_deleted',0)->get();
            $rejected_product_no = Products::where('added_by', session::get('asVendor'))->where('permission','Rejected')->where('is_deleted',0)->count();
            $delisted_product = Products::where('added_by', session::get('asVendor'))->where('is_deleted',1)->get();
            $delisted_product_no = Products::where('added_by',session::get('asVendor'))->where('is_deleted',1)->count();
        return view('admin.users.vendor_dashboard.product.approved-products',compact("delisted_product_no","delisted_product","approved_product","allProductNo","allProduct","approved_product_no","pending_product","pending_product_no","rejected_product","rejected_product_no"));
    }
     public function GetProductDetailAttribute($id)
    {     
     echo json_encode(ProductAttributes::where('product_id', $id)->get());
    }
    public function analysis()
    {     
     return view('admin.users.vendor_dashboard.analysis');
    }
    public function services()
    {     
     return view('admin.users.vendor_dashboard.services');
    }
     public function manage_orders()
    {
            $pending_orders = OrderProducts::where('vendor_id', session::get('asVendor'))->where('status', 'pending')->get();
            $pending_orders_no = OrderProducts::where('vendor_id', session::get('asVendor'))->where('status', 'pending')->count();
            $awaiting_pick = OrderProducts::where('vendor_id', session::get('asVendor'))->where('status', 'placed')->get();
            $awaiting_pick_no = OrderProducts::where('vendor_id', session::get('asVendor'))->where('status', 'placed')->where('is_shipped',0)->count();
            $transit = OrderProducts::where('vendor_id', session::get('asVendor'))->where('status', 'placed')->where('is_shipped',1)->get();
            $transit_no = OrderProducts::where('vendor_id', session::get('asVendor'))->where('status', 'placed')->where('is_shipped',1)->count();
            return view('admin.users.vendor_dashboard.manage-order',compact('pending_orders','pending_orders_no','awaiting_pick','awaiting_pick_no','transit','transit_no'));
    }
    public function processed_orders()
    {     
     return view('admin.users.vendor_dashboard.process-products');
    }
     public function addproduct()
    {   
    $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
     return view('admin.users.vendor_dashboard.product.add-products',compact('Categories'));
    }
    public function manage_products()
    {
     return view('admin.users.vendor_dashboard.manage-product');
    }


    public function promotions()
    {     
        $Userid= session::get('asVendor');
        $user=User::where('id',$Userid)->first();
     return view('admin.users.vendor_dashboard.promotions');
    }


    public function catalog()
    {     

     return view('admin.users.vendor_dashboard.catalog');
    }
    public function myaccount()
    {     
        $Userid= session::get('asVendor');
        $user=User::where('id',$Userid)->first();
        $cities = Cities::all();
        $province = Province::all();
        $storeDetail = storeDetail::where('owner_id',$Userid)->first();
        if(!empty($storeDetail)){
        $contact = ContactBook::where('added_by',$Userid)->first();
        return view('admin.users.vendor_dashboard.myaccount.profile',compact('user','contact','storeDetail','province','cities'));
        }
        else{
            return redirect()->back()->withErrors(['name' => 'Please First Enter Your Store Details']);
        }

    }
    public function sellerlogo()
    {
        $Userid= session::get('asVendor');
        $user=User::where('id',$Userid)->first();
        $storeDetail = storeDetail::where('owner_id',$Userid)->first();
     return view('admin.users.vendor_dashboard.myaccount.sellerlogo',compact("storeDetail","user"));
    }
    public function commision()
    {     
        $Userid= session::get('asVendor');
        $user=User::where('id',$Userid)->first();
     return view('admin.users.vendor_dashboard.myaccount.commision',compact("user"));
    }
    public function delivery()
    {     
        $Userid= session::get('asVendor');
        $user=User::where('id',$Userid)->first();
     return view('admin.users.vendor_dashboard.myaccount.delivery',compact("user"));
    }
    public function invoice()
    {     
        $Userid= session::get('asVendor');
        $user=User::where('id',$Userid)->first();
     return view('admin.users.vendor_dashboard.myaccount.invoice',compact("user"));
    }
    public function order_conformation($id)
    {
        Orders::where('id',$id)->update([
            'status' => 'placed',
        ]);
        OrderProducts::where('order_id',$id)->update([
            'status' => 'placed',
        ]);
        return redirect()->back();
    }
    public function requestPickUp($id)
    {
        $savecart = Orders::where('id',$id)->first();
        $OrderProducts = OrderProducts::where('order_id', $savecart->id)->first();
       $store =StoreDetail::where('owner_id', $OrderProducts->vendor_id)->first();
        $vendorDetail = User::where('id', $OrderProducts->vendor_id)->first();
        $origin_city = blueex_cities::where('city_name', $store->city)->first();
        $destination_city = Cities::where('id', $savecart->city)->first();
        $customer_shipper = blueex_cities::where('city_name',$destination_city->name)->first();
        $datetime = new \DateTime();
        $orderRefNum ="Blueex".$datetime->format('YmdHis');
        ######################## LEOPARD API ##########################################
        $curl_handle = curl_init();
            curl_setopt($curl_handle, CURLOPT_URL, 'http://new.leopardscod.com/webservice/bookPacket/format/json/');  // Write here Test or Production Link
            curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl_handle, CURLOPT_POST, 1);
            curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
            'api_key'                       => 'ABF72076098C098CCBFDF3EB54D1D821',
            'api_password'                  => 'zmall1234',
            'booked_packet_weight'          => 500,  
            'booked_packet_vol_weight_w'    =>   null,
            'booked_packet_vol_weight_h'    =>    null,
            'booked_packet_vol_weight_l'    => null,
            'booked_packet_no_piece'        => $OrderProducts->quantity,
            'booked_packet_collect_amount'  => $savecart->grand_total,
            'booked_packet_order_id'        => $savecart->order_no,
            
            'origin_city'                   => $origin_city->leopard_id,
            
            'destination_city'              => $destination_city->leopard_id,
            
            'shipment_name_eng'             => $store->store_name, 
            'shipment_email'                => $vendorDetail->email,
            'shipment_phone'                => $vendorDetail->phone,
            'shipment_address'              => $store->address, 
            'consignment_name_eng'          => $savecart->first_name.' '.$savecart->last_name,
            'consignment_email'             => $savecart->email,
            'consignment_phone'             => $savecart->phone,
            'consignment_phone_two'         => '',   
            'consignment_phone_three'       => '',  
            'consignment_address'           => $savecart->address,  
            'special_instructions'          => 'no',  
            'shipment_type'                 => '',
        ));

        $buffer = curl_exec($curl_handle);
        $a = json_decode($buffer, true);
        $savecart->tracking_no =  $a['track_number'];
        $savecart->download_invoice = $a['slip_link'];
        $savecart->is_shipped = 1;
        $OrderProducts->is_shipped = 1;
        $OrderProducts->save();
        $savecart->shipped_comments = 'Product Pick Up Request has Been Send To Courier Company.';
        $savecart->shipped_at = Carbon::now()->toDateString();
        $savecart->save();
       curl_close($curl_handle);
        $data = array( 
                'address'     =>   $store->address." ".$origin_city->name, 
                'type'     =>   'light',
                'no_of_shipment' => '1', 
                  'date'     =>   date("d F, Y"),
                    );
        Mail::to('faisalfaiz64@gmail.com')->send(new shipmentMail($data));
       return redirect()->back();
       ######################## LEOPARD API END ##########################################
        
    }

    public function new_product(Request $req)
    {
        if (!empty($req->sessionresult11 || $req->sessionresult12)) {
            if (!empty($req->sessionresult11)) {
                $typename = $req->sessionresult11;
                $cateid = $req->cateid11;
                $scateid = $req->scateid11;
                $sctcateid = $req->sctcateid11;

            }
            else{
                $typename = $req->sessionresult12;
                $cateid = $req->cateid12;
                $scateid = $req->scateid12;
                $sctcateid = $req->sctcateid12;
            }
        }
        if (!empty($req->sessionresult21 || $req->sessionresult22)) {
            if (!empty($req->sessionresult21)) {
                $typename = $req->sessionresult21;
                $cateid = $req->cateid21;
                $scateid = $req->scateid21;
                $sctcateid = $req->sctcateid21;
            }
            else{
                $typename = $req->sessionresult22;
                $cateid = $req->cateid22;
                $scateid = $req->scateid22;
                $sctcateid = $req->sctcateid22;
            }
        }
        if (!empty($req->sessionresult31 || $req->sessionresult32)) {
            if (!empty($req->sessionresult31)) {
                $typename = $req->sessionresult31;
                $cateid = $req->cateid31;
                $scateid = $req->scateid31;
                $sctcateid = $req->sctcateid31;
            }
            else{
                $typename = $req->sessionresult32;
                $cateid = $req->cateid32;
                $scateid = $req->scateid32;
                $sctcateid = $req->sctcateid32;
            }
        }
        if (!empty($req->sessionresult41 || $req->sessionresult42)) {
            if (!empty($req->sessionresult41)) {
                $typename = $req->sessionresult41;
                $cateid = $req->cateid41;
                $scateid = $req->scateid41;
                $sctcateid = $req->sctcateid41;
            }
            else{
                $typename = $req->sessionresult42;
                $cateid = $req->cateid42;
                $scateid = $req->scateid42;
                $sctcateid = $req->sctcateid42;
            }
        }
        if (!empty($req->sessionresult51 || $req->sessionresult52)) {
            if (!empty($req->sessionresult51)) {
                $typename = $req->sessionresult51;
                $cateid = $req->cateid51;
                $scateid = $req->scateid51;
                $sctcateid = $req->sctcateid51;
            }
            else{
                $typename = $req->sessionresult52;
                $cateid = $req->cateid52;
                $scateid = $req->scateid52;
                $sctcateid = $req->sctcateid52;
            }
        }
        if (!empty($req->sessionresult61 || $req->sessionresult62)) {
            if (!empty($req->sessionresult61)) {
                $typename = $req->sessionresult61;
                $cateid = $req->cateid61;
                $scateid = $req->scateid61;
                $sctcateid = $req->sctcateid61;
            }
            else{
                $typename = $req->sessionresult62;
                $cateid = $req->cateid62;
                $scateid = $req->scateid62;
                $sctcateid = $req->sctcateid62;
            }
        }
        return view('admin.users.vendor_dashboard.product.new-product')->with('typename',$typename)->with('cateid',$cateid)->with('scateid',$scateid)->with('sctcateid',$sctcateid);
    }
    
    public function store(Request $request)
    {
         if(isset($_POST['saveproduct']))
        {
            $validateData= $request->validate([
                'title'   => 'required',
                'description'   => 'required',
                'visibility' => 'required',
                'weightIn' => 'required',
                'weight' => 'required',
                'brand'    => 'required',

            ]);
            extract($_POST);
            $product= new Products;
            $product->title= $title;
            $product->brand_id = $brand;
            $product->category= $cateid;
            $product->price= $starting_price;
            $product->sub_category_id= $scateid;
            $product->type_id= $sctcateid;
            $product->permission= 'Pending';
            $product->description= $description;
            if(!empty($Length) && !empty($Breath) && !empty($Height) && !empty($dimensionIn)){
            $product->length= $Length;
            $product->breath= $Breath;
            $product->height= $Height;
            $product->dimensionIn= $dimensionIn;
            }
            $product->weight= $weight;
            $product->weightIn= $weightIn;
            $product->model_no = $model_no;
            $product->added_by= session::get('asVendor');
            $product->save();
            if(!empty($color1)){
                $save_color1 = new product_color;
                $save_color1->product_id = $product->id;
                if(!empty($color_name1)){
                    $save_color1->color = $color_name1;
                }
                else{
                $save_color1->color = $color1;}
                $save_color1->quantity = $quantity1;
                $save_color1->price = $price1;
                $save_color1->sku = 'Z'.uniqid();
                if(!empty($selectsize1)){
                $save_color1->size = $selectsize1;
                }
                if(!empty($shoesize1)){
                $save_color1->shoe_type = $shoesize1;
                }
                $save_color1->save();
            }
            if(!empty($color2)){
                $save_color2 = new product_color;
                $save_color2->product_id = $product->id;
                if(!empty($color_name2)){
                    $save_color2->color = $color_name2;
                }
                else{
                $save_color2->color = $color2;}
                $save_color2->quantity = $quantity2;
                $save_color2->price = $price2;
                $save_color2->sku = 'Z'.uniqid();
                if(!empty($selectsize2)){
                $save_color2->size = $selectsize2;
                }
                if(!empty($shoesize2)){
                $save_color2->shoe_type = $shoesize2;
                
                }
                $save_color2->save();
            }
            if(!empty($color3)){
                $save_color3 = new product_color;
                $save_color3->product_id = $product->id;
                if(!empty($color_name3)){
                    $save_color3->color = $color_name3;
                }
                else{
                $save_color3->color = $color3;}
                $save_color3->quantity = $quantity3;
                $save_color3->price = $price3;
                $save_color3->sku = 'Z'.uniqid();
                if(!empty($selectsize3)){
                $save_color3->size = $selectsize3;
                }
                if(!empty($shoesize3)){
                $save_color3->shoe_type = $shoesize3;
                
                }
                $save_color3->save();
            }
            if(!empty($color4)){
                $save_color4 = new product_color;
                $save_color4->product_id = $product->id;
                if(!empty($color_name4)){
                    $save_color4->color = $color_name4;
                }
                else{
                $save_color4->color = $color4;}
                $save_color4->quantity = $quantity4;
                $save_color4->price = $price4;
                $save_color4->sku = 'Z'.uniqid();
                if(!empty($selectsize4)){
                $save_color4->size = $selectsize4;
                }
                if(!empty($shoesize4)){
                $save_color4->shoe_type = $shoesize4;
                
                }
                $save_color4->save();
            }
            if(!empty($color5)){
                $save_color5 = new product_color;
                $save_color5->product_id = $product->id;
                if(!empty($color_name5)){
                    $save_color5->color = $color_name5;
                }
                else{
                $save_color5->color = $color5;}
                $save_color5->quantity = $quantity5;
                $save_color5->price = $price5;
                $save_color5->sku = 'Z'.uniqid();
                if(!empty($selectsize5)){
                $save_color5->size = $selectsize5;
                }
                if(!empty($shoesize5)){
                $save_color5->shoe_type = $shoesize5;
                
                }
                $save_color5->save();
            }
            if(!empty($color6)){
                $save_color6 = new product_color;
                $save_color6->product_id = $product->id;
                if(!empty($color_name6)){
                    $save_color6->color = $color_name6;
                }
                else{
                $save_color6->color = $color6;}
                $save_color6->quantity = $quantity6;
                $save_color6->price = $price6;
                $save_color6->sku = 'Z'.uniqid();
                if(!empty($selectsize6)){
                $save_color6->size = $selectsize6;
                }
                if(!empty($shoesize6)){
                $save_color6->shoe_type = $shoesize6;
                
                }
                $save_color6->save();
            }
            if(!empty($color7)){
                $save_color7 = new product_color;
                $save_color7->product_id = $product->id;
                if(!empty($color_name7)){
                    $save_color7->color = $color_name7;
                }
                else{
                $save_color7->color = $color7;}
                $save_color->quantity = $quantity7;
                $save_color7->price = $price7;
                $save_color7->sku = 'Z'.uniqid();
                if(!empty($selectsize7)){
                $save_color7->size = $selectsize7;
                }
                if(!empty($shoesize7)){
                $save_color7->shoe_type = $shoesize7;
                
                }
                $save_color7->save();
            }
            if(!empty($color8)){
                $save_color8 = new product_color;
                $save_color8->product_id = $product->id;
                if(!empty($color_name8)){
                    $save_color8->color = $color_name8;
                }
                else{
                $save_color8->color = $color8;}
                $save_color8->quantity = $quantity8;
                $save_color8->price = $price8;
                $save_color8->sku = 'Z'.uniqid();
                if(!empty($selectsize8)){
                $save_color8->size = $selectsize8;
                }
                if(!empty($shoesize8)){
                $save_color8->shoe_type = $shoesize8;
                
                }
                $save_color8->save();
            }
                    if($request->hasFile('img_one'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_one')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_one')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $product->images = $fullPath;
                    $product->save();
                    }
                    if($request->hasFile('img_two'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_two')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_two')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_three'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_three')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_three')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_four'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_four')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_four')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_five'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_five')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_five')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_six'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_six')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_six')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_seven'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_seven')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_seven')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_eight'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_eight')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_eight')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_nine'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_nine')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_nine')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_ten'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_ten')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_ten')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $product->video = $fullPath;
                    $product->save();
                    }


            $save = new product_attribute;
            $save->product_id = $product->id;
            if(!empty($type)){
                $save->type = $type;
            }
            if(!empty($occasion)){
                $save->occasion = $occasion;
            }
            if(!empty($material)){
                $save->material = $material;
            }
            if(!empty($fit)){
                $save->fit = $fit;
            }
            if(!empty($neck_style)){
                $save->neck_style = $neck_style;
            }
            if(!empty($pattern)){
                $save->pattern = $pattern;
            }
            if(!empty($collar)){
                $save->collar = $collar;
            }
            if(!empty($sleeve_length)){
                $save->sleeve_length = $sleeve_length;
            }
            if(!empty($feature)){
                $save->feature = $feature;
            }
            if(!empty($wash)){
                $save->wash = $wash;
            }
            if(!empty($distress)){
                $save->distress = $distress;
            }
            if(!empty($waist_rise)){
                $save->waist_rise = $waist_rise;
            }
            if(!empty($lens_material)){
                $save->lens_material = $lens_material;
            }
            if(!empty($shape_frame)){
                $save->shape_frame = $shape_frame;
            }
            if(!empty($warrenty)){
                $save->warrenty = $warrenty;
            }
            if(!empty($lens_color)){
                $save->lens_color = $lens_color;
            }
            if(!empty($lens_feature)){
                $save->lens_feature = $lens_feature;
            }
            if(!empty($application)){
                $save->application = $application;
            }
            if(!empty($style)){
                $save->style = $style;
            }
            if(!empty($laptop_comparment)){
                $save->laptop_comp = $laptop_comparment;
            }
            if(!empty($ankle_height)){
                $save->ankel_height = $ankle_height;
            }
            if(!empty($shaft_height)){
                $save->shaft_height = $shaft_height;
            }
            if(!empty($strap_color)){
                $save->strap_color = $strap_color;
            }
            if(!empty($color_block)){
                $save->color_block = $color_block;
            }
            if(!empty($strap_material)){
                $save->strap_material = $strap_material;
            }
            if(!empty($strap_type)){
                $save->strap_type = $strap_type;
            }
            if(!empty($fastening)){
                $save->fastening = $fastening;
            }
            if(!empty($lock)){
                $save->lock_type = $lock;
            }
            if(!empty($size)){
                $save->size = $size;
            }
            if(!empty($products)){
                $save->products= $products;
            }
            if(!empty($apply_on)){
                $save->apply_on = $apply_on;
            }
            if(!empty($scent)){
                $save->scent = $scent;
            }
            if(!empty($care)){
                $save->care = $care;
            }
            if(!empty($age)){
                $save->age = $age;
            }
            if(!empty($shoe_type)){
                $save->shoe_type = $shoe_type;
            }
            if(!empty($baby_size)){
                $save->baby_size = $baby_size;
            }
            if(!empty($hemline)){
                $save->hemline = $hemline;
            }
            if(!empty($lapel)){
                $save->lapel = $lapel;
            }
            if(!empty($front_styling)){
                $save->front_styling = $front_styling;
            }
            if(!empty($shape)){
                $save->shape = $shape;
            }
            if(!empty($sleeve_style)){
                $save->sleeve_style = $sleeve_style;
            }
            if(!empty($belt_width)){
                $save->belt_width = $belt_width;
            }
            if(!empty($heel_shape)){
                $save->heel_shape = $heel_shape;
            }
            if(!empty($heel_height)){
                $save->heel_height = $heel_height;
            }
            if(!empty($closuer)){
                $save->closuer = $closuer;
            }
            if(!empty($border)){
                $save->border = $border;
            }
            if(!empty($top_length)){
                $save->top_length = $top_length;
            }
            if(!empty($bottom_length)){
                $save->bottom_length = $bottom_length;
            }
            if(!empty($piece_count)){
                $save->piece_count = $piece_count;
            }
            if(!empty($dail_color)){
                $save->dail_color = $dail_color;
            }
            if(!empty($suitcase_weigth)){
                $save->suitcase_weigth = $suitcase_weigth;
            }
            if(!empty($no_of_wheel)){
                $save->no_of_wheel = $no_of_wheel;
            }
            if(!empty($expendable)){
                $save->expendable = $expendable;
            }
            if(!empty($ideal_for)){
                $save->ideal_for = $ideal_for;
            }
            if(!empty($dupatta)){
                $save->dupatta = $dupatta;
            }
            if(!empty($matel)){
                $save->matel = $matel;
            }
            $save->save();
            if ($product->save()) 
            { 
                $product->slug = str_replace(array( '\'',' ', '"',',' , ';','’','‘', '<', '>','#','@' ),"-",$product->title)."-".$product->id;
                $product->save();
                return redirect('admin/tovendor//approved-products')->with('status', 'New product added successfully');
            }else{
               
            } 
         }

        if(isset($_POST['editproduct']))
        { 
           $validateData= $request->validate([
                'title'   => 'required',
                'description'   => 'required',
                'visibility' => 'required',
                'weightIn' => 'required',
                'weight' => 'required',
                'brand'    => 'required',

            ]);
            extract($_POST);
            $product= Products::where('id',$rowid)->first();
            $product->title= $title;
            $product->brand_id = $brand;
            $product->category= $cateid;
            $product->price= $starting_price;
            $product->sub_category_id= $scateid;
            $product->type_id= $sctcateid;
            $product->permission= 'Pending';
            $product->description= $description;
            if(!empty($Length) && !empty($Breath) && !empty($Height) && !empty($dimensionIn)){
            $product->length= $Length;
            $product->breath= $Breath;
            $product->height= $Height;
            $product->dimensionIn= $dimensionIn;
            }
            $product->weight= $weight;
            $product->weightIn= $weightIn;
            $product->model_no = $model_no;
            $product->added_by= session::get('asVendor');
            $product->save();
               if(!empty($color1)){
                $save_color1 = new product_color;
                $save_color1->product_id = $product->id;
                if(!empty($color_name1)){
                    $save_color1->color = $color_name1;
                }
                else{
                $save_color1->color = $color1;}
                $save_color1->quantity = $quantity1;
                $save_color1->price = $price1;
                $save_color1->sku = 'Z'.uniqid();
                if(!empty($selectsize1)){
                $save_color1->size = $selectsize1;
                }
                if(!empty($shoesize1)){
                $save_color1->shoe_type = $shoesize1;
                }
                $save_color1->save();
            }
            if(!empty($color2)){
                $save_color2 = new product_color;
                $save_color2->product_id = $product->id;
                if(!empty($color_name2)){
                    $save_color2->color = $color_name2;
                }
                else{
                $save_color2->color = $color2;}
                $save_color2->quantity = $quantity2;
                $save_color2->price = $price2;
                $save_color2->sku = 'Z'.uniqid();
                if(!empty($selectsize2)){
                $save_color2->size = $selectsize2;
                }
                if(!empty($shoesize2)){
                $save_color2->shoe_type = $shoesize2;
                
                }
                $save_color2->save();
            }
            if(!empty($color3)){
                $save_color3 = new product_color;
                $save_color3->product_id = $product->id;
                if(!empty($color_name3)){
                    $save_color3->color = $color_name3;
                }
                else{
                $save_color3->color = $color3;}
                $save_color3->quantity = $quantity3;
                $save_color3->price = $price3;
                $save_color3->sku = 'Z'.uniqid();
                if(!empty($selectsize3)){
                $save_color3->size = $selectsize3;
                }
                if(!empty($shoesize3)){
                $save_color3->shoe_type = $shoesize3;
                
                }
                $save_color3->save();
            }
            if(!empty($color4)){
                $save_color4 = new product_color;
                $save_color4->product_id = $product->id;
                if(!empty($color_name4)){
                    $save_color4->color = $color_name4;
                }
                else{
                $save_color4->color = $color4;}
                $save_color4->quantity = $quantity4;
                $save_color4->price = $price4;
                $save_color4->sku = 'Z'.uniqid();
                if(!empty($selectsize4)){
                $save_color4->size = $selectsize4;
                }
                if(!empty($shoesize4)){
                $save_color4->shoe_type = $shoesize4;
                
                }
                $save_color4->save();
            }
            if(!empty($color5)){
                $save_color5 = new product_color;
                $save_color5->product_id = $product->id;
                if(!empty($color_name5)){
                    $save_color5->color = $color_name5;
                }
                else{
                $save_color5->color = $color5;}
                $save_color5->quantity = $quantity5;
                $save_color5->price = $price5;
                $save_color5->sku = 'Z'.uniqid();
                if(!empty($selectsize5)){
                $save_color5->size = $selectsize5;
                }
                if(!empty($shoesize5)){
                $save_color5->shoe_type = $shoesize5;
                
                }
                $save_color5->save();
            }
            if(!empty($color6)){
                $save_color6 = new product_color;
                $save_color6->product_id = $product->id;
                if(!empty($color_name6)){
                    $save_color6->color = $color_name6;
                }
                else{
                $save_color6->color = $color6;}
                $save_color6->quantity = $quantity6;
                $save_color6->price = $price6;
                $save_color6->sku = 'Z'.uniqid();
                if(!empty($selectsize6)){
                $save_color6->size = $selectsize6;
                }
                if(!empty($shoesize6)){
                $save_color6->shoe_type = $shoesize6;
                
                }
                $save_color6->save();
            }
            if(!empty($color7)){
                $save_color7 = new product_color;
                $save_color7->product_id = $product->id;
                if(!empty($color_name7)){
                    $save_color7->color = $color_name7;
                }
                else{
                $save_color7->color = $color7;}
                $save_color->quantity = $quantity7;
                $save_color7->price = $price7;
                $save_color7->sku = 'Z'.uniqid();
                if(!empty($selectsize7)){
                $save_color7->size = $selectsize7;
                }
                if(!empty($shoesize7)){
                $save_color7->shoe_type = $shoesize7;
                
                }
                $save_color7->save();
            }
            if(!empty($color8)){
                $save_color8 = new product_color;
                $save_color8->product_id = $product->id;
                if(!empty($color_name8)){
                    $save_color8->color = $color_name8;
                }
                else{
                $save_color8->color = $color8;}
                $save_color8->quantity = $quantity8;
                $save_color8->price = $price8;
                $save_color8->sku = 'Z'.uniqid();
                if(!empty($selectsize8)){
                $save_color8->size = $selectsize8;
                }
                if(!empty($shoesize8)){
                $save_color8->shoe_type = $shoesize8;
                
                }
                $save_color8->save();
            }
                     if($request->hasFile('img_one'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_one')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_one')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $product->images = $fullPath;
                    $product->save();
                    }
                    if($request->hasFile('img_two'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_two')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_two')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_three'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_three')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_three')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_four'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_four')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_four')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_five'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_five')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_five')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_six'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->hasFile('img_six')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_six')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_seven'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->hasFile('img_seven')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_seven')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_eight'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->hasFile('img_eight')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_eight')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_nine'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->hasFile('img_nine')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_nine')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $item_gallery = new ProductGallery;
                    $item_gallery->image = $fullPath;
                    $item_gallery->main_image = 0;      
                    $item_gallery->product_id = $product->id;
                    $item_gallery->save();
                    }
                    if($request->hasFile('img_ten'))
                    {
                    $destinationPath = '/frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_ten')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_ten')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $product->video = $fullPath;
                    $product->save();
                    }
                  
            $save = product_attribute::where('product_id',$rowid)->first();
            $save->product_id = $product->id;
            if(!empty($type)){
                $save->type = $type;
            }
            if(!empty($occasion)){
                $save->occasion = $occasion;
            }
            if(!empty($material)){
                $save->material = $material;
            }
            if(!empty($fit)){
                $save->fit = $fit;
            }
            if(!empty($neck_style)){
                $save->neck_style = $neck_style;
            }
            if(!empty($pattern)){
                $save->pattern = $pattern;
            }
            if(!empty($collar)){
                $save->collar = $collar;
            }
            if(!empty($sleeve_length)){
                $save->sleeve_length = $sleeve_length;
            }
            if(!empty($feature)){
                $save->feature = $feature;
            }
            if(!empty($wash)){
                $save->wash = $wash;
            }
            if(!empty($distress)){
                $save->distress = $distress;
            }
            if(!empty($waist_rise)){
                $save->waist_rise = $waist_rise;
            }
            if(!empty($lens_material)){
                $save->lens_material = $lens_material;
            }
            if(!empty($shape_frame)){
                $save->shape_frame = $shape_frame;
            }
            if(!empty($warrenty)){
                $save->warrenty = $warrenty;
            }
            if(!empty($lens_color)){
                $save->lens_color = $lens_color;
            }
            if(!empty($lens_feature)){
                $save->lens_feature = $lens_feature;
            }
            if(!empty($application)){
                $save->application = $application;
            }
            if(!empty($style)){
                $save->style = $style;
            }
            if(!empty($laptop_comparment)){
                $save->laptop_comp = $laptop_comparment;
            }
            if(!empty($ankle_height)){
                $save->ankel_height = $ankle_height;
            }
            if(!empty($shaft_height)){
                $save->shaft_height = $shaft_height;
            }
            if(!empty($strap_color)){
                $save->strap_color = $strap_color;
            }
            if(!empty($color_block)){
                $save->color_block = $color_block;
            }
            if(!empty($strap_material)){
                $save->strap_material = $strap_material;
            }
            if(!empty($strap_type)){
                $save->strap_type = $strap_type;
            }
            if(!empty($fastening)){
                $save->fastening = $fastening;
            }
            if(!empty($lock)){
                $save->lock_type = $lock;
            }
            if(!empty($size)){
                $save->size = $size;
            }
            if(!empty($products)){
                $save->products= $products;
            }
            if(!empty($apply_on)){
                $save->apply_on = $apply_on;
            }
            if(!empty($scent)){
                $save->scent = $scent;
            }
            if(!empty($care)){
                $save->care = $care;
            }
            if(!empty($age)){
                $save->age = $age;
            }
            if(!empty($shoe_type)){
                $save->shoe_type = $shoe_type;
            }
            if(!empty($baby_size)){
                $save->baby_size = $baby_size;
            }
            if(!empty($hemline)){
                $save->hemline = $hemline;
            }
            if(!empty($lapel)){
                $save->lapel = $lapel;
            }
            if(!empty($front_styling)){
                $save->front_styling = $front_styling;
            }
            if(!empty($shape)){
                $save->shape = $shape;
            }
            if(!empty($sleeve_style)){
                $save->sleeve_style = $sleeve_style;
            }
            if(!empty($belt_width)){
                $save->belt_width = $belt_width;
            }
            if(!empty($heel_shape)){
                $save->heel_shape = $heel_shape;
            }
            if(!empty($heel_height)){
                $save->heel_height = $heel_height;
            }
            if(!empty($closuer)){
                $save->closuer = $closuer;
            }
            if(!empty($border)){
                $save->border = $border;
            }
            if(!empty($top_length)){
                $save->top_length = $top_length;
            }
            if(!empty($bottom_length)){
                $save->bottom_length = $bottom_length;
            }
            if(!empty($piece_count)){
                $save->piece_count = $piece_count;
            }
            if(!empty($dail_color)){
                $save->dail_color = $dail_color;
            }
            if(!empty($suitcase_weigth)){
                $save->suitcase_weigth = $suitcase_weigth;
            }
            if(!empty($no_of_wheel)){
                $save->no_of_wheel = $no_of_wheel;
            }
            if(!empty($expendable)){
                $save->expendable = $expendable;
            }
            if(!empty($ideal_for)){
                $save->ideal_for = $ideal_for;
            }
            if(!empty($dupatta)){
                $save->dupatta = $dupatta;
            }
            if(!empty($matel)){
                $save->matel = $matel;
            }
            $save->save();
            if ($product->save()) 
            { 
                $product->slug = str_replace(array( '\'',' ', '"',',' , ';','’','‘', '<', '>','#','@' ),"-",$product->title)."-".$product->id;
                $product->save();
                return redirect('admin/tovendor/approved-products')->with('status', 'product update successfully');
            }else{
               
            } 

        }
    }
    public function destroy($id)
    {
        $product=Products::where('id', $id)->first();
        $product->is_deleted = 1;
        if($product->save())
        {
            return redirect()->back()->with('status','Product deleted successfully');
        }
    }
     public function edit_Seller_Account()
    {
        if (isset($_POST['selleraccount'])){
        extract($_POST);
        $userid = session::get('asVendor');
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
        $userid = session::get('asVendor');
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
            
        ]);
        return redirect()->back()->with('status', 'Business Info Settings Updated!');
    }
    }
    public function edit_bank_account(Request $req)
    {
        if (isset($_POST['bankaccount'])){
        extract($_POST);
        $userid = session::get('asVendor');
        $store = storeDetail::where('owner_id',$userid)->first();
        $image = $req->cheque_copy;
        $destinationPath = '/frontend/storage/uploads/';
        $time   = date("ymdhis");
        $filename = $image->getClientOriginalName();
        $new_name = $time.$filename;
        $image->move($destinationPath, $new_name);
        $fullPath =  $new_name;
        financial_Details_store::where('store_id',$store->id)->update([
            'bank_title' => $Acc_title,
            'IBAN_no' => $iban_no,
            'bank' => $bank_name,
            'branch_code' => $b_code,
            'cheque_copy' => $fullPath,
        ]);
        return redirect()->back()->with('status', 'Bank Account Settings Updated!');
     }
    }
    public function edit_actual_address()
    {
        if (isset($_POST['actualaddress'])){
        extract($_POST);
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
        $Userid = session::get('asVendor');
        ContactBook::where('added_by',$Userid)->update([
            'name' => $f_name,
            'email' =>$email,
            'address' => $address,
            'telephone' => $phone,
            'state' =>$province,
            'city' => $city,
        ]);
        return redirect()->back()->with('status', 'Actual Address Settings Updated!');
     }
    }
    public function edit_return_address(Request $req)
    {
        if ($req->yes == "yes") {
            $Userid = session::get('asVendor');
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
        $Userid = session::get('asVendor');
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
            $userid = session::get('asVendor');
            if(!empty($editor1)){
                storeDetail::where('owner_id',$userid)->update([
                'description' => $editor1,
            ]);
            }
            #########logo#############
            if (!empty($req->new_logo)) {
                $logo = $req->new_logo;
            $destinationPath = '/frontend/storage/uploads/';
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
            $destinationPath = '/frontend/storage/uploads/';
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
    public function edit($id)
    {
        
        $product=Products::where('id', $id)->first();
        $categories=Manage::where('module_id', 1)->where('is_deleted',0)->get();
        $sub_categories=Manage::where('module_id', 2)->where('is_deleted',0)->where('parent_id', $product->category)->get();
        $ProductGallery=ProductGallery::where('product_id', $id)->get();
        $ProductColors=ProductAttributes::where('product_id', $id)->where('type', 'color')->get();
        $ProductSize=ProductAttributes::where('product_id', $id)->where('type', 'size')->get();
        $size=Manage::where('module_id', 6)->get();
        $color=Manage::where('module_id', 4)->get();
        $type=Manage::where('module_id', 3)->where('is_deleted',0)->where('parent_id', $product->sub_category_id)->get();
        $brand=Manage::where('module_id', 5)->get();
        return view('admin.users.vendor_dashboard.product.edit',compact('categories','sub_categories','size','color','brand','product','type','ProductGallery','ProductColors','ProductSize'));
    }
    public function storeupdate()
    {
    $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->paginate(7);
    $cities = Cities::all();
    $province = Province::all();
    return view("admin.users.vendor_dashboard.storeupdate",compact("Categories","province","cities"));
    }
    public function updatestoredetail(Request $request)
  {
    extract($_POST);
    $user = User::where('id',session::get('asVendor'))->first();
    $owner_id = $store_details = new storeDetail;
    $store_details->owner_id = $user->id;
    $store_details->store_name = $store_name;
    $store_details->category = $store_category;
    $store_details->address = $store_address;
    $store_details->phone = $store_phone;
    $store_details->state = $store_state;
    $store_details->city = $store_city;
    $store_details->save();
    return redirect("admin/users/viewdashboard/$user->id");
  }
    public function showflayer(){
    return view('admin.users.vendor_dashboard.showflayer');
  }
  public function orderflayer(Request $request){
        if (isset($_POST['proced'])) 
      {
        $flayer = new flayer_order;
        $user = User::where('id',session::get('asVendor'))->first();
        $flayer->owner_id = $user->id;
        $flayer->order_no = date("Ymdhis");    
        $flayer->quantity = $request->quantity;
        $flayer->size = $request->size;
        $flayer->total_amount = $request->total;
        $flayer->save();
        return redirect("/admin/users/viewdashboard/$user->id");
    }
    }
        public function bank_account()
    {
        $Userid= session::get('asVendor');
        $bankDetail = financial_Details_store::where('user_id',$Userid)->get();
        return view('admin.users.vendor_dashboard.bank-account',compact('bankDetail'));

    }
    public function bank_account_save()
    {
        $Userid= session::get('asVendor');
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
    public function statement(){
        $userId = session::get('asVendor');
        $ordertotal = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus',0)->sum('grand_total');
        $shipmenttotal = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus',0)->sum('shipment_charges');
        $comission = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus',0)->sum('sub_total');
        $total = $ordertotal - $comission*15/100 - $shipmenttotal;
        return view('admin.users.vendor_dashboard.finance.statement',compact('ordertotal','shipmenttotal','comission','total'));
    }
    public function order_review()
    {
    $userId = session::get('asVendor');
    $pendingOrder = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 0)->get();
    $clearOrder = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus', 0)->get();
    $withdrawOrder = Orders::where('vendor_id',$userId)->where('status','placed')->where('is_delivered', 1)->where('paymentStatus', 1)->get();
    $order_detail = OrderProducts::where('status','placed')->get();
    return view('dashboard.finance.order-review',compact('pendingOrder','clearOrder','withdrawOrder','order_detail'));
    }
    public function downloadslip($id){
        $userId = session::get('asVendor');
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
}
