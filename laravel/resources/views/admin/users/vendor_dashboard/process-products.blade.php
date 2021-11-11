@extends('admin.users.vendor_dashboard.dash-layout.layout')
@section('content')
<style>
    .awa{
        padding: 10px 5px;
        border: 1px solid #ddd;
    }
    .awa:hover{
        cursor:pointer;
        background: rgb(0,0,0,0.02);
    }
    .awa p{
        font-weight: bold;
        text-transform=uppercase;
        font-size: 16px;
        margin:0px;
    }
    .awa small{
        font-size: 14px;
        color: #666;
    }
    .m-details-title{
        display:flex;
        justify-content: space-between;
        padding:10px 0px;
    }
    .m-details-title small{
        color:#666;
        font-size: 14px;
        margin-right:5px;
    }
    .m-details-title b{
        margin-left:5px;
        font-size: 14px;
    }
    .m-details-version{
        display: flex;
        flex-direction:row;
        justify-content: space-between;
        padding: 10px;
    }
    .m-t-1 button{
        background: #fe9126;
        color: #fff;
        outline: none;
        border: 0px;
    }
     .m-t-1 p{
         margin: 10px 0px;
         color:#000;
     }
     .m-t-2{
         display:flex;
         flex-direction: column;
     }
     .m-t-2 a{
        padding:3px;
        background: #fe9126;
        color: #fff;
        outline: none;
        border: 0px;
        margin-top:10px;
        padding: 3px 5px;
        text-decoration: none;
         
     }
     .m-t-2 a:nth-child(2){
        padding:3px;
        background: #fff;
        color: #fe9126;
        outline: none;
        border: 0px;
        margin-top:10px;
        padding: 3px 5px;
        border: 1px solid #fe9126;   
     }
     .m-t-2 a:nth-child(3){
        padding:3px;
        background: #fff;
        color: #fe9126;
        outline: none;
        border: 0px;
        margin-top:10px;
        padding: 3px 5px;
        border: 1px solid #fe9126;   
     }
     .m-t-1{
        width:250px;
     }
     .m-t-1 table tr{
         padding: 5px;
         margin-left:20px; 
     }
	 .m-t-1 table{
              width:350px;
      }
      .m-t-1 table tr{
         padding: 5px;
         margin-left:20px; 
     }
     .under-order-det{
     	padding: 12px;
     	margin-top: 10px;
     	background: #fff;
     }
     .under-order-det-inner{
     	display: flex;
     	margin-top: 10px;
     	
     }
     .under-img{
     	margin-top: 20px;
     	height: 200px;
     	width: 150px;
     }
     .under-img img{
     	width: 100px;
     	vertical-align: middle;
     }
     .under-det-2 table tr td{
     	margin-left: 20px;
     	border: none;
     }
     .under-det-2 table tr th{
     	margin-left: 20px;
     	border: none;
     }
     .fil-btn select{
		border: 1px solid #ddd;
		outline: none;
		padding: 2px 5px;
		background: rgb(0,0,0,0.05);

	}
     @media screen and (max-width:  800px){
	    .filter-inner{
	        width:100%;
	    }  
	    .fil-btn button{
	        display:none;
	    }
	   
	    
	  }
