<?php use App\ProductAttributes; ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: 'Poppins', sans-serif;
}
body{
  
}
::selection{
  color: #fff;
  background: #fe9126;
}
.container{
  width: auto;
  background: #fff;
  border-radius: 5px;
  padding: 50px 35px 10px 35px;
}
.container header{
  font-size: 35px;
  font-weight: 600;
  margin: 0 0 30px 0;
}
.container .form-outer{
  width: auto;
  overflow: hidden;
}
.container .form-outer form{
  display: flex;
  width:400%;

}
.form-outer form .page{
  width: 25%;
  padding: 50px;

  transition: margin-left 0.3s ease-in-out;
}
label{
  color: rgb(0,0,0,0.7);
  font-size: 12px;
}
.form-outer form .page .title{
  margin: 30px 0px;
  text-align: left;
  font-size: 16px;
  font-weight: 500;
}
.form-outer form .page .field{
  width: 530px;
  height: 45px;
  margin: 45px 0;
  display: flex;
  position: relative;
}
form .page .field .label{
  position: absolute;
  top: -30px;
  font-weight: 500;
}
form .page .field input{
  height: 100%;
  width: 100%;
  border: 1px solid lightgrey;
  border-radius: 5px;
  padding-left: 15px;
  font-size: 18px;
}
form .page .field select{
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  font-weight: 500;
}
form .page .field button{
  padding: 5px 15px;
  height: calc(100% + 5px);
  border: none;
  background: #fe9126;
  margin-top: -20px;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: 0.5s ease;
}
form .page .field button:focus{
  outline: none;
}
form .page .btns button{
  margin-top: -20px!important;
}
form .page .btns button.prev{
  margin-right: 3px;
  font-size: 17px;
}
form .page .btns button.next{
  margin-left: 3px;
  text-align: center;
}
.container .progress-bar{
  display: flex;
  flex-direction: row;
  user-select: none;
  background: none;
  color:  #3a3b3c;
}
.container .progress-bar .step{
  text-align: center;
  width: 100%;
  position: relative;
  margin-left: 20px;
}
.container .progress-bar .step p{
  font-weight: 500;
  font-size: 10px;
  color: rgb(0,0,0,0.7);
  margin-bottom: 8px;
}
.progress-bar .step .bullet{
  height: 25px;
  width: 25px;
  border: 1px solid rgb(0,0,0,0.7);;
  color: rgb(0,0,0,0.5);
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transition: 0.2s;
  font-weight: 500;
  font-size: 16px;
}
.progress-bar .step .bullet.active{
  border-color: #fff;
  background: #fe9126;
}
.progress-bar .step .bullet span{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
}
.progress-bar .step .bullet.active span{
  display: none;
}
.progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
  position: absolute;
  content: '';
  bottom: 11px;
  right: -90px;
  height: 1px;
  width: 79px;
  background: rgb(0,0,0,0.6);
}
@media screen and (max-width:500px){
  .progress-bar .step .bullet:before,
.progress-bar .step .bullet:after{
  position: absolute;
  content: '';
  bottom: 11px;
 
  height: 1px;
  width: 30px;
  background: rgb(0,0,0,0.6);
  display: none;
}
}
.progress-bar .step .bullet.active:after{
  background: #fe9126;
  transform: scaleX(0);
  transform-origin: left;
  animation: animate 0.3s linear forwards;
}
@keyframes animate {
  100%{
    transform: scaleX(1);
  }
}
.progress-bar .step:last-child .bullet:before,
.progress-bar .step:last-child .bullet:after{
  display: none;
}
.progress-bar .step p.active{
  color: #fe9126;
  width: 1px;
  transition: 0.2s linear;
}
.progress-bar .step .check{

  font-size: 15px;
  transform: translate(-50%, -50%);
  display: none;
  
}
.progress-bar .step .check.active{
  display: none;
  color: #fff;
}
.form-outer form{
  width: 50%;
}
.product-desc{
  display: flex;
  margin-top: 10px;
  margin-bottom: 0px;
}
.product-desc img{
  display: flex;
  justify-content: center;
 vertical-align: center;
  height: auto;
  width: 70px;
}
.product-desc p{
 line-height: 16px;
 font-size: 12px;
 color: rgb(0,0,0,0.7);
 padding: 0px;
 margin: 0px;
}
.tbl-head{
  opacity: .6;
  background-color: #eeeeef;
}
.tbl-info{
  font-size: 12px;
  margin-top: 0px;
}
.title-in{
  font-weight: 500;
    font-size: 14px;
}
.title-in a{
  font-weight: 500;
    font-size: 12px !important;
    text-decoration: none !important;
    color: #3a3b3c;
}
.charge-info{
  font-size: 14px;
  
    color: #5b5b5b;
}
.charge{
  -webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1); 
