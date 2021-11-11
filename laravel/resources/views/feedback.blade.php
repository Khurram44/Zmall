@extends('layouts.app')

@section('content')
@include('layouts.home-navigation')
<?php use App\ProductAttributes; ?>
<style> 
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
    
    margin: 0 0 20px;
	}
	.sell-top-tit{
		font-size: 12px;
    color: #282c3f;
    vertical-align: middle;
    line-height: 26px;
    font-family: circular, Arial, sans-serif;
}
.conf-or{
	background: rgb(7, 130, 85,0.2);
	padding: 10px;
	border-top: 3px solid rgb(7, 130, 85);
}
.conf-or h4{
	font-size: 20px;
	color: rgb(7, 130, 85) !important;
	font-family: circular, Arial, sans-serif;
	font-weight: 600;
}
.conf-or p{
	font-size: 12px;
	color: rgb(7, 130, 85, 0.8);
	font-family: circular, Arial, sans-serif;
}
.rate-or{
	background: rgb(244, 159, 0,0.05);
	padding: 10px;
	border-top: 3px solid rgb(244, 159, 0);
	margin-top: 20px;
	font-family: circular, Arial, sans-serif;
}
.rate-or h2{
	font-size: 20px;
	
	font-family: circular, Arial, sans-serif;
	font-weight: 600;
}
.rate-or p{
	font-size: 12px;
	font-family: circular, Arial, sans-serif;
	
}
.ord-det{
	margin-top: 20px;
}
.ord-det p{
	line-height: 30px;
}
.ord-det table{
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;	
}

.ord-det table > tr {
	color: rgb(0,0,0,0.7);
	font-size: 14px;
	

}
.ord-det table tr:nth-child(2){
	font-weight: bold;
	font-size: 14px;
	border-top: 0px;
}
.ord-det table tr td{
	border: 0px;
	padding: 4px;
}
.ship-detail > p{
	font-size: 16px;
	line-height: 26px;
}
.ship-id{
	background: rgb(0,0,0,0.1);
	padding: 10px;
}
.ship-id p{
	font-weight: 14px;
}
.ship-detail-inner{
	padding: 10px;
	border: 1px solid #ddd;
}
.ship-stat > label{
	font-size: 20px;
	color: rgb(7, 130, 85) !important;
	font-family: circular, Arial, sans-serif;
	font-weight: 600;
}
.ship-stat input[type='range']{
	color: rgb(7, 130, 85) !important;
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


	<section class="sub">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="conf-or">
						<h4>Order Placed! Your payment was successfull.</h4>
						<p>We have sent you an email with the confirmation</p>
					</div>
				
				
					<div class="rate-or">
						<h2>Hi {{$orderdetail->first_name.''.$orderdetail->last_name}}!</h2>
						<p>Thank you for your recent order with us. If you would please take a moment and let us know <b>how likely you would be to recommend Zmall to friends or family.</b> It would help us greatly.</p>
						<p>All you have to do is click on a number below and your feedback will be submitted.</p>
						<div class="rating-or">
							
						</div>
					</div>

					<div class="ord-det">
						<h4>Order Details</h4>
						<p>Order ID - {{$orderdetail->order_no}}</p>
						<table class="table table-borderless">
							<tr>
								<td>Total Items</td>
								<td>Order Placed On</td>
								<td>Amount</td>
								<td>Payment Mode</td>
							</tr>
							<tr>
								<td>1</td>
								<td>{{$orderdetail->added_on}}</td>
								<td>RS. {{$orderdetail->grand_total}}</td>
								<td>{{$orderdetail->payment_method}}</td>
							</tr>
						</table>
					</div>

					<div class="ship-detail">
						<p>1 Shipment in this Order</p>
						<div class="ship-id">
								<b>Shipment ID: SH853294BHSDK4984356</b>
						</div>
						<div class="ship-detail-inner">
							
							<div class="ship-stat">
								<label for="customRange" class="form-label">Order Placed</label>
								<input type="range" class="form-range" min="0" max="5" value="0" id="customRange">
								<ul class="">
									<li>Order Placed</li>
									<li>Confirmed By Seller</li>
									<li>Awaiting Pickup</li>
									<li>In Transit</li>
									<li>Order Delivered</li>
								</ul>
							</div>
							@foreach($OrderProducts as $p)
							<div class="pro-or-det">
								<div class="pro-or-img">
									<img src="{{ asset('/frontend/storage/uploads/'.$p->productinfo->images) }}" alt="IMG" style=" width:50px;">
								</div>
								<div class="pro-or-desc">
									<p style="text-transform: capitalize;">{{$p->productinfo->title}}</p>
									
									<p>Quantity: 1</p>
								</div>
								
							</div>
							@endforeach
						</div>
						<div class="norm-del">
							<p>Normal Delivery</p>
							<p><b>Rs. {{$orderdetail->shipment_charges}}</b></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="add-des">
						<label>Delivery Address</label>
						<p style="text-transform: capitalize;">{{$orderdetail->first_name.''.$orderdetail->last_name}}</p>
						<p>{{$orderdetail->phone}}</p>
						<p>{{$orderdetail->address}}</p>
						<p>{{$orderdetail->city}}</p>
						<p>{{$orderdetail->zip_code}}</p>
						
					</div>
					<hr>
					<div class="py-mod">
						<b>Payment mode</b>
						<p>{{$orderdetail->payment_method}}</p>
					</div>
					<hr>
					<div class="pay-sum">
						<table class="table table-borderless">
							<tr>
								<td>Item</td>
								<td>Rs. {{$orderdetail->sub_total}}</td>
							</tr>
							<tr>
								<td>Coupan Discount</td>
								<td>Rs. 0</td>
							</tr>
							<tr>
								<td>Delivery</td>
								<td>Rs. {{$orderdetail->shipment_charges}}</td>
							</tr>
							<tr>
								<td>Order Total</td>
								<td>Rs. {{$orderdetail->grand_total}}</td>
							</tr>
						</table>
					</div>
				</div>	
			</div>
		</div>
	</section>

@endsection