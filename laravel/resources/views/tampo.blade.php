<?php use App\ProductAttributes; ?>
@extends('layouts.app')

@section('content')
<style type="text/css">
.picZoomer{
position: relative;
/*margin-left: 40px;
padding: 15px;*/
}
.picZoomer-pic-wp{
	position: relative;
	overflow: hidden;
    text-align: center;
    height: 300px !important;
    width: auto;
}
.picZoomer-pic-wp:hover .picZoomer-cursor{
	display: block;
}
.picZoomer-zoom-pic{
	position: absolute;
	top: 0;
	left: 0;
}
.picZoomer-pic{
	/*width: 100%;
	height: 100%;*/
}
.picZoomer-zoom-wp{
	display: none;
	position: absolute;
	z-index: 999;
	overflow: hidden;
    border:1px solid #eee;
    height: 460px;
    width: 700px !important;
    margin-top: -19px;
}
.picZoomer-cursor{
	display: none;
	cursor: crosshair;
	width: 100px;
	height: 100px;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 50%;
	border: 1px solid #eee;
	background-color: rgba(0,0,0,.1);
}
.picZoomCursor-ico{
	width: 23px;
	height: 23px;
	position: absolute;
	top: 40px;
	left: 40px;
	background: url(images/zoom-ico.png) left top no-repeat;
}

.my_img {
    vertical-align: middle;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    height: 100%;
}
.piclist li{
	cursor: pointer;
    display: inline-block;
    width: 30px;
    height: 30px;
    margin-top: 5px;
    border: 1px solid #eee;
}
.piclist li img{
	width: 30px;
    height: 30px;
    object-fit: contain;
}

/* custom style */
.picZoomer-pic-wp,
.picZoomer-zoom-wp{
    border: 0px solid #eee;
}



.section-bg {
    background-color: #fff;
}
section {
    padding: 60px 0;
}
.row-sm .col-md-6 {
    padding-left: 5px;
    padding-right: 5px;
}

/*===pic-Zoom===*/
._boxzoom{

}
._boxzoom .zoom-thumb {
    width: 40px;
    display: inline-block;
    vertical-align: top;
    margin-top: 0px;
}
._boxzoom .zoom-thumb ul.piclist {
    padding-left: 0px;
    top: 0px;
}
._boxzoom ._product-images {
    width: 85%;
    display: inline-block;
}
._boxzoom ._product-images .picZoomer {
    width: 100%;
}
._boxzoom ._product-images .picZoomer .picZoomer-pic-wp img {
    left: 0px;
    height: 300px;
    object-fit: contain;
}
._boxzoom ._product-images .picZoomer img.my_img {
    width: 100%;
}
.piclist li img {
    height:30px;
    object-fit:cover;
}
.product-details-content{
	
}
.product-title{
    margin-bottom: 11px;
}
.product-title span{
	color: #212121;
	line-height: 1;
    font-size: 20px;
    font-weight: normal;
    word-break: break-word;
    word-wrap: break-word;
    overflow-wrap: break-word;
    font-weight: 600;
}
.rating-tab{
	display: flex;
}
.rating-tab a{
	margin-left: 5px;
	color: #333;
	font-weight: bold;
	font-size: 14px;
	color: #1a9cb7;
}
.rating-tab i{
	color: #FF9529;
}
.brand span{
	color: #9e9e9e;
    font-size: 12px;
}
.brand{
    vertical-align: middle;
    margin-right: 4px;
    margin-bottom: 5px;
}
.product_price{
	padding-top: 5px;
	display: inline-block;
}
.product_price span{
	font-size: 28px;
	color: #fe9126;
	font-weight: 600;
}
.discount{
	display: flex;
	margin-top: 0px;
	padding-bottom: 15px;
}
.prev-price span del{ 
	color: #9e9e9e;
	font-size: 14px;
}
.discount-perc span{
	font-size: 14px;
    color: #212121;
    margin-left: 6px;
}
.hr{
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
	border-bottom: 1px solid #eff0f5;
}
.color-family{
	padding-top: 25px;
    padding-bottom: 0;
}
.color-family span:nth-child(1){
	width: 92px;
	text-align: left;
}
.color-family span{
	display: inline-block;
    margin-right: 0px;
    color: #757575;
    word-wrap: break-word;
    font-size: 14px;
    font-weight: normal;
    vertical-align: top;
}
.size{
	padding-top: 25px;
    padding-bottom: 0;
}
.size span:nth-child(1){
	width: 92px;
	text-align: left;
}
.size span{
	display: inline-block;
    margin-right: 0px;
    color: #757575;
    word-wrap: break-word;
    font-size: 14px;
    font-weight: normal;
    vertical-align: middle;
    text-align: center;
}
.active-color{
  	border: 2px solid  #fe9126;
  }
