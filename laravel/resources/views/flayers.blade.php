<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Zmall</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/login-style.css')}}">

<style>
/*@media only screen and (max-width: 800px) {*/
/*    .log-form {*/
/*    position: relative;*/
/*    margin: 0px !important;*/
/*    max-width: 800px !important;*/
/*    background: #fff;*/
/*    box-sizing: border-box;*/
/*    border-radius: 8px;*/
/*    width: 100%;*/
/*    box-shadow: rgb(40 44 63 / 8%) 0 0 16px 0;*/
/*    }*/
/*}*/
</style>
</head>
<body>
	<div class="container-fluid bg">
		<div class="row">
			<div class="log-form">
				<img src="{{asset('frontend/storage/uploads/210104104719logo.png')}}" alt="IMG">
				<br>
				<small>We Welcome you as a seller</small>
				<form method="POST" action="{{ route('morestoreinfo') }}" enctype="multipart/form-data" >
                  @csrf
					<div class="form-inner">
						<b>Do you want to order our flayers?</b>
						<div class="custom-select">
							<b>Select Size:</b>
							<select id="select_size" name="select_size" onchange="selectsize();" style="cursor:pointer;"> 
								<option disabled="disabled" selected="selected">Select</option>
								<option value="Small">Small Flayers</option>
								<option value="Medium">Medium Flayers</option>
								
							</select>
							@error('size')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
							<br>
							<b>Select Quantity:</b>
							<select id="select_quantity" name="select_quantity" onchange="selectquantity();" style="cursor:pointer;">

								<option disabled="disabled" selected="selected">Select</option>
								<option value="10">10 Flayers</option>
								<option value="25">25 Flayers</option>
								<option value="50">50 Flayers</option>
							</select>
							@error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
						<!-- 	<input type="text" name="fasial"> -->
						</div>
						<div class="flyr-pr">
							<label>INVOICE</label>
							<table class="table table-borderless">
								<tr>
									<td>Size</td>
									<td id="size"></td>
									<input type="hidden" name="size" id="hidsize">
								</tr>
								<tr>
									<td>Quantity</td>
									<td id="quantity"></td>
									<input type="hidden" name="quantity" id="hidquantity">
								</tr>
								<tr>
									<td>Price per 10 flayers</td>
									<td id="per_piece"></td>
								</tr>
								<tr>
									<td>Total Price</td>
									<td id="total"></td>
									<input type="hidden" name="total" id="hidtotal">
								</tr>								
							</table>
						</div>
					</div>
					<button type="submit" name="proced">Proceed</button>
					@if(empty(Auth::id()))
					<button type="submit" name="skip">Skip for now</button>
					@endif
				</form>
			</div>
		</div>
	</div>

	<!-- medium 10,25,50
	200 500 1000

	small 10,25,50
	150 375 750 -->
	<script type="text/javascript">
		var totalamount = "";
		var per_piece = "";
		var size = ""; 
		function selectsize(){
			 size = document.getElementById('select_size').value;
			document.getElementById('size').innerHTML = size;
			document.getElementById('hidsize').setAttribute('value', size);
		}
		function selectquantity(){
			var quantity = document.getElementById('select_quantity').value;
			document.getElementById('quantity').innerHTML = quantity;
			document.getElementById('hidquantity').setAttribute('value', quantity);
			if (size == 'Medium') 
			{
				per_piece = 20;
				document.getElementById('per_piece').innerHTML = per_piece;
				 totalamount = quantity * per_piece;
				document.getElementById('total').innerHTML = totalamount;
				// for hidden field
				document.getElementById('hidtotal').setAttribute('value', totalamount);
			}
			if (size == 'Small') 
			{
				per_piece = 15;
				document.getElementById('per_piece').innerHTML = per_piece;
				 totalamount = quantity * per_piece;
				document.getElementById('total').innerHTML = totalamount;
				document.getElementById('hidtotal').setAttribute('value', totalamount);
			}
			
		}
		
	</script>

</body>
</html>