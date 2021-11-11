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
<link rel="stylesheet" type="text/css" href="{{asset('/moreinfo.css')}}">
</head>
<body>
	<div class="container-fluid bg">
		<div class="row">
			<div class="topdesc">
			<center><h3>Financial Details</h3></center>
			<center>
				<b>Required to make payments to you</b>
			</center>
				</div>
			<div class="log-form">
				
				<form method="POST" action="{{ route('Vendorupdatefinancial') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-inner">
					<div class="form-inner">
						
						<div class="inp-field">
							
							<select name="selectid" required>
								<option>Select Type of ID</option>
								<option>National ID</option>
								<option>Passport</option>
								<option>Driving Lisence</option>
								<option>Tax ID</option>
							</select>
						</div>
						<div class="inp-field">
							
							<input type="text" name="id_code" placeholder="ID Code" required>
						</div>
						<div class="inp-field">
							
							<select name="select_bank" required>
								<option>Select Bank</option>
								<option value="Al Baraka Bank Pakistan Limited">Al Baraka Bank Pakistan Limited</option>
								<option value="Alfalah Bank Limited">Alfalah Bank Limited</option>
								<option value="Allied Bank Limited">Allied Bank Limited</option>
								<option value="Askari Bank Limited">Askari Bank Limited</option>
								<option value="Bank AL Habib Limited">Bank AL Habib Limited</option>
								<option value="BankIslami Pakistan Limited">BankIslami Pakistan Limited</option>
								<option value="Burj Bank Limited">Burj Bank Limited</option>
								<option value="Deutsche Bank ">Deutsche Bank </option>
								<option value="Dubai Islamic Bank Pakistan Limited">Dubai Islamic Bank Pakistan Limited</option>
								<option value="Easypaisa">Easypaisa</option>
								<option value="Faysal Bank Limited">Faysal Bank Limited</option>
								<option value="First Women Bank Limited">First Women Bank Limited</option>
								<option value="Habib Bank Limited">Habib Bank Limited</option>
								<option value="Habib Metropolitan Bank Limited">Habib Metropolitan Bank Limited</option>
								<option value="Industrial And Commercial Bank Of Chaina">Industrial And Commercial Bank Of Chaina</option>
								<option value="JazzCash">JazzCash</option>
								<option value="JS Bank Limited">JS Bank Limited</option>
								<option value="MCB Bank Limited">MCB Bank Limited</option>
								<option value="MCB Islamic Bank Limited">MCB Islamic Bank Limited</option>
								<option value="Meezan Bank Limited">Meezan Bank Limited</option>
								<option value="National Bank Of Pakistan">National Bank Of Pakistan</option>
								<option value="NIB Bank Limited">NIB Bank Limited</option>
								<option value="S.M.E. Bank Limited">S.M.E. Bank Limited</option>
								<option value="Samba Bank Limited">Samba Bank Limited</option>
								<option value="Silk Bank Limited">Silk Bank Limited</option>
								<option value="Sindh Bank Limited">Sindh Bank Limited</option>
								<option value="Soneri Bank Limited">Soneri Bank Limited</option>
								<option value="Standard Chartered Bank Pakistan Limited">Standard Chartered Bank Pakistan Limited</option>
								<option value="Summit Bank Limited">Summit Bank Limited</option>
								<option value="The Bank Of Khyber">The Bank Of Khyber</option>
								<option value="The Bank Of Punjab">The Bank Of Punjab</option>
								<option value="The Bank Of Punjab">The Bank Of Punjab</option>
								<option value="The Punjab Provincial Cooperative Bank Limited">The Punjab Provincial Cooperative Bank Limited</option>
								<option value="Ubl Bank Limited">Ubl Bank Limited</option>
								<option value="Zarai Taraqiati Bank Limited">Zarai Taraqiati Bank Limited</option>


							</select>
</div>
	
						<div class="inp-field">
							
							<input type="text" name="acc_no" placeholder="Bank Account Number" required>
						</div>
						<div class="inp-field">
							
							<input type="text" name="txt_id" placeholder="TAX ID(Optional)">
						</div>
						
						<div id="pre-acc-info"> 
						<div class="inp-field">
							
							<input type="text" name="phone" placeholder="Contact Number">
						</div>
						<div class="inp-field">
							
							<input type="text" name="address" placeholder="Billing Address">
						</div>
						<div class="inp-field">
							
							<input type="text" name="landmark" placeholder="Landmark(Optional)">
						</div>

						<div class="inp-field">
							
							<input type="text" name="city" placeholder="City">
						</div>
						</div>
						<div class="inp-field chk">
						<span><input type="checkbox" name="confrm_details" required id="chkbdet"></span><span><label for="chkbdet"> Please Confirm Bank Details to Continue</label></span>	 
						</div>
					</div>
					

					<button type="submit">Done</button>
					</form>

					

					
				
				
			</div>
			
		</div>
	</div>

<script type="text/javascript">
	function preacc() {
  var x = document.getElementById("pre-acc-info");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>