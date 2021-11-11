@extends('admin.users.vendor_dashboard.dash-layout.layout')
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
.order{
	width: 100%;
}
.btn-primary {
    color: #666;
    background-color: rgb(0, 0, 0,0.03);
    border-color: #ddd;
    width: 100%;
    margin-top: 10px;
    font-weight: 600;
    text-align: left;
}
.btn-primary:hover{
	background: #fe9126;
	outline: none;
	border: 1px solid #fe9126 !important;
}
.btn-primary:focus{
	background: #fe9126 !important;
	outline: none;
	border: 1px solid #fe9126 !important;
}
.btn-primary:active{
	background: #fe9126;
	outline: none;
	border: 1px solid #fe9126 !important;
}
.btn-primary:visited{
	background: #fe9126;
	outline: none;
	border: 1px solid #fe9126 !important;
}
.subtotal{
	width: 100%;
}
table tr td{
	border: none;
}
.subtotal table tr td{
	font-size: 14px;
	font-weight: 700;
}

.subtotal table tr td:nth-child(2){
	float: right;
	
}
.grandtotal{
	width: 100%;
}
.grandtotal table{
		background: #1f1f1f;
}
.grandtotal table tr td{
	font-size: 16px;
	color: #fff;
	font-weight: 700;

}

.grandtotal table tr td:nth-child(2){
	float: right;
	
}
.card table tr td:nth-child(2){
	float: right;
}
.statement {
    position: relative;
    top:5%;
    margin-left: auto;
    margin-right: auto;
    padding: 50px;
    width: 50%;
    border: 3px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
}
.pending-strip {
    position: absolute;
    top: 20px;
    left: -35px;
    transform: rotate(-45deg);
}
.pending-strip b {
    color: white;
    background: green;
    padding: 5px 40px;
}
.in-tot{
	float: right;
}
.table tr td, .table tr th{
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
     border-top: 0px solid #ddd !important; 
}
.payout p{
	color: red;
	opacity: 0.9;
}
.filter span{
	font-weight: 600;
	font-size: 16px;
	color: #666;
}
.filter input{
	border: 1px solid #ddd;
	background: rgb(0, 0, 0, 0.02);
	color: #666;
	padding: 2px 8px;
	margin-left: 5px;
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
					<h3 style="padding:0px 20px;">Transcation Overview</h3>
					<div class="filter" style="padding:20px;">
						<span >Period</span>
						<input type="date" name=""> TO <input type="date" name="">
					</div>
					<div class="statement">
					
					    <div class="statement-inner">
					    	<div class="pending-strip">
					    		<b>Pending</b>
					    	</div>
					    	<div class="o-balance">
					    		<p><b>Opening Balance: </b>Unpaid Blanace from Previous Statment<b style="float: right; margin-right: 5px;">0.00 PKR</b></p>
					    	</div>
					    	<div class="order">
					    		<a class="btn btn-primary" data-toggle="collapse" href="#order" role="button" aria-expanded="false" aria-controls="order">Orders <span class="in-tot">Total. PKR @if(!empty($ordertotal)){{$ordertotal}}@else 0.00 @endif</span></a>
						    	<div class="collapse" id="order">
								  <div class="card card-body">
								    
								    <table class="table table-borderless">
								    	<tr>
								    		<th colspan="2">Product Charges</th>
								    	
								    	</tr>
								    	<tr>
								    		<td>Product Price Credit</td>
								    		<td>PKR @if(!empty($ordertotal)){{$ordertotal}}@else 0.00 @endif</td>
								    	</tr>
								    	<tr>
								    		<td>Claim</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    </table>
								  </div>
								</div>
							</div>
							<div class="shipping">
					    		<a class="btn btn-primary" data-toggle="collapse" href="#shipping" role="button" aria-expanded="false" aria-controls="shipping">Shipping Fee(Paid by customer)<span class="in-tot">Total. PKR @if(!empty($shipmenttotal)){{$shipmenttotal}}@else 0.00 @endif</span></a>
						    	<div class="collapse" id="shipping">
								  <div class="card card-body">
								    
								    <table class="table table-borderless">
								    	<tr>
								    		<td>Shipping Fee(Paid by customer)</td>
								    		<td>PKR @if(!empty($shipmenttotal)){{$shipmenttotal}}@else 0.00 @endif</td>
								    	</tr>
								    	<tr>
								    		<td>VAT on shipmenttd</td>
								    		<td>N/A</td>
								    	</tr>
								    </table>
								  </div>
								</div>
							</div>
							<div class="zmall">
					    		<a class="btn btn-primary" data-toggle="collapse" href="#zmall" role="button" aria-expanded="false" aria-controls="zmall">Zmall Fee<span class="in-tot">Total. PKR @if(!empty($comission)){{$comission*15/100}}@else 0.00 @endif</span></a>
						    	<div class="collapse" id="zmall">
								  <div class="card card-body">
								    
								    <table class="table table-borderless">
								    	<tr>
								    		<td>Commision</td>
								    		<td>PKR @if(!empty($comission)){{$comission*15/100}}@else 0.00 @endif</td>
								    	</tr>
								    	<tr>
								    		<td>VAT</td>
								    		<td>N/A</td>
								    	</tr>
								    </table>
								  </div>
								</div>
							</div>
							
							<div class="subtotal">
								    
								    <table class="table table-borderless">
								    	<tr>
								    		<td>Sub Total</td>
								    		<td>PKR @if(!empty($total)){{$total}}@else 0.00 @endif</td>
								    	</tr>
								    </table>
							</div>
							<div class="refund">
					    		<a class="btn btn-primary" data-toggle="collapse" href="#refund" role="button" aria-expanded="false" aria-controls="refund">Refund<span class="in-tot">Total. PKR 0.00</span></a>
						    	<div class="collapse" id="refund">
								  <div class="card card-body">
								    
								    <table class="table table-borderless">
								    	<tr>
								    		<td>Product Charges</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    	<tr>
								    		<td>Reversable Product Price</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    	<tr>
								    		<td>Zmall Fee</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    	<tr>
								    		<td>Reversable Commision</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    	<tr>
								    		<td>Palanties</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    	<tr>
								    		<td>VAT</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    </table>
								  </div>
								</div>
							</div>
							<div class="subtotal">
								    
								    <table class="table table-borderless">
								    	<tr>
								    		<td>Sub Total</td>
								    		<td>PKR 0.00</td>
								    	</tr>
								    </table>
							</div>
							<div class="grandtotal">
								<table class="table table-borderless">
								    	<tr>
								    		<td>Closing Balance</td>
								    		<td>PKR @if(!empty($total)){{$total}}@else 0.00 @endif</td>
								    	</tr>
								    </table>
							</div>
					    </div>
					    <div class="payout">
						<p><b style="color: #000;">Payout: </b>Estimated date of payout 12 Aug, 2021 TO 21 Month, 2021 and it will take couple of days to reflect in your account statment.</p>
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