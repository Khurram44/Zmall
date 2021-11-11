@extends('dashboard.dash-layout.account')
@section('content3')
<style>
    .accounts-pro-btns{
        
    }
    .accounts-pro-btns button{
        padding:8px 30px;
        outline:none;
        border:none;
        background: #fe9126;
        color: #fff;
        text-transform: capitalize;
        font-weight:bold;
        float:right;
        margin-right:40px;
    }
    .mydet-account-inner table tr td input{
        color:#666;
        padding:10px 5px;
        font-size:14px;
    }
    .mydet-account select{
        background:rgb(0,0,0,0.04);
        border: 1px solid rgb(0,0,0,0.04);
        outline: none;
        padding: 10px 0px;
        width: 200px;
    }
    .radioform{
        display:flex;
        margin 10px 0px;
        padding: 20px 0px;
    }
    .radioform b{
        font-size:16px;
        font-weight:500;
        margin-left:10px;
        margin-right:20px;
        
      
    }
    .radioform label{
        font-weight: 500;
        font-size: 16px;
          color:#666;
          margin-left:5px;
    }
    .radioform input{
        margin-left:10px;
    }
@media only screen and (max-width: 600px) {
  .myaccount-detail {
    width: 100%;
  }
  .myaccounts-opt{
    display: flex;
    flex-direction: column;
  }
    .myaccounts-opt a{
      width: 100%;
      font-size: 16px;
      padding: 10px 20px;
      margin-top: 5px;
    }
    .mydet-account{
      width: 50%;
    }
}
</style>
@if(session()->has('status'))
<div class="alert alert-success">
    {{session()->get('status')}}
