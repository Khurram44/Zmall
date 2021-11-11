<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Products;
use App\Cart;
use Carbon\Carbon;
use App\CartProducts;
use App\Orders;
use Config;
use App\Cities;
use App\Province;
use App\Manage;
use App\campaign;
use App\Mail\ordermail;
use App\storeDetail;
use App\Mail\ordermailVendor;
use App\ContactBook;
use App\User;
use App\notification;
use App\vouchers;
use App\zmall_vouchers;
use App\Wishlist;
use App\OrderProducts;
use App\ProductAttributes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
class CartController extends Controller
{   
  
     public function GetCityAgainstProvinceEdit($id)
    {       
        $pro_id = Province::where('name',$id)->first();
      echo json_encode(Cities::where('province_id', $pro_id->id)->get());
    }
    public function chkdelivery()
    {
        if(isset($_POST['proceed_to_payment']))
        {
            $cart_item = Session::get('cart_id');
            $product_size = Session::get('product_size');
            $product_color = Session::get('product_color');
            $product_quantity = Session::get('product_quantity');
            $cart_products = Products::whereIn('id', $cart_item)->get();
            $Cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
            $a = "0";
            extract($_POST);
            $CartProducts = CartProducts::where('cart_id', $Cart->id)->get();
                if($CartProducts->count() > 0){
                    foreach ($CartProducts as $p) {
            $savecart = new Orders;
            $savecart->temp_user_id = Session::get('temp_user_id');
            
            if(!empty(Auth::id())){
                $savecart->added_by = Auth::id();
            }   
            
            $savecart->first_name = $first_name;
            $savecart->last_name = $last_name;
            $savecart->order_no = date("Ymdhis").$a;
            $savecart->email = $email;
            $savecart->state = $province;
            if($Cart->voucher == 1)
            {
                $savecart->voucher = 1;
                $savecart->voucher_no = $Cart->voucher_no;
            }
            $savecart->city = $City;
            $phone=  substr($phone,1);
            $phone = "92".$phone;
            $savecart->phone = $phone;
            $savecart->vendor_id = $p->productinfo->added_by;
            $savecart->address = $address;
            if(!empty($p->zip_code)){
            $savecart->zip_code = $zip_code;
            }   
            if(!empty($p->discount_price)){
            $savecart->sub_total = $p->price - $p->discount-price;}
            else{
                $savecart->sub_total = $p->price;
            }
            $savecart->shipment_charges = $Cart->shipment;
            $savecart->grand_total = $Cart->grand_total;
            if($savecart->save()){
                        $savecartproducts = new OrderProducts;
                        $savecartproducts->order_id = $savecart->id;
                        $savecartproducts->product_id = $p->product_id;
                        $savecartproducts->vendor_id = $p->productinfo->added_by;
                        $savecartproducts->quantity = $p->quantity;
                        $savecartproducts->temp_user_id = Session::get('temp_user_id');
                        if(!empty($p->productinfo->discount_price)){
                        $savecartproducts->price = $p->productinfo->price - $p->productinfo->discount_price;}
                        else{
                            $savecartproducts->price = $p->productinfo->price;
                        }
                        $savecartproducts->size = $p->size;
                        $savecartproducts->size_price = $p->size_price;
                        $savecartproducts->color = $p->color;
                        $savecartproducts->color_price = $p->color_price;
                        $savecartproducts->total_price = $Cart->grand_total;
                        if($savecartproducts->save()){ 
                        }
                    }
                $a++;
                }
            }
            $temp_id = Session::get('temp_user_id');
            $details = Orders::where('temp_user_id',$temp_id)->first();
            $cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
            $cart_item = CartProducts::where('cart_id', $cart->id)->get(); 
        
        return view('chkpayment',compact('details','cart_item','cart'));
         }
      }
    public function chkpayment(Request $req)
    {
        if($req->delivery == 'cash_on_delivery')
        {
            
            // $temp_id = Session::get('temp_user_id');
            // $savecart = Orders::where('temp_user_id',$temp_id)->first();
            // $number = $savecart->phone;
            // $code = rand(1111,9999);
            // $savecart->verification_code = $code;
            // $savecart->save();
            // $api_key = "923135969646-f1fb261f-1b22-4d63-bf09-df4f36c64883";///YOUR API KEY
            // $mobile = $number; ///Recepient Mobile Number
            // $sender = "SMS Alert";
            // $message = "Your verification code is ".$code;
            // ////sending sms
            // $post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
            // $url = "https://sendpk.com/api/sms.php?api_key=$api_key";
            // $ch = curl_init();
            // $timeout = 30; // set to zero for no timeout
            // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
            // curl_setopt($ch, CURLOPT_URL,$url);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            // $result = curl_exec($ch); 
            // return view('OTP')->with("number",$number);
            $temp_id = Session::get('temp_user_id');
            $details = Orders::where('temp_user_id',$temp_id)->first();
            $cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
            $cart_item = Session::get('cart_id');
            $product_size = Session::get('product_size');
            $product_color = Session::get('product_color');
            $product_quantity = Session::get('product_quantity');
            $cart_products = Products::whereIn('id', $cart_item)->get();
            return view('chkreview',array(
                'cart'=> $cart,
                'details'=>$details,
                'cart_products'=>$cart_products,
                'product_size'=>$product_size,
                'product_color'=>$product_color,
                'product_quantity'=>$product_quantity));
         }
         if ($req->delivery == 'easypaisa') 
         {
            $temp_id = Session::get('temp_user_id');
            $savecart = Orders::where('temp_user_id',$temp_id)->first();
            $orderNo = $savecart->order_no;
            $amount = $savecart->grand_total;
            $amount = $amount.".0";
            $datetime = new \DateTime();
            $orderRefNum =$datetime->format('YmdHis');
            $expDateTime = $datetime;

            $expDateTime->modify('+'. 1 .'hours');
            $expDate = $expDateTime->format('Ymd His');
            $post_data =  array(
            "storeId"           => Config::get('constant.easypay.store_id'),
            "amount"            => $amount,
            "orderId"            => $orderNo,
            "postBackURL"       => Config::get('constant.easypay.POST_BACK_URL1'),
            "orderRefNum"       => $orderRefNum,
            "token"        => $expDate,         //Optional
            "encryptedHashRequest" => Config::get('constant.easypay.HASH_KEY'),                  
            "autoRedirect"      => "1",                 //Optional
            "paymentMethod"     => "MA_PAYMENT_METHOD",
            "timeStamp"     => $orderRefNum, //Optional
            );
           // $post_data['merchantHashedReq'] = $this->get_SecureHash($post_data);
            session::put('post_data',$post_data);
            //return view('easypaisa.do_checkout_v');
            return view('easypaisa.test');
         }
         
    elseif($req->delivery == 'jazzcash'){
        $temp_id = Session::get('temp_user_id');
        $order = Orders::where('temp_user_id',$temp_id)->first();
        $cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
        $dueday = Carbon::now()->addDay();
        $amount = $cart->grand_total * 100;
        $datetime = new \DateTime();
        $currenttime = $datetime->format('YmdHis');
        $orderRefNum ='T'.$datetime->format('YmdHis');
        $expDateTime = $datetime;
        $expDateTime->modify('+'. 1 .'day');
        $expDate = $expDateTime->format('YmdHis');
        return view('jazzcash.test',compact('order','amount','orderRefNum','expDate','currenttime','temp_id'));
    }
    elseif($req->delivery == 'card'){
        $temp_id = Session::get('temp_user_id');
        $order = Orders::where('temp_user_id',$temp_id)->first();
        $cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
        $dueday = Carbon::now()->addDay();
        $amount = $cart->grand_total * 100;
        $datetime = new \DateTime();
        $currenttime = $datetime->format('YmdHis');
        $orderRefNum ='T'.$datetime->format('YmdHis');
        $expDateTime = $datetime;
        $expDateTime->modify('+'. 1 .'day');
        $expDate = $expDateTime->format('YmdHis');
        return view('jazzcash.card',compact('order','amount','orderRefNum','expDate','currenttime','temp_id'));
    }
}