.product_size_selected a{
	text-decoration: none;
}
.product_size_selected span{
	padding: 10px;
}
.quantity{
 display: inline-block; 
 vertical-align: middle;
 padding-top: 25px;
}
.quantity span:nth-child(1){
	width: 92px;
	text-align: left;
	margin-right: 10px;
}
.quantity span{
	padding: 7px 0px 8px;
	display: inline-block;
    margin-right: 0px;
    color: #757575;
    word-wrap: break-word;
    font-size: 14px;
    font-weight: normal;
    vertical-align: middle;
    text-align: center;
}
.quantity .input-text.qty {
 width: 35px;
 height: 39px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}
.btn-cart{
background: #fff;
color:#fe9126;
outline: none;
border: 1px solid #fe9126;
}
.btn-cart:hover{
background: #fff !important;
color:#fe9126;
outline: none;
border: 1px solid #fe9126;
}
.btn-buy{
background:#fe9126;
outline: none;
color: #fff;
border: 1px solid #fe9126;
margin-left: 10px;
}
.cart-buttons{
	margin-top: 20px;
}
.cart-buttons button{
	padding: 10px 30px;
}
.cart-buttons button:nth-child(2){
	padding: 10px 60px;
}
.sold_desc table tr td a{
	color: #fe9126;
	font-weight: bold;
	text-decoration: none;
}
.visit_store{
	border: 1px solid #fe9126;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 16px;
	font-weight: 600;
	text-align: center;
	color: #fe9126;
	display: flex;
	justify-content: center;
	align-items: center;
}
.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}
.shipping_info{
	background: rgba(0, 0, 0, 0.01);
}
.return_policy{
	margin-top: 10px;
	background: rgba(0, 0, 0, 0.01);
}
.return_header{
	width: 100%;
	background: rgba(0, 0, 0, 0.05);
	padding: 0px 5px;
}
.return_header b{
	font-size: 14px;
	width: 100%;
	color: #333;
}
.return_desc{
	display: flex;
	justify-content: flex-start;
	padding: 5px;
}
.return-icon{
	margin: 5px 0;
	padding: 0px 10px;
	color: #666;
}
.return-icon-desc{
	display: flex;
	flex-direction: column;
}
.shipping_header{
	width: 100%;
	background: rgba(0, 0, 0, 0.05);
	padding: 0px 5px;
}
.shipping_header b{
	font-size: 14px;
	width: 100%;
	color: #333;
}
.shipping_desc{
	padding: 5px;
}
.shipping_desc span{
	font-size: 14px;
	color: #666;
}
.return-icon-desc span{
	margin: 5px 0;
	font-size: 14px;
	color: #666;
}
.table tr td{
	font-size: 14px;
	color: #666;
}
#tab1{
width:100%;
padding:0px 20px;
}
#tab1 p{
font-size: 14px !important;

}
#tab1 b{
color: #666;

}
#tab1 table tr td{
  border-top: 0px;
  padding: 0px !important: 

}
#tab1 table{
 margin-top: 20px;
 width: 40%;

}
.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 41px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }
  @media screen and (max-width:800px){
      .product-details-content {
    padding: 15px;
}
.cart-buttons button {
    padding: 10px 20px;
}
#services{
    padding-top:0px;
}
.col-md-12{
    padding: 0px;
}
.col-sm-12{
    padding: 0px;
}
#tab1{
    padding:0px;
}
  }