</div>
@endif
<div class="myaccount-detail">
            <div class="myaccounts-opt">
              <a href="#" onclick="myacc0();" class="accounts accactive">Seller Account</a>
              <a href="#" onclick="myacc1();" class="accounts">Business Info</a>
              <a href="#" onclick="myacc3();" class="accounts">Address</a>
              <a href="#" onclick="myacc4();" class="accounts">Return Address</a>
            </div>
          
          <div class="mydet-account" id="seller">
            <form method="POST" action="{{ asset('/Vendor/edit-Seller-Account') }}" enctype="multipart/form-data">
              @csrf
            <h3>Seller Account</h3>
            <div class="mydet-account-inner">
              <table class="table table-borderless">
                <tr>
                  <td style="width: 150px;">
                    <label>SellerID:</label>
                  </td>
                  <td>
                    <b>{{$user->id}} </b>
                  </td>
                </tr> 
                <tr>
                  <td>
                    <label>First Name</label>
                  </td>
                  <td>
                    <input type="text" name="f_name" value="{{$user->first_name}}" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Last Name</label>
                  </td>
                  <td>
                    <input type="text" name="l_name" value="{{$user->last_name}}" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Email</label>
                  </td>
                  <td>
                    <input type="email" name="email" placeholder="Enter your Email" value="{{$user->email}}" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Phone Number</label>
                  </td>
                  <td>
                    <input type="text" name="phone" placeholder="Enter your Phone Number here" value="{{$user->phone}}" required>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Display/Shop Name</label>
                  </td>
                  <td>
                    <input type="text" name="shopname" placeholder="Enter your Display/Shop name here" value="{{$storeDetail->store_name}}" required>
                  </td>
                </tr>
              </table>
              <div class="accounts-pro-btns">
                  <button type="submit" name="selleraccount">Save</button>
              </div>
              
            </div>
          </form>
          </div>
          <div class="mydet-account" style="display: none;" id="business">
            <form method="POST" action="{{ asset('/Vendor/edit-business-info') }}" enctype="multipart/form-data">
              @csrf
            <h3>Business Info</h3>
            <div class="mydet-account-inner">
              <table class="table table-borderless">
                <tr>
                  <td style="width: 150px;">
                    <label>Legal Business Name </label>
                  </td>
                  <td>
                    <input type="text" name="Bname" placeholder="Enter your Business Name here" value="{{$storeDetail->store_name}}" required>
                  </td>
                </tr> 
                <tr>
                  <td>
                    <label>Store Address</label>
                  </td>
                  <td>
                    <input type="text" name="store_address" placeholder="Enter your Store Address " value="{{$storeDetail->address}}" disabled>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Country</label>
                  </td>
                  <td>
                    <input type="text" name="country" placeholder="Enter your Country name here" value="Pakistan" disabled>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <label>Province</label>
                  </td>
                  <td>
                    <select class="load_province_cities"  name="state" required="required">
                        <option disabled="disabled">Select</option>
                        @if(!empty($province))
                                @foreach($province as $p)
                                <option value="{{$p->id}}"{{$p->name ==  $storeDetail->state ? 'selected' : ''}}>{{$p->name}}</option>
                                @endforeach
                                @endif
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>City</label>
                  </td>
                  <td>
                    <select class="citiesdropdownfield" name="city" id="" required="required">
                        <option disabled="disabled">Select</option>
                        @if(!empty($cities))
                                @foreach($cities as $c)
                                <option value="{{$c->name}}"{{$c->name ==  $storeDetail->city ? 'selected' : ''}}>{{$c->name}}</option>
                                @endforeach
                                @endif
                      </select>
                  </td>
                </tr>
              </table>
              <div class="accounts-pro-btns">
                  <button type="submit" name='businessinfo'>Save</button>
              </div>
            </div>
          </form>
          </div>
          <div class="mydet-account" style="display: none;" id="address">
            <h3>Actual Address</h3>
            <div class="mydet-account-inner">
              <form method="POST" action="{{ asset('/Vendor/edit-actual-address') }}" enctype="multipart/form-data">
              @csrf
              <table class="table table-borderless">
                <tr>
                  <td style="width: 150px;">
                    <label>Full Name</label>
                  </td>
                  <td>
                    <input type="text" name="f_name" placeholder="Enter your first and last name here" value="{{$contact->name}}">
                  </td>
                </tr> 
                <tr>
                  <td>
                    <label>Email</label>
                  </td>
                  <td>
                    <input type="email" name="email" placeholder="Enter your Email here" value="{{$contact->email}}">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Address</label>
                  </td>
                  <td>
                    <input type="text" name="address" placeholder="Enter your complete Address here" value="{{$contact->address}}">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Mobile Number</label>
                  </td>
                  <td>
                    <input type="number" name="phone" placeholder="Enter your Mobile Number" value="{{$contact->telephone}}">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Country/Reigion</label>
                  </td>
                  <td>
                    <input type="text" name="country" placeholder="Enter your Country here" value="Pakistan" disabled>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <label>Province</label>
                  </td>
                  <td>
                    <select class="load_province_cities"  name="state" required="required">
                        <option disabled="disabled">Select</option>
                        @if(!empty($province))
                                @foreach($province as $p)
                                <option value="{{$p->id}}"{{$p->name ==  $contact->state ? 'selected' : ''}}>{{$p->name}}</option>
                                @endforeach
                                @endif
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>City</label>
                  </td>
                  <td>
                    <select class="citiesdropdownfield" name="city" id="" required="required">
                        <option disabled="disabled">Select</option>
                        @if(!empty($cities))
                                @foreach($cities as $c)
                                <option value="{{$c->name}}" {{$c->name ==  $contact->city ? 'selected' : ''}}>{{$c->name}}</option>
                                @endforeach
                                @endif
                      </select>
                  </td>
                </tr>
              </table>
              <div class="accounts-pro-btns">
                  <button type="submit" name="actualaddress">Save</button>
              </div>
            </div>
          </form>
          </div>
          <div class="mydet-account" style="display: none;" id="return">
            <h3>Return Address</h3>
            
            <div class="mydet-account-inner">
              <form method="POST" action="{{ asset('/Vendor/edit-return-address') }}" enctype="multipart/form-data">
              @csrf
                      <div class="radioform">
                          <b>Copy from Actual Address: </b> 
                          
                            <input type="radio" name="yes" id="yes" value="yes" onclick="mychoiceY();"> <label for="yes">Yes</label>
                          
                            <input type="radio" name="yes" id="no" value="no" onclick="mychoiceN();"> <label for="no">No</label>
                          
                      </div>
                    
                <table class="table table-borderless" style="display: none;" id="showchoice">
                 <tr>
                  <td style="width: 150px;">
                    <label>Full Name</label>
                  </td>
                  <td>
                    <input type="text" name="return_name" placeholder="Enter your first and last name here" value="">
                  </td>
                </tr> 
                <tr>
                  <td>
                    <label>Address</label>
                  </td>
                  <td>
                    <input type="text" name="return_email" placeholder="Enter your complete Address here" value="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Mobile Number</label>
                  </td>
                  <td>
                    <input type="number" name="return_telephone" placeholder="Enter your Mobile Number" value="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Email</label>
                  </td>
                  <td>
                    <input type="email" name="return_email" placeholder="Enter your Email here" value="">
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Country/Reigion</label>
                  </td>
                  <td>
                    <input type="text" name="country" placeholder="Enter your Country here" value="Pakistan" disabled>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <label>Province</label>
                  </td>
                  <td>
                    <select class="load_province_cities"  name="return_state" required="required">
                        <option disabled="disabled">Select</option>
                        @if(!empty($province))
                                @foreach($province as $p)
                                <option value="{{$p->id}}">{{$p->name}}</option>
                                @endforeach
                                @endif
                      </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>City</label>
                  </td>
                  <td>
                    <select class="citiesdropdownfield" name="return_city" id="" required="required">
                        <option disabled="disabled">Select</option>
                        @if(!empty($cities))
                                @foreach($cities as $c)
                                <option value="{{$c->name}}">{{$c->name}}</option>
                                @endforeach
                                @endif
                      </select>
                  </td>
                </tr>
              </table>
              <div class="accounts-pro-btns">
                  <button type="submit" name="returnaddress">Save</button>
              </div>
            </form>
            </div>
          </div>
