<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Products;
use App\User;
use App\Manage;
use App\ProductGallery;
use App\ProductAttributes;
use App\FollowedStore;
use App\product_attribute;
use App\vouchers;
use App\product_color;
use App\storeDetail;
use DB;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(){
        $Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();
        return view('test',compact('Categories'));
    }
    public function loading_product(){
        $error = "0";
        if($_REQUEST['allproduct'] == "1" && $_REQUEST['prosub'] == "1" && $_REQUEST['protype'] == "1"){
            $error = "1";
        }
        elseif ($_REQUEST['allproduct'] == "deals" && $_REQUEST['prosub'] == "deals" && $_REQUEST['protype'] == "deals") {
            $all_products = Products::where('permission','Approved')->where('is_deleted', 0)->where('price','<=','500')->get();
        }
        elseif ($_REQUEST['allproduct'] == "zbeauty" && $_REQUEST['prosub'] == "zbeauty" && $_REQUEST['protype'] == "zbeauty") {
            $all_products = Products::where('added_by', 132)->where('category','323')->where('permission','Approved')->where('is_deleted', 0)->latest('added_on')->get();
        }
        elseif ($_REQUEST['allproduct'] == "daily_deal" && $_REQUEST['prosub'] == "daily_deal" && $_REQUEST['protype'] == "daily_deal") {
            $all_products = Products::where('is_deleted', 0)->latest('added_on')->where('price','<=', '1000')->where('permission','Approved')->get();
        }
        elseif($_REQUEST['prosub'] == "search" && $_REQUEST['protype'] == "search"){
            $all_products = Products::where('is_deleted', 0)->where('permission','Approved')->where('title', 'Like', '%' . $_REQUEST['allproduct'] . '%')->get();
        }
        elseif($_REQUEST['prosub'] == "voucher" && $_REQUEST['protype'] == "voucher"){
            $v = vouchers::where('status','Active')->where('id',$_REQUEST['allproduct'])->first();
            $vv = json_decode($v->product,true);
            $all_products = array();
            foreach($vv as $vp){
               $data =  Products::where('id',$vp)->first();
                array_push($all_products,$data);
            }
        }
        else{
        if(!empty($_REQUEST['allproduct'])){
            $all_products = Products::where('category',$_REQUEST['allproduct'])->where('is_deleted', 0)->where('permission','Approved')->latest('added_on')->get();
            if (!empty($_REQUEST['prosub'])) {$all_products =  Products::where('sub_category_id',$_REQUEST['prosub'])->where('is_deleted', 0)->where('permission','Approved')->latest('added_on')->get();}
            if (!empty($_REQUEST['protype'])){$all_products =  Products::where('type_id',$_REQUEST['protype'])->where('is_deleted', 0)->where('permission','Approved')->latest('added_on')->get();}
        }
        else{
            if($_REQUEST['min_price'] != "" && $_REQUEST['max_price'] != ""){
            $all_products = Products::where('is_deleted', 0)->where('permission','Approved')->where('price','>=',$_REQUEST['min_price'])->where('price','<=',$_REQUEST['max_price'])->latest('added_on')->get();
            }
            else{
            $all_products = Products::where('is_deleted', 0)->where('permission','Approved')->latest('added_on')->get();}
        }
    }
  $all_pro = '';
  if (!empty($_REQUEST['category']))
    { 
        $brand_filter = implode("','", $_REQUEST['category']);
        $all_pro .= $all_products->where('category',$brand_filter);
    }
  $output = '';
  if(!empty($all_pro)){
    $all_pro = json_decode($all_pro, true);
foreach($all_pro as $p){
    $discount_per = round((($p['price'] - $p['discount_price'])/($p['price'])) * 100) ."% OFF";
    $dis_price =  $p['discount_price'];
    $dis_price = "RS ". $dis_price;   
    $store = storeDetail::where("owner_id",$p['added_by'])->first(); 
    $output .= '
          <div class="pro-card col-sm-3">
            <a href="/product-detail/'.$p['slug'].'">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="/frontend/storage/uploads/'.$p['images'].'">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                       '.$p['title'].'
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                        '.($p['promotion_discount']!= "" ? $p['price'] - (($p['price'] * $p['promotion_discount'])/ 100)
                        .'</div>
                        <div class="amount_discount">
                          <div class="amount_old">RS '.$p['price'] .'</div>
                          <div class="amount_perc">
                            .'.$p['promotion_discount'].'% Off
                          </div>
                        </div>': ($p['discount_price']!= "" ? $dis_price : $p['price'])  
                        .'</div>'.
                        ($p['discount_price']!= "" ? '<div class="amount_discount"><div class="amount_old"> RS'.$p['price']. '</div>
                          <div class="amount_perc">' .$discount_per. '</div>
                        </div>': "") ).'
                         
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <small>Ships from </small> '. ($store!= "" ? '<a href=/store/'.$store->owner_id.'>'.$store->store_name.'</a>' : '') . '
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(10)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div> ';
  }
  }
  else{
    if($error == 0){
    if(!empty($all_products)){
  foreach($all_products as $p){ 
    $discount_per = round((($p->price - $p->discount_price)/($p->price) )* 100) ."% OFF";
    $dis_price =   $p->discount_price;
    $dis_price = "RS ". $dis_price;
    $store = storeDetail::where("owner_id",$p->added_by)->first(); 
    $output .= '
          <div class="pro-card col-sm-3">
            <a href="/product-detail/'.$p->slug.'">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="/frontend/storage/uploads/'.$p->images.'">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                       '.$p->title.'
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                        '.($p->promotion_discount!= "" ? $p->price - (($p->price * $p->promotion_discount)/ 100)
                        .'</div>
                        <div class="amount_discount">
                          <div class="amount_old">RS '.$p->price .'</div>
                          <div class="amount_perc">
                            .'.$p->promotion_discount.'% Off
                          </div>
                        </div>': ($p->discount_price!= "" ? $dis_price : $p->price)  
                        .'</div>'.
                        ($p->discount_price!= "" ? '<div class="amount_discount"><div class="amount_old"> RS'.$p->price. '</div>
                          <div class="amount_perc">' .$discount_per. '</div>
                        </div>': "") ).'
                         
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <small>Ships from </small> '. ($store!= "" ? '<a href=/store/'.$store->owner_id.'>'.$store->store_name.'</a>' : '') . '
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(10)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div> ';
  } }}
  else{
    $output = "<h3>No Data Found</h3>";
  }
}
    echo json_encode($output);
    }
    public function new_product(Request $req)
    {
        $shoe_type = "";
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
        if (!empty($req->sessionresult211)) {
                $typename = $req->sessionresult211;
                $cateid = $req->cateid211;
                $scateid = $req->scateid211;
                $sctcateid = $req->sctcateid211;
                if ($req->uk) {
                    $shoe_type = $req->uk;
                }
                else{
                    $shoe_type =$req->us;
                }
        }
        return view('dashboard.product.new-product')->with('typename',$typename)->with('cateid',$cateid)->with('scateid',$scateid)->with('sctcateid',$sctcateid)->with('shoe_type',$shoe_type);
    }
    public function new()
    {
        echo "hello their";
    }

    // ---------------------------------------------------------------

    public function store(Request $request)
    {
         if(isset($_POST['saveproduct']))
        {
            $validateData= $request->validate([
                'title'   => 'required',
                'description'   => 'required',
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
            if(!empty($discount_price)){
                $product->discount_price = $discount_price;
            }
            $product->quantity = $stock;
            $product->product_sku = 'Z'.uniqid();
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
            $product->added_by= Auth::id();
            $product->save();
            if(!empty($color1)){
                $save_color1 = new product_color;
                $save_color1->product_id = $product->id;
                if(!empty($color_name1)){
                    $save_color1->color = $color_name1;
                }
                else{
                $save_color1->color = $color1;}
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
            if(!empty($utensil_type)){
                $save->utensil_type = $utensil_type;
            }
            if(!empty($capacity)){
                $save->capacity = $capacity;
            }
            if(!empty($dish_type)){
                $save->dish_type = $dish_type;
            }
            if(!empty($cookware_shape)){
                $save->cookware_shape = $cookware_shape;
            }
            if(!empty($baking_tray_type)){
                $save->baking_tray_type = $baking_tray_type;
            }
            if(!empty($coffee_maker_type)){
                $save->coffee_maker_type = $coffee_maker_type;
            }
            if(!empty($coffee_accessories_type)){
                $save->coffee_accessories_type = $coffee_accessories_type;
            }
            if(!empty($tea_accessories_type)){
                $save->tea_accessories_type = $tea_accessories_type;
            }
            if(!empty($cookware_length)){
                $save->cookware_length = $cookware_length;
            }
            if(!empty($roasting_tray)){
                $save->roasting_tray = $roasting_tray;
            }
            if(!empty($pan_type)){
                $save->pan_type = $pan_type;
            }
            if(!empty($cultery_type)){
                $save->cultery_type = $cultery_type;
            }
            if(!empty($dinner_plate_type)){
                $save->dinner_plate_type = $dinner_plate_type;
            }
            if(!empty($dinnerware_shape)){
                $save->dinnerware_shape = $dinnerware_shape;
            }
            if(!empty($dinnerware_category)){
                $save->dinnerware_category = $dinnerware_category;
            }
            if(!empty($jug_type)){
                $save->jug_type = $jug_type;
            }
            if(!empty($mug_type)){
                $save->mug_type = $mug_type;
            }
            if(!empty($servewave_type)){
                $save->servewave_type = $servewave_type;
            }
            if(!empty($linen_fabric)){
                $save->linen_fabric = $linen_fabric;
            }
            if(!empty($pot_rack_type)){
                $save->pot_rack_type = $pot_rack_type;
            }
            if(!empty($measuring_type)){
                $save->measuring_type = $measuring_type;
            }
            if(!empty($stainer_type)){
                $save->stainer_type = $stainer_type;
            }
            if(!empty($fruit_tool_type)){
                $save->fruit_tool_type = $fruit_tool_type;
            }
            if(!empty($cheese_tool_type)){
                $save->cheese_tool_type = $cheese_tool_type;
            }
            if(!empty($oil_tool_type)){
                $save->oil_tool_type = $oil_tool_type;
            }
            $save->save();
            if ($product->save()) 
            { 
                $product->slug = str_replace(array( '/',' ', '"',',' , ';','’','‘', '<', '>','#','@','%','\''  ),"-",$product->title)."-".$product->id;
                $product->save();
                return redirect('/Vendor/approved-products')->with('status', 'New product added successfully');
            }else{
               
            } 
         }

        if(isset($_POST['editproduct']))
        { 
           $validateData= $request->validate([
                'title'   => 'required',
                'description'   => 'required',
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
            if(!empty($discount_price)){
                $product->discount_price = $discount_price;
            }
            $product->quantity = $stock;
            $product->product_sku = 'Z'.uniqid();
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
            $product->added_by= Auth::id();
            $product->save();
               if(!empty($color1)){
                $save_color1 = new product_color;
                $save_color1->product_id = $product->id;
                if(!empty($color_name1)){
                    $save_color1->color = $color_name1;
                }
                else{
                $save_color1->color = $color1;}
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
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
                    $destinationPath = 'frontend/storage/uploads/';
                    $time   = date("ymdhis");
                    $filename = $request->File('img_ten')->getClientOriginalName();
                    $new_name = $time.$filename;
                    $request->File('img_ten')->move($destinationPath, $new_name);
                    $fullPath =  $new_name;
                    $product->video = $fullPath;
                    $product->save();
                    }
                  
            $product_attribute = product_attribute::where('product_id',$rowid)->first();
            if(!empty($product_attribute)){
                $save = $product_attribute;
                $save->product_id = $product->id;
            }
            else{
                $save = new product_attribute;
                $save->product_id = $product->id;
            }
            
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
            if(!empty($utensil_type)){
                $save->utensil_type = $utensil_type;
            }
            if(!empty($capacity)){
                $save->capacity = $capacity;
            }
            if(!empty($dish_type)){
                $save->dish_type = $dish_type;
            }
            if(!empty($cookware_shape)){
                $save->cookware_shape = $cookware_shape;
            }
            if(!empty($baking_tray_type)){
                $save->baking_tray_type = $baking_tray_type;
            }
            if(!empty($coffee_maker_type)){
                $save->coffee_maker_type = $coffee_maker_type;
            }
            if(!empty($coffee_accessories_type)){
                $save->coffee_accessories_type = $coffee_accessories_type;
            }
            if(!empty($tea_accessories_type)){
                $save->tea_accessories_type = $tea_accessories_type;
            }
            if(!empty($cookware_length)){
                $save->cookware_length = $cookware_length;
            }
            if(!empty($roasting_tray)){
                $save->roasting_tray = $roasting_tray;
            }
            if(!empty($pan_type)){
                $save->pan_type = $pan_type;
            }
            if(!empty($cultery_type)){
                $save->cultery_type = $cultery_type;
            }
            if(!empty($dinner_plate_type)){
                $save->dinner_plate_type = $dinner_plate_type;
            }
            if(!empty($dinnerware_shape)){
                $save->dinnerware_shape = $dinnerware_shape;
            }
            if(!empty($dinnerware_category)){
                $save->dinnerware_category = $dinnerware_category;
            }
            if(!empty($jug_type)){
                $save->jug_type = $jug_type;
            }
            if(!empty($mug_type)){
                $save->mug_type = $mug_type;
            }
            if(!empty($servewave_type)){
                $save->servewave_type = $servewave_type;
            }
            if(!empty($linen_fabric)){
                $save->linen_fabric = $linen_fabric;
            }
            if(!empty($pot_rack_type)){
                $save->pot_rack_type = $pot_rack_type;
            }
            if(!empty($measuring_type)){
                $save->measuring_type = $measuring_type;
            }
            if(!empty($stainer_type)){
                $save->stainer_type = $stainer_type;
            }
            if(!empty($fruit_tool_type)){
                $save->fruit_tool_type = $fruit_tool_type;
            }
            if(!empty($cheese_tool_type)){
                $save->cheese_tool_type = $cheese_tool_type;
            }
            if(!empty($oil_tool_type)){
                $save->oil_tool_type = $oil_tool_type;
            }
            $save->save();
            if ($product->save()) 
            { 
                $product->slug = str_replace(array('/',' ', '"',',' , ';','’','‘', '<', '>','#','@','%','\'' ),"-",$product->title)."-".$product->id;
                $product->save();
                return redirect('/Vendor/approved-products')->with('status', 'product update successfully');
            }else{
               
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Products::where('id', $id)->first();
        $pro_attri = product_attribute::where('product_id',$product->id)->first();
        $product_color = product_color::where('product_id',$product->id)->get();
        $typename= Manage::where('id',$product->type_id)->where('is_deleted',0)->first();
        $product_gallery = ProductGallery::where('product_id', $product->id)->get();
        return view('dashboard.product.edit',compact('typename','product','pro_attri','product_gallery','product_color'));
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
        $product=Products::where('id', $id)->first();
        $product->is_deleted = 1;
        if($product->save())
        {
            return redirect()->back()->with('status','Product deleted successfully');
        }
    }
}