</style>


<section id="services" class="services section-bg" style="padding-bottom:10px ;">
	<div class="container">
		<!-- BREADCRUMB -->
	  <div id="breadcrumb" style="margin-top:40px; background-image: linear-gradient(180deg ,#f2f2f2,#fafafa); box-shadow:none; font-size:12px;">
	    <div class="container">
	      <ul class="breadcrumb">
	        <li><a href="{{asset('/home')}}">Home</a></li> > 
	        <li><a href="{{asset('/products')}}">Products</a></li> > 
	        <li><a href="#">{{ $productdetail->categoryinfo->name }}</a></li> > 
	        <li class="active">{{ $productdetail->title }}</li>
	      </ul>
	    </div>
	  </div>
	  <!-- /BREADCRUMB -->
	</div>
   <div class="container">
      <div class="row row-sm">
         <div class="col-sm-4 _boxzoom">
            <div class="zoom-thumb">
               <ul class="piclist">
               		<li><img class="thumbnail small_img" src="{{ asset('/public/frontend/storage/uploads/'.$productdetail->images) }}"></li>
                  
                  @foreach($product_gallery as $pg)
                      
                     <li><img class="thumbnail small_img" src="{{ asset('/public/frontend/storage/uploads/'.$pg->image) }}"></li> 
                
                  @endforeach

               </ul>
            </div>
            <div class="_product-images">
               <div class="picZoomer">
                  <img id="featured" class="big_img" src="{{ asset('/public/frontend/storage/uploads/'.$productdetail->images) }}">
               </div>
            </div>
         </div>
         <div class="col-sm-5" style="padding-right: 0;">

         	<div class="product-details">
				<div class="product-details-content">
					<div class="product-title">
						<span>{{ $productdetail->title }}</span>
					</div>
					<div class="rating-tab">
						<div class="review-rating">
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
		                      <i class="fa fa-star"></i>
                    	</div>
						<a href="">5 Ratings</a>
					</div>
					<div class="brand">
						<span>Brand: @if(!empty($productdetail->brand_id)){{ $productdetail->brand_id }} @else No Brand @endif</span>
					</div>
					<div class="hr"></div>
					<div class="product_price">
						<span>@if(!empty($productdetail->discount_price))
                    Rs {{ $productdetail->discount_price}}
                    @else Rs. {{ $productdetail->price }}
                    @endif</span>
					</div>
					@if(!empty( $productdetail->discount_price ))
					<div class="discount">
						<div class="prev-price">
							
							<span><del>Rs. {{ $productdetail->price }}</del></span>

						</div>
						<div class="discount-perc">

							<span>{{round((($productdetail->price - $productdetail->discount_price)/($productdetail->price)) * 100) }}%</span>
								
						</div>
					</div>
					@endif
					<div class="hr"></div>
					<!-- @if($ProductColors->count() > 0) -->
					<div class="color-family">
						<span style="margin-right: 10px;">Color Family</span>
						@foreach($ProductColors as $index=>$p)
						<span class="product_color_selected" id="{{ $p->id }}">
							<a href="javascript:void();">
								<span style="height: 20px; width: 20px; border-radius: 10px; background: {{ $p->attributeinfo->name }}; border: 1px solid #ddd;">
								</span>
							</a> 
						</span>
						@endforeach  
					</div>
					<!-- @endif -->
					 @if($Productprice->count() > 0)
					<div class="color-family">
						<span style="margin-right: 10px;">Color Family</span>
						@foreach($Productprice as $index=>$p)
						<span class="product_color_selected">
							<a href="javascript:void();">
								<span style="height: 20px; width: 20px; border-radius: 10px; background: {{ $p->color }}; border: 1px solid #ddd;">
								</span>
							</a> 
						</span>
						@endforeach  
					</div>
					@endif 
					@if(!empty($Productprice))
					<div class="size">
						<?php $z = 0; ?>
			                @foreach($Productprice as $index=>$p)
			                @if(!empty($p->size))
			                @if($z == 0)
						<span style="margin-right: 10px;">Size</span>
							@endif
						<span class="product_size_selected" id="{{ $p->id }}">
							<a href="javascript:void();">
								<span style="height: 40px; text-align: center; width: 40px; border: 1px solid #ddd">
									{{ $p->size }}
								</span>
							</a>
						</span>
						@endif
		                <?php $z++; ?>
		                @endforeach
					</div>
					@endif
					<div class="quantity buttons_added">
						<span>Quantity</span>
						<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text product_cart_quantity qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
						<input type="hidden" name="product_size_selected" id="product_size_selected" value="">
                		<input type="hidden" name="product_color_selected" id="product_color_selected" value="">
					</div>
					<p class="alert-danger-error product_size_alert"></p>
                
                	<p class="alert-danger-error product_color_alert"></p>
					<div class="cart-buttons">
						<button class="add_product_to_cart btn-cart" id="{{ base64_encode($productdetail->id)}}" type="button" ><i class="fa fa-shopping-cart"></i>  <span>Add to Cart</span></button>
               
                 		<button class="add_product_to_cart_buy_now btn-buy" id="{{ base64_encode($productdetail->id)}}" type="button" ><i class="fa fa-shopping-cart"></i>  <span>Buy Now</span></button>
					</div>
				</div>   		
         	</div>
            
         </div>
         <div class="col-sm-3">
         	<div class="shipping_info">
         		<div class="shipping_header">
         			<b>Shipping Information</b>
         		</div>
         		<div class="shipping_desc">
         			<span>Expected delivery in 4-5 working days</span><br>
         			<span>100% Payment Protection</span>
         		</div>
         	</div>
         	<div class="return_policy">
         		<div class="return_header">
         			<b>Return & Warranty</b>
         		</div>
         		<div class="return_desc">
         			<div class="return-icon">
         				<i class="fa fa-shield" aria-hidden="true"></i>
         			</div>
         			<div class="return-icon-desc">
         				<span>7 Days Returns</span>
         				<span>Change of mind is not applicable</span>
         			</div>
         		</div>
         	</div>
         	<div class="sold_by">
         		<div class="return_header">
         			<b>Seller Information</b>
         		</div>
         		<div class="sold_desc">
         			<table class="table table-borderless">
         				<tr>
         					<td>Sold By</td>
         					<td>@if(!empty($storeDetail))<a href="{{ asset('store/'.$storeDetail->owner_id)}}">{{$storeDetail->store_name}}</a>@else <a href="javascript:void();">No Store</a>@endif</td>

         				</tr>
         				<tr>
         					<td>Ratings</td>
         					<td>
         						<div class="review-rating">
			                      <i class="fa fa-star"></i>
			                      <i class="fa fa-star"></i>
			                      <i class="fa fa-star"></i>
			                      <i class="fa fa-star"></i>
			                      <i class="fa fa-star"></i>
	                    		</div>
                    		</td>
         				</tr>
         				<tr>
         					<td>Seller Since</td>
         					<td>@if(!empty($storeDetail)){{$storeDetail->created_at->diffForHumans()}}@endif</td>
         				</tr>
         			</table>
         			@if(!empty($storeDetail))<a href="{{ asset('store/'.$storeDetail->owner_id)}}" class="visit_store">Visit Store Now</a>@endif
         		</div>
         	</div>
         </div>
      </div>
   </div>
