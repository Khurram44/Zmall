@extends('layouts.app')
@section('content')
@include('layouts.home-navigation')
<style type="text/css">
	body{
		background: #fff;
	}
	.top-b-section{
		width: 100%;
		background-image: -webkit-gradient(linear,left top,left bottom,from(#f2f2f2),to(#fafafa));
		margin-top: 120px;
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
.contact-field label{
	font-size: 12px;
    color: #979797;
    display: block;
    min-height: 14px;
    margin-top: 10px;
}
.contact-field input{
    font-size: 14px;
    padding: 9px 12px;
    display: block;
    margin-bottom: 0;
    height: 39px;
    width: 100%;
    font-family: circular,Arial,sans-serif;
    outline: none;
    border: 1px solid #ddd;
    background-color: #f4f4f4;
}
.contact-field input:hover{
	background-color: #f4f4f4;
    cursor: not-allowed;
}
.upper-header{
	margin-top: 10px;
	display: flex;
	justify-content: space-between;
}
.upper-header h2{
	color: #0d0d0d;
    font-style: normal;
    font-weight: 400;
}
.upper-header a{
	color: #fe9126;
    
}
.wishlist-inner{
		display: flex;
		flex-direction: column;
		justify-content: center;

	}
	.wishlist-inner img{
		display: block;
	    margin: 0 auto;
	    width: 200px;
	}
	.wishlist-inner b{
		font-size: 18px;
    	color: #282c3f;
    	margin: 0;
    	text-align: center;
	}
	.wishlist-inner p{
		    font-size: 16px;
		    color: #a5a7ae;
		    margin: 8px 0 24px;
		    text-align: center;
	}
	.wishlist-inner a{
		
	    color: #fe9126;
	    text-transform: uppercase;
	    border: none;
	    padding: 0;
	    text-align: center;
	    justify-content: center;

	}
	.wish-header{
		margin-top: 20px;
		border-bottom: 1px solid #ddd;
	}
	.wish-header b{
		color: #282c3f;
	    cursor: default;
	    font-weight: 700;
	    font-size: 14px;
	    border-bottom: 3px solid #000;
	    border-radius: 2px;
	    margin-left: 50px;
	}
	.wishlist-items{
		display: flex;
	}
.wishlist-cards{
	width: 220px;
	height: 350px;
	margin-bottom: 4px;
    overflow: hidden;
    margin: 10px;
}
.wish-img{
	border: 1px solid #e4e4e6;
	overflow: hidden;
}
.wish-img img{
	padding: 5px;
}
.wish-img button{
	position: relative;
	left: 195px;
	top: 0px;
	outline: none;
	background: transparent;
	border:none;
	font-size: 26px;
	color: #666;

}
.wish-desc p{
	font-size: 14px;
    text-align: left;
    margin: 0px;
}
.wish-desc b{
	font-size: 14px;
    text-align: left;
}
.wish-desc{
	color: #000;

}
.diss{
	margin-left: 10px;
	color: #fe9126;
}
.dis-pri{
	color: #666;
}
.btn-cart button{
	border: 1px solid #fe9126;
	outline: none;
	background-color: #fff;
	color: #fe9126;
	width: 100%;
	padding: 5px 0px;
}
#deli{
    position: relative;
    right: -200px;
    top: 37px;
    font-size: 26px;
}
</style>
<body>

	<section class="top-b-section" style="margin-top: 120px;">
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

	@if($wishlist->isEmpty())
	<section>
		<div class="container">
			<div class="row" style="padding-bottom: 200px;">
				<div class="col-sm-12">
					<div class="wishlist">
						<div class="wishlist-inner" style="margin-top: 50px;">
							<img src="{{ asset('/frontend/img/customer/voucher.png')}}" class="center">
							<b>No wishlist yet</b>
							<p>Your wishlist will be displayed here</p>
							<a href="{{ asset('/')}}">Start Shopping</a>
						</div>
					</div>
				</div>
    	</div>
		</div>
	</section>

	@else
		<div class="container-fluid">
			<div class="row" style="padding-bottom: 200px;">
				<div class="col-sm-12">
					<div class="wish-header">
						<b class="wish-head">Wishlisted Products ({{$wishlistno}})</b>
					 </div>
				</div>
				<div class="col-sm-12">
					<div class="wishlist-items" style="margin-top: 20px;">
						@foreach($wishlist as $w_list)
						<div class="wishlist-cards">
							
							<a href="{{asset('product-detail/'.$w_list->productinfo->slug)}}">
								<div class="wishlist-card">
									<div class="wish-img">
									    <a href="{{url('delete-from-wishlist/'.$w_list->id)}}" id="deli">x</a>
										<img src="{{ asset('/frontend/storage/uploads/'.$w_list->productinfo->images)}}" class="center">			
									</div>
									<div class="wish-desc">
										<a href="{{asset('product-detail/'.$w_list->productinfo->slug)}}">{{substr($w_list->productinfo->title,0,25)}}...</a><br>
										<b>{{$w_list->productinfo->price}}</b>
										<p><del class="dis-pri"> {{$w_list->productinfo->price}}</del> <span class="diss"> 50% off</span></p>
									</div>
								</div>
							</a>
							<div class="btn-cart">
								<button class=" add_product_to_cart" id="{{ base64_encode($w_list->productinfo->id)}}" type="button">Add to Cart</button>
							</div>
						</div>
						@endforeach
					</div>
				</div>
    		</div>
		</div>
	@endif


@endsection