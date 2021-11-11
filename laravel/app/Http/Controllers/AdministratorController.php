<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Properties;
use App\campaign;
use App\Userfundshistory;
use App\Payments;
use App\Products;
use App\OrderProducts;
use App\Seller;
use App\services;
use App\storeDetail;
use App\Cities;
use App\financial_Details_store;
use App\Manage;
use App\Orders;
use App\User;
use App\flayer_order;
use App\News;
use App\Review;
use App\Newsletter;
use App\Shippment;

class AdministratorController extends Controller
{
    // 
    public function index()
    {
        return view('admin.login');
    }
    public function config($id)
    {
        $GetData =  \DB::table('modules')->where('id', $id)->first();
        $GetDatas =  \DB::table('manage')->where('module_id', $id)->where('is_deleted', 0)->get();
        return view('admin.config.index',array('GetData'=>$GetData,'GetDatas'=>$GetDatas));
    }
    public function attributies($id)
    {
        $GetDatas =  \DB::table('manage')->where('module_id', 3)->where('is_deleted', 0)->get();
        //$attribute =  \DB::table('manage')->where('attributies_id', $id)->where('is_deleted', 0)->get();
        return view('admin.config.attribute',compact('GetDatas'));
    }
    public function add($id)
    {
        $Module_id =  \DB::table('modules')->where('id', $id)->first();
        return view('admin.config.add',array('Module_id'=>$Module_id));
    }
    public function add_attribude($id)
    {
        $category =  \DB::table('manage')->where('module_id', 1)->where('is_deleted', 0)->get();
        $sub_category =  \DB::table('manage')->where('module_id', 2)->where('is_deleted', 0)->get();
        $sub_category_type =  \DB::table('manage')->where('module_id', 3)->where('is_deleted', 0)->get();
        return view('admin.config.add_attribute',compact('category','sub_category','sub_category_type'));
        
    }
    public function getcategory($id)
    {
    return json_encode(Manage::where('parent_id', $id)->where('is_deleted', 0)->get());
    }
    public function gettype($id)
    {
    return json_encode(Manage::where('parent_id', $id)->where('is_deleted', 0)->get());
    }



    public function  news_letter()
    {
     $newsletter= Newsletter::all();
      return view('admin.website.newsletter',compact('newsletter'));
    }
    public function storeconfig(){

        if(isset($_POST['add'])){ //echo "<pre>"; print_r($_REQUEST); die;
             extract($_REQUEST);
              $added_on  = date("Y-m-d H:i:s");
              $Userid =  Auth::id();
               $file_path = storage_path('uploads/');
              if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    }
              if($rowid == 2 || $rowid==3){
                $add = \DB::table('manage')->insertGetId(
                     array(
                            
                            'name'     =>  $name, 
                            'module_id'     =>  $rowid, 
                            'image'     =>  $mainimage, 
                            'parent_id'     =>  $parent_id, 
                            'added_by'     =>  $Userid, 
                            'added_on'     =>  $added_on, 
                            'meta_title' => $meta_title,
                            'meta_description' => $meta_des,
                            'meta_keyword' => $meta_key,
                                                 
                     )
                );
              }else{
                $add = \DB::table('manage')->insertGetId(
                     array(
                            
                            'name'     =>  $name, 
                            'module_id'     =>  $rowid, 
                            'image'     =>  $mainimage, 
                            'added_by'     =>  $Userid, 
                            'added_on'     =>  $added_on, 
                            'meta_title' => $meta_title,
                            'meta_description' => $meta_des,
                            'meta_keyword' => $meta_key,
                            'slug' => $slug,

                           
                     )
                );
              }
                
                if(!empty($add)){
                    return redirect('admin/config/'.$rowid)->with('status', 'New record added Successfully!');
                }
        }
    }
//contact
    public function contact()
    {
      $contact= \DB::table('contacts')->get();
      return view('admin.contact.all',compact('contact'));
    }
//shippment
    public function shippment()
    {
      $shippment = \DB::table('order_shippment')->get();
      return view('admin.shippment.all',compact('shippment'));
    }

     public function add_shippment()
    {
      return view('admin.shippment.add');
    }
     public function save_shippment()
    {
      if (isset($_POST['addshippment'])) 
      {
        extract($_POST);
        $shippment = new Shippment();
        $shippment->amount = $amount;
        
        if ($shippment->save()) {
          
          if ($shippment->amount >= 2000) {
            $shippment->shippment = 'Free';
          }
          else
          {
            $shippment->shippment = $shippment->amount;
          }
          $shippment->save();
          return redirect('admin/shippment/all');
        }
         
      }
    }