</section>
<section class="section-white" style="padding: 10px;">
	<div class="container">
		<div class="col-md-12">
        <div class="col-sm-12">
            <div class="product-tab cl-b">
              <ul class="tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                <!--<li><a data-toggle="tab" href="#tab2">Details</a></li>-->
                <li><a data-toggle="tab" href="#tab2">About Seller</a></li>
                <li><a data-toggle="tab" href="#tab3">Reviews ({{$reviews->count()}})</a></li>
              </ul>
              <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active des" style="text-transform: capitalize;">
                    <b style="color: rgb(0,0,0,0.7);">Product Highlights</b><br><br>
                    @if(!empty($productattribute->type))
                    <b>Type</b>
                    <p>{{$productattribute->type}}</p>
                    @endif
                    @if(!empty($productattribute->occasion))
                    <b>Occasion</b>
                    <p>{{$productattribute->occasion}}
      </p>              @endif
                    @if(!empty($productattribute->material))
                    <b>Material</b>
                    <p>{{$productattribute->material}}
      </p>              @endif
                    @if(!empty($productattribute->fit))
                    <b>Fit</b>
                    <p>{{$productattribute->fit}}
           </p>         @endif
                    @if(!empty($productattribute->neck_style))
                    <b>neck_style</b>
                    <p>{{$productattribute->neck_style}}
    </p>                @endif
                    @if(!empty($productattribute->pattern))
                    <b>pattern</b>
                    <p>{{$productattribute->pattern}}
       </p>             @endif
                    @if(!empty($productattribute->collar))
                    <b>collar</b>
                    <p>{{$productattribute->collar}}
        </p>            @endif
                    @if(!empty($productattribute->sleeve_length))
                    <b>sleeve_length</b>
                    <p>{{$productattribute->sleeve_length}}
 </p>                   @endif
                    @if(!empty($productattribute->feature))
                    <b>feature</b>
                    <p>{{$productattribute->feature}}
       </p>             @endif  
                    @if(!empty($productattribute->wash))
                    <b>wash</b>
                    <p>{{$productattribute->wash}}
          </p>          @endif
                    @if(!empty($productattribute->distress))
                    <b>distress</b>
                    <p>{{$productattribute->distress}}
      </p>              @endif
                    @if(!empty($productattribute->waist_rise))
                    <b>waist_rise</b>
                    <p>{{$productattribute->waist_rise}}
    </p>                @endif
                    @if(!empty($productattribute->lens_material))
                    <b>lens_material</b>
                    <p>{{$productattribute->lens_material}}
 </p>                   @endif  
                    @if(!empty($productattribute->shape_frame))
                    <b>shape_frame</b>
                    <p>{{$productattribute->shape_frame}}
   </p>                 @endif
                    @if(!empty($productattribute->warrenty))
                    <b>warrenty</b>
                    <p>{{$productattribute->warrenty}}
      </p>              @endif
                    @if(!empty($productattribute->lens_color))
                    <b>lens_color</b>
                    <p>{{$productattribute->lens_color}}
    </p>                @endif
                    @if(!empty($productattribute->lens_feature))
                    <b>lens_feature</b>
                    <p>{{$productattribute->lens_feature}}
  </p>                  @endif  
                    @if(!empty($productattribute->application))
                    <b>application</b>
                    <p>{{$productattribute->application}}
   </p>                 @endif
                    @if(!empty($productattribute->style))
                    <b>style</b>
                    <p>{{$productattribute->style}}
         </p>           @endif
                    @if(!empty($productattribute->laptop_comp))
                    <b>laptop_comp</b>
                    <p>{{$productattribute->laptop_comp}}
   </p>                 @endif
                    @if(!empty($productattribute->ankel_height))
                    <b>ankel_height</b>
                    <p>{{$productattribute->ankel_height}}
  </p>                  @endif  
                    @if(!empty($productattribute->shaft_height))
                    <b>shaft_height</b>
                    <p>{{$productattribute->shaft_height}}
  </p>                  @endif
                    @if(!empty($productattribute->strap_color))
                    <b>strap_color</b>
                    <p>{{$productattribute->strap_color}}
   </p>                 @endif
                    @if(!empty($productattribute->color_block))
                    <b>color_block</b>
                    <p>{{$productattribute->color_block}}
   </p>                 @endif
                    @if(!empty($productattribute->strap_material))
                    <b>strap_material</b>
                    <p>{{$productattribute->strap_material}}
