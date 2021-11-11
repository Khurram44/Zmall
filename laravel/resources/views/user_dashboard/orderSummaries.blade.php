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
	.order-header{
		margin-top: 20px;
		
	}
	.order-header h2{
	    font-family: circular,Arial,sans-serif;
        font-size: 28px;
        font-weight: 700;
        line-height: 1;
        color: #303030;
        margin-bottom:20px;
	}
	.order-item{
		-webkit-box-shadow: 0 1px 4px rgb(0 0 0 / 10%);
	    box-shadow: 0 1px 4px rgb(0 0 0 / 10%);
	    border-left: 1px solid #eeeeef;
	    border-right: 1px solid #eeeeef;
	    border-top: 1px solid #eeeeef;
	    margin: 16px 0;
	}
	.order-item-t{
		background-color: #f4f4f4;
	    border-bottom: 1px solid #eeeeef;
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    padding: 12px 20px;
	    justify-content: space-between;
	}
	.sum-detail{
		display: flex;
		flex-direction: column;
		margin-left: 10px;
	}
	.sum-detail-t span{
		font-family: circular,Arial,sans-serif;
	    font-size: 12px;
	    line-height: 1.17;
	    color: #5b5b5b;
	}
	.sum-detail-t b{
		font-family: circular,Arial,sans-serif;
	    font-size: 14px;
	    color: #303030;
	    font-weight: 600;
	    line-height: 1.14;
	    margin: 0;
	}
	.sum-btn{
		float: right;
	}
	.sum-btn a{
		font-size: 14px;
	    font-weight: 400;
	    font-family: circular,Arial,sans-serif;
	    line-height: 1.4;
	    color: #fff;
	    border: 1px solid #fe9126;
	    border-radius: 2px;
	    background-color: #fe9126;
	    padding: 6px 12px;
	    margin: 0;
	    display: inline-block;
	    cursor: pointer;
	}
	.ship-detail{
		padding: 10px 0;
	    font-weight: 700;
	    color: #282c3f;
	    margin-left: 10px;
	}
	.sum-inner{
		display: flex;
		padding: 12px 20px;
	}
	.sum-inner-img{
		width: 60px;
    	margin-right: 16px;
	}
	.sum-inner-img img{
		width: 100%;
	}
	.sum-inner-det{
		margin-right: 24px;
    	width: 36%;
	}
	.sum-inner-det ul li{
		text-decoration: none;
	}
	.sum-inner-det ul li p{
		font-size: 12px;
	    line-height: 1.17;
	    color: #303030;
	    margin-bottom: 8px;
	}
	.sum-inner-det ul li b{
		font-size: 13px;
    	font-weight: 700;
   	 	color: #303030;
	}
	.sum-inner-det strong{
		font-size: 16px;
	    font-weight: 700;
	    line-height: 1.13;
	    color: #303030;
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

		<div class="container">
			<div class="row" style="padding-bottom: 200px;">
				<div class="col-sm-12">
					<div class="order-header">
						<h2 class="order-head">Orders</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="order-div">
						<div class="order-div-inner">
							<b>Confirmed orders ({{$all_orders_no}})</b>
							@if($all_orders->count() > 0)
                            @foreach($all_orders as $all)
                            @if($all->orderinfoproduct->added_by == Auth::id())
							<div class="order-item">
								<div class="order-item-t">
									<div class="sum-detail">
										<div class="sum-detail-t">
											<span>Order Id</span>
										</div>
										<div class="sum-detail-b">
											<b>{{$all->orderinfoproduct->order_no}}</b>
										</div>
									</div>
									<div class="sum-detail">
										<div class="sum-detail-t">
											<span>Order Placed</span>
										</div>
										<div class="sum-detail-b">
											<b>{{ date("d M, Y",strtotime($all->orderinfoproduct->added_on)) }}</b>
										</div>
									</div>
									<div class="sum-detail">
										<div class="sum-detail-t">
											<span>Paid Amount</span>
										</div>
										<div class="sum-detail-b">
											<b>PKR {{$all->orderinfoproduct->grand_total}}</b>
										</div>
									</div>
									<div class="sum-detail">
										<div class="sum-btn">
											<a href="{{ asset('/orderfeedback/'.$all->orderinfoproduct->order_no)}}">View Order</a>
										</div>
									</div>
								</div>
								<div class="order-item-b">
									<div class="sum-inner">
										<div class="ship-detail">
											Shipment ID: SHU814777193989728793
										</div>
									</div>
									<div class="sum-inner">
										<div class="sum-inner-img">
											<img src="{{ asset('/frontend/storage/uploads/'.$all->productinfo->images)}}">
										</div>
										<div class="sum-inner-det">
											<ul>
												<li><p>{{$all->productinfo->title}}<p></li>
												<li><b>PKR {{$all->orderinfoproduct->grand_total}}</b></li>
											</ul>
										</div>
										<div class="sum-inner-det">
											<strong class="label label-info">{{ ucfirst($all->orderinfoproduct->status) }}</strong>
											
											<a class="btn btn-success pull-right" href="#reviews-anchor" id="open-review-box"  data-toggle="modal" data-target="#feedbackModal-{{$all->orderinfoproduct->id}}"  style="display: inline-block; margin-right:5px;">Leave a Review</a>
												<!-- Feedback Model-->
<div class="modal" id="feedbackModal-{{$all->orderinfoproduct->id}}" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content"  id="post-review-box" >
      <div class="modal-header">
        <h5 class="modal-title">Order Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{route('save_review')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label>Product</label><br>
            <select class="form-control" name="product_id">
              <option>SELECT</option>
              <option value="{{$all->productinfo->id}}">{{$all->productinfo->title}}</option>
            </select>
            

          </div>

          <div class="form-group">
            <label>Product</label><br>
              <option>SELECT</option>
             <textarea name="review_description"  class="form-control"></textarea>
          </div>
          <div class="row>">
          <div class="form-group" id="rating-ability-wrapper">
      <label class="control-label" for="rating">
      <span class="field-label-header">How would you rate your ability to use the computer and access internet?*</span><br>
      <span class="field-label-info"></span>
      <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
      </label>
      
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="1" id="rating-star-1" name="star" value="1">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="2" id="rating-star-2" name="star" value="2">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="3" id="rating-star-3" name="star" value="3">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="4" id="rating-star-4" name="star" value="4">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="5" id="rating-star-5" name="star" value="5">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
  </div> 
</div>
  <h2 class="bold rating-header" style="">
      <span class="selected-rating">0</span><small> / 5</small>
      </h2>


        </div>
        <div class="modal-footer">
          <div class="text-right">
              <div class="stars starrr" data-rating="0"></div>
              <a class="btn btn-danger" data-dismiss="modal" href="#" id="close-review-box" >
              <span class="fa fa-time" ></span>Cancel</a>
              <input type="hidden" class="btn btn-success" name="order_id" value="{{$all->orderinfoproduct->order_no}}">
             
              <input type="submit" class="btn btn-success" name="savereview" value="Save">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Feedback Model End-->
										</div>
									</div>
								</div>
							</div>
							@endif
							@endforeach
              @endif  
                            
						</div>
					</div>
				</div>
    		</div>
		</div>


<script type="text/javascript">
  
    jQuery(document).ready(function($){
      
  $(".btnrating").on('click',(function(e) {
  
  var previous_value = $("#selected_rating").val();
  
  var selected_value = $(this).attr("data-attr");
  $("#selected_rating").val(selected_value);
  
  $(".selected-rating").empty();
  $(".selected-rating").html(selected_value);
  
  for (i = 1; i <= selected_value; ++i) {
  $("#rating-star-"+i).toggleClass('btn-warning');
  $("#rating-star-"+i).toggleClass('btn-default');
  }
  
  for (ix = 1; ix <= previous_value; ++ix) {
  $("#rating-star-"+ix).toggleClass('btn-warning');
  $("#rating-star-"+ix).toggleClass('btn-default');
  }
  
  }));
  
    
});
</script>
@endsection