//advertisement
    public function advertisement()
    {
        $GetData =  \DB::table('advertisement')->get();
        return view('admin.advertisement.index',array('GetData'=>$GetData));
    }
    public function addadvertisement()
    {
        if(isset($_POST['add'])){
             extract($_REQUEST);
             $GetData =  \DB::table('advertisement')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    }
                $add = \DB::table('advertisement')->insertGetId(
                     array(
                            'title'     =>    $title, 
                            'image'     =>   $mainimage, 
              
                            'button_title'    =>  $button_title,
                            'button_link'    =>   $button_link,
                            'section'    =>   $section,
                            'status'    =>   $status,
                            'added_by'   => Auth::id(),
                     )
                );
                if(!empty($add)){
                    return redirect('admin/advertisement/index')->with('status', 'New advertisement Added Successfully!');
                }
        }

        return view('admin.advertisement.addadvertisement');
    }
     public function editadvertisement($id)
    {
       
    $GetData =  \DB::table('advertisement')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
           // echo "1";die;
           //echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
           $update = \DB::table('advertisement')->where('id', $id)->update(
                       array(
                            'image'             =>   $mainimage, 
                             'button_title'    =>  $button_title,
                            'button_link'    =>   $button_link,
                            'section'    =>   $section,
                            'status'    =>   $status,   
                            'added_by'   => Auth::id(),
                     )
                          
                          // 'short_description'   =>  $short_description,
                               
                     );
            
             return redirect('admin/advertisement/index')->with('status', 'advertisement Updated Successfully!');
        }

     
        return view('admin/advertisement/updateadvertisement',array('GetData'=>$GetData));

    }
    public function deletadvertisement($id)
    {
        $GetData =  \DB::table('advertisement')->where('id', $id)->delete();
        return redirect('admin/advertisement/index')->with('status', 'advertisement Deleted Successfully!');
    }


      public function slider()
    {
        $GetData =  \DB::table('slider')->get();
        return view('admin.slider.index',array('GetData'=>$GetData));
    }
    public function addslider()
    {
        if(isset($_POST['add'])){
             extract($_REQUEST);
             $GetData =  \DB::table('slider')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    }
                $add = \DB::table('slider')->insertGetId(
                     array(
                            'image'     =>   $mainimage, 
                            'title'     =>    $title, 
                            
                            'description'     =>  $description, 
              
                            'button_name'    =>  $button_name,
                            'button_link'    =>   $button_link,
                     )
                );
                if(!empty($add)){
                    return redirect('admin/slider/index')->with('status', 'New slider Added Successfully!');
                }
        }

        return view('admin.slider.addslider');
    }
     public function editslider($id)
    {
       
    $GetData =  \DB::table('slider')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
           // echo "1";die;
           // echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
           $update = \DB::table('slider')->where('id', $id)->update(
                       array(
                            'image'             =>   $mainimage, 
                            'title'             =>   $title,
                            'description'       =>  $description, 
                            'button_name'       =>   $button_name,
                            'button_link'       =>   $button_link,  
                          // 'short_description'   =>  $short_description,
                               
                     ));
            
             return redirect('admin/slider/index')->with('status', 'slider Updated Successfully!');
        }

     
        return view('admin/slider/update',array('GetData'=>$GetData));

    }
    public function deletslider($id)
    {
        $GetData =  \DB::table('slider')->where('id', $id)->delete();
        return redirect('admin/slider/index')->with('status', 'slider Deleted Successfully!');
    }

    public function allproducts()
    {
      $Approved =  Products::where('is_deleted', 0)->where('permission', 'Approved')->get();
      return view('admin.products.all',compact('Approved'));
    }
    public function pendingproducts()
    {
      $Pending =  Products::where('is_deleted', 0)->where('permission', 'Pending')->get();
      return view('admin.products.all',compact('Pending'));
    }
    public function rejectedproducts()
    {
      $Rejected =  Products::where('is_deleted', 0)->where('permission', 'Rejected')->get();
      return view('admin.products.all',compact('Rejected'));
    }
    public function approve($id)
    {

      Products::where('id', $id)
                ->update([
                'permission' => 'Approved' ]);
      return redirect()->back()->with('message', 'Accepted Successfully! A notification is sent to the user');
    }
    public function reject($id,Request $req)
    {
      Products::where('id', $id)
                ->update([
                'permission' => 'Rejected',
                'reject_reason'=>$req->reason]);
      return redirect('/admin/products/pendingproducts')->with('message', 'Rejected! A notification is sent to the user');
    }
    public function product_page($slug)
    {
      $PData =  \DB::table('products')->where('slug',$slug)->first();  
      return view('admin.products.product',compact('PData'));
    }

     public function editconfig($id)
    {
       
    $GetData =  \DB::table('manage')->where('id', $id)->first();
    $GetDatass =  \DB::table('modules')->where('id', $GetData->module_id)->first();
        if(isset($_REQUEST['update'])){

           // echo "1";die;
            //echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
              $file_path = storage_path('uploads/');
              if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $old_image;
                    }
             if($GetData->module_id == 2 || $GetData->module_id == 3){
              $update = \DB::table('manage')->where('id', $id)->update(
                       array(
                            'name'     =>  $name, 
                            'image'     =>  $mainimage, 
                            'parent_id'     =>  $parent_id,
                            'slug' => $slug,
                            'meta_title' => $meta_title,
                            'meta_description' => $meta_des,
                            'meta_keyword' => $meta_key,
                     ));
            }else{
              $update = \DB::table('manage')->where('id', $id)->update(
                       array(
                            'name'     =>  $name, 
                            'image'     =>  $mainimage,
                            'slug' => $slug,
                            'meta_title' => $meta_title,
                            'meta_description' => $meta_des,
                            'meta_keyword' => $meta_key,
                     ));
            }

             return redirect('admin/config/'.$GetData->module_id)->with('status', 'Updated Successfully!');
        }

     
        return view('admin/config/update',array('GetData'=>$GetData,'GetDatass'=>$GetDatass));

    }
  
    public function deletconfig($id)
    {
        $GetDatass =  \DB::table('manage')->where('id', $id)->first();
         $update = \DB::table('manage')->where('id', $id)->update(
                       array(
                            'is_deleted'     =>  1, 
                           
                             
                     ));
        return redirect('admin/config/'.$GetDatass->module_id)->with('status', ' Deleted Successfully!');
    }
    public function dashboard()
    { 
         $Userid= Auth::id();
         $all_orders = Orders::where('status', 'placed')->orWhere('status', 'pending')->get();
         $all_users= User::where('role','user')->get();
         $all_vendors= User::where('role','vendor')->get();
         $all_products= \DB::table('products')->where('is_deleted', 0)->get();   
        return view('admin.index',compact('all_orders','all_users','all_vendors','all_products'));
    }

    public function allproperties()
    {
        $MyProperties =  \DB::table('properties')->get();
        return view('admin.realestate.all',array('MyProperties'=>$MyProperties));
    }
    public function approvedproperties()
    {
        $MyProperties =  \DB::table('properties')->get();
        return view('admin.realestate.approved',array('MyProperties'=>$MyProperties));
    }
    public function rejectedproperties()
    {
        $MyProperties =  \DB::table('properties')->get();
        return view('admin.realestate.disapproved',array('MyProperties'=>$MyProperties));
    }

    public function allagents()
    {
        $GetData =  \DB::table('account_details')->where('type', 'Agent')->get();
        return view('admin.users.agents',array('GetData'=>$GetData));
    } 
    public function ourteams()
    {
        $GetData =  \DB::table('our_team')->get();
        return view('admin.ourteam.index',array('GetData'=>$GetData));
    }
    public function ourteamsadd()
    {
        if(!empty($_POST['imagesrc'])){
            extract($_POST);
            $folderPath = storage_path('uploads/');
            $image_parts = explode(";base64,", $imagesrc);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $FileName =  date('ymdhis').".".$image_type;
            $file = $folderPath.$FileName;
            file_put_contents($file, $image_base64);
            $Save = \DB::table('contract')->where('id', $id)->update(array($field =>$FileName));
            if($Save){
                echo 1;
            }else{
                echo 2;
            }
        }
        if(isset($_POST['add'])){
             extract($_REQUEST);
             $GetData =  \DB::table('our_team')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
                $add = \DB::table('our_team')->insertGetId(
                     array(
                            'image'     =>   $mainimage, 
                            'title'     =>  $title, 
                            'description'     =>  $description, 
                             'facebook_link'     =>   $facebook_link, 
                              'gplus_link'     =>   $gplus_link, 
                              'twitter_link'     =>   $twitter_link, 
                              'instagram_link'     =>   $instagram_link,
                     )
                );
                if(!empty($add)){
                    return redirect('admin/ourteam/index')->with('status', 'New ourteam Added Successfully!');
                }
        }
       $GetData =  \DB::table('our_team')->get();
        return view('admin.ourteam.addourteam',array('GetData'=>$GetData));
    }
    public function edit($id)
    {
       
    $GetData =  \DB::table('our_team')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
          extract($_REQUEST);
          $GetData =  \DB::table('our_team')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
           $update = \DB::table('our_team')->where('id', $id)->update(
                       array(
                            'image'     =>   $mainimage, 
                            'title'     =>  $title, 
                            'description'     =>  $description, 
                            'facebook_link'     =>   $facebook_link, 
                        'gplus_link'     =>   $gplus_link, 
                        'twitter_link'     =>   $twitter_link, 
                        'instagram_link'     =>   $instagram_link,
                             
                     ));
            
             return redirect('admin/ourteam/index')->with('status', 'ourteam Updated Successfully!');
        }

     
        return view('admin/ourteam/update',array('GetData'=>$GetData));

    }
  
    public function deleteourteam($id)
    {
        $GetData =  \DB::table('our_team')->where('id', $id)->delete();
        return redirect('admin/ourteam/index')->with('status', 'ourteam Deleted Successfully!');
    }
     public function blog()
    {
        $GetData =  \DB::table('blogs')->get();
        return view('admin.blog.index',array('GetData'=>$GetData));
    }
