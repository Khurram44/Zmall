@extends('dashboard.dash-layout.layout')
@section('content')
<style>
    .ordr{
    display: flex;
    flex-direction: row;
}
.productinfo{
    margin-left:5px;
    cursor: pointer;
    border:1px solid #ddd;
    padding:5px;
}
.productinfo img{
    height:50px
}
.productinfo p{
    color:#666;
    
}
@media screen and (max-width: 800px){
	.ordr{
	    width:100%;
	    overflow: scroll;
	}
	
}
</style>
<div class="row">
				<div class="col-sm-10 col-res" style="padding: 5px; margin-left: 25px; margin-top:5px; background: #fff; height: 830px;">
					<div class="manage-left">
					
					
							<div class="slt-section">
								<div class="slt-section-inner">
									<div class="slt-mang" onclick="bnshow();">
										<b id="actdiv1"><i class="fa fa-sort-desc" aria-hidden="true"></i> PENDING ORDERS </b>
									</div>
									<div class="ordr" id="div1" style="display:none">
										<table class='table table-borderless'>
											<tr>
												<th>Order.NO</th>
												<th>Order Date</th>
												<th>Order Item ID</th>
												<th>Unit Price</th>
												<th>Comissions</th>
												<th>Other Credits</th>
												<th>VAT</th>
												<th>WHT</th>
												<th>Payout Amount</th>
												<th>Operational Status</th>
												<th>Payout Status</th>
											</tr>
											@if(!empty($pendingOrder))
											@foreach($pendingOrder as $po)
											<tr>
												<td>{{$po->order_no}}</td>
												<td>{{$po->added_on}}</td>
												@foreach($order_detail as $o)
												@if($o->order_id == $po->id)
												<td>{{$o->product_id}}</td>
												@endif
												@endforeach
												<td>{{$po->sub_total}}</td>
												<td>{{$po->sub_total*15/100}}</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>Pending</td>
											</tr>
											@endforeach
											@else
											<tr>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
											@endif
										</table>
									</div>
								</div>
								<div class="slt-section-inner">
									<div class="slt-mang" onclick="bnshow2();">
										<b id="actdiv2"><i class="fa fa-sort-desc" aria-hidden="true"></i> CLEAR ORDERS </b>
									</div>
									<div class="ordr" id="div2"  style="display:none">
										<table class='table table-borderless'>
											<tr>
												<th>Order.NO</th>
												<th>Order Date</th>
												<th>Order Item ID</th>
												<th>Unit Price</th>
												<th>Comissions</th>
												<th>Other Credits</th>
												<th>VAT</th>
												<th>WHT</th>
												<th>Payout Amount</th>
												<th>Operational Status</th>
												<th>Payout Status</th>
											</tr>
											@if(!empty($clearOrder))
											@foreach($clearOrder as $co)
											<tr>
												<td>{{$co->order_no}}</td>
												<td>{{$co->added_on}}</td>
												@foreach($order_detail as $o)
												@if($o->order_id == $co->id)
												<td>{{$o->product_id}}</td>
												@endif
												@endforeach
												<td>{{$co->sub_total}}</td>
												<td>{{$co->sub_total*15/100}}</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>Clear</td>
											</tr>
											@endforeach
											@else
											<tr>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
											@endif
										</table>
									</div>
								</div>
								<div class="slt-section-inner">
									<div class="slt-mang" onclick="bnshow3();">
										<b id="actdiv3"><i class="fa fa-sort-desc" aria-hidden="true"></i> WITHDRAW ORDERS</b>
									</div>
									<div class="ordr" id="div3"  style="display:none">
										<table class='table table-borderless'>
											<tr>
												<th>Order.NO</th>
												<th>Order Date</th>
												<th>Order Item ID</th>
												<th>Unit Price</th>
												<th>Comissions</th>
												<th>Other Credits</th>
												<th>VAT</th>
												<th>WHT</th>
												<th>Payout Amount</th>
												<th>Operational Status</th>
												<th>Payout Status</th>
											</tr>
											@if(!empty($withdrawOrder))
											@foreach($withdrawOrder as $wo)
											<tr>
												<td>{{$wo->order_no}}</td>
												<td>{{$wo->added_on}}</td>
												@foreach($order_detail as $o)
												@if($o->order_id == $wo->id)
												<td>{{$o->product_id}}</td>
												@endif
												@endforeach
												<td>{{$wo->sub_total}}</td>
												<td>{{$wo->sub_total*15/100}}</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>Withdraw</td>
											</tr>
											@endforeach
											@else
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											@endif
										</table>
									</div>
								</div>
								
								
							</div>
						
					</div>
				</div>
				
				
</div>
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
		
	function bnshow(){
		var x = document.getElementById("div1");
		var y = document.getElementById("actdiv1");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.classList.add("active");
		  } 
		  else{
		  	x.style.display = "none";
		  	y.classList.remove("active");
		  }
}
function bnshow2(){
		var x = document.getElementById("div2");
		var y = document.getElementById("actdiv2");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.classList.add("active");
		  } 
		  else{
		  	x.style.display = "none";
		  	y.classList.remove("active");
		  }
}
function bnshow3(){
		var x = document.getElementById("div3");
		var y = document.getElementById("actdiv3");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.classList.add("active");
		  } 
		  else{
		  	x.style.display = "none";
		  	y.classList.remove("active");
		  }
}
</script>
@endsection