box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1);
padding: 10px;
}
.info-all{
  -webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1); 
box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1);
padding: 10px;
transition: 0.3s;
padding-bottom: 0px;
}
.info-all:hover{
 background: rgb(0,0,0,0.1);
}
.info-all table{
 
}
.charge-info table{
  width: 100%;
}
.charge-info table tr td:nth-child(2){
  text-align: right;
}
.charge-info table tr td{
  padding: 5px !important;
  color: rgb(0,0,0,0.7);
}
small{
  color: rgb(0,0,0,0.7);
}
.payment-opt:focus{
  background: rgb(0,0,0,0.6) !important;
}
.carddiv label{
  font-size: 16px;
  font-weight: bold;
}
.payment-opt span{
  font-size: 16px;
  font-weight: 500;
}
.payment-opt p{
  font-size: 12px;
  font-weight: 400;
  margin-left: 15px;
  color: rgb(0,0,0,0.6);
}
.payment-opt{
  padding: 10px 10px 1px 10px;
  -webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1); 
  box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1);
  margin: 10px 0px;
}
.payment-opt:hover{
  background: rgb(0,0,0,0.1);
  cursor: pointer;
}
.payment-opt:active{
  background: rgb(0,0,0,0.1);
  
}
.payment-opt input{
   background: rgb(0,0,0,0.1);
}
#cards{
  display: none;
  background: rgb(0,0,0,0.1);
  padding: 20px;
}
#cards input{
  background: rgb(0,0,0,0.1);
}
#easypaisa{
  display: none;
  background: rgb(0,0,0,0.1);
  padding: 20px;
}
#easypaisa input{
  background: rgb(0,0,0,0.1);
}
#jazzcash{
  display: none;
  background: rgb(0,0,0,0.1);
  padding: 20px;
}
#jazzcash input{
  background: rgb(0,0,0,0.1);

}
.pro-det{
  display: flex;
}
.pro-det p{
  font-size: 12px;
  color: rgb(0,0,0,0.6);
  line-height: 10px;
  margin-left: 20px;
}

.delivery-ad{
 
  margin-top: 10px;
}
.delivery-ad b{
  font-size: 18px;
  font-weight: 600;
  line-height: 60px;
}
.delivery-ad p{
  font-size: 14px;
  line-height: 10px;
  color: rgb(0,0,0,0.6);
}
.payment-confirm b{
  font-size: 18px;
  font-weight: 600;
  line-height: 60px;
}
.payment-confirm{
  margin-top: 10px;
}
.pay-co span{
  color: rgb(0,0,0,0.6);
}
.btstyle button{
  width: 315px;
}
.mod-otp{
  position: absolute;
  top: 0%;
  left: 0%;
  height: 100%;
  width: 100%;
  background: rgb(0,0,0,0.3);
  display: none;
    z-index: 2;
}
.p-mod{
  position: relative;
  top: 30%;
  left: 30%;
  width: 35%;
  background: #fff;
  border: 1px solid #ddd;
  z-index: 3;
  box-shadow: 1px 1px 1px 1px 0.5;
}
.p-mod{
  text-align: center;
  padding: 30px;
}
.p-mod p{
  margin-top: 10px;
}
  </style>
  <body>

 <!-- Modal -->
                                    <div class="mod-otp" id="showotp">

                                     
                                      <div class="p-mod">
                                        <h6>Verify your mobile number</h6> 
                                      
                                      <p>OTP has been sent to your mobile number</p>
                                      <p>+923135074329</p><a href="">Change</a>

                                      <input type="" name="" placeholder="Enter 4 digit OTP">
                                      <a href="">Resend OTP</a>
                                      </div>
                                    </div>

  <!----------------- Container starts here ----------------->
