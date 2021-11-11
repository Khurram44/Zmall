@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<?php use App\ProductAttributes; ?>

<style type="text/css">
  section{
    font-family: circular, Arial, sans-serif;
  }
  .top-b-section{
    width: 100%;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f2f2f2),to(#fafafa));
    margin-top: 60px;

  }
  .sell-top-nav{
    justify-content: center;
    position: relative;
    padding: 4px 0;
  }
  .sell-top-tit{
    font-size: 12px;
    color: #282c3f;
    vertical-align: middle;
    line-height: 26px;
    font-family: circular, Arial, sans-serif;
}
  .order-summary{
    font-family: circular, Arial, sans-serif;
  }
  .order-summary h3{
    font-size: 16px;
    font-weight: 600;
    padding-left: 0;
    font-family: circular, Arial, sans-serif;

}
    
  .details a{
    font-size: 16px !important;
    color: #3a3b3c;
    font-weight: 500 !important;
   
  }

  .checkot{
    -webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1); 
box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1);
  }
  .checkot h3{
    font-size: 13px;
    font-weight: 600;
    color: #303030;
    text-transform: uppercase;
    padding: 10px;
  }

.checkot .cpn a{
  font-size: 13px;
    color: #5b5b5b;
    padding: 16px 10px;
    cursor: pointer;
  }
.cart-note{
  margin: 10px;

 -webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1); 
