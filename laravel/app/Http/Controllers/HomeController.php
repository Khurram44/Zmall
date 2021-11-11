<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Manage;
use App\Slider;
use App\Blog;
use App\Province;
use App\storeDetail;
use App\Cities;
use App\FollowedStore;
use App\ProductGallery;
use App\ProductAttributes;
use Carbon\Carbon;
use Session;
use App\Orders;
use App\vouchers;
use App\product_attribute;
use App\News;
use App\User;
use App\product_color;
use App\Contacts;
use App\Newsletter;
use App\Review;
use App\Customercare_accounts;
use App\Customercare_shipping;
use App\Customercare_cupons;
use App\Customercare_prouct;
use App\Customercare_payment;
use Intervention\Image\Facades\Image as Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function testproduct(Request $request){
        $productdetail = Products::where('is_deleted', 0)->where('permission','Approved')->where('slug',$request->id)->first();

        if(!empty($productdetail)){
        $vendor_info= User::where('id', $productdetail->added_by)->first();
        //========check user cookies for 1 day ip session==============//

        setcookie('user_ip_address', $_SERVER['REMOTE_ADDR'], time() + (86400 * 30), "/");
        if(empty($_COOKIE['user_ip_address'])){
            $vendor_info->visitor_count = $vendor_info->visitor_count + 1;
            $vendor_info->save();
        }
        }
        //========check user cookies for 1 day ip session==============//
        if(empty($productdetail)){$productdetail = Products::where('is_deleted', 0)->where('permission','pending')->where('slug',$request->id)->first();}
        if(empty($productdetail)){$productdetail = Products::where('is_deleted', 1)->where('permission','Approved')->where('slug',$request->id)->first();}
        if(empty($productdetail)){$productdetail = Products::where('is_deleted', 1)->where('permission','pending')->where('slug',$request->id)->first();}
        $storeDetail = storeDetail::where('owner_id',$productdetail->added_by)->first();
        $ProductColors=ProductAttributes::where('product_id', $productdetail->id)->where('type', 'color')->get();
        $Productprice=product_color::where('product_id', $productdetail->id)->get();
        $productattribute = product_attribute::where('product_id', $productdetail->id)->first();
        $reviews= Review::where('product_id', $productdetail->id)->get();
        $product_gallery = \DB::table('product_gallery')->where('product_id',$productdetail->id)->get();
        $ProductSize=ProductAttributes::where('product_id', $productdetail->id)->where('type', 'size')->get();
        $SellerRecommendation=Products::where('category', $productdetail->category)->where('permission','Approved')->orderBy('id', 'desc')->skip(0)->take(4)->where('is_deleted', 0)->get();
        $avg_store_reviews =Review::where('vendor_id', $productdetail->added_by)->avg('star_rating');
        $followers = FollowedStore::distinct()->select('followed_by')->where('vendor_user_id', $productdetail->added_by)->groupBy('followed_by')->get();
        return view('tampo',compact("productdetail","storeDetail","ProductColors","ProductSize","reviews","product_gallery","Productprice","SellerRecommendation","avg_store_reviews","followers","productattribute"));
    }
     public function shop(Request $request)
    {

        $vendor_info= User::where('slug', $request->id)->first();
        //========check user cookies for 1 day ip session==============//

        setcookie('user_ip_address', $_SERVER['REMOTE_ADDR'], time() + (86400 * 30), "/");
        if(empty($_COOKIE['user_ip_address'])){
            $vendor_info->visitor_count = $vendor_info->visitor_count + 1;
            $vendor_info->save();
        }

        //========check user cookies for 1 day ip session==============//
        
        $vendor_products =  Products::where('is_deleted', 0)->where('added_by', $vendor_info->id)->get();
        $new_products =  Products::where('is_deleted', 0)->limit(6)->get();
        $recommentded =  Products::where('is_deleted', 0)->limit(2)->get();
        $flash_sale =  Products::where('is_deleted', 0)->limit(4)->get();
        return view('shop',compact("vendor_info","vendor_products","new_products","recommentded","flash_sale"));
        
    }
    public function index()
    {
        
        $flash_sale = Products::where('is_deleted', 0)->where('permission','Approved')->where('discount_price','>', '0')->inRandomOrder()->paginate(6);
        $new_customer = Products::where('is_deleted', 0)->where('permission','Approved')->inRandomOrder()->paginate(6);
        $latest_products = Products::where('is_deleted', 0)->latest('added_on')->where('price','<=', '1000')->where('permission','Approved')->get();
        $new_arrival = Products::where('is_deleted', 0)->latest('added_on')->where('price','>', '1000')->where('permission','Approved')->get();
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->paginate(7);
        $voucher = vouchers::where('status', 'Active')->get();
        $GetData =  \DB::table('advertisement')->get();
        return view('home',compact("voucher","flash_sale","latest_products","Categories","GetData","new_arrival","new_customer"));
        
    }

    public function flashDeal(){
        $flash_sale = Products::where('is_deleted', 0)->where('permission','Approved')->where('discount_price','>', '0')->latest('added_on')->get();
        return view('flashDeal',compact('flash_sale'));
    }
    public function blackFriday(){
        $black_friday = Products::where('is_deleted', 0)->where('permission','Approved')->where('discount_price','>', '0')->latest('added_on')->get();
        return view('BlackFriday',compact('black_friday'));
    }

    public function category()
    {
        return view('view_categories');
    }
    public function sale()
    {

        $sale_products = Products::where('is_deleted', 0)->get();
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0);
        return view('sale',compact("sale_products","Categories"));
        
    }

    public function sellonzmall()
    {
         $faqs =  \DB::table('faq')->get();
         $story =  \DB::table('testimonial')->get();
         $gnsettings= \DB::table('generalsettings')->first();
     
        return view('sellonzmall',compact('faqs','story','gnsettings'));
        
    }
  public function selltest()
    {
         $faqs =  \DB::table('faq')->get();
         $story =  \DB::table('testimonial')->get();
         $gnsettings= \DB::table('generalsettings')->first();
     
        return view('sellonzmall2',compact('faqs','story','gnsettings'));
        
    }

   public function return_and_refund()
    {
         $return_refund =  \DB::table('return&refund')->get();
        return view('return_and_refund',compact('return_refund'));
    }

    public function faqs()
    {
        $faqs =  \DB::table('faq')->get();
        return view('faq',compact('faqs'));
    }

    public function news_letter(Request $request)
    {
         if (isset($_POST['newsletter'])) 
        {   
            extract($_POST);
             $validatedData = $request->validate([
                'email' => 'required',
                
                
            ]);
             $check = Newsletter::where('email', $email)->get();
             if($check->count() > 0){
                    $request->session()->flash('status', 'You have already subscribed to our website.');
                    return redirect('/thank-you');
             }else{
                 $news_letter = new Newsletter();
                 $news_letter->email = $email;
                 if ($news_letter->save()) 
                 {
                    $request->session()->flash('status', 'Thank You! You have been successfully subscribed to our website.Now, you will get latest updates from our website.');
                     return redirect('/thank-you');
                 }

             }

            
        }
    }
    
    public function about_us()
   {
    return view('about_us');
   }
    public function thankyou(Request $req)
    {
        return view('thank_you'); 
    }

    public function indexsss(Request $request)
    {
        $users = User::where('is_active', true);

        if ($request->has('age_more_than')) {
            $users->where('age', '>', $request->age_more_than);
        }

        if ($request->has('gender')) {
            $users->where('gender', $request->gender);
        }

        if ($request->has('has_published_post')) {
            $users->where(function ($query) use ($request) {
                $query->whereHas('posts', function ($query) use ($request) {
                    $query->where('is_published', $request->has_published_post);
                });
            });
        }

        return $users->get();
    }

    public function newarivals(Request $request)
    {

     $all_products = Products::where('is_deleted', 0)->where('permission','Approved')->orderBy('id','desc');
        if (isset($request->catid)) {
            $all_products->where('category', decrypt($request->catid));
        }
         if (isset($request->subid)) {
            $all_products->where('sub_category_id', decrypt($request->subid));
        }
         if (isset($request->typeid)) {
            $all_products->where('type_id', decrypt($request->typeid));
        }
        if (!empty($_REQUEST['category'])) {
            $all_products->where('category', $_REQUEST['category']);
            $sub_categories=Manage::where('module_id', 2)->where('parent_id', $_REQUEST['category'])->get();
        }else{
            $sub_categories=array();
        }
        if (!empty($_REQUEST['sub_category'])) {
            $all_products->where('sub_category_id', $_REQUEST['sub_category']);
            $typelist=Manage::where('module_id', 3)->where('parent_id', $_REQUEST['sub_category'])->get();
        }else{
            $typelist= array();
        }
        if (!empty($_REQUEST['type'])) {
            $all_products->where('type_id', $_REQUEST['type']);
        }
        if (!empty($_REQUEST['brand'])) {
            $all_products->where('brand_id', $_REQUEST['brand']);
        }
        $all_products = $all_products->paginate(15);

        $related_products = Products::where('is_deleted', 0)->where('permission','Approved')->orderBy('id', "desc")->limit(4)->get();
        $top_rated_products = Products::where('is_deleted', 0)->where('permission','Approved')->orderBy('id', "asc")->skip(10)->take(10)->get();


        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();

        $categories=Manage::where('module_id', 1)->get();
        
        $size=Manage::where('module_id', 6)->get();
        $color=Manage::where('module_id', 4)->get();
        $brand=Manage::where('module_id', 5)->get();

        return view('new_arivals',compact("all_products","related_products","Categories",'categories','sub_categories','size','color','brand','typelist','brand','top_rated_products'));
        
    }

    public function searchproducts(Request $request)
    {
        $all_products = "";
        $all_productsub = "";
        $all_producttype = "";
        $all_prosub = "0";
        $all_protype = "0";
        $deals = "";
        $zbeauty = "";
        $all= "0";
        $search = "";
        $voucher = "";
       // $all_products = Products::where('is_deleted', 0)->where('permission','Approved')->get();
        if (isset($_REQUEST['search'])) {
            $search = Products::where('is_deleted', 0)->where('permission','Approved')->where('title', 'Like', '%' . $_REQUEST['search'] . '%')->get();
            if($search->isEmpty()){
                $search = "";
                $all= 1;
            }
            else{
                $search = $_REQUEST['search'];
            }
        }
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        $top_rated_products = Products::where('is_deleted', 0)->orderBy('id', "asc")->skip(10)->take(10)->get();
        return view('products',compact("deals","zbeauty","all_products","all_productsub","all_protype","all_prosub","all_producttype","Categories","all","search","voucher"));
        
    }
    public function ShopByCategory($value)
        {
            $men = "";
            $women = "";
            $kid = "";
            if(!empty($value) && $value == 'bags')
            {
                $men = Products::where('sub_category_id', 506)->where('permission','Approved')->where('is_deleted', 0)->get();
                $women = Products::where('sub_category_id', 499)->where('permission','Approved')->where('is_deleted', 0)->get();
            }
            elseif (!empty($value) && $value == 'shoes') 
            {
                $men = Products::where('sub_category_id', 508)->where('permission','Approved')->where('is_deleted', 0)->get();
                $women = Products::where('sub_category_id', 500)->where('permission','Approved')->where('is_deleted', 0)->get();
                $kid = Products::where('sub_category_id', 636)->where('permission','Approved')->where('is_deleted', 0)->get();
            }
            elseif (!empty($value) && $value == 'lifestyle') 
            {
                $men = Products::where('sub_category_id', 516)->where('permission','Approved')->where('is_deleted', 0)->get();
                
            }
            elseif (!empty($value) && $value == 'kids') 
            {
                $kid = Products::where('sub_category_id', 510)->where('permission','Approved')->where('is_deleted', 0)->get();
            }
            elseif (!empty($value) && $value == 'watches') 
            {
                $men = Products::where('sub_category_id', 509)->where('permission','Approved')->where('is_deleted', 0)->get();
                $women = Products::where('sub_category_id', 502)->where('permission','Approved')->where('is_deleted', 0)->get();
            }
            elseif (!empty($value) && $value == 'women') 
            {
                $women = Products::where('category', 1)->where('permission','Approved')->where('is_deleted', 0)->get();
            }
            return view('shopbycategory', compact("men","women","kid"))->with('value',$value);
        }  
        public function categoryForMobile($id)
        {
            $all_products = Products::where('is_deleted', 0)->where('permission','Approved');
            $all_products= Products::where('is_deleted', 0)->where('permission','Approved')->where('category', decrypt($id))->get();
            $related_products = Products::where('is_deleted', 0)->where('permission','Approved')->orderBy('id', "desc")->limit(4)->get();

        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        $top_rated_products = Products::where('is_deleted', 0)->where('permission','Approved')->orderBy('id', "asc")->skip(10)->take(10)->get();

        $categories=Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        
        $size=Manage::where('module_id', 6)->get();
        $color=Manage::where('module_id', 4)->get();
        $brand=Manage::where('module_id', 5)->get();

        return view('products',compact("all_products","related_products","Categories",'categories','size','color','brand','top_rated_products'));
        }  
        public function voucherproduct($id){
            $all_products = "";
        $all_productsub = "";
        $all_producttype = "";
        $all_prosub = "0";
        $all_protype = "0";
        $deals = "";
        $zbeauty = "";
        $all= "0";
        $search = "";
        $voucher = "";
        $daily_deal = "";
        $voucherss = vouchers::where('status','Active')->where('id',$id)->get();
        if(!empty($voucherss)){
        $voucher = $id;
    }

        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        return view('products',compact("deals","zbeauty","all_products","all_productsub","all_protype","all_prosub","all_producttype","Categories","all","search","voucher","daily_deal")); 

        }
    public function products(Request $request)
    {
        $all_products = "";
        $all_productsub = "";
        $all_producttype = "";
        $all_prosub = "0";
        $all_protype = "0";
        $deals = "";
        $zbeauty = "";
        $all= "0";
        $search = "";
        $voucher = "";
        $daily_deal = "";
        if(isset($request->deals)){
            $deals = Products::where('is_deleted', 0)->where('price','<=','500')->where('permission','Approved')->get();
            $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        }
        else{
        if (isset($request->catid)) {
            $all_products = Products::where('is_deleted', 0)->where('permission','Approved')->where('category', decrypt($request->catid))->get();
            $all_products = $all_products->where('category', decrypt($request->catid));
            if($all_products->isEmpty()){
                $all_products = "";
                $all= 1;
            }
            $Categories = Manage::where('parent_id', decrypt($request->catid))->where('is_deleted', 0)->get();
        }
         if (isset($request->subid)) {
            $all_productsub = $all_products->where('sub_category_id', decrypt($request->subid));
            if($all_productsub->isEmpty()){
                $all_prosub = 1;
            }
            $Categories = Manage::where('parent_id', decrypt($request->subid))->where('is_deleted', 0)->get();
        }
         if (isset($request->typeid)) {
            $all_producttype = $all_productsub->where('type_id', decrypt($request->typeid));
            
            if($all_producttype->isEmpty()){
                $all_protype = 1;
            }
            $Categories = Manage::where('parent_id', decrypt($request->typeid))->where('is_deleted', 0)->get();
        }
        if($all_products == ""){
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        }
    }
        return view('products',compact("deals","zbeauty","all_products","all_productsub","all_protype","all_prosub","all_producttype","Categories","all","search","voucher","daily_deal"));  
    }
    public function zbeauty(){
        $all_products = "";
        $all_productsub = "";
        $all_producttype = "";
        $all_prosub = "0";
        $all_protype = "0";
        $deals = "";
        $all= "0";
        $search = "";
        $voucher = "";
        $daily_deal = "";
        $zbeauty = Products::where('added_by', 132)->where('category','323')->where('permission','Approved')->where('is_deleted', 0)->get();
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        return view('products',compact("deals","zbeauty","all_products","all_productsub","all_protype","all_prosub","all_producttype","Categories","all","search","voucher","daily_deal")); 
    }
    public function Daily_Deals(){
        $all_products = "";
        $all_productsub = "";
        $all_producttype = "";
        $all_prosub = "0";
        $all_protype = "0";
        $deals = "";
        $all= "0";
        $search = "";
        $voucher = "";
        $daily_deal = "";
        $zbeauty = "";
        $daily_deal = Products::where('is_deleted', 0)->latest('added_on')->where('price','<=', '1000')->where('permission','Approved')->get();
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        return view('products',compact("deals","zbeauty","all_products","all_productsub","all_protype","all_prosub","all_producttype","Categories","all","search","voucher","daily_deal")); 
    }

    public function productdetail(Request $request)
    {
        $productdetail = Products::where('is_deleted', 0)->where('permission','Approved')->where('slug',$request->id)->first();

        if(!empty($productdetail)){
        $vendor_info= User::where('id', $productdetail->added_by)->first();
        //========check user cookies for 1 day ip session==============//

        setcookie('user_ip_address', $_SERVER['REMOTE_ADDR'], time() + (86400 * 30), "/");
        if(empty($_COOKIE['user_ip_address'])){
            $vendor_info->visitor_count = $vendor_info->visitor_count + 1;
            $vendor_info->save();
        }
        }
        //========check user cookies for 1 day ip session==============//
        if(empty($productdetail)){$productdetail = Products::where('is_deleted', 0)->where('permission','pending')->where('slug',$request->id)->first();}
        if(empty($productdetail)){$productdetail = Products::where('is_deleted', 1)->where('permission','Approved')->where('slug',$request->id)->first();}
        if(empty($productdetail)){$productdetail = Products::where('is_deleted', 1)->where('permission','pending')->where('slug',$request->id)->first();}
        $storeDetail = storeDetail::where('owner_id',$productdetail->added_by)->first();
        $ProductColors=ProductAttributes::where('product_id', $productdetail->id)->where('type', 'color')->get();
        $Productprice=product_color::where('product_id', $productdetail->id)->get();
        $productattribute = product_attribute::where('product_id', $productdetail->id)->first();
        $reviews= Review::where('product_id', $productdetail->id)->get();
        $product_gallery = \DB::table('product_gallery')->where('product_id',$productdetail->id)->get();
        $ProductSize=ProductAttributes::where('product_id', $productdetail->id)->where('type', 'size')->get();
        $SellerRecommendation=Products::where('category', $productdetail->category)->where('permission','Approved')->orderBy('id', 'desc')->skip(0)->take(4)->where('is_deleted', 0)->get();
        $avg_store_reviews =Review::where('vendor_id', $productdetail->added_by)->avg('star_rating');
        $followers = FollowedStore::distinct()->select('followed_by')->where('vendor_user_id', $productdetail->added_by)->groupBy('followed_by')->get();
        return view('productdetail',compact("productdetail","storeDetail","ProductColors","ProductSize","reviews","product_gallery","Productprice","SellerRecommendation","avg_store_reviews","followers","productattribute"));
    }

    public function contact()
    {
        $gnsettings= \DB::table('generalsettings')->where('id',1)->first();
        return view('contact',compact('gnsettings'));
        
    }
  public function customercare()
    {
        return view('customercare');
    }

    public function savecontact()
    {
           if (isset($_POST['savecontact'])) {
               extract($_POST);
               $contact= new Contacts;
               $contact->first_name= $first_name;
               $contact->last_name= $last_name;
               $contact->email= $email;
               $contact->subject= $subject;
               $contact->message= $message;
               if ($contact->save()) {
                   return redirect('/contact')->with('status','Thank you for getting in touch! 

We appreciate you contacting us. One of our colleagues will get back in touch with you soon!

Have a great day!');
               }

           }
    }
    public function blogs()
    {

        $popular_news =  \DB::table('blogs')->orderBy('id','desc')->get();
        $latest_news =  \DB::table('blogs')->orderBy('id','asc')->get();
        $most_latest= Blog::orderBy('id','desc')->limit(1)->first();
        return view('blog',compact('popular_news','latest_news','most_latest'));
        
    }
     public function blogdetail($id)
    { 
        $GetData= \DB::table('blogs')->where('id', $id)->first();
      
        return view('blog_detail',compact('GetData'));
        
    }

    public function loadsubtypes()
    {
        $Categories = Manage::where('parent_id', $_REQUEST['value'])->where('is_deleted', 0)->get();?>
        <option value="">Select</option>
        <?php
        if(!empty($Categories)){
            foreach($Categories as $c){?>
                <option value="<?= $c->id; ?>"><?= $c->name; ?></option>
            <?php }
        }

        
    }

    public function loadprovincebasecities()
    {
        $cities = Cities::where('province_id', $_REQUEST['value'])->get();?>
        <option value="">Select</option>
        <?php
        if(!empty($cities)){
            foreach($cities as $c){?>
                <option value="<?= $c->name; ?>"><?= $c->name; ?></option>
            <?php }
        }

        
    }

    public function loadordertracking()
    {
        $order_detail = Orders::where('order_no', $_REQUEST['value'])->first();?>
            <div class="clearfix section-white p-sm">

                     <div class="col-md-12">
                         <div class="order-summary clearfix">
                             <div class="section-title">
                                 <h3 class="title">Packet Tracking</h3>
                             </div>

                             <div class="row">

                                 <div class="col-sm-4 col-md-12 side-content">
                                     <div class="bs-vertical-wizard">
                                        <ul>
                                             <li class="complete">
                                                 <a href="#">Placed <i class="ico fa fa-check ico-green"></i>
                                                     <span class="desc"><?php echo $order_detail->address; ?></span>
                                                     <span class="desc"><?php  date("d M, Y h:i a",strtotime($order_detail->added_on)); ?></span>
                                                 </a>
                                             </li>

                                             <li class="<?php if($order_detail->is_processed == 1){ echo "complete"; }else{ echo "prev-step";}?>">
                                                 <a href="#">Processed <?php if($order_detail->is_processed == 1){ echo "<i class='ico fa fa-check ico-green'></i>"; }?>
                                                     <span class="desc"><?php echo $order_detail->processed_comments; ?></span>
                                                     <span class="desc">
                                                      <?php if($order_detail->is_processed == 1){
                                                                echo date("d M, Y h:i a",strtotime($order_detail->processed_at));
                                                            }
                                                      ?>
                                                     </span>
                                                 </a>
                                             </li>
                                             <li class="<?php if($order_detail->is_shipped == 1){ echo "complete"; }else{ echo "prev-step";}?>">
                                                 <a href="#">Shipped <?php if($order_detail->is_shipped == 1){ echo "<i class='ico fa fa-check ico-green'></i>"; }?>
                                                     <span class="desc"><?php echo $order_detail->shipped_comments; ?></span>
                                                     <span class="desc">
                                                      <?php if($order_detail->is_shipped == 1){
                                                                echo date("d M, Y h:i a",strtotime($order_detail->shipped_at));
                                                            }
                                                      ?>
                                                     </span>
                                                 </a>
                                             </li>
                                             <li class="<?php if($order_detail->is_delivered == 1){ echo "complete"; }else{ echo "prev-step";}?>">
                                                 <a href="#">Dilvered <?php if($order_detail->is_delivered == 1){ echo "<i class='ico fa fa-check ico-green'></i>"; }?>
                                                     <span class="desc"><?php echo $order_detail->delivered_comments; ?></span>
                                                     <span class="desc">
                                                      <?php if($order_detail->is_delivered == 1){
                                                                echo date("d M, Y h:i a",strtotime($order_detail->delivered_at));
                                                            }
                                                      ?>
                                                     </span>
                                                 </a>
                                             </li>
                                           
                         
                             </ul>
                         </div>
                     </div>


                 </div>
                         </div>

                     </div>
                 </div>
                 
        <?php

    }
public function customercare_accounts(Request $request)
    {
     $Userid= Auth::id();
            $account = new Customercare_accounts;
            $account->user_id = $Userid;
            $account->sub_issue = $request->sub_issue;
            $account->message =$request->message;
  if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $account->img = $filename;
              }
  $account->fullname = $request->name;
  $account->email = $request->email;
       $account->phoneno = $request->phoneno;
       $account->contact_on = $request->radio;
    
            $account->save();
   return redirect()->back()->with('success', 'Your complain sent successfully!');
}
  
  
  public function customercare_shipping(Request $request)
    {
     $Userid= Auth::id();
            $account = new Customercare_shipping;
            $account->user_id = $Userid;
            $account->issue = $request->issue;
            $account->message =$request->message;
  if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $account->img = $filename;
              }
     $account->tracking_id = $request->trackingid;
  $account->name = $request->name;
  $account->email = $request->email;
       $account->phoneno = $request->phoneno;
       $account->contact_on = $request->radio;
    
            $account->save();
   return redirect()->back()->with('success', 'Your complain sent successfully!');
}
public function customercare_product(Request $request)
    {
     $Userid= Auth::id();
            $account = new Customercare_prouct;
            $account->user_id = $Userid;
            $account->issue = $request->issue;
            $account->message =$request->message;
  if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $account->img = $filename;
              }
     $account->order_id = $request->order_id;
  $account->name = $request->name;
  $account->email = $request->email;
       $account->phone_no = $request->phoneno;
       $account->contact_on = $request->radio;
    
            $account->save();
   return redirect()->back()->with('success', 'Your complain sent successfully!');
}
  public function customercare_payment_checkout(Request $request)
    {
     $Userid= Auth::id();
            $account = new Customercare_payment;
            $account->user_id = $Userid;
            $account->issue = $request->issue;
            $account->message =$request->message;
  if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $account->img = $filename;
              }
     $account->order_id = $request->order_id;
  $account->name = $request->name;
  $account->email = $request->email;
       $account->phone_no = $request->phoneno;
       $account->contact_on = $request->radio;
    
            $account->save();
   return redirect()->back()->with('success', 'Your complain sent successfully!');
}
  public function customercare_cupons(Request $request)
    {
     $Userid= Auth::id();
            $account = new Customercare_cupons;
            $account->user_id = $Userid;
            $account->issue = $request->issue;
            $account->message =$request->message;
  if ($request->hasfile('img')) {
                $file = $request->file('img');
                $extension = $file->getclientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $account->img = $filename;
              }
  $account->name = $request->name;
  $account->email = $request->email;
       $account->phone_no = $request->phoneno;
       $account->contact_on = $request->radio;
    
            $account->save();
   return redirect()->back()->with('success', 'Your complain sent successfully!');
}
 public function trackingorder(Request $req)
    {
        $id = $req->trackingno;
        $curl_handle = curl_init();
        // For Direct Link Access use below commented link
        //curl_setopt($curl_handle, CURLOPT_URL, 'http://new.leopardscod.com/webservice/trackBookedPacket/?api_key=XXXX&api_password=XXXX&track_numbers=XXXXXXXX');  // For Get Mother/Direct Link
        curl_setopt($curl_handle, CURLOPT_URL, 'http://new.leopardscod.com/webservice/trackBookedPacket/format/json/');  // Write here Test or Production Link
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
            'api_key' => 'ABF72076098C098CCBFDF3EB54D1D821',
            'api_password' => 'ZMALL1234',
            'track_numbers' => $id                    // E.g. 'XXYYYYYYYY' OR 'XXYYYYYYYY,XXYYYYYYYY,XXYYYYYY' 10 Digits each number
        ));

        $buffer = curl_exec($curl_handle);
        $buffer = json_decode($buffer, true);
        curl_close($curl_handle);
        return view('trackingDetails',compact('buffer'));
    }
    public function productforfacebook()
    {
        $products = Products::where('is_deleted', 0)->where('permission','Approved')->get();
        return view('all_product_for_facebook',compact('products'));
    }
    public function getsubcategory($id){
        echo json_encode(Manage::where('module_id', 2)->where('parent_id', $id)->where('is_deleted', 0)->orderBy('name')->get());
    }
    public function getsubtype($id){
        echo json_encode(Manage::where('module_id', 3)->where('parent_id', $id)->where('is_deleted', 0)->orderBy('name')->get());
    }
}