public function blogadd()
    {
        if(!empty($_POST['imagesrc'])){
            extract($_POST);
            $folderPath = storage_path('uploads/');
            $image_parts = explode(";base64,", $imagesrc);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $FileName =  date('ymdhis').".".$image_type;
            $file = $folderPath.$FileName;
            file_put_contents($file, $image_base64);
            $Save = \DB::table('contract')->where('id', $id)->update(array($field =>$FileName));
            if($Save){
                echo 1;
            }else{
                echo 2;
            }
        }
        if(isset($_POST['add'])){
             extract($_REQUEST);
             $GetData =  \DB::table('blogs')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    }
                $add = \DB::table('blogs')->insertGetId(
                     array(
                            'image'     =>   $mainimage, 
                            'title'     =>  $title, 
                            'short_description'     =>  $short_description,
                            'description'     =>  $description, 
                           
                     )
                );
                if(!empty($add)){
                    return redirect('admin/blog/index')->with('status', 'New blog Added Successfully!');
                }
        }
       $GetData =  \DB::table('blogs')->get();
        return view('admin.blog.addblog',array('GetData'=>$GetData));
    }
    public function editblog($id)
    {
       
    $GetData =  \DB::table('blogs')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
           // echo "1";die;
           // echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
           $update = \DB::table('blogs')->where('id', $id)->update(
                       array(
                            'image'     =>   $mainimage, 
                            'title'     =>  $title, 
                            'description'     =>  $description, 
                          'short_description'     =>  $short_description,
                             
                     ));
            
             return redirect('admin/blog/index')->with('status', 'blog Updated Successfully!');
        }

     
        return view('admin/blog/update',array('GetData'=>$GetData));

    }
  
    public function deletblog($id)
    {
        $GetData =  \DB::table('blogs')->where('id', $id)->delete();
        return redirect('admin/blog/index')->with('status', 'blog Deleted Successfully!');
    }
 

 public function news()
    {
        $GetData =  \DB::table('news')->get();
        return view('admin.news.index',array('GetData'=>$GetData));
    }
public function newsadd()
    {
        if(!empty($_POST['imagesrc'])){
            extract($_POST);
            $folderPath = storage_path('uploads/');
            $image_parts = explode(";base64,", $imagesrc);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $FileName =  date('ymdhis').".".$image_type;
            $file = $folderPath.$FileName;
            file_put_contents($file, $image_base64);
            $Save = \DB::table('contract')->where('id', $id)->update(array($field =>$FileName));
            if($Save){
                echo 1;
            }else{
                echo 2;
            }
        }
        if(isset($_POST['add'])){
             extract($_REQUEST);
             $GetData =  \DB::table('news')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    }
                    $add = new News;
                    $add->image = $mainimage;
                    $add->title = $title;
                    $add->description = $description;
                    $add->short_description = $short_description;
                    if($add->save()){
                      $add->slug = str_replace(" ","-",$add->title)."-".$add->id;
                      $add->save();
                    }
                if(!empty($add)){
                    return redirect('admin/news/index')->with('status', 'New news Added Successfully!');
                }
        }
       $GetData =  \DB::table('news')->get();
        return view('admin.news.addnews',array('GetData'=>$GetData));
    }
    public function editnews($id)
    {
       
    $GetData =  \DB::table('news')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
           // echo "1";die;
           // echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
                    $update = News::where('id', $id)->first();
                    $update->image = $mainimage;
                    $update->title = $title;
                    $update->description = $description;
                    $update->short_description = $short_description;
                    if($update->save()){
                      $update->slug = str_replace(" ","-",$update->title)."-".$update->id;
                      $update->save();
                    }
           
            
             return redirect('admin/news/index')->with('status', 'news Updated Successfully!');
        }

     
        return view('admin/news/update',array('GetData'=>$GetData));

    }
  
    public function deletnews($id)
    {
        $GetData =  \DB::table('news')->where('id', $id)->delete();
        return redirect('admin/news/index')->with('status', 'news Deleted Successfully!');
    }


     public function community()
    {
        $GetData =  \DB::table('community')->get();
        return view('admin.community.index',array('GetData'=>$GetData));
    }
