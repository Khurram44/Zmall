<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\vendor_inventory;
use App\User;
use App\Manage;
use DB;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $product= vendor_inventory::all();
        return view('inventory.index',compact('product'));
    }

    public function add_product()
    {
        $categories=Manage::where('module_id', 1)->get();
        $sub_categories=Manage::where('module_id', 2)->get();
        $size=Manage::where('module_id', 3)->get();
        $color=Manage::where('module_id', 4)->get();
        return view('inventory.add_product',compact('categories','sub_categories','size','color'));
    }

    public function edit_product()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($_POST['saveproduct']))
        {
           
            $validateData= $request->validate([
                
                'p_name'   => 'required',
                'category' => 'required',
                'quantity' => 'required',
                'price'    => 'required',
                'color'    => 'required',

            ]);
             extract($_POST);
            $product= new vendor_inventory;
            $product->images=  $request->file_path = storage_path('uploads/');
                if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    };
            $product->title= $p_name;
            $product->brand_id = $brand;
            $product->category= $category;
            $product->sub_category_id= $sub_categories;
            $product->color=  $color;
            $product->size=  $size;
            $product->quantity= $quantity;
            $product->price= $price;
            $product->availability = $availability;
            $product->status= $status;
            $product->description= $editor1;

            if ($product->save()) 
            {
                return redirect('product_inventory')->with('status', 'Product added successfully');
            }




        }

        if(isset($_POST['editproduct']))
        {
            extract($_POST);
            $product= vendor_inventory::where('id', $rowid)->first();
            $product->images=  $request->file_path = storage_path('uploads/');
                if(!empty($_FILES['image']['name'])) {
                        $new_name = date("ymdhis");
                        $ImagePath = $_FILES['image']['tmp_name'];
                        $image = file_get_contents($ImagePath);
                        $SaveFileName2 = $new_name.$_FILES['image']['name'];
                        file_put_contents($file_path.$SaveFileName2, $image);
                                    
                        $mainimage = $SaveFileName2; 
                    }else{
                        $mainimage = '';
                    };
            $product->title= $p_name;
            $product->brand_id = $brand;
            $product->category= $category;
            $product->sub_category_id= $sub_categories;
            $product->color=  $color;
            $product->size=  $size;
            $product->quantity= $quantity;
            $product->price= $price;
            $product->availability = $availability;
            $product->status= $status;
            $product->description= $editor1;

            if ($product->save()) 
            {
                return redirect('product_inventory')->with('status', 'Product updated successfully');
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
        
        $product=vendor_inventory::where('id', $id)->first();
         $categories=Manage::where('module_id', 1)->get();
        $sub_categories=Manage::where('module_id', 2)->get();
        $size=Manage::where('module_id', 3)->get();
        $color=Manage::where('module_id', 4)->get();
        //VendorInvestory
        return view('inventory.edit_product',compact('product','categories','sub_categories','size','color'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=vendor_inventory::where('id', $id)->first();
        
        if($product->delete())
        {
            return redirect('product_inventory')->with('status','Product deleted successfully');
        }
    }
}