</style>
<div class="row">
				<div class="col-sm-4" style="padding: 5px; margin-left: 25px; margin-top:5px; background: #fff; height: 830px;">
					<div class="manage-left">
						<div class="search-input">
							<input type="text" name="" placeholder="Search Shipment/SKU Id or Product Id/Name">
						</div>
						<div class="man-filter">
							<div class="filter-inner">
								<div class="fil-btn">
									<button>Filter</button>
								</div>
								<div class="fil-btn">
									<select>
										<option>Select Order Status</option>
										<option>Awaiting Confirmation</option>
										<option>Awaiting Pick-Up Request</option>
										<option>Pickup Scheduled</option>
										<option>In Transit</option>
									</select>
								</div>
								<div class="fil-btn">
									<select>
										<option>Bulk Action</option>
										<option>Confirm Order</option>
										<option>Print Stock pick List/option>
										<option>Download Order Data</option>
									</select>
								</div>
							</div>
						</div>
						<div>
							<div class="slt-section">
								<div class="slt-section-inner">
									<div class="slt-mang" onclick="bnshow();">
										<b id="actdiv1" class="active"><i class="fa fa-sort-desc" aria-hidden="true"></i> DELIVERED (0)</b>
									</div>
									<div class="ordr" id="div1">
										<b>No orders</b>
									</div>
								</div>
								<div class="slt-section-inner">
									<div class="slt-mang" onclick="bnshow2();">
										<b id="actdiv2"><i class="fa fa-sort-desc" aria-hidden="true"></i> CANCELLED BY SELLER (0)</b>
									</div>
									<div class="ordr" id="div2" style="display: none;">
										<b>No orders</b>
									</div>
								</div>
								<div class="slt-section-inner">
									<div class="slt-mang" id="slt-mang" onclick="bnshow3();">
										<b id="actdiv3"><i class="fa fa-sort-desc" aria-hidden="true"></i> CANCELLED BY BUYER (0)</b>
									</div>
									<div class="ordr" id="div3" style="display: none;">
										<b>No orders</b>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="manage-right">
						<div class="manage-inner-r">
							<img src="/frontend/img/vendor_dash/orders_right_placeholder.png">
							<p>Select an item to see the details</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="ManDetail" style="padding: 5px; margin-top: 5px; height:830px; overflow:scroll; display: none;">
					<div class="manage-right">
							<div class="manage-inner-rbig">
							<div class="p-details">
								<div class="m-details-title">
								    <b>Order Summary</b>
								    <small id="date_time"></small>
								</div>
								<hr>
								<div class="m-details-version">
									<div class="m-t-1">
										<button>AWAITING CONFIRMATION</button>
									    <P id="suborder"></P>
									    <table>
									        <tr>
									            <td style="color: #666;">Order Total</td>
									            <td style="color: #666;">Products in the order</td>
									            <td style="color: #666;">Items Ordered</td>
									        </tr>
									        <tr>
									            <td style="font-size: 20px; font-weight: bold;" id="amount"></td>
									            <td style="font-size: 20px; font-weight: bold;" id="quantity"></td>
									            <td style="font-size: 20px; font-weight: bold;" id="item"></td>
									        </tr>
									    </table>
									</div>
									<div class="m-t-2" id="buttons">
									    
									</div>
								</div>
							</div>
							</div>
								<div class="under-order-det">
									<b>Total Unique Products</b>
									<div class="under-order-det-inner">
										<div class="under-det-1">
											<div class="under-img" id="prod_pic">
											</div>
										</div>
										<div class="under-det-2">
											<table class="table table-borderless">
												<tr>
													<th colspan="2">Item Ordered</th>
													<td id="item_order"></td>
													
												</tr>
												<tr>
													
													<th colspan="2">Per Unit Price</th>
													<td id="per_unit"></td>
												</tr>
												<tr>
													<th colspan="2">Total Price</th>

													<td id="grand_total"></td>
												</tr>
												<tr>
													<th colspan="2">ZMall SKU</th>

													<td>SSKJOIWEJRKJNB87438975ER</td>
												</tr>
												<tr>
													<th colspan="2">Seller SKU</th>

													<td>WORE8927394</td>
												</tr>
												<tr>
													<th colspan="2">Product Name</th>
													<td id="p_name"></td>
												</tr>											
											</table>
										</div>
									</div>
								</div>
							
						

					</div>
				</div>
				<!-- ###################################################################### -->
				<div class="col-sm-6" id="ManDetail1" style="padding: 5px; margin-top: 5px; height:830px; overflow:scroll; display: none;">
					<div class="manage-right">
							<div class="manage-inner-rbig">
							<div class="p-details">
								<div class="m-details-title">
								    <b>Order Summary</b>
								    <small id="date_time1"></small>
								</div>
								<hr>
								<div class="m-details-version">
									<div class="m-t-1">
									    <button>AWAITING PICK-UP REQUEST</button>
									    <P id="suborder1"></P>
									    <table>
									        <tr>
									            <td style="color: #666;">Order Total</td>
									            <td style="color: #666;">Products in the order</td>
									            <td style="color: #666;">Items Ordered</td>
									        </tr>
									        <tr>
									            <td style="font-size: 20px; font-weight: bold;" id="amount1"></td>
									            <td style="font-size: 20px; font-weight: bold;" id="quantity1"></td>
									            <td style="font-size: 20px; font-weight: bold;" id="item1"></td>
									        </tr>
									    </table>
									</div>
									<div class="m-t-2" id="buttons1">
									    
									</div>
								</div>
							</div>
							</div>
								<div class="under-order-det">
									<b>Total Unique Products</b>
									<div class="under-order-det-inner">
										<div class="under-det-1">
											<div class="under-img" id="prod_pic1">
												
											</div>
										</div>
										<div class="under-det-2">
											<table class="table table-borderless">
												<tr>
													<th colspan="2">Item Ordered</th>
													<td id="item_order1"></td>
													
												</tr>
												<tr>
													
													<th colspan="2">Per Unit Price</th>
													<td id="per_unit1"></td>
												</tr>
												<tr>
													<th colspan="2">Total Price</th>

													<td id="grand_total1"></td>
												</tr>
												<tr>
													<th colspan="2">ZMall SKU</th>

													<td>SSKJOIWEJRKJNB87438975ER</td>
												</tr>
												<tr>
													<th colspan="2">Seller SKU</th>

													<td>WORE8927394</td>
												</tr>
												<tr>
													<th colspan="2">Product Name</th>
													<td id="p_name1"></td>
												</tr>											
											</table>
										</div>
									</div>
								</div>
							
						

					</div>
				</div>
				<!-- ########################################################## -->
				
			</div>

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
function bnshow4(){
		var x = document.getElementById("div4");
		var y = document.getElementById("actdiv4");
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
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
	function showdetails(id){
	var x = document.getElementById("ManDetail");
	var y = document.getElementById("ManDetail1");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.style.display = "none";
		  }
		$.ajax({
      type: 'GET',
      url: '/GetOrderDetail/' + id,
      success: function (response) {
      var response = JSON.parse(response);
      console.log(response);
      response.forEach(element => {
        document.getElementById('date_time').innerHTML = "Added on " + element['added_on'];
        document.getElementById('suborder').innerHTML = "SubOrder ID: " + element['order_no'];
        document.getElementById('amount').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('quantity').innerHTML = element['quantity']+ " Product";
        document.getElementById('item').innerHTML = element['quantity']+ " Item";
        document.getElementById('item_order').innerHTML = element['quantity']+ " Item";
        document.getElementById('per_unit').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('grand_total').innerHTML = element['grand_total']+ " PKR";
        $('#buttons').empty();
        $('#buttons').append(`<a href="admin/tovendor/order_conformation/${element['id']}" name="comfirm_order" >Confirm Order</a>
			<a name="cancel_order" href="admin/tovendor/order_conformation/${element['id']}" >Cancel Order</a>`);
        });
          }
         });
		$.ajax({
      type: 'GET',
      url: '/GetOrderImage/' + id,
      success: function (response) {
      var response = JSON.parse(response);
      console.log(response);
      response.forEach(element => {
        $('#prod_pic').empty();
        $('#prod_pic').append(`<img src="/frontend/storage/uploads/${element['images']}" style="height:100px;" alt="no" />`);
        document.getElementById('p_name').innerHTML = element['title'];
        });
          }
         });

}
function showdetails1(id){
	var x = document.getElementById("ManDetail1");
	var y = document.getElementById("ManDetail");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.style.display = "none";
		  }

		$.ajax({
      type: 'GET',
      url: '/GetOrderDetail/' + id,
      success: function (response) {
      var response = JSON.parse(response);
      console.log(response);
      response.forEach(element => {
        document.getElementById('date_time1').innerHTML = "Added on " + element['added_on'];
        document.getElementById('suborder1').innerHTML = "SubOrder ID: " + element['order_no'];
        document.getElementById('amount1').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('quantity1').innerHTML = element['quantity']+ " Product";
        document.getElementById('item1').innerHTML = element['quantity']+ " Item";
        document.getElementById('item_order1').innerHTML = element['quantity']+ " Item";
        document.getElementById('per_unit1').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('grand_total1').innerHTML = element['grand_total']+ " PKR";
        $('#buttons1').empty();
        $('#buttons1').append(`<a href="admin/tovendor/requestPickUp/${element['id']}">Request Pick-Up</a>
							<a href="">View Invoice</a>
							<a href=""><i class="fa fa-print" aria-hidden="true"></i> Mark Printed</a>`);
        
        });
          }
         });
		$.ajax({
      type: 'GET',
      url: '/GetOrderImage/' + id,
      success: function (response) {
      var response = JSON.parse(response);
      console.log(response);
      response.forEach(element => {
        $('#prod_pic1').empty();
        $('#prod_pic1').append(`<img src="/frontend/storage/uploads/${element['images']}" style="height:100px;" alt="no" />`);
        document.getElementById('p_name1').innerHTML = element['title'];
        });
          }
         });
}
</script>
@endsection