    public function checkoutconfirm(Request $request)
    {
        $response = $request->input();

        $post_data = array();
        $post_data['auth_token'] = $response['auth_token'];
        $post_data['postBackURL'] = Config::get('constant.easypay.POST_BACK_URL2');
        echo '<pre>';
        print_r($post_data);
        echo '</pre>';

        return view('easypaisa.do_confirm_v',['post_data'=>$post_data]);
    }

    public function paymentstatus(Request $request)
    {
       $response = $request->input();
       echo '<pre>';
        print_r($response);
        echo '</pre>';
    }
    public function paymentsuccessfull()
    {
        $temp_id = Session::get('temp_user_id');
        $details = Orders::where('temp_user_id',$temp_id)->first();
        $cart_item = Session::get('cart_id');
        $product_size = Session::get('product_size');
        $product_color = Session::get('product_color');
        $product_quantity = Session::get('product_quantity');
        return view('chkreview',array(
                'details'=>$details,
                'cart_products'=>$cart_products,
                'product_size'=>$product_size,
                'product_color'=>$product_color,
                'product_quantity'=>$product_quantity));
    }

    public function verifyOTP(Request $req)
    {
        $temp_id = Session::get('temp_user_id');
        $user = Orders::where('temp_user_id',$temp_id)->first();
        $sendOTP = $user->verification_code;
        $entryOTP = $req->verify_code;
        
        if ($sendOTP == $entryOTP) 
        {
            $temp_id = Session::get('temp_user_id');
            $details = Orders::where('temp_user_id',$temp_id)->first();
            $cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
            $cart_item = Session::get('cart_id');
            $product_size = Session::get('product_size');
            $product_color = Session::get('product_color');
            $product_quantity = Session::get('product_quantity');
            $cart_products = Products::whereIn('id', $cart_item)->get();
            return view('chkreview',array(
                'cart'=> $cart,
                'details'=>$details,
                'cart_products'=>$cart_products,
                'product_size'=>$product_size,
                'product_color'=>$product_color,
                'product_quantity'=>$product_quantity));
        }
        else
        {
            return redirect()->back()->with('message', '404');
        }
    }
    public function paymentdone(Request $req){
        if($req->pp_ResponseCode == 000){
            $temp_id = $req->pp_BillReference;
            $details = Orders::where('temp_user_id',$temp_id)->first();
            $cart = Cart::where('temp_user_id', $temp_id)->first();
            Orders::where('temp_user_id',$temp_id)->update([
            'payment_method' => 'jazzCash',
            'payment' => 'paid',

            ]);
            $cartData = OrderProducts::where('temp_user_id', $temp_id)->get();
            $cart_products=array();
            foreach($cartData as $row){
            $cartItems=$row->product_id;
            $data=Products::where('id', $cartItems)->get();
            array_push($cart_products,$data);
            }
            $cart_item = Session::get('cart_id');
            $product_size = Session::get('product_size');
            $product_color = Session::get('product_color');
            $product_quantity = Session::get('product_quantity');
            $cart_products = Products::whereIn('id', $cart_item)->get();
            return view('chkreview',array(
                'cart'=> $cart,
                'details'=>$details,
                'cart_products'=>$cart_products,
                'product_size'=>$product_size,
                'product_color'=>$product_color,
                'product_quantity'=>$product_quantity));
        }
        else
        {
            dd($req);
        //     $temp_id = Session::get('temp_user_id');
        //     $details = Orders::where('temp_user_id',$temp_id)->first();
        //     $cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
        //     $cart_item = CartProducts::where('cart_id', $cart->id)->get(); 
        
        // return view('chkpayment',compact('details','cart_item','cart'))->with('status', 'Payment Faild! Please Try Another Way.');
        }
    }

