@extends('dashboard.dash-layout.layout')
@section('content')
<style>
.time-inner{
    display: flex;
    background: #fff;
    margin: 20px;
    justify-content: center;
    align-items: center;
    padding: 10px;
    flex-direction: column;
    border-radius: 10px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    color: #555;
}
.late-nofi-content span{
    position: absolute;
    top:5px;
    right:15px;
    cursor: pointer;
    font-weight: bold;
}
.timer{
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
}
.timer-col{
    font-size: 20px;
}
.time-inner p:nth-child(1){
     font-size: 24px;
    font-weight: 600;
    margin: 0;
}

.time-inner p{
   font-size: 20px;
    font-weight: 600;
    margin: 0;
}
    .awa{
        padding: 10px 5px;
        border: 1px solid #ddd;
    }
    .awa:hover{
        cursor:pointer;
        background: #ddd;
       
    }
    .awa.active{
        cursor:pointer;
        background: #fe9126;
        color: #fff !important;
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
 
     .m-t-1 table tr{
         padding: 5px;
         margin-left:20px; 
     }
	 .m-t-1{
              max-width: 80%;
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
	.late-nofi{
	    position: relative;
	    top:0;
	    right:0;
	}
	.late-nofi-content{
	    background: red;
	    color: #fff;
	    padding: 10px 20px;
	    text-align: center;
	}
	.ordr{
	    overflow-y: scroll !important;
	    max-height: 600px !important;
        
	}
	  @media screen and (max-width:  800px){
	    .filter-inner{
	        width:100%;
	    }
	    #h-mobi{
	        max-height:500px;
	    }
	    .fil-btn button{
	        display:none;
	    }
	   
	    .manage-inner-rbig{
	        padding: 10px;
	    }
	    .m-t-1 table {

        }
        .under-det-2{
            overflow: scroll;
        }
        .under-img {
            margin-top: 20px;
            height: 200px;
            width: auto;
        }
        .time-inner{
            margin: 10px;
        }
        .manage-right{
            padding: 0px 15px;
        }
	   .late-nofi-content {
            background: red;
            color: #fff;
            padding: 10px 50px;
            text-align: center;
        }
        #ManDetail1{
            padding: 0 15px;
        }
        #ManDetail{
            padding: 0 15px;
        }
        .ordr{
        max-height: 200px;
        overflow: scroll;
        }
	    
	  }
