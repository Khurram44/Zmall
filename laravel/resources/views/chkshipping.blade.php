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
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout-style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
 <style>
        @media (min-width: 768px){
                .container, .container-md, .container-sm {
                    max-width: 1080px !important;
                }
                .pro-details{
                    padding: 10px;
                }
                .form-outer form .page .field {
                    width: auto;
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
                 <form id="checkout-form" class="clearfix section-white p-sm"  action="{{ route('chkshipping') }}">
              

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
                                        <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" alt="IMG">
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
               $Cart = Cart::where('temp_user_id', Session::get('temp_user_id'))->first();
               $Cartquan = CartProducts::where('cart_id', $Cart->id)->first();
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
                         <td>PKR {{$Cart->shipment}} </td>
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
                    <td colspan="2" class="sub-total sub_total_price" style="text-align: right;">{{$Cartquan->quantity}}</td>
                  </tr>
                   <tr>
                    <td colspan="2">Subtotal</td>
                    <td colspan="2" class="sub-total sub_total_price" style="text-align: right;">PKR {{$Cart->sub_total}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Delivery</td>
                    <td colspan="2" style="text-align: right;">PKR {{$Cart->shipment}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Grand Total</td>
                    <td colspan="2" class="total cart_total_amount" style="text-align: right;">PKR {{$Cart->grand_total}}</td>
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

              </form>

          </div>
          <!----------------- Outerpage/  ----------------->
          
          </div>
          <!----------------- Row2/ ----------------->
          
</div>
<!----------------- /Container ----------------->
</script>


  </body>
</html>