    public function chkreview()
    {
        $temp_id = Session::get('temp_user_id');
        $orderdetail = Orders::where('temp_user_id',$temp_id)->get();
        $Cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
        Orders::where('temp_user_id',$temp_id)->update([
                'status' => 'pending',]);
        OrderProducts::where('temp_user_id', $temp_id)->update([
                'status' => 'pending',]);
        $savecart = Orders::where('temp_user_id',$temp_id)->first();
        $OrderProducts = CartProducts::where('cart_id', $Cart->id)->get();
                // if($OrderProducts->count() > 0){
                //      foreach ($OrderProducts as $p) {
                //         $dataVendor = array( 
                //             'name'     =>   $p->productinfo->userinfo->first_name." ".$p->productinfo->userinfo->last_name, 
                //             'date'     =>   date("d F, Y"),
                //               );
                //          Mail::to($p->productinfo->userinfo->email)->send(new ordermailVendor($dataVendor));
                //      }
                //  }
                // $data = array( 
                //             'name'     =>   $savecart->first_name." ".$savecart->last_name, 
                //             'address' => $savecart->address,
                //             'phone' => $savecart->phone,
                //             'order_id' => $savecart->order_no,
                //             'city' => $savecart->city,
                //             'state' => $savecart->state,
                //             'pro_name' => 'product',
                //             'pro_sku' => 1111,
                //             'quantity' => 1,
                //             'sub_total' => $savecart->sub_total,
                //             'shipment_charges' => $savecart->shipment_charges,
                //             'grand_total' => $savecart->grand_total,
                //              'date'     =>   date("d F, Y"),
                //                 );
                // Mail::to($savecart->email)->send(new ordermail($data));
                // $noti = new notification;
                // $noti->notification_type = "Placed Order";
                // $noti->user_id = Auth::id();
                // $noti->to_user = $savecart->vendor_id;
                // $noti->save();
                // if($savecart->voucher == 1){
                //     vouchers::where('voucher_code', $savecart->voucher_no)->increment('claimed');

                // }
                ##################Order SMS To Vendor#####################
                $temp_id = Session::get('temp_user_id');
                $number = $savecart->userinfo->phone;
                $number = "92" . ltrim($number, "0");
                $api_key = "923135969646-f1fb261f-1b22-4d63-bf09-df4f36c64883";///YOUR API KEY
                $mobile = $number; ///Recepient Mobile Number
                $sender = "SMS Alert";
                $message = "Order Has Been Placed. Please Check Your Vendor Portal At Zmall.pk";
                ////sending sms
                $post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
                $url = "https://sendpk.com/api/sms.php?api_key=$api_key";
                $ch = curl_init();
                $timeout = 30; // set to zero for no timeout
                curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                $result = curl_exec($ch); 
                #######################################
        Session::put('cart_id',"");
        Session::put('temp_user_id',"");
        return view('feedback_direct',compact("orderdetail","OrderProducts"));
    }