</style>
<div class="row">
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
				<div class="col-sm-4" style="padding: 5px; margin-left: 25px; margin-top:5px; background: #fff; height: 830px; overflow: hidden;" id="h-mobi">
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
										<b id="actdiv1" class="active"><i class="fa fa-sort-desc" aria-hidden="true"></i> AWAITING CONFIRMATION ({{$pending_orders_no}})</b>
									</div>
									<div class="ordr" id="div1">
										@foreach($pending_orders as $p)
										<div class="awa-div">
										    <div class="awa" onclick="showdetails('{{$p->order_id}}','{{$p->added_on}}');">
										        <p>{{$p->orderinfoproduct->order_no}}</p>
										        <small>1 Product, placed on {{ date("d M, Y",strtotime($p->added_on)) }}</small>
										    </div>
										</div>
										@endforeach
									</div>
								</div>
								<div class="slt-section-inner">
									<div class="slt-mang" onclick="bnshow2();">
										<b id="actdiv2" class="active"><i class="fa fa-sort-desc" aria-hidden="true"></i> AWAITING PICK-UP REQUEST ({{$awaiting_pick_no}})</b>
									</div>
									<div class="ordr" id="div2">
										@foreach($awaiting_pick as $p)
										@if($p->orderinfoproduct->is_shipped == 0)
										<div class="awa-div">
										    <div class="awa" onclick="showdetails1('{{$p->order_id}}');">
										        <p>{{$p->orderinfoproduct->order_no}}</p>
										        <small>1 Product, placed on {{ date("d M, Y",strtotime($p->added_on)) }}</small>
										    </div>
										</div>
										@endif
										@endforeach
									</div>
								</div>
								<div class="slt-section-inner">
									<div class="slt-mang" id="slt-mang" id="try" onclick="bnshow4();">
										<b id="actdiv4"><i class="fa fa-sort-desc" aria-hidden="true"></i> IN TRANSIT ({{$transit_no}})</b>
									</div>
									<div class="ordr" id="div4" style="display: none;">
										@foreach($transit as $p)
										<div class="awa-div">
										    <div class="awa" onclick="showdetails1('{{$p->order_id}}');">
										        <p>{{$p->orderinfoproduct->order_no}}</p>
										        <small>1 Product, placed on {{ date("d M, Y",strtotime($p->added_on)) }}</small>
										    </div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="show1">
				    
					<div class="manage-right">
						<div class="manage-inner-r">
							<img src="/frontend/img/vendor_dash/orders_right_placeholder.png">
							<p>Select an item to see the details</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="ManDetail" style="padding: 5px; margin-top: 5px; height:830px; overflow:hidden; display: none;" id="h-mobi">
				    
					<div class="manage-right">
					    <div class="late-nofi">
    				        <div class="late-nofi-content" id="notif" style="display:block;">
    				            <span onclick="notifHid();">✕</span>
    				            <b>3 days delivery will be considered normal; 4th day delivery will be considered late.<br> On 5th day, order will be cancelled automatically.</b>
    				        </div>
				        </div>
				        <div class="down-counter">
                        <div class="timer" style="display:flex;">
                            <div class="time-inner">
                                <p id="day"></p>
                                <p>Days</p>
                            </div>
                            <div class="timer-col">
                                :
                            </div>
                            <div class="time-inner">
                                <p id="hour"></p>
                                <p>HOURS</p>
                            </div>
                            <div class="timer-col">
                                :
                            </div>
                            <div class="time-inner">
                                <p id="mint"></p>
                                <p>MINS</p>
                            </div>
                            <div class="timer-col">
                                :
                            </div>
                            <div class="time-inner">
                                <p id="sec"></p>
                                <p>SECS</p>
                            </div>
      
                        </div>
                    </div>
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
									    <table class="table table-borderless">
									        <tr>
									            <td style="color: #666;">Order Total</td>
									            <td style="color: #666;">Products in the order</td>
									            <td style="color: #666;">Items Ordered</td>
									        </tr>
									        <tr>
									            <td style="font-size: 14px; font-weight: bold; padding:5px;" id="amount"></td>
									            <td style="font-size: 14px; font-weight: bold; padding:5px;" id="quantity"></td>
									            <td style="font-size: 14px; font-weight: bold; padding:5px;" id="item"></td>
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
				<div class="col-sm-6" id="ManDetail1" style="padding: 5px; margin-top: 5px; height:830px; display: none;">
				    
					<div class="manage-right">
							<div class="manage-inner-rbig">
							<div class="p-details">
								<div class="m-details-title">
								    <b>Order Summary</b>
								    <small id="date_time1"></small>
								</div>
								<hr>
								<div class="m-details-version">
									<div class="m-t-1" >
									    <div id="trap">
									    	
									    </div>
									    <P id="suborder1"></P>
									    <table class="table table-borderless">
									        <tr>
									            <td style="color: #666;">Order Total</td>
									            <td style="color: #666;">Products in the order</td>
									            <td style="color: #666;">Items Ordered</td>
									        </tr>
									        <tr>
									            <td style="font-size: 14px; font-weight: bold; padding: 5px; " id="amount1"></td>
									            <td style="font-size: 14px; font-weight: bold; padding: 5px; " id="quantity1"></td>
									            <td style="font-size: 14px; font-weight: bold; padding: 5px; " id="item1"></td>
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
<div class="modal fade" id="cancelmodal" tabindex="-1" role="dialog" aria-labelledby="cancelmodal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="display:flex;">
        <h3 class="modal-title" id="exampleModalLongTitle" style="width: 60%;">Cancellation Reason</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: flex;
    justify-content: flex-end;
    width: 60%; ">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="orders_cancelled">
      <div class="modal-body">
      		<input type="hidden" name="order_id" id="order_id" value="">
        <textarea name="reason" placeholder="Cancellation Reason..." style="width: 100%; min-height: 200px; padding: 5px 10px; border: 1px solid #ddd; outline: none;"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  style="background:#fe9126; color: #fff; border:1px solid #fe9126; outline:none;">Submit</button>
      </div>
      </form>
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
<script type="text/javascript">
	function showdetails(id,time){
		timmer(time);
	var x = document.getElementById("ManDetail");
	var y = document.getElementById("ManDetail1");
	var z = document.getElementById("show1");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.style.display = "none";
		    z.style.display = "none";
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
        document.getElementById('quantity').innerHTML = "1"+ " Product";
        document.getElementById('item').innerHTML = "1"+ " Item";
        document.getElementById('item_order').innerHTML = "1"+ " Item";
        document.getElementById('per_unit').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('grand_total').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('order_id').value = element['id'];
        $('#buttons').empty();
        $('#buttons').append(`<a href="order_conformation/${element['id']}" name="comfirm_order" >Confirm Order</a>
			<a name="cancel_order" data-toggle="modal" data-target="#cancelmodal" style="cursor:pointer;">Cancel Order</a>`);
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
	var z = document.getElementById("show1");
		  if (x.style.display === "none") {
		    x.style.display = "block";
		    y.style.display = "none";
		    z.style.display = "none";
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

        document.getElementById('item1').innerHTML = "1" + " Item";
        document.getElementById('item_order1').innerHTML = "1"+ " Item";
        document.getElementById('per_unit1').innerHTML = element['grand_total']+ " PKR";
        document.getElementById('grand_total1').innerHTML = element['grand_total']+ " PKR";
        if (element['is_shipped'] == '1'){
        $('#trap').empty();
        $('#trap').append(`<button style="background:#666;">IN TRANSIT</button>`);
		$('#buttons1').empty();
		if(element['shipped_by'] == 'Leopard'){
        $('#buttons1').append(`
        <a href="${element['download_invoice']}"><i class="fa fa-print" aria-hidden="true"></i> View Invoice</a>`);
    	}
    	if(element['shipped_by'] == 'Trax'){
    		$('#buttons1').append(`
        <a href="download-trax-slip/${element['tracking_no']}"><i class="fa fa-print" aria-hidden="true"></i> View Invoice</a>`);
    	}
        }
        else{
        $('#trap').empty();
        $('#trap').append(`<button style="background: #fff; border:1px dotted #fe9126; color:#fe9126;">AWAITING PICK-UP REQUEST</button>`);
        $('#buttons1').empty();
        $('#buttons1').append(`<a href="requestPickUp/${element['id']}">Request Pick-Up</a>`);
    }
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
        document.getElementById('quantity1').innerHTML = element['title'];
        });
          }
         });
}
</script>
 <script>
    function timmer(time){
// Set the date we're counting down to

    var countDownDate = new Date(time).getTime() + 259200000;

// Update the count down every 1 second
var x = setInterval(function() {
clearInterval(x);
  // Get today's date and time
  var now = new Date().getTime();
  //countDownDate.setDate(countDownDate.getDate() + 3);
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Output the result in an element with id="tampo"
  document.getElementById("day").innerHTML =days;
  document.getElementById("hour").innerHTML =hours;
  document.getElementById("mint").innerHTML =minutes;
  document.getElementById("sec").innerHTML =seconds;
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("tampo").innerHTML = "Late";
  }
}, 1000);
}
</script>
<script>
   $(document).ready(function() {
$(".awa").click(function () {
    $(".awa").removeClass("active");
    // $(".awa").addClass("active"); // instead of this do the below 
    $(this).addClass("active");   
});
});
</script>
<script>
function notifHid(){
    var a = document.getElementById("notif");
    if(a.style.display==="block"){
        a.style.display="none";
    }
    else{
        a.style.display="block;"
    }
    }
</script>
@endsection