box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1);
}
.cart-note p{
  font-size: 12px;
  font-weight: 400;
  padding: 10px !important;

}
.chkbtn{
  text-align: center;
  margin-top: 20px;
  display: flex;
  flex-direction: column;
}
.chkbtn a{
  padding: 5px 20px;
  background: #fe9126;
  color: #fff;

}
.chkbtn1{
   padding: 5px 20px;
  background: #fe9126;
  color: #fff;
  outline: none !important;
  border:none;
}
.cards img{
  width: 50px;
}
.fa-close{
    color: red;
    font-size: 20px;
    vertical-align: middle;
    border: 1px solid red;
    opacity: 0.5;
}
 @media screen and (max-width:800px){
     .top-b-section{
         margin-top:0px;
     }
     .details{
         padding:0px 20px !important;
     }
     .details a{
         font-size: 12px !important;
         font-weight: 500 !important;
         
     }
     .checkot .cpn-m{
      
      display:flex;
      justify-content: space-around;
      align-items: center;
      }
      .cpn-m{
          height: 30px;
      }
      .checkot .cpn a{
          padding: 0px;
          text-align: center;
      }
       .cpn-m input {
    border: 1px solid #999;
    outline: none;
    padding: 5px 10px;
    }
    .cpn-m button{
        background: #fe9126;
        color: #fff;
        outline: none;
        border: none;
        padding: 5px 10px;
    }
    .qty span{
        color:#333;
    }
 
 }
  </style>
  <section class="top-b-section">

    <div class="container">
      <div class="sell-top-nav">
        <div class="row">
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
              <span>Free Returns</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
              <span> 100% Authentic</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
              <span> Secure Payments</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><a href="" style="text-decoration: none;  color: #282c3f;">Return & Refund Policies</a> </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="clearfix section-white">
          <div class="col-md-9 col-sm-9">
            <div class="order-summary clearfix">
              @if(!empty($order))
              <input type="hidden" id="already" value="{{$order}}">
              @else
              <input type="hidden" id="already" value="">
              @endif
                <h3 class="title" style="margin-top: 10px;">Shopping Cart</h3>
               @if (session('status'))
      <div class="alert alert-danger">
          {{ session('status') }}
      </div>
      @endif
              <form method="POST" action="{{ route('savecart') }}" enctype="multipart/form-data">
                            @csrf
              <table class="shopping-cart-table table">
                
                <tbody>
                  @if(!empty($cart_products))
                    @foreach($cart_products as $p)
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
                          if(!empty($p->discount_price)){
                          $product_total_price = $p->discount_price;
                          
                        }
                          else{
                            $product_total_price = $p->price;
                          }
                  ?>
                  <tr style="border-bottom: 0px;">
                    <td class="thumb"><img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" alt=""></td> 
                    <td class="details">
                      <input type="hidden" name="productId[]" value="{{$p->id}}">
                      <a href="{{url('product-detail/'.$p->slug)}}">
                        <?= substr($p->title,0,50)."....."; ?>
                      </a>
                      <br>
                      <?php if(!empty($product_color_name)) { ?> <?= " <b>Color:</b> ".$product_color_name;?> <?php } ?>
                   <?php if(!empty($product_size_name)) { ?> <?= "<b>Size:</b> ".$product_size_name; ?> <?php } ?>
                    </td>
                   
                    <td class="price text-center"><strong id="product_formated_price_{{ $p->id }}">PKR {{ number_format($product_total_price,2) }}</strong>
                      <!-- <br><del class="font-weak"><small>PKR 40.00</small></del> -->
                      <br>
                   <div class="qty" style="display: inline; margin-top: 10px;">
                      <span>Quantity: </span><span><input class="input product_quantity" name="quantity[{{ $p->id }}]" id="{{ $p->id }}" type="number"  value="1" required="required" style="width: 50px;"></span>
                    </div>
                    
                    </td>
                    <td class="total text-center">
                      <input type="hidden" name="size[{{ $p->id }}]"  value="{{ $product_size_name }}">
                      <input type="hidden" name="size_price[{{ $p->id }}]" id="size_price_{{ $p->id }}" value="{{ $product_size_price }}">
                      <input type="hidden" name="color[{{ $p->id }}]"  value="{{ $product_color_name }}">
                      <input type="hidden" name="color_price[{{ $p->id }}]" id="color_price_{{ $p->id }}" value="{{ $product_color_price }}">
                      <input type="hidden" name="product_price[{{ $p->id }}]" id="product_price_{{ $p->id }}" class="" value="{{ $p->price }}">
                      <input type="hidden" name="product_total_price[{{ $p->id }}]" id="product_total_price_{{ $p->id }}" class="calculate_this_price" value="{{ $product_total_price }}">
                     
                    </td>
                   
                    
                      
                  <br>
                    <td colspan="6" style="color: rgb(0,0,0,0.5);">
                      <a href="{{url('remove/'.base64_encode($p->id))}}" onclick="return confirm('Are you sure you want to delete?');" class=""><i class="fa fa-close"> </i>
                     </a>
                  
                      <input type="hidden" name="product_id[]" value="{{ $p->id }}">
                    </td>
                  </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
          @if(!empty($type))
              <input type="hidden" name="discountType" id="discountType" value="{{$type}}">
              <input type="hidden" name="discountamount" id="discountAmount" value="{{$discount}}">
              <input type="hidden" name="code" id="code" value="{{$code}}">
          @else
              <input type="hidden" name="discountType" id="discountType" value="">
              <input type="hidden" name="discountamount" id="discountAmount" value="">
              <input type="hidden" name="code" id="code" value="">
          @endif
            <div class="col-sm-3 checkot">
              
              <div class="cpn">
                <h3>Offers</h3>
                <div class="cpn-m">
                <a>Voucher Code</a>
                
                <input type="text" name="voucherCode"  style="border:1px solid #ddd; outline: none; background: #fff; padding: 2px 5px; color: 333;">
                <button type="submit" formaction="/applyVoucher" style="border:1px solid #ddd; outline: none; background: #fff; padding: 2px 5px; color: 333;">Apply</button>
               </div>
              </div>
              <hr>
              <div>
                <h3>PRICE SUMMARY</h3>

                <table class="table table-borderless">
                  <tr>
                    <td colspan="2">Items</td>
                    <td colspan="2" class="sub-total sub_total_price" style="text-align: right;">PKR 00.50</td>
                  </tr>
                   <tr>
                    <td colspan="2">Subtotal</td>
                    <td colspan="2" class="sub-total sub_total_price" style="text-align: right;">PKR 00.50</td>
                  </tr>
                  <tr id="del-opt" style="display:contents;">
                    <td colspan="2">Delivery Charges</td>
                    <td colspan="2" class="total_shipment_charges" style="text-align: right;">PKR 00.50</td>
                  </tr>
                  <tr>
                    <td colspan="2">Grand Total</td>
                    <td colspan="2" class="total cart_total_amount" style="text-align: right;">PKR 00.50</td>
                  </tr>
                </table>

              </div>
              <hr>
              <div class="cart-note">
               <p>NOTE:Delivery fee is calculated on a per seller basis. Spend at least 500 PKR per seller to enjoy free shipping</p>
              </div>

              <div class="chkbtn">
                <input type="hidden" name="shipment_charges" id="total_shipment_charges">
                <input type="hidden" name="cart_total_amount" id="cart_total_amount">
                <input type="hidden" name="sub_total_price" id="sub_total_price">
                
                <br>
                <input type="submit" name="place_order" class="chkbtn1" value="CHECKOUT">
              </div>
              <hr>
              <div class="cards">
                <b>EASY AND SECURE PAYMENTS</b> <br>
                <div style="display: inline; justify-content: space-around;">
                  <img src="/frontend/img/visa.png" alt="visa">
                  <img src="/frontend/img/master.png" alt="master">
                  <img src="/frontend/img/easypaisa.jpg" alt="easypaisa">
                  <img src="/frontend/img/jazzcash.png" alt="jazzcash">
                </div>
              </div>
            </div>
              </form>
            </div>

          </div>
        </div>
        
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /section -->
<script type="text/javascript">
  