    public function add_to_wishlist()
    {
        if(isset($_POST['product_id'])){
            $product_id = base64_decode($_POST['product_id']);
                 $check_already = Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->get();
                 if($check_already->count() > 0){
                    if(Wishlist::where('user_id', Auth::id())->where('product_id', $product_id)->delete()){
                        $response = array("status"=>"removed","message"=>"Product removed from wishlist successfully");
                    }else{
                        $response = array("status"=>"error");
                    }
                    
                 }else{
                    // add into wishlist
                    $add = new Wishlist;
                    $add->product_id = $product_id;
                    $add->user_id = Auth::id();
                    if($add->save()){
                        $response = array("status"=>"added","message"=>"Product added to wishlist successfully");
                    }else{
                        $response = array("status"=>"error");
                    }
                 }
                 echo json_encode($response); die;
        }

    }

    public function add_to_cart()
    {
        if(isset($_POST['add_to_cart'])){
            extract($_POST);

            $cart_item = Session::get('cart_id');           
            $get_product_size = Session::get('product_size');           
            $get_product_quantity = Session::get('product_quantity');           
            $get_product_color = Session::get('product_color');           
            $decode_value = base64_decode($add_to_cart);
            if(!empty($cart_item)){
                if(!in_array($decode_value, $cart_item)){ // if not exist than add product and its size and color
                    $cart =  Session::push('cart_id',$decode_value);
                 }

            if(!empty($get_product_quantity)){ // update cart item quantity
                        $update_product_quantity = $get_product_quantity;
                            foreach ($get_product_quantity as $key => $value) {
                                if (array_key_exists($decode_value,$get_product_quantity)){
                                  $update_product_quantity[$decode_value] = $quantity;
                                }else{
                                    $update_product_quantity[$decode_value] = $value;
                                }
                            }
                            
                        }
              if (!array_key_exists($decode_value,$get_product_quantity)){
                    $update_product_quantity[$decode_value] = $quantity;
                }
                Session::put('product_quantity',$update_product_quantity);

            if(!empty($get_product_size)){ // update cart item size 
                        $update_product_size = $get_product_size;
                            foreach ($get_product_size as $key => $value) {
                                if (array_key_exists($decode_value,$get_product_size)){ 
                                  $update_product_size[$decode_value] = $product_size_selected;
                                }else{
                                    $update_product_size[$decode_value] = $value;
                                }
                            }
                            
                        }
              if (!array_key_exists($decode_value,$get_product_size)){ 
                    $update_product_size[$decode_value] = $product_size_selected;
                }
                Session::put('product_size',$update_product_size);

                if(!empty($get_product_color)){ // update cart item color 
                        $update_product_color = $get_product_color;
                            foreach ($get_product_color as $key => $value) {
                                if (array_key_exists($decode_value,$get_product_color)){ 
                                  $update_product_color[$decode_value] = $product_color_selected;
                                }else{
                                    $update_product_color[$decode_value] = $value;
                                }
                            }
                            
                        }
              if (!array_key_exists($decode_value,$get_product_color)){ 
                    $update_product_color[$decode_value] = $product_color_selected;
                }
                Session::put('product_color',$update_product_color);
             }else{ // add new product with size and color
                // add product
                $product_id = array(0=>$decode_value);
                Session::put('cart_id',$product_id);
                // add product size
                $product_size = array($decode_value=>$product_size_selected); 
                Session::put('product_size',$product_size);
                // add product color
                $product_color = array($decode_value=>$product_color_selected);  
                Session::put('product_color',$product_color);
                // add product quantity
                $product_quantity = array($decode_value=>$quantity);  
                Session::put('product_quantity',$product_quantity);
             }
            
             $temp_user_id = Session::get('temp_user_id');
             if(empty($temp_user_id)){
                $temp_user_id = date("Ymdhis");
                Session::put('temp_user_id',$temp_user_id);
             }
        }
    } 