</p>                    @endif  
                    @if(!empty($productattribute->strap_type))
                    <b>strap_type</b>
                    <p>{{$productattribute->strap_type}}
    </p>                @endif
                    @if(!empty($productattribute->fastening))
                    <b>fastening</b>
                    <p>{{$productattribute->fastening}}
     </p>               @endif
                    @if(!empty($productattribute->lock_type))
                    <b>lock_type</b>
                    <p>{{$productattribute->lock_type}}
     </p>               @endif
                    @if(!empty($productattribute->size))
                    <b>size</b>
                    <p>{{$productattribute->size}}
          </p>          @endif  
                    @if(!empty($productattribute->products))
                    <b>Product</b>
                    <p>{{$productattribute->products}}
      </p>              @endif
                    @if(!empty($productattribute->apply_on))
                    <b>apply_on</b>
                    <p>{{$productattribute->apply_on}}
      </p>              @endif
                    @if(!empty($productattribute->scent))
                    <b>scent</b>
                    <p>{{$productattribute->scent}}
         </p>           @endif
                    @if(!empty($productattribute->care))
                    <b>care</b>
                    <p>{{$productattribute->care}}
          </p>          @endif  
                    @if(!empty($productattribute->age))
                    <b>age</b>
                    <p>{{$productattribute->age}}
           </p>         @endif
                    @if(!empty($productattribute->shoe_type))
                    <b>shoe_type</b>
                    <p>{{$productattribute->shoe_type}}
     </p>               @endif
                    @if(!empty($productattribute->baby_size))
                    <b>baby_size</b>
                    <p>{{$productattribute->baby_size}}
     </p>               @endif
                    @if(!empty($productattribute->hamline))
                    <b>hamline</b>
                    <p>{{$productattribute->hamline}}
       </p>             @endif  
                    @if(!empty($productattribute->lapel))
                    <b>lapel</b>
                    <p>{{$productattribute->lapel}}
         </p>           @endif
                    @if(!empty($productattribute->fornt_styling))
                    <b>fornt_styling</b>
                    <p>{{$productattribute->fornt_styling}}
 </p>                   @endif
                    @if(!empty($productattribute->shape))
                    <b>shape</b>
                    <p>{{$productattribute->shape}}
         </p>           @endif
                    @if(!empty($productattribute->sleeve_style))
                    <b>sleeve_style</b>
                    <p>{{$productattribute->sleeve_style}}
  </p>                  @endif  
                    @if(!empty($productattribute->belt_width))
                    <b>belt_width</b>
                    <p>{{$productattribute->belt_width}}
    </p>                @endif
                    @if(!empty($productattribute->heel_shape))
                    <b>heel_shape</b>
                    <p>{{$productattribute->heel_shape}}
    </p>                @endif
                    @if(!empty($productattribute->heel_height))
                    <b>heel_height</b>
                    <p>{{$productattribute->heel_height}}
   </p>                 @endif
                    @if(!empty($productattribute->closure))
                    <b>closure</b>
                    <p>{{$productattribute->closure}}
       </p>             @endif  
                    @if(!empty($productattribute->border))
                    <b>border</b>
                   <p> {{$productattribute->border}}
       </p>             @endif
                    @if(!empty($productattribute->top_length))
                    <b>top_length</b>
                   <p> {{$productattribute->top_length}}
   </p>                 @endif
                    @if(!empty($productattribute->bottom_length))
                    <b>bottom_length</b>
                   <p> {{$productattribute->bottom_length}}