public function communityadd()
    {
        if(!empty($_POST['imagesrc'])){
            extract($_POST);
            $folderPath = storage_path('uploads/');
            $image_parts = explode(";base64,", $imagesrc);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $FileName =  date('ymdhis').".".$image_type;
            $file = $folderPath.$FileName;
            file_put_contents($file, $image_base64);
            $Save = \DB::table('contract')->where('id', $id)->update(array($field =>$FileName));
            if($Save){
                echo 1;
            }else{
                echo 2;
            }
        }
        if(isset($_POST['add'])){
             extract($_REQUEST);
             $GetData =  \DB::table('community')->get();
              $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    }
                $add = \DB::table('community')->insertGetId(
                     array(
                            'title'     =>  $title, 
                            'type'     =>  $type, 
                            'description'     =>  $description, 
                           
                     )
                );
                if(!empty($add)){
                    return redirect('admin/community/index')->with('status', 'New community Added Successfully!');
                }
        }
       $GetData =  \DB::table('community')->get();
        return view('admin.community.addcommunity',array('GetData'=>$GetData));
    }
    public function editcommunity($id)
    {
      // echo "1";die();
    $GetData =  \DB::table('community')->where('id', $id)->first();
    //echo "<pre>";print_r($GetData);die();
        if(isset($_REQUEST['update'])){
           // echo "1";die;
            //echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
            
           $update = \DB::table('community')->where('id', $id)->update(
                       array(
                           'title'     =>  $title, 
                            'type'     =>  $type, 
                            'description'     =>  $description, 
                             
                     ));
            
             return redirect('admin/community/index')->with('status', 'community Updated Successfully!');
        }

     
        return view('admin/community/update',array('GetData'=>$GetData));

    }
  
    public function deletcommunity($id)
    {
        $GetData =  \DB::table('community')->where('id', $id)->delete();
        return redirect('admin/community/index')->with('status', 'community Deleted Successfully!');
    }
    public function faqs()
    {
        $GetData =  \DB::table('faq')->get();
        return view('admin.faqs.index',array('GetData'=>$GetData));
    }
    public function return_and_refund()
    {
        $GetData =  \DB::table('return&refund')->get();
        return view('admin.return_and_refund.index',array('GetData'=>$GetData));
    }
    public function addfaqs()
    {
        extract($_REQUEST);
        $GetData =  \DB::table('faq')->get();
        if(isset($_POST['add'])){
             extract($_REQUEST);
            
                $add = \DB::table('faq')->insertGetId(
                     array(
                             'category'   => $category,
                            'question'     =>  $question, 
                            'answer'     =>  $answer,
                     )
                );
                if(!empty($add)){
                    return redirect('admin/faqs/index')->with('status', 'New faqs Added Successfully!');
                }
        }
       $GetData =  \DB::table('faq')->get();
        return view('admin.faqs.addfaq',array('GetData'=>$GetData));
    }
    public function addreturn()
    {
        extract($_REQUEST);
        $GetData =  \DB::table('return&refund')->get();
        if(isset($_POST['add'])){
             extract($_REQUEST);
            
                $add = \DB::table('return&refund')->insertGetId(
                     array(
                             'category'   => $category,
                            'question'     =>  $question, 
                            'answer'     =>  $answer,
                     )
                );
                if(!empty($add)){
                    return redirect('admin/return-and-refund/index')->with('status', 'New Return And Return Added Successfully!');
                }
        }
       $GetData =  \DB::table('return&refund')->get();
        return view('admin.return_and_refund.add',array('GetData'=>$GetData));
    }

    public function editfaq($id)
    {
       
    $GetData =  \DB::table('faq')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
           // echo "1";die;
           // echo "<pre>";print_r($_REQUEST);die;
             extract($_REQUEST);
          $GetData =  \DB::table('faq')->get();
           $update = \DB::table('faq')->where('id', $id)->update(
                       array(
                           'category' => $category,
                             'question'     =>  $question, 
                            'answer'     =>  $answer,
                             
                     ));
            
             return redirect('admin/faqs/index')->with('status', 'faqs Updated Successfully!');
        }

     
        return view('admin/faqs/update',array('GetData'=>$GetData));

    }
    public function editreturn($id)
    {
       
    $GetData =  \DB::table('return&refund')->where('id', $id)->first();
        if(isset($_REQUEST['update'])){
             extract($_REQUEST);
          $GetData =  \DB::table('return&refund')->get();
           $update = \DB::table('return&refund')->where('id', $id)->update(
                       array(
                           'category' => $category,
                             'question'     =>  $question, 
                            'answer'     =>  $answer,
                             
                     ));
            
             return redirect('admin/return-and-refund/index')->with('status', 'Return & Refund Updated Successfully!');
        }

     
        return view('admin/return_and_refund/edit',array('GetData'=>$GetData));

    }
  
    public function deletefaq($id)
    {
        $GetData =  \DB::table('faq')->where('id', $id)->delete();
        return redirect('admin/faqs/index')->with('status', 'faqs Deleted Successfully!');
    }
    public function deletereturn($id)
    {
        $GetData =  \DB::table('return&refund')->where('id', $id)->delete();
        return redirect('admin/return-and-refund/index')->with('status', 'Return And Refund Deleted Successfully!');
    }
    public function allvendors()
    {

        $GetData =  User::where('role', 'vendor')->latest()->orderBy('first_name')->get();
        return view('admin.users.companies',compact("GetData"));
    }



   public function vendordashboard($id)
    { 
        
        $GetData= User::where('id', $id)->first();
        $storeDetail = storeDetail::where('owner_id',$id)->first();
        $total_products = Products::where('added_by', $GetData->id)->get();
        $total_earnings = OrderProducts::where('vendor_id', $GetData->id)->where('status','placed')->sum('total_price');
      $avg_store_reviews =Review::where('vendor_id', $GetData->id)->avg('star_rating');
        $order_processed = OrderProducts::distinct()->select('order_id')->where('vendor_id', $GetData->id)->groupBy('order_id')->get();
        $item_sold = OrderProducts::distinct()->select('product_id')->where('vendor_id', $GetData->id)->groupBy('product_id')->get();
        return view('admin.users.vendor_dashboard',compact('GetData','storeDetail','avg_store_reviews','total_products','order_processed','total_earnings','item_sold'));
    }

    public function viewdashboard($id)
    { 
        $GetData= User::where('id', $id)->first();
        $Userid= $GetData->id;
        $user=User::where('id',$Userid)->first();
        $flyerstatus = flayer_order::where('owner_id',$Userid)->first();
        $store_status =  storeDetail::where('owner_id',$Userid)->first();
        if(!empty($store_status)){
        $finastatus = financial_Details_store::where('store_id',$store_status->id)->first();
        }
        else{
            $finastatus = "";
        }
        $product_added = Products::where('is_deleted', 0)->where('added_by', $Userid)->count();
        $today_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->whereDate('added_on', '=', Carbon::today())->sum('total_price');
        $week_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->whereBetween('added_on', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total_price');
       $month_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->whereMonth('added_on', date('m'))->whereYear('added_on', date('Y'))->sum('total_price');
       $total_earnings = OrderProducts::where('vendor_id', $Userid)->where('status','placed')->sum('total_price');
       session::put('asVendor',$Userid);
       session::put('firstname',$GetData->first_name);
       session::put('lastname',$GetData->last_name);
        return view('admin.users.vendor_dashboard.dashboard',compact('Userid','user','product_added','total_earnings','today_earnings','week_earnings','month_earnings','flyerstatus','store_status','finastatus'));
    }

    public function allcustomers()
    {
        $GetData =  \DB::table('users')->where('role', 'user')->get();
        return view('admin.users.all',array('GetData'=>$GetData));
    }

    public function delete_customer($id)
    {
      $user= User::where('id', $id)->first();
      if ($user->delete()) 
      {
        return redirect()->back()->with('status','User Successfully Deleted');
        
      }



    }

    public function delete_vendor($id)
    {
       $user= User::where('id', $id)->first();
       $post = Products::where([
                    'added_by' => $user->id,
            ])->delete();
      if ($user->delete()) 
      {
        return redirect()->back()->with('status','Vendor Successfully Deleted');
        
      }
    }
    public function allschools()
    {
        $GetData =  \DB::table('users')->where('account_type', 'School')->get();
        return view('admin.users.schools',array('GetData'=>$GetData));
    }
    public function pendingproperties()
    {
        $MyProperties =  \DB::table('properties')->get();
        return view('admin.realestate.pending',array('MyProperties'=>$MyProperties));
    }

    public function aprroved($id)
    { 
        $delete = \DB::table('properties')->where('id', $id)->update(array('status' =>'aprroved'));
       if($delete){
            return redirect('admin/realestate/approved')->with('status', 'Post Approved Successfully!');
       }
        
           
    } 
    public function disapproved($id)
    { 
        $delete = \DB::table('properties')->where('id', $id)->update(array('status' =>'rejected'));
       if($delete){
            return redirect('admin/realestate/rejected')->with('status', 'Post Rejected Successfully!');
       }
        
           
    }

    public function generalsettings()
    {
        $GetData =  \DB::table('generalsettings')->where('id', 1)->first();
        return view('admin.website.generalsettings',array('GetData'=>$GetData));
    }
  
    public function profile()
    {
        $GetData =  \DB::table('users')->where('id', 1)->first();
        return view('admin.website.profile',array('GetData'=>$GetData));
    }
    public function wallet()
    {
        $all_funds = Userfundshistory::where('type' ,'Funds Added')->get();
        $today_start_datetime = date("Y-m-d")." 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";
        $last_seven_days = date( "Y-m-d", strtotime("-7 day"))." 00:00:00";
        $last_month = date( "Y-m")."-01 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";


        $today_funds = \DB::table('user_funds_history')
            ->where('type','Funds Added')
            ->whereBetween('created_at', [$today_start_datetime, $today_end_datetime])
            ->sum('amount');
        $this_week_funds = \DB::table('user_funds_history')
            ->where('type','Funds Added')
            ->whereBetween('created_at', [$last_seven_days, $today_end_datetime])
            ->sum('amount');
        $this_month_funds = \DB::table('user_funds_history')
            ->where('type','Funds Added')
            ->whereBetween('created_at', [$last_month, $today_end_datetime])
            ->sum('amount');
        $all_sum_funds = \DB::table('user_funds_history')
            ->where('type','Funds Added')
            ->sum('amount');

        return view('admin.payments.wallet',array('all_funds'=>$all_funds,'today_funds'=>$today_funds,'this_week_funds'=>$this_week_funds,'this_month_funds'=>$this_month_funds,'all_sum_funds'=>$all_sum_funds));
    }
    public function investment()
    {
        $all_funds = Userfundshistory::where('type' ,'Investment')->get();
        $today_start_datetime = date("Y-m-d")." 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";
        $last_seven_days = date( "Y-m-d", strtotime("-7 day"))." 00:00:00";
        $last_month = date( "Y-m")."-01 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";


        $today_funds = \DB::table('user_funds_history')
            ->where('type','Investment')
            ->whereBetween('created_at', [$today_start_datetime, $today_end_datetime])
            ->sum('amount');
        $this_week_funds = \DB::table('user_funds_history')
            ->where('type','Investment')
            ->whereBetween('created_at', [$last_seven_days, $today_end_datetime])
            ->sum('amount');
        $this_month_funds = \DB::table('user_funds_history')
            ->where('type','Investment')
            ->whereBetween('created_at', [$last_month, $today_end_datetime])
            ->sum('amount');
        $all_sum_funds = \DB::table('user_funds_history')
            ->where('type','Investment')
            ->sum('amount');

        return view('admin.payments.investment',array('all_funds'=>$all_funds,'today_funds'=>$today_funds,'this_week_funds'=>$this_week_funds,'this_month_funds'=>$this_month_funds,'all_sum_funds'=>$all_sum_funds));
    }
    public function withdrawrequest()
    {
        $all_request = Payments::where('status' ,'Pending')->get();
        $today_start_datetime = date("Y-m-d")." 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";
        $last_seven_days = date( "Y-m-d", strtotime("-7 day"))." 00:00:00";
        $last_month = date( "Y-m")."-01 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";


        $today_request = \DB::table('payments')
            ->where('status' ,'Pending')
            ->whereBetween('created_at', [$today_start_datetime, $today_end_datetime])
            ->sum('amount');
        $this_week_request = \DB::table('payments')
            ->where('status' ,'Pending')
            ->whereBetween('created_at', [$last_seven_days, $today_end_datetime])
            ->sum('amount');
        $this_month_request = \DB::table('payments')
            ->where('status' ,'Pending')
            ->whereBetween('created_at', [$last_month, $today_end_datetime])
            ->sum('amount');
        $all_sum_request = \DB::table('payments')
            ->where('status' ,'Pending')
            ->sum('amount');

        return view('admin.payments.withdraw_request',array('all_request'=>$all_request,'today_request'=>$today_request,'this_week_request'=>$this_week_request,'this_month_request'=>$this_month_request,'all_sum_request'=>$all_sum_request));
    }

    public function paidrequest()
    {
        $all_request = Payments::where('status' ,'Paid')->get();
        $today_start_datetime = date("Y-m-d")." 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";
        $last_seven_days = date( "Y-m-d", strtotime("-7 day"))." 00:00:00";
        $last_month = date( "Y-m")."-01 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";


        $today_request = \DB::table('payments')
            ->where('status' ,'Paid')
            ->whereBetween('created_at', [$today_start_datetime, $today_end_datetime])
            ->sum('amount');
        $this_week_request = \DB::table('payments')
            ->where('status' ,'Paid')
            ->whereBetween('created_at', [$last_seven_days, $today_end_datetime])
            ->sum('amount');
        $this_month_request = \DB::table('payments')
            ->where('status' ,'Paid')
            ->whereBetween('created_at', [$last_month, $today_end_datetime])
            ->sum('amount');
        $all_sum_request = \DB::table('payments')
            ->where('status' ,'Paid')
            ->sum('amount');

        return view('admin.payments.paid_request',array('all_request'=>$all_request,'today_request'=>$today_request,'this_week_request'=>$this_week_request,'this_month_request'=>$this_month_request,'all_sum_request'=>$all_sum_request));
    }

    public function rejectedrequest()
    {
        $all_request = Payments::where('status' ,'Rejected')->get();
        $today_start_datetime = date("Y-m-d")." 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";
        $last_seven_days = date( "Y-m-d", strtotime("-7 day"))." 00:00:00";
        $last_month = date( "Y-m")."-01 00:00:00";
        $today_end_datetime = date("Y-m-d")." 23:59:00";


        $today_request = \DB::table('payments')
            ->where('status' ,'Rejected')
            ->whereBetween('created_at', [$today_start_datetime, $today_end_datetime])
            ->sum('amount');
        $this_week_request = \DB::table('payments')
            ->where('status' ,'Rejected')
            ->whereBetween('created_at', [$last_seven_days, $today_end_datetime])
            ->sum('amount');
        $this_month_request = \DB::table('payments')
            ->where('status' ,'Rejected')
            ->whereBetween('created_at', [$last_month, $today_end_datetime])
            ->sum('amount');
        $all_sum_request = \DB::table('payments')
            ->where('status' ,'Rejected')
            ->sum('amount');

        return view('admin.payments.rejected_request',array('all_request'=>$all_request,'today_request'=>$today_request,'this_week_request'=>$this_week_request,'this_month_request'=>$this_month_request,'all_sum_request'=>$all_sum_request));
    }

    public function saveadmin()
    {
       if(isset($_POST['account_settings'])){
           extract($_POST);
          $GetData =  \DB::table('users')->where('id', 1)->first();
           $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
          if(!empty($password)){
            $update = \DB::table('users')->where('id',1)->update(
                array(
                        'email'     =>   $email, 
                        'first_name'     =>   $first_name,  
                        'last_name'     =>   $last_name,  
                        'password' => Hash::make($password),  
                        'image'     =>   $mainimage
                    )
            );
          }else{
            $update = \DB::table('users')->where('id',1)->update(
                array(
                        'email'     =>   $email, 
                        'first_name'     =>   $first_name,  
                        'last_name'     =>   $last_name,   
                        'image'     =>   $mainimage
                    )
            );
          }          
            

            return redirect('admin/profile')->with('status', 'Account Settings Updated Successfully.');
       }

       if(isset($_POST['update'])){
           extract($_POST);
          $GetData =  \DB::table('generalsettings')->where('id', 1)->first();
           $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->logo;
                    }
          if(!empty($_FILES['footer_logo']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['footer_logo']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['footer_logo']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage2 = $SaveFileName2; 
                    }else{
                        $mainimage2 = $GetData->footer_logo;
                    }
            $update = \DB::table('generalsettings')->where('id',1)->update(
                array(
                        'short_description'     =>   $short_description, 
                        'email'     =>   $email, 
                        'phone'     =>   $phone, 
                        'facebook_link'     =>   $facebook_link, 
                        'youtube_link'     =>   $youtube_link, 
                        'logo'     =>   $mainimage, 
                        'footer_logo'     =>   $mainimage2, 
                        'twitter_link'     =>   $twitter_link, 
                        'instagram_link'     =>   $instagram_link, 
                    )
            );

            return redirect('admin/generalsettings')->with('status', 'Record Updated Successfully.');
       }

       if(isset($_POST['about_us'])){
           extract($_POST);
           $GetData =  \DB::table('pages')->where('id', 1)->first();
           $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
            $update = \DB::table('pages')->where('id',1)->update(
                array(
                        'description'     =>   $description,
                        'image'     =>   $mainimage,
                    )
            );

            return redirect('admin/aboutus')->with('status', 'Record Updated Successfully.');
       }
       if(isset($_POST['privacy'])){
           extract($_POST);
           $GetData =  \DB::table('pages')->where('id', 1)->first();
           $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
            $update = \DB::table('pages')->where('id',2)->update(
                array(
                        'image'     =>   $mainimage,
                        'description'     =>   $description,
                    )
            );

            return redirect('admin/privacy')->with('status', 'Record Updated Successfully.');
       }
       if(isset($_POST['terms'])){
           extract($_POST);
           $GetData =  \DB::table('pages')->where('id', 1)->first();
           $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $GetData->image;
                    }
            $update = \DB::table('pages')->where('id',3)->update(
                array(
                        'description'     =>   $description,
                        'image'     =>   $mainimage,
                    )
            );

            return redirect('admin/terms')->with('status', 'Record Updated Successfully.');
       }
    }

    public function aboutus()
    {
        $GetData =  \DB::table('pages')->where('id', 1)->first();
        return view('admin.website.aboutus',array('GetData'=>$GetData));
    }

    public function privacy()
    {
        $GetData =  \DB::table('pages')->where('id', 2)->first();
        return view('admin.website.privacy',array('GetData'=>$GetData));
    }

    public function terms()
    {
        $GetData =  \DB::table('pages')->where('id', 3)->first();
        return view('admin.website.terms',array('GetData'=>$GetData));
    }

    public function allcampaigns()
    {
        $MyCampaign =  Campaign::all();
        return view('admin.campaign.all',array('MyCampaign'=>$MyCampaign));
    }
    public function approvedcampaigns()
    {
        $MyCampaign =  Campaign::where('status' ,'aprroved')->get();
        return view('admin.campaign.approved',array('MyCampaign'=>$MyCampaign));
    }
    public function rejectedcampaigns()
    {
        $MyCampaign =  Campaign::where('status' ,'rejected')->get();
        return view('admin.campaign.disapproved',array('MyCampaign'=>$MyCampaign));
    }
    public function pendingcampaigns()
    {
        $MyCampaign =  Campaign::where('status' ,'pending')->get();
        return view('admin.campaign.pending',array('MyCampaign'=>$MyCampaign));
    }

    public function aprrovedcampaign($id)
    { 
        $update = \DB::table('campaign')->where('id', $id)->update(array('status' =>'aprroved'));
       if($update){
            return redirect('admin/campaign/approved')->with('status', 'Campaign Approved Successfully!');
       }   
    } 
    public function disapprovedcampaign($id)
    { 
        $update = \DB::table('campaign')->where('id', $id)->update(array('status' =>'rejected'));
       if($update){
            return redirect('admin/campaign/rejected')->with('status', 'Campaign Rejected Successfully!');
       }
    }

    public function seller_story()
    {
     $GetData =  \DB::table('testimonial')->get(); 
      return view('admin.seller.all',compact('GetData'));
    }

    public function edit_story($id)
    {
      $story = \DB::table('testimonial')->where('id', $id)->first();
      return view('admin.seller.edit_story',compact('story'));
    }
    public function add_story()
    {
      return view ('admin.seller.add_story');
    }

    public function savestory()
    {
      if(isset($_POST['saveaddstory']))
      {
        extract($_POST);
        $story = new Seller;
        $story->name= $u_name;
        $story->description= $description;
        $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $story->image;
                    }
          $story->image= $mainimage;
        if ($story->save()) 
        {
          return redirect('admin/seller/seller-story')->with('status', 'New Story Added Successfully');
        }
        
      }

      if(isset($_POST['savestory']))
      {
        extract($_POST);
        $story = Seller::where('id', $rowid)->first();
        $story->name= $u_name;
        $story->description= $description;
        $file_path = storage_path('uploads/');
            if(!empty($_FILES['image']['name'])) {
                
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = $story->image;
                    }
          $story->image= $mainimage;
        if ($story->save()) 
        {
          return redirect('admin/seller/seller-story')->with('status', 'Story Updated Successfully');
        }
        
      }
    }

    public function DelStory($id)
    {
      $story = Seller::where('id', $id)->first();
      if($story->delete())
      {
        return redirect('admin/seller/seller-story')->with('status', 'Seller Story Deleted Successfully');
      }
    }