    public function view_cart()
    {
        $cart_item = Session::get('cart_id');
        $product_size = Session::get('product_size');
        $product_color = Session::get('product_color');
        $product_quantity = Session::get('product_quantity');
        $cart_products = Products::whereIn('id', $cart_item)->get();
        $size=Manage::where('module_id', 6)->get();
        $color=Manage::where('module_id', 4)->get();
        $product_price = "0";
        $userId = Auth::id();
        $order = Orders::where('added_by',$userId)->first();
        if(!empty($cart_products)){
        foreach($cart_products as $c){
            $product_price = $product_price+$c->price;
        }
        }
        if($cart_products !== null){
        return view('view_cart',array(
            'cart_products'=>$cart_products,
            'product_size'=>$product_size,
            'product_color'=>$product_color,
            'product_quantity'=>$product_quantity,
            'color'=>$color,
            'size'=>$size,
            'product_price' => $product_price,
            'order' => $order,
        ));
    }
    else{
        return view('emptycart');
    }
    }
    public function viewCartVoucher($type,$discount,$code)
    {

        $cart_item = Session::get('cart_id');
        $product_size = Session::get('product_size');
        $product_color = Session::get('product_color');
        $product_quantity = Session::get('product_quantity');
        $cart_products = Products::whereIn('id', $cart_item)->get();
        $size=Manage::where('module_id', 6)->get();
        $color=Manage::where('module_id', 4)->get();
        if($cart_products !== null){
        return view('view_cart',array(
            'cart_products'=>$cart_products,
            'product_size'=>$product_size,
            'product_color'=>$product_color,
            'product_quantity'=>$product_quantity,
            'color'=>$color,
            'size'=>$size,
            'type' => $type,
            'discount' => $discount,
            'code' => $code
        ));
    }
    else{
        return view('emptycart');
    }
    }

