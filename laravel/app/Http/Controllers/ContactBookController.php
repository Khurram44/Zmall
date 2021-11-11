<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ContactBook;
use DB;
use App\Cities;
use App\User;
use App\Province;
class ContactBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     s\Illuminate\Http\Response
     */
    public function index()
    {
        $Userid= Auth::id();
        $user=User::where('id',$Userid)->first(); 
        $all_address =  \DB::table('contactbook')->where('added_by', $Userid )->get();
        $cities = Cities::all();
        $province = Province::all();
        return view('user_dashboard.address',compact('all_address','user','Userid','cities','province'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
         if(isset($_POST['add_contact_book'])){
            extract($_POST);

            $model = new ContactBook;
            $model->address = $address;
            if($state == 247){
                $model->state = "Punjab";
            }
                elseif($state == 248){
                    $model->state = "KPK";
                }
                    elseif($state == 249){
                        $model->state = "Sindh";
                    }
                        elseif($state == 250){
                            $model->state = "Balochistan";
                        }
                            elseif($state == 251){
                                $model->state = "Gilgit Baltistan";
                            }
            $model->city = $city;
            $model->telephone = $phone;
            $model->name = $name;
            $model->added_by = Auth::id();
            if($model->save()){
            return redirect('profile/address')->with('status', 'New Address Added Successfully.');
           }
         }

    }    

    // *
    //  * Store a newly created resource in storage.
    //  *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new ContactBook;
        $model->address = $address;
            $model->state = $state;
            $model->city = $city;
            $model->added_by = Auth::id();
            if($model->save()){
            return redirect('contactbook')->with('status', 'update Successfully.');
            }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $Userid=Auth::id();
          $cities = Cities::all();
        $province = Province::all();
          $address =  \DB::table('contactbook')->where('id', $id)->first();
         
          return view('user_dashboard.edit_address',compact('address','province','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(isset($_POST['add_contact_book'])){

           $Userid= Auth::id();
            extract($_POST);
            $model = ContactBook::where("id",$row_id)->first();
            $model->address = $address;
            if($state == 247){
                $model->state = "Punjab";
            }
                elseif($state == 248){
                    $model->state = "KPK";
                }
                    elseif($state == 249){
                        $model->state = "Sindh";
                    }
                        elseif($state == 250){
                            $model->state = "Balochistan";
                        }
                            elseif($state == 251){
                                $model->state = "Gilgit Baltistan";
                            }
            $model->city = $city;
            $model->telephone = $phone;
            $model->name = $name;
            if($model->save()){
            return redirect('profile/address')->with('status', 'Your Address Updated Successfully.');
           }
         }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $model = ContactBook::where("id",$id)->first();
        
        if ($model->delete()){
            return redirect('profile/address')->with('status', 'Address Deleted.');
        }

    }

}
