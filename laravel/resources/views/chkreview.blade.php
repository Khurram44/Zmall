<?php use App\ProductAttributes; 
use App\Cart;
use App\CartProducts; ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/checkout-style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
      .delivery-ad p {
    font-size: 14px;
    line-height: 20px;
    color: rgb(0,0,0,.9);
}
 @media screen and (min-width: 800px){
                .container, .container-md, .container-sm {
                    max-width: 1080px !important;
                }
                .form-outer form .page .field {
                    width: AUTO;
                    height: 45px;
                    margin: 45px 0;
                    display: flex;
                    position: relative;
                }
               
        }
  </style>
  
  
  
  </head>

  <body>


  <!----------------- Container starts here ----------------->
<div class="container">
      <!----------------- Row1 starts here ----------------->
      <div class="row">
      

          <div class="col-sm-2">
           <a href="/home"> <img src="/frontend/logo/zmalllogo-b.png" style="width:120px;"> </a>
          </div>
          @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
            @endif
          <!----------------- Progress starts here ----------------->
          <div class="col-sm-6">
              <div class="progress-bar">
                 <div class="step">
                  
                    <div class="bullet active">
                      <span>1</span>
                    </div>
                  <div class="check fas fa-check">
                  </div>
                   <p>ADDRESS</p>
                  </div>
                    <div class="step">
                      
                    <div class="bullet active">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>PAYMENT METHOD</p>
                    </div>
                    <div class="step">
                        
                    <div class="bullet">
                        <span>3</span>
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
                 <form id="checkout-form" class="clearfix section-white p-sm"  action="{{ route('chkreview') }}">
                      <!----------------- page4 starts here ----------------->
                      <div class="page">
                        <div class="title">
                              Review and Place your order:
                          </div>
                        <div class="row">
                          <div class="col-sm-4">
                            
                            <div class="delivery-ad">
                              <b>Delivery Address</b>
                              <p>{{$details->first_name.' '.$details->last_name}}</p>
                              <p>{{$details->address}}</p>
                              <p>{{$details->city}}, <span>Pakistan</span> <span>{{$details->zip_code}}</span></p>
                              <P>pHONE: {{$details->phone}}</P>
                            </div>

                            <div class="delivery-ad">
                              <b>Shipping Summary</b>
                              <p>Shipping from <span>Wah Cantt</span></p>
                              <p>Assigned Later - {{$details->grand_total}} PKR (4-5 working days)</p> 
                              @if($cart_products->count() >0)
                              @foreach($cart_products as $p)
                              <div class="pro-det">
                                <div>
                                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" alt="IMG" style="height:100px;">             
                                </div>
                                <div>
                                  <p>Name: <?= wordwrap($p->title, 30, "<br>", true); ?></p>
                                  
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
               $Cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
               $Cartquan = CartProducts::where('cart_id', $Cart->id)->first();
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
                                        <td>PKR. {{$Cartquan->quantity}}</td>
                                      </tr>
                                      <tr>
                                        <td>Subtotal</td>
                                        <td>PKR. {{$Cart->sub_total}}</td>
                                      </tr>
                                      <tr>
                                        <td>Delivery</td>
                                        <td>PKR. {{$Cart->shipment}}</td>
                                      </tr>
                                     <tr>
                                        <td>Grand Total</td>
                                        <td>PKR. {{$Cart->grand_total}}</td>
                                      </tr>
                                    </table>
                                  </div>
                                    <hr>
                                    <div class="field btns btstyle">
                                      <!-- <button class="prev-1 prev">Back to Shipping Address</button> -->
                                      <button class="next-2 next">Place Order</button>
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
$('.payment-opt').click(function() {

  $(this).find('input[name="pt"]').prop('checked', true) 
});
</script>


  </body>
</html>