    public function savecart()
    {
        //Cart
        if(isset($_POST['place_order'])){
            extract($_POST);
            $savecart = new Cart;
            $savecart->temp_user_id = Session::get('temp_user_id');
            $savecart->sub_total = $sub_total_price;
            $savecart->shipment = $shipment_charges;
            $savecart->grand_total = $cart_total_amount;
            if(!empty($discountType)){
                $savecart->voucher = 1;
                $savecart->voucher_no = $code;
            }
            if($savecart->save()){
                if(!empty($product_id)){
                    foreach ($product_id as $p) {
                        $savecartproducts = new CartProducts;
                        $savecartproducts->cart_id = $savecart->id;
                        $savecartproducts->product_id = $p;
                        $product = Products::where('id',$p)->first();
                        $savecartproducts->vendor_id = $product->added_by;
                        $savecartproducts->quantity = $quantity[$p];
                        $savecartproducts->total_price = $product_total_price[$p];
                        $savecartproducts->size = $size[$p];
                        $savecartproducts->size_price = $size_price[$p];
                        $savecartproducts->color = $color[$p];
                        $savecartproducts->color_price = $color_price[$p];
                        $savecartproducts->price = $product_price[$p];
                        if($savecartproducts->save()){

                        }
                    }
                }

                return redirect('checkout');
            }
        }
    }    

    public function checkout(Request $req)
    {
        if(Auth::check()){
        $cart_item = Session::get('cart_id');
        $product_size = Session::get('product_size');
        $product_color = Session::get('product_color');
        $product_quantity = Session::get('product_quantity');
        $cart_products = Products::whereIn('id', $cart_item)->get();
        $address = ContactBook::where('added_by', Auth::id())->first();
        $cities = Cities::all();
        $province = Province::all();
         if(!empty(Auth::id())){
                $userinfo = User::where('id', Auth::id())->first();
                $first_name = $userinfo->first_name;
                $last_name = $userinfo->last_name;
                $email = $userinfo->email;
            }else{
                $first_name = '';
                $last_name = '';
                $email = '';
            }
        if(!empty($address)){
                $alreadyprovince = $address->state;
                $alreadycity = $address->city;
            }else{
                $alreadyprovince = '';
                $alreadycity = '';
            }    
        return view('chkdelivery',array(
            'cart_products'=>$cart_products,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'cities' =>$cities,
            'province'=>$province,
            'address' => $address,
            'alreadyprovince'=>$alreadyprovince,
            'alreadycity'=>$alreadycity,
            'product_size'=>$product_size,
            'product_color'=>$product_color,
            'product_quantity'=>$product_quantity,
            'address'=>$address));
    }
    else
    {
        return redirect('Userlogin');
    }
    } 

    public function thankyou(Request $req)
    {
        echo $req;
    }
    public function successfull()
    {
        return view('successfull');
    }
public function orderfeedback($id)
{
    $orderdetail = Orders::where('order_no',$id)->first();
    $OrderProducts = OrderProducts::where('order_id', $orderdetail->id)->get();
    return view('feedback',compact("orderdetail","OrderProducts"));
}