//admin
    //orders modules

    public function order_processed ()
        {
          $order= \DB::table('orders')->where('status','processed')->get();
          return view ('admin.orders.processed',compact('order'));

        }

    public function placed ()
        {
          $order= \DB::table('orders')->where('status','placed')->get();
          return view ('admin.orders.placed',compact('order'));

        }
        public function pending ()
        {
          $order= \DB::table('orders')->where('status','pending')->get();
          return view ('admin.orders.pending',compact('order'));

        }
     public function order_shipped ()
        {
          $order= \DB::table('orders')->where('status','shipped')->get();
          return view ('admin.orders.shipped',compact('order'));

        }
            public function order_delivered ()
        {
          $order= \DB::table('orders')->where('status','delivered')->get();
          return view ('admin.orders.delivered',compact('order'));

        }
         public function order_dispute ()
        {
          $order= \DB::table('orders')->where('status','dispute')->get();
          return view ('admin.orders.dispute',compact('order'));

        } 
        public function cancelled ()
        {
          $order= \DB::table('orders')->where('status','cancelled')->get();
          return view ('admin.orders.cancelled',compact('order'));

        }
        public function flyer_approved ()
        {
          $flyer_approved= \DB::table('flayer_order')->where('status','Approved')->get();
          return view ('admin.orders.flyer_approved',compact('flyer_approved'));

        }
        public function flyer_pending ()
        {
          $flyer_pending= \DB::table('flayer_order')->where('status','pending')->get();
          return view ('admin.orders.flyer_pending',compact('flyer_pending'));

        }

        public function order_details($id)
        {
        
         $id = base64_decode($id);
        $order_detail = Orders::where('order_no', $id)->first();
        $order_products = OrderProducts::where('order_id', $order_detail->id)->get();
          return view('admin.orders.order_page',compact('order_products','order_detail'));
        }

        public function flayerapprove($id)
        {
        $order_detail = flayer_order::where('id', $id)->first();
        $owner = User::where('id', $order_detail->owner_id)->first();
        $owner_store = storeDetail::where('owner_id',$owner->id)->first();
        $destination_city = Cities::where('name', $owner_store->city)->first();
        ######################## Trax API ##########################################
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
                  CURLOPT_POSTFIELDS => array('service_type_id' => '1','pickup_address_id' => '35444','information_display' => '0','consignee_city_id' => $owner_store->cityinfo->trax_id,'consignee_name' => $owner->first_name.$user->last_name,'consignee_address' => $owner_store->address,'consignee_phone_number_1' => $owner_store->phone,'consignee_email_address' => $owner->email,'item_product_type_id' => '21','item_description' => 'Flayers From zmall.pk','item_quantity' => $order_detail->quantity,'item_insurance' => '0','pickup_date' => date('Y-m-d'),'estimated_weight' => '1','shipping_mode_id' => '1','amount' => $order_detail->total_amount,'payment_mode_id' => '1','charges_mode_id' => '4'),
                  CURLOPT_HTTPHEADER => array(
                    'Authorization: S1ZubnlBejh6YThMNnBWRFBOajNNRkV4MlNoMXVpSWJYaFR3SG5TaTZHZkJvZHpzN2wydHhIc1ZMRnNB60dd798d340f3'
                  ),
                ));
        $response = curl_exec($curl);
        $a = json_decode($response, true);
        $order_detail->track_number =  $a['tracking_number'];
        $order_detail->save();
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
        $downloadPath = "frontend/traxSlip/".$order_detail->order_no."Slip.pdf";
        $file = fopen($downloadPath, "w+");
        fputs($file, $response);
        fclose($file);
        $order_detail->slip_link = $downloadPath;
        $order_detail->status = 'Approved';
        $order_detail->save();
        curl_close($curl_handle);
         ######################## Trax API END ##########################################
        return redirect()->back();
        }
        public function service(){
            $service_pending= \DB::table('services')->where('status','pending')->get();
            $service_approve= \DB::table('services')->where('status','aprroved')->get();
            return view('admin.service',compact('service_pending','service_approve'));
        }
        public function serviceApprove($id){
            services::where('id', $id)->update([
                        'status' => 'aprroved',       
                     ]);
            return redirect()->back();
        }
       public function rejectreason($id){
        $product_id = $id;
        return view('admin.products.rejectreason',compact('product_id'));
       }

       public function paymentPending(){
        $pendingOrder = Orders::where('status','placed')->where('is_delivered', 0)->get();
        $order_detail = OrderProducts::where('status','placed')->get();
        return view('admin.financial.pending',compact('pendingOrder','order_detail'));
       }
       public function paymentClear(){
        $clearOrder = Orders::where('status','placed')->where('is_delivered', 1)->where('paymentStatus', 0)->get();
        $order_detail = OrderProducts::where('status','placed')->get();
        return view('admin.financial.clear',compact('clearOrder','order_detail'));
       }
       public function paymentWithdraw(){
        $withdrawOrder = Orders::where('status','placed')->where('is_delivered', 1)->where('paymentStatus', 1)->get();
        $order_detail = OrderProducts::where('status','placed')->get();
        return view('admin.financial.withdraw',compact('withdrawOrder','order_detail'));
       }
       public function approvePayment($id){
        Orders::where('id',$id)->update([
                        'paymentstatus' => 1,       
                     ]);
        return redirect()->back();
       }
       public function campaign(){
        $campaign = campaign::all();
        return view('admin.marketing.compaign',compact('campaign'));
       }
       public function addCampaign(){
        return view('admin.marketing.add');
       }
       public function storeCampaign(Request $request){
        extract($_POST);
        $new = new campaign;
        $new->compaign_title = $name;
        $new->campaign_code = $code;
        $new->type = $type;
        $new->register_time = $register_time;
        $new->starting_time = $starting_time;
        $new->ending_time = $ending_time;
        $new->description = $description;
        if($request->hasFile('banner'))
        {
        $destinationPath = 'frontend/storage/uploads/';
        $time   = date("ymdhis");
        $filename = $request->File('banner')->getClientOriginalName();
        $new_name = $time.$filename;
        $request->File('banner')->move($destinationPath, $new_name);
        $fullPath =  $new_name;
        $new->banner = $fullPath;
        
        }
        $new->save();
        return redirect('/admin/marketing/campaign');
       }
       public function pendingsub(){
        $user = User::where('account_status','pending')->where('role','vendor')->where('subscription',1)->get();
        return view('admin.subscription.pending',compact('user'));
       }
       public function approvesub(){
        $user = User::where('account_status','approve')->where('role','vendor')->where('subscription',1)->get();
        return view('admin.subscription.approved',compact('user'));
       }
       public function withoutsub(){
        $user = User::where('subscription',0)->where('role','vendor')->get();
        return view('admin.subscription.without',compact('user'));
       }
       public function packageApprove($id){

        $user = User::where('id',$id)->first();
        $storeDetail = storeDetail::where('owner_id',$id)->first();
        if(!empty($storeDetail)){
            if($user->subscription == 1){
                if($user->subscription_package == 'Standard'){
                    $quantity = 50;
                }
                elseif($user->subscription_package == 'Premium'){
                    $quantity = 100;
                }
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
                  CURLOPT_POSTFIELDS => array('service_type_id' => '1','pickup_address_id' => '35444','information_display' => '0','consignee_city_id' => $storeDetail->cityinfo->trax_id,'consignee_name' => $user->first_name.$user->last_name,'consignee_address' => $storeDetail->address,'consignee_phone_number_1' => $storeDetail->phone,'consignee_email_address' => $user->email,'item_product_type_id' => '21','item_description' => 'Flayers From zmall.pk','item_quantity' => $quantity,'item_insurance' => '0','pickup_date' => date('Y-m-d'),'estimated_weight' => '1','shipping_mode_id' => '1','amount' => 0,'payment_mode_id' => '1','charges_mode_id' => '4'),
                  CURLOPT_HTTPHEADER => array(
                    'Authorization: S1ZubnlBejh6YThMNnBWRFBOajNNRkV4MlNoMXVpSWJYaFR3SG5TaTZHZkJvZHpzN2wydHhIc1ZMRnNB60dd798d340f3'
                  ),
                ));

                $response = curl_exec($curl);
                $a = json_decode($response, true);
                $user->trax_track_no = $a['tracking_number'];
                $user->save();
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
                $downloadPath = "frontend/traxSlip/".$user->first_name."Slip.pdf";
                $file = fopen($downloadPath, "w+");
                fputs($file, $response);
                fclose($file);
                $user->download_slip = $downloadPath;
                $user->save();
            }
        }
        $user = User::where('id',$id)->update([
                        'account_status' => 'approve',       
                     ]);
        return redirect('/admin/vendor/pending-subscription');
       }
       public function saveComment(Request $req){
        extract($_POST);
        $user = User::where('id',$user_id)->update([
                        'admin_comment' => $message_admin,       
                     ]);
        return redirect('/admin/users/allvendors');
       }

}