</div>
 <script>
    var x = document.getElementById("seller");
  var y = document.getElementById("business");
  var k = document.getElementById("address");
  var l = document.getElementById("return");
  function myacc0(){
  if (x.style.display == "none") {
    y.style.display = "none";
    k.style.display = "none";
    l.style.display = "none";
    x.style.display = "block";
  }
  else{
    y.style.display = "none";
    k.style.display = "none";
    l.style.display = "none";
    x.style.display = "block";
  }
}
function myacc1(){
  if (y.style.display == "none") {
    x.style.display = "none";
    k.style.display = "none";
    l.style.display = "none";
    y.style.display = "block";
  }
  else{
    x.style.display = "none";
    k.style.display = "none";
    l.style.display = "none";
    y.style.display = "block";
  }
}
function myacc3(){
  if (k.style.display == "none") {
    y.style.display = "none";
    x.style.display = "none";
    l.style.display = "none";
    k.style.display = "block";
  }
  else{
    y.style.display = "none";
    x.style.display = "none";
    l.style.display = "none";
    k.style.display = "block";
  }
}
function myacc4(){
  if (l.style.display == "none") {
    y.style.display = "none";
    x.style.display = "none";
    k.style.display = "none";
    l.style.display = "block";
  }
  else{
    y.style.display = "none";
    x.style.display = "none";
    k.style.display = "none";
    l.style.display = "block";
  }
}
$(document).ready(function(){
    $('.accounts').click(function() {
        $(this).siblings('.accounts').removeClass('accactive');
        $(this).addClass('accactive');
    });
});
function mychoiceN() {
  var x = document.getElementById("showchoice");
  if (x.style.display == "none") {
    x.style.display = "block";
  } 
}
function mychoiceY() {
  var x = document.getElementById("showchoice");
  if (x.style.display == "block") {
    x.style.display = "none";
  }
}
</script>

@endsection