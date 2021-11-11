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
					<div class="manage-left">
					<h3 style="padding:0px 20px;">Transcation Overview</h3>
					<div class="filter" style="padding:20px;">
						<span >Period</span>
						<input type="date" name=""> TO <input type="date" name="">
					</div>
							<div class="slt-section">
								<div class="slt-section-inner">
									<div class="slt-mang">
										<b id="actdiv1" class="active"><i class="fa fa-sort-desc" aria-hidden="true"></i> Total Amopunt: 0 PKR </b>
									</div>
									<div class="ordr" id="div1">
										<table class='table table-borderless'>
											<tr>
												<th>Date</th>
												<th>Transaction type</th>
												<th>Transaction Number</th>
												<th>Order Number</th>
												<th>Details</th>
												<th>Comment</th>
												<th>Amount</th>
												<th>VAT</th>
												<th>WHT</th>
												<th>Statment</th>
											
											</tr>
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
											
											</tr>
										</table>
									</div>
								</div>
								

								
								
							</div>
						
					</div>
				</div>
				
				
</div>
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<!-- <script type="text/javascript">
		
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

</script> -->
@endsection