<div class="container">
      <!----------------- Row1 starts here ----------------->
      <div class="row">
      

          <div class="col-sm-2">
            <h4>Zmall</h4>
          </div>
          <!----------------- Progress starts here ----------------->
          <div class="col-sm-6">
              <div class="progress-bar">
                 <div class="step">
                  
                    <div class="bullet">
                      <span>1</span>
                    </div>
                  <div class="check fas fa-check">
                  </div>
                   <p>ADDRESS</p>
                  </div>
                  <div class="step">
                      
                    <div class="bullet">
                       <span>2</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p> SHIPPING</p>
                    </div>
                    <div class="step">
                      
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>PAYMENT METHOD</p>
                    </div>
                    <div class="step">
                        
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>REVIEW & PAY</p>
                    </div>
              </div>
            </div>
            <!----------------- /Progress ----------------->
      </div>
      <!----------------- /Row1 ----------------->

      <!----------------- Row2 Ends here ----------------->
      <div class="row">
          <div class="form-outer">
                 <form id="checkout-form" class="clearfix section-white p-sm" method="POST" action="{{ route('savecheckout') }}" enctype="multipart/form-data">
                  @csrf
                  <!----------------- PAGE1 STARTs here ----------------->
                  <div class="page slide-page">
                            <div class="title">
                              Enter a New Address
                            </div>

                            <div class="row">
                              <div class="col">
                                <label>First Name *</label>
                                <input type="text" class="form-control" aria-label="Name"  name="first_name" placeholder=" First Name" value="{{ $first_name}}">
                              </div>
                              <div class="col">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" aria-label="Name"  name="last_name" placeholder="Last Name" value="{{ $last_name}}">
                              </div>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Phone Number *</label>
                              <input type="text" class="form-control" type="tel" name="phone" placeholder="Telephone">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Email *</label>
                              <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $email }}">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Address *</label>
                              <input type="text" class="form-control" name="address" placeholder="Address" value="@if(!empty($address->address)){{ $address->address }}@endif">
                            </div>
                            <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">City *</label>
                              <select class="form-control citiesdropdownfield" name="city" id="" required="required">
                                <option value="" disabled selected>Select The City</option>
                                @if(!empty($cities))
                                @foreach($cities as $c)
                                 <option value="{{$c->name}}" {{$c->name ==  $alreadycity ? 'selected' : ''}}>{{$c->name}}</option>
                                @endforeach
                                @endif          
                      </select>
                            </div>
                            <div class="row">
                              
                              <div class="col">
                                <label>Postal Code *</label>
                                <input type="text" class="form-control">
                              </div>
                               
                              <div class="col">
                                <label>Country *</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>


                            <div class="field">
                             <button class="firstNext next">Deliver to this Address</button>
                             </div>
                  </div>
                  <!----------------- PAGE1/ ----------------->

                  <!----------------- page2 starts here ----------------->
                    <div class="page">
                          <div class="title">
                           Shipping Partner
                          </div>
                          <div class="row">
                          <div class="col-sm-8">
                            <?php $product_total_price= "" ?>
                            @if($cart_products->count() >0)
                            @foreach($cart_products as $p)
                            <div class="info-all">
                                  <div class="title-in">
                                    1 Item from {{$p->userinfo->business_name}}
                                  </div>
                                  <div class="product-desc">
                                      <div class="pro-img">
                                        <img src="{{ asset('/storage/uploads/'.$p->images) }}" alt="IMG">
                                      </div>
                                      <div class="pro-details">
                                        <p class="pro-tit"><?= wordwrap($p->title, 30, "<br>", true); ?></p>  
                  <?php $get_color_info =  ProductAttributes::where('id', $product_color[$p->id])->first();
                    if(!empty($get_color_info)){
                       $product_color_name = $get_color_info->attributeinfo->name;
                            $product_color_price = $get_color_info->price;
                    }else{
                         $product_color_name = '';
                         $product_color_price = 0;
                    }
                 $get_size_info =  ProductAttributes::where('id', $product_size[$p->id])->first();
                if(!empty($get_size_info)){
               $product_size_name = $get_size_info->attributeinfo->name;
                 $product_size_price = $get_size_info->price;
                        }else{
               $product_size_name = '';
              $product_size_price = 0;
                   }
               $product_total_price = $p->price + $product_size_price + $product_color_price;
                  ?>  
                        <?php if(!empty($product_color_name)) { ?> <?= " <p class='pro-tit-sec'>Color:</p> ".$product_color_name;?> <?php } ?> 
                            <?php if(!empty($product_size_name)) { ?> <?= "<p class='pro-tit-sec'>Size :</p>  ".$product_size_name; ?> <?php } ?>           
                     </div>
                     </div>
                      <br>
                    <div class="tbl-info">
                    <table class="table table-borderless">
                        <tr class="tbl-head">
                         <td>Shipping Partner</td>
                         <td>Fee</td>
                          <td>Delivery Time</td>
                          </tr>
                         <tr>
                         <td>Assigned Later</td>
                         <td>Free Delivery</td>
                       <td>4-5 working days</td>
                                    </table>
                                  </div>
                                </div>
                                @endforeach
                                @endif
                              </div>

                  <div class="col-sm-4 charge">
                  <div class="title-in">
                      PRICE SUMMARY
                    </div>
                  <div class="charge-info">
                  <table class="table table-borderless">
                      <tr>
                    <td colspan="2">Items</td>
                    <td colspan="2" class="sub-total sub_total_price" style="text-align: right;">PKR {{$product_total_price}}</td>
                  </tr>
                   <tr>
                    <td colspan="2">Subtotal</td>
                    <td colspan="2" class="sub-total sub_total_price" style="text-align: right;">PKR {{$product_total_price}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Delivery</td>
                    <td colspan="2" style="text-align: right;">PKR 00.00</td>
                  </tr>
                  <tr>
                    <td colspan="2">Grand Total</td>
                    <td colspan="2" class="total cart_total_amount" style="text-align: right;">PKR {{$product_total_price}}</td>
                  </tr>
                </table>
              </div>
                <hr>
               <div class="field btns btstyle">
                    <!-- <button class="prev-1 prev">Back to Shipping Address</button> -->
                 <button class="next-1 next">Continue</button>
                            </div>
                          </div>
                          </div>

                    </div>
                    <!----------------- /page2 ----------------->




                    <!----------------- page3 starts here ----------------->
                      <div class="page">
                          
                          <div class="row">
                            <div class="title">
                                  Select Payment Method 
                                  <br>
                                    <small>
                                    You'll have a chance to review your order before it's placed
                                    </small>
                                  </div>
                            <div class="col-sm-8">

                             
                                  

                                  <div class="payment-opt" id="mod-show" onclick="otp()">
                                    <input type="radio" name="pt"> <span>Cash On Delivery</span>
                                    <p>
                                      A cash payment will be collected at the time of delivery of your order.
                                    </p>
                                  </div>
                                  
                                  <div class="payment-opt" onclick="jz()">
                                    <input type="radio" name="pt"> <span>JazzCash</span>
                                    <p>
                                      Pay your amount through JazzCash.
                                    </p>
                                  </div>
                                  <div class="" id="jazzcash"> 
                                    <label class="pay">Enter Your JazzCash Account Number</label>
                                     <input type="text" name="" id="ep_no" placeholder="03xx-xxxxxxx" class="form-control" minlength="11" maxlength="11"> 
                                   </div>
                                  <div class="payment-opt" onclick="ep()">
                                    <input type="radio" name="pt"> <span>EasyPaisa</span>
                                    <p>
                                      Pay your amount through Easypaisa.
                                    </p>
                                  </div>
                                  <div class="" id="easypaisa"> 
                                    <label class="pay">Enter Your Easypaisa Account Number</label>
                                     <input type="text" name="" id="ep_no" placeholder="03xx-xxxxxxx" class="form-control" minlength="11" maxlength="11"> 
                                   </div>

                                   




                                  <div class="payment-opt" onclick="cardpay()">
                                    <input type="radio" name="pt"> <span>Credit / Debit Card</span>
                                    <p>
                                      A cash payment will be collected by your debit/credit card.
                                    </p>
                                  
                                    <div class="cards">
                                      <small>SUPPORTED CARDS</small><br>
                                      <img src="" alt="IMG">
                                       <img src="" alt="IMG">
                                        <img src="" alt="IMG">
                                    </div>
                                    </div>
                                    <div class="carddiv" id="cards">
                                  

                                   
                                                <div class=""> <label class="pay">Card Number</label>

                                                 <input type="text" name="cardno" id="cr_no" placeholder="xxxx-xxxx-xxxx-xxxx" class="form-control" minlength="19" maxlength="19"> 
                                                </div>
                                              
                                                <div class=""> <label class="pay">Name on card</label> <input type="text" name="cardno" id="cr_no" placeholder="Card Name" minlength="19" class="form-control" maxlength="19"> 
                                                </div>
                                                <div class="row">
                                                <div class="col-4 col-md-6">
                                                  <label class="pay">Expiration Date</label> 
                                                   <input type="text" name="exp" id="exp" class="form-control" placeholder="MM/YY" minlength="5" maxlength="5"> 
                                               </div>
                                                  <div class="col-4 col-md-6"> 
                                                    <label class="pay">CVV</label> 
                                                    <input type="password" name="cvcpwd" class="form-control" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> 
                                                  </div>
                                                  </div>
                                    

                                    </div>
                                
                              </div>
                              <div class="col-sm-4 charge">
                                  <div class="title-in">
                                    PRICE SUMMARY
                                  </div>
                                  <div class="charge-info">
                                    <table class="table table-borderless">
                                      <tr>
                                        <td>Items</td>
                                        <td>PKR {{$product_total_price}}</td>
                                      </tr>
                                      <tr>
                                        <td>Subtotal</td>
                                        <td>PKR {{$product_total_price}}</td>
                                      </tr>
                                      <tr>
                                        <td>Delivery</td>
                                        <td>PKR 00.00</td>
                                      </tr>
                                     <tr>
                                        <td>Grand Total</td>
                                        <td>PKR {{$product_total_price}}</td>
                                      </tr>
                                    </table>
                                  </div>
                                    <hr>
                                    <div class="field btns btstyle">
                                      <!-- <button class="prev-1 prev">Back to Shipping Address</button> -->
                                      <button class="next-2 next">Continue</button>
                                    </div>
                              </div>
                          </div>
                      
                      </div>
                      <!----------------- /page3 ----------------->



                      <!----------------- page4 starts here ----------------->
                      <div class="page">
                        <div class="title">
                              Review and Place your order:
                          </div>
                        <div class="row">
                          <div class="col-sm-4">
                            
                            <!-- <div class="delivery-ad">
                              <b>Delivery Address</b>
                              <p>Hasham Rehmat</p>
                              <p>White House, President Wah Cantt</p>
                              <p>Rawalpindi, <span>Pakistan</span> <span>539457</span></p>
                              <P>pHONE: +923135074329</P>
                            </div> -->

                            <div class="delivery-ad">
                              <b>Shipping Summary</b>
                              <p>Shipping from <span>Islamabad</span></p>
                              <p>Assigned Later - {{$product_total_price}} / 4-5 working days</p> 
                              @if($cart_products->count() >0)
                            @foreach($cart_products as $p)
                              <div class="pro-det">
                                <div>
                                  <img src="{{ asset('/storage/uploads/'.$p->images) }}" alt="IMG">             
                                </div>
                                <div>
                                  <p>Name: <?= wordwrap($p->title, 30, "<br>", true); ?></p>
                                  <p>color: Black</p>
                                   <?php $get_color_info =  ProductAttributes::where('id', $product_color[$p->id])->first();
                    if(!empty($get_color_info)){
                       $product_color_name = $get_color_info->attributeinfo->name;
                            $product_color_price = $get_color_info->price;
                    }else{
                         $product_color_name = '';
                         $product_color_price = 0;
                    }
                 $get_size_info =  ProductAttributes::where('id', $product_size[$p->id])->first();
                if(!empty($get_size_info)){
               $product_size_name = $get_size_info->attributeinfo->name;
                 $product_size_price = $get_size_info->price;
                        }else{
               $product_size_name = '';
              $product_size_price = 0;
                   }
               $product_total_price = $p->price + $product_size_price + $product_color_price;
                  ?>  
                        <?php if(!empty($product_color_name)) { ?> <?= " <p>Color:</p> ".$product_color_name;?> <?php } ?> 
                            <?php if(!empty($product_size_name)) { ?> <?= "<p>Size :</p>  ".$product_size_name; ?> <?php } ?>
                                </div>
                              </div>
                              @endforeach
                              @endif
                            </div>

                          </div>
                          <div class="col-sm-4">
                            <div class="payment-confirm">
                              <b>
                              Payment Method 
                              </b> <!-- <a href="#" style="color: #fe9126; text-decoration: none; margin-left: 10px;">Edit</a> -->
                              
                            </div>
                            <div class="pay-co">
                              <!-- <img src="" alt="IMG"> <span>Ending With - <b>3145</b></span> -->
                              <p>Cash On Delivery</p>
                            </div>
                            
                          </div>
                          <div class="col-sm-4 charge">
                                  <div class="title-in">
                                    PRICE SUMMARY
                                  </div>
                                  <div class="charge-info">
                                    <table class="table table-borderless">
                                      <tr>
                                        <td>Items</td>
                                        <td>PKR {{$product_total_price}}</td>
                                      </tr>
                                      <tr>
                                        <td>Subtotal</td>
                                        <td>PKR {{$product_total_price}}</td>
                                      </tr>
                                      <tr>
                                        <td>Delivery</td>
                                        <td>PKR 00.00</td>
                                      </tr>
                                     <tr>
                                        <td>Grand Total</td>
                                        <td>PKR {{$product_total_price}}</td>
                                      </tr>
                                    </table>
                                  </div>
                                    <hr>
                                    <div class="field btns btstyle">
                                      <!-- <button class="prev-1 prev">Back to Shipping Address</button> -->
                                      <input type="submit" name="proceed_to_payment" class="next-2 next">Place Order</input>
                                    </div>
                              </div>
                        </div>                      
                      </div>
                      <!----------------- /page4 ----------------->

              </form>

          </div>
          <!----------------- Outerpage/  ----------------->
          
          </div>
          <!----------------- Row2/ ----------------->
          
</div>
<!----------------- /Container ----------------->
<!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<!-- <script src="script.js"></script> -->


<script type="text/javascript">
  

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
function cardpay() {
  var x = document.getElementById("cards");
  var y = document.getElementById("easypaisa");
  var z = document.getElementById("jazzcash");
  if (x.style.display == "block") {
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "none";
  } else {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  }
}
function ep() {
  var x = document.getElementById("cards");
  var y = document.getElementById("easypaisa");
  var z = document.getElementById("jazzcash");
  if (y.style.display == "block") {
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "none";
  } else {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
  }
}
function jz() {
  var x = document.getElementById("cards");
  var y = document.getElementById("easypaisa");
  var z = document.getElementById("jazzcash");
  if (z.style.display == "block") {
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "none";
  } else {
    z.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
  }


}
function otp() {
  var x = document.getElementById("cards");
  var y = document.getElementById("easypaisa");
  var z = document.getElementById("jazzcash");
  var a = document.getElementById("showotp");
  if (a.style.display == "block") {
    x.style.display = "none";
    y.style.display = "none";
    a.style.display = "none";
    z.style.display = "none";
  } else {
    a.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
    z.style.display = "none";
  }


}

$('.payment-opt').click(function() {

  $(this).find('input[name="pt"]').prop('checked', true) 
});
</script>




  </body>
</html>