</p>                    @endif
                    @if(!empty($productattribute->piece_count))
                    <b>piece_count</b>
                  <p>  {{$productattribute->piece_count}}
 </p>                   @endif  
                    @if(!empty($productattribute->dail_color))
                    <b>dail_color</b>
                  <p>  {{$productattribute->dail_color}}
  </p>                  @endif
                    @if(!empty($productattribute->suitcase_weight))
                    <b>suitcase_weight</b>
                  <p>  {{$productattribute->suitcase_weight}}</p>
                    @endif
                    @if(!empty($productattribute->no_of_wheel))
                    <b>no_of_wheel</b>
                  <p>  {{$productattribute->no_of_wheel}}
 </p>                   @endif
                    @if(!empty($productattribute->expendable))
                    <b>expendable</b>
                  <p>  {{$productattribute->expendable}}
  </p>                  @endif  
                    @if(!empty($productattribute->ideal_for))
                    <b>ideal_for</b>
                  <p>  {{$productattribute->ideal_for}}
   </p>                 @endif
                    @if(!empty($productattribute->dupatta))
                    <b>dupatta</b>
                  <p>  {{$productattribute->dupatta}}
     </p>               @endif
                    @if(!empty($productattribute->matel))
                    <b>matel</b>
                  <p>  {{$productattribute->matel}}
       </p>             @endif        
                  <div >
                     <table class="table table-borderless">

                       <tr style="margin-top: 20px;">
                         <td style="padding: 0px; color: #666; font-weight:600;">Availability</td>
                         @if(!empty($productdetail->brand_id))<td style="padding: 0px; color: #666; font-weight:600;">Brand</td>@endif
                       </tr>

                       <tr>
                         <td style="padding: 0px; text-transform: capitalize; color: #666; font-weight:600;">{{ $productdetail->availability }}</td>
                        @if(!empty($productdetail->brand_id)) <td style="padding: 0px; color: rgb(0,0,0,0.7); font-weight:400;">{{ $productdetail->brand_id }}</td>@endif
                       </tr>
                     </table>
                  </div>
                  <p style="padding: 0px; color: #666; font-weight:600; font-weight:400; font-size:14px;">{!! html_entity_decode($productdetail->description) !!}</p>
                </div>
                <div id="tab2" class="tab-pane fade in">
                  <b>Seller Overview</b>
                  @if(!empty($storeDetail->description))
                        <p style="margin:20px 0px;">{!!$storeDetail->description!!}.</p>
                  @endif
                </div>
               
                <div id="tab3" class="tab-pane fade in">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="product-reviews">
                        @if(!empty($reviews))
                    @foreach($reviews as $rev)
                        <div class="single-review">
                          <div class="review-heading">
                            <div><a href="#"><i class="fa fa-user-o"></i> {{$rev->userinfo->username}}</a></div>
                            <div><a href="#"><i class="fa fa-clock-o"></i> {{date('d M Y / h:00 A', strtotime($rev->created_at))}}</a></div>                            
                            <div class="review-rating pull-right">
                              <i class="fa @if($rev->star_rating > 0) fa-star @else fa-star-o empty @endif"></i>
                              <i class="fa @if($rev->star_rating > 1) fa-star @else fa-star-o empty @endif"></i>
                              <i class="fa @if($rev->star_rating > 2) fa-star @else fa-star-o empty @endif"></i>
                              <i class="fa @if($rev->star_rating > 3) fa-star @else fa-star-o empty @endif"></i>
                              <i class="fa @if($rev->star_rating > 4) fa-star @else fa-star-o empty @endif"></i>
                            </div>
                          </div>
                          <div class="review-body">
                            @if(!empty($rev->review_description))
                            <p>{{$rev->review_description}}</p>
                            @else
                            <p>No Description</p>
                            @endif
                          </div>
                        </div>
                      @endforeach
                      @endif
                      </div>
                    </div>            
                  </div>
             </div>
              </div>
            </div>
        </div>
      </div>
	</div>
</section>

<script type="text/javascript">
	function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
</script>
<script type="text/javascript">
    function weightprice(){

      weight = document.getElementById('selectweight').value;
      if (weight == 0.5){
        price = document.getElementById('w1').value;
        document.getElementById('price').innerHTML = "Rs "+price;
      }
      if (weight == 1){
        price = document.getElementById('w2').value;
        document.getElementById('price').innerHTML = "Rs "+price;
      }
    }
   </script>
   <script type="text/javascript">
	$(document).ready(function(){
		$(".small_img").hover(function(){
			$(".big_img").attr('src',$(this).attr('src'));
		});
	});
</script>

@endsection