$(".product_quantity").click(function(){ 
  var quantity = $(this).val();
  
  var id = $(this).attr("id");
  var price = $("#product_total_price_"+id).val();
  var size = $("#size_price_"+id).val();
  var color = $("#color_price_"+id).val();
  var newprice = Number(price) + Number(size) + Number(color);

  var sub_total_price = quantity * newprice;
  $("#product_total_price_"+id).val(sub_total_price);
  $("#product_total_price_"+id).val(sub_total_price);
  $(".product_quantity_"+id).text("PKR "+sub_total_price.toFixed(2));
  calculatetotal();
});
$(".product_quantity").keyup(function(){ 
  var quantity = $(this).val();
  
  var id = $(this).attr("id");
  var price = $("#product_total_price_"+id).val();
  var size = $("#size_price_"+id).val();
  var color = $("#color_price_"+id).val();
  var newprice = Number(price) + Number(size) + Number(color);

  var sub_total_price = quantity * newprice;
  $("#product_total_price_"+id).val(sub_total_price);
  $("#product_total_price_"+id).val(sub_total_price);
  $(".product_quantity_"+id).text("PKR "+sub_total_price.toFixed(2));
  calculatetotal();
});

function calculatetotal(){
  var sum = 0;
    var type = document.getElementById('discountType').value;
    var amount = document.getElementById('discountAmount').value;
    $('.calculate_this_price').each(function() {
        sum += parseFloat($(this).val());
    });
    if(sum >= 500 && sum < 3000){
      if(document.getElementById('already').value != ""){
      var shipment_charges = 150;
      var add_shippment_charges = Number(sum) + Number(shipment_charges);
      if(type != "" && amount != ""){
        if (type == 'Fix Amount'){
          sum = sum - amount;
        }
        if (type == 'By Percentage'){
          sum = sum/amount * 100 ;
        }
        $("#sub_total_price").val(sum);
      $(".sub_total_price").text("PKR "+sum.toFixed(2));
      $("#total_shipment_charges").val(shipment_charges);
      $(".total_shipment_charges").text("PKR "+shipment_charges.toFixed(2));
      $("#cart_total_amount").val(add_shippment_charges);
      $(".cart_total_amount").text("PKR "+add_shippment_charges.toFixed(2));
      }
      else{
      $("#sub_total_price").val(sum);
      $(".sub_total_price").text("PKR "+sum.toFixed(2));
      $("#total_shipment_charges").val(shipment_charges);
      $(".total_shipment_charges").text("PKR "+shipment_charges.toFixed(2));
      $("#cart_total_amount").val(add_shippment_charges);
      $(".cart_total_amount").text("PKR "+add_shippment_charges.toFixed(2));
    }
  }
  else{
    if(type != "" && amount != ""){
        if (type == 'Fix Amount'){
          sum = sum - amount;
        }
        if (type == 'By Percentage'){
          sum = sum/amount * 100 ;
        }
        $("#sub_total_price").val(sum);
        $(".sub_total_price").text("PKR "+sum.toFixed(2));
        $("#total_shipment_charges").val(0);
        $(".total_shipment_charges").text("Free Shippment");
        $("#cart_total_amount").val(sum);
        $(".cart_total_amount").text("PKR "+sum.toFixed(2));

      }
      else{
      $("#sub_total_price").val(sum);
        $(".sub_total_price").text("PKR "+sum.toFixed(2));
        $("#total_shipment_charges").val(0);
        $(".total_shipment_charges").text("Free Shippment");
        $("#cart_total_amount").val(sum);
        $(".cart_total_amount").text("PKR "+sum.toFixed(2));
      
    }
  }
    }
    if(sum < 500){
      if(document.getElementById('already').value != ""){
      var shipment_charges = 70;
      var add_shippment_charges = Number(sum) + Number(shipment_charges);
      if(type != "" && amount != ""){
        if (type == 'Fix Amount'){
          sum = sum - amount;
        }
        if (type == 'By Percentage'){
          sum = sum/amount * 100 ;
        }
        $("#sub_total_price").val(sum);
      $(".sub_total_price").text("PKR "+sum.toFixed(2));
      $("#total_shipment_charges").val(shipment_charges);
      $(".total_shipment_charges").text("PKR "+shipment_charges.toFixed(2));
      $("#cart_total_amount").val(add_shippment_charges);
      $(".cart_total_amount").text("PKR "+add_shippment_charges.toFixed(2));
      }
      else{
      $("#sub_total_price").val(sum);
      $(".sub_total_price").text("PKR "+sum.toFixed(2));
      $("#total_shipment_charges").val(shipment_charges);
      $(".total_shipment_charges").text("PKR "+shipment_charges.toFixed(2));
      $("#cart_total_amount").val(add_shippment_charges);
      $(".cart_total_amount").text("PKR "+add_shippment_charges.toFixed(2));
    }
  }
  else{
    if(type != "" && amount != ""){
        if (type == 'Fix Amount'){
          sum = sum - amount;
        }
        if (type == 'By Percentage'){
          sum = sum/amount * 100 ;
        }
        $("#sub_total_price").val(sum);
        $(".sub_total_price").text("PKR "+sum.toFixed(2));
        $("#total_shipment_charges").val(0);
        $(".total_shipment_charges").text("Free Shippment");
        $("#cart_total_amount").val(sum);
        $(".cart_total_amount").text("PKR "+sum.toFixed(2));

      }
      else{
      $("#sub_total_price").val(sum);
        $(".sub_total_price").text("PKR "+sum.toFixed(2));
        $("#total_shipment_charges").val(0);
        $(".total_shipment_charges").text("Free Shippment");
        $("#cart_total_amount").val(sum);
        $(".cart_total_amount").text("PKR "+sum.toFixed(2));
      
    }
  }
    }
    if(sum >= 3000){
      if(type != "" && amount != ""){
        if (type == 'Fix Amount'){
          sum = sum - amount;
        }
        if (type == 'By Percentage'){
          sum = sum/amount * 100 ;
        }
        $("#sub_total_price").val(sum);
        $(".sub_total_price").text("PKR "+sum.toFixed(2));
        $("#total_shipment_charges").val(0);
        $(".total_shipment_charges").text("Free Shippment");
        $("#cart_total_amount").val(sum);
        $(".cart_total_amount").text("PKR "+sum.toFixed(2));

      }
      else{
      $("#sub_total_price").val(sum);
        $(".sub_total_price").text("PKR "+sum.toFixed(2));
        $("#total_shipment_charges").val(0);
        $(".total_shipment_charges").text("Free Shippment");
        $("#cart_total_amount").val(sum);
        $(".cart_total_amount").text("PKR "+sum.toFixed(2));
      
    }
    }

    
}


calculatetotal();
</script>
@endsection