    public function remove($add_to_cart)
    { 
            // $id = $pid."-".$quantity;
            $cart_item = Session::get('cart_id');
            
            $decode_value = base64_decode($add_to_cart);

            if (($key = array_search($decode_value, $cart_item)) !== false) {
                unset($cart_item[$key]);
            }

            $cart =  Session::put('cart_id',$cart_item);
            return redirect('/');
    } 

    public function cartheadersection()
    { 
            $cart_item = Session::get('cart_id');
             if(!empty($cart_item)){
                    $cart_item = Session::get('cart_id');
                    $cart_products = Products::whereIn('id', $cart_item)->get();
                    $sum_all_prices = Products::whereIn('id', $cart_item)->sum('price');
                        ?>
                <a class="dropdown-toggle call_to_open_cart" data-toggle="dropdown" aria-expanded="true">
                   
                    <i class="fa fa-shopping-cart"></i>
                    <span class="qty"><?= $cart_products->count();?></span>
                    <br>
                    <span class="text-uppercase">Cart</span>
               
                   
                    </a>



                    <div class="custom-menu" style="left: -140px; width: 350px;">
                    <div id="shopping-cart" >
                    <div class="shopping-cart-list">
                    <?php 
                            foreach($cart_products as $p){?>
                    <div class="product product-widget" style="padding-bottom: 15px; margin-bottom: 0px; border-bottom: 1px solid #ddd;">
                        <div class="product-thumb" style="width: 50px; border: 1px solid #ddd;">
                        <img src="<?= asset('/frontend/storage/uploads/'.$p->images) ?>" alt="IMG">
                        </div>
                        <div class="product-body" style="padding-left: 50px;padding-top: 0px;min-height: 60px;">
                        <div class="cust-car-top" style="display: flex;align-items: center;justify-content: space-between; align-content:space-between;padding: 0px 10px;">
                        <?php if(!empty($p->discount_price)) { ?>
                        <h3 class="product-price" style="font-size: 12px;">PKR <?= number_format($p->price - $p->discount_price,2);?><span class="qty"> x 1</span><span class="qty" style="font-size: 12px;"> = PKR <?= number_format($p->price - $p->discount_price,2);?></span></h3>
                        <?php } else { ?>
                        <h3 class="product-price" style="font-size: 12px;">PKR <?= number_format($p->price,2);?><span class="qty"> x 1</span><span class="qty" style="font-size: 12px;"> = PKR <?= number_format($p->price,2);?></span></h3>
                        <?php } ?>
                        <a href="<?= url('/remove/'.base64_encode($p->id)) ?>"  onclick="return confirm('Are you sure you want to delete?');" class="cancel-btn" style="position: unset; color: #3a3b3c !important ;"><i class="fa fa-trash" style="color:red;"></i></a>
                        </div>
                        <div style="margin-left:10px; display: flex;"><span class="product-name" style="font-size: 12px; color: #333; text-transform: capitalize;"><a href="product-page.php" style="color:#333 !important;"><?= $p->title;?></a></span></div>
                        
                        </div>
                        
                  
                    </div>
                <?php }?>


                    </div>

                     

                    <div class="shopping-cart-btns">
                        <a href="<?= asset('/view-cart') ?>"  class="main-btn" style="color: #333 !important;">View Cart</a>
                        <a href="<?= asset('/view-cart') ?>"  style="color: #333 !important;">Checkout <i class="fa fa-arrow-circle-right"></i></a>


                    </div>
                    </div>
                    </div>
            <?php }else{
                echo 0;
            }
    }

    public function attributeprice(Request $request)
    {
        
        $product_color_price = ProductAttributes::where('product_id', $request->product_id)->where('value', $request->id)->first();
        $type = '';
        $attr_price = 0;
        if($product_color_price){
            $type = $product_color_price->type;
            $attr_price = $product_color_price->price;
            if($product_color_price->price_type = 'add'){
                $sum_of_price =  $request->product_price + $product_color_price->price;
            }else{
                $sum_of_price =  $request->product_price - $product_color_price->price;
            }
            
        }else{
           $sum_of_price =  $request->product_price;
        }

        echo json_encode(array('attr_price'=>$attr_price,'price'=>$sum_of_price,'type'=>$type,'formated_price'=>"PKR ".number_format($sum_of_price,2)));
      
    }

    public function applyvoucher(Request $req){
        foreach($req->productId as $p){
        $vCode = $req->voucherCode;
        $product = Products::where('id',$p)->first();
        $voucher = vouchers::where('voucher_code',$vCode)->where('user_id',$product->added_by)->first();
        if(!empty($voucher)){
        if($voucher->status == 'Active'){
            if($voucher->claim <= $voucher->quantity){
                if($voucher->ending_time > now()){
                    if(!empty($voucher->product)){
                       $vp = json_decode($voucher->product,true);
                        foreach($vp as $vvp){
                            if($vvp == $p){
                                $type = $voucher->discount_type;
                                $discount_amount = $voucher->discount_number;
                                $voucher_no = $voucher->voucher_code;
                                return redirect('/view-cart/'.$type.'/'.$discount_amount.'/'.$voucher_no);
                            }
                            else{
                                return redirect()->back()->with('status','This Voucher Is Not Applicable On This Product!');
                            }
                        }
                    }
                    else{
                    $type = $voucher->discount_type;
                    $discount_amount = $voucher->discount_number;
                    $voucher_no = $voucher->voucher_code;
                    return redirect('/view-cart/'.$type.'/'.$discount_amount.'/'.$voucher_no);
                    }
                }
                else{
                    return redirect()->back()->with('status','Time Is Finished!');
                }
            }
            else{
                return redirect()->back()->with('status','All These Voucher Are Used!');
            }
        }
        else{
            return redirect()->back()->with('status','This Voucher Is Expired!');
        }
        }
        else{
            $zmall_campaign = campaign::where('campaign_code',$vCode)->first();
            if(!empty($zmall_campaign)){
                if ($zmall_campaign->status == 'Active') {
                    if ($zmall_campaign->starting_time > now()){
                       $zmall_vouchers = zmall_vouchers::where('voucher_code',$vCode)->where('user_id',$product->added_by)->first();
                            if ($zmall_vouchers->claimed <= $zmall_vouchers->quantity) {
                                if(!empty($zmall_vouchers->product)){
                                    $vp = json_decode($zmall_vouchers->product,true);
                                        foreach($vp as $vvp){
                                            if($vvp == $p){
                                            $type = $zmall_vouchers->discount_type;
                                            $discount_amount = $zmall_vouchers->amount;
                                            $voucher_no = $zmall_vouchers->voucher_code;
                                            return redirect('/view-cart/'.$type.'/'.$discount_amount.'/'.$voucher_no);
                                        }
                            else{
                                return redirect()->back()->with('status','This Voucher Is Not Applicable On This Product!');
                            }
                        }
                    }
                        else{
                            $type = $zmall_vouchers->discount_type;
                            $discount_amount = $zmall_vouchers->amount;
                            $voucher_no = $zmall_vouchers->voucher_code;
                            return redirect('/view-cart/'.$type.'/'.$discount_amount.'/'.$voucher_no);
                        }
                       }
                       else
                       {
                        return redirect()->back()->with('status','All These Voucher Are Used!');
                       }
                    }
                    else{
                        return redirect()->back()->with('status','This Voucher Is Expired!');
                    }
                }
                else{
                    return redirect()->back()->with('status','This Voucher Is Expired!');
                }
            }
            else{
                return redirect()->back()->with('status','This Voucher Is Not Available!');
            }
    }
    }
}
}
