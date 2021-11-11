<?php use App\User;
	  
 ?>
<?php 
if(isset($_REQUEST['hidbtn']))
	{
		$user = "";
		$mail = $_GET["username"];
		$user = User::where('email',$mail)->where('role','vendor')->first();
		if(!empty($user))
		{
		Session::put('getemail', 'yes');
		}
		else
		{
		Session::put('getemail','no');
		}
	}
?>
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
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/login-style.css') }}">

	<!-- <link rel="stylesheet" href="css/ads-style.css" type="text/css" media="screen"/> -->
	<script src="{{ asset('frontend/main/js/cufon-yui.js') }}" type="text/javascript"></script>


 <script src="{{ asset('/frontend/js/confetti.js') }}"></script>

<!-- 	FOR SLIDER MOBILE -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  
  
 <style>
  .chk{
    font-size: 14px;
    display:flex;
}
.chk label{
    margin-left: 5px;
    font-size: 12px;
    font-weight: normal;
    margin-top:3px;
}

@media screen and (min-device-width : 320px) and (max-device-width : 480px) {
    
          .log-form {
            text-align: center;
            transform: scale(2.5);
            margin-top: 400px;
        }
       .log-form {
        position: relative;
        left:7%;
        border: 0;
        padding-left: 32px;
        padding-right: 32px;
        margin: 0 auto;
        max-width: 448px;
        background: #fff;
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: none; 
        margin-top:400px;
    }
    .bg{
        background: #fff;
    }
    .form-inner input {
    border: 1px solid rgb(40,44,63,.6);
    padding: 6px 16px 5px;
    height: 40px;
    background-color: transparent;
    box-shadow: none;
    border-radius: 2px;
    font-family: circular,Arial,sans-serif;
    width: 100%;
    font-size: 12px;
    transition: .2s;
}
.chk input{
    height: auto !important;
    width: auto !important;
}
.chk{
    font-size: 14px;
    display:flex;
}
.chk label{
    margin-left: 5px;
}
  }
  </style>
</head>
<body>
	<div class="container-fluid bg">
		<div class="row">
			
			<div class="log-form">
				<img src="{{ asset('/frontend/images/login/logo.png') }}" alt="IMG">
				<br>
				<small>WELCOME, BE A PART OF US</small>
				<form>
					@csrf
					<div class="form-inner">
						<b>Continue with Email</b>
						<div class="inp-field">
							@if(Session::get('getemail') == "")
							<input type="email"  name="username" id="username"  placeholder="Email">
							@elseif(Session::get('getemail') == "no")
							<input type="email" name="email" id="reg_email_vendor" tabindex="2" class="form-control" placeholder="Email Address" value="{{$mail}}" >
									<p class="reg_email" style="color: red"></p>
							@elseif(Session::get('getemail') == "yes")
							<p class="check_login_password"></p>
							<p class="registration_confirmation"></p>
							<input type="email" name="username" id="username" tabindex="1" class="form-control" placeholder="Email" value="{{$user->email}}" style=margin-left:20px;">
							@endif
						</div>
						<div id="show-log-bot" style="display: block;">
							@if($user = Session::get('getemail'))
							@if($user == 'yes')
							<div class="inp-field">
								<input type="password" name="password" id="login_password" tabindex="2" class="form-control" placeholder="Password" style=margin-left:20px;">
							</div>
							<button  type="button" name="login-submit" id="login-submit" class="form-control btn btn-login onSubmit check_login_form_vendor" style="display: block; color:#fff; outline:none;">Login</button>
							<br>
							<a href="/forgot-password/resetVendor" style="margin-top:20px; font-weight:bold;">Forgot Password?</a>
							<!-- ---------------Agar sign up krnwana ha to disoplay one hata do-------------- -->
							@elseif($user == 'no')
							<div>
								<div class="inp-field">
									<input type="text" name="firstname" id="regfirstname_vendor" class="form-control " placeholder="Full Name" value="">
									<p class="regfirstname" style="color: red"></p>
								</div>
								<div class="inp-field">
									<input type="phone" name="displayname" id="reg_displayname_vendor" tabindex="2" class="form-control" placeholder="Phone Number">
									<p class="reg_displayname" style="color: red"></p>
								</div>
								<div class="inp-field">
									<input type="password" name="password" id="reg_password_vendor" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="inp-field" id="ntn">	
									<input type="text" name="ntnNo" id="ntnNo" placeholder="Enter NTN Number">
								</div>
								<div class="chk">
									<input type="checkbox" name="check" id="check"> <label for="check">By signing up, I agree to Zmall's <a href=""> Privacy Policy </a>and <a href="">Terms & Conditions</a></label>
									
								</div>
								<div class="chk">
									<input type="checkbox" name="" id="check2"> <label for="check2">Subscribe to our exclusive offers & promotions</label>
								</div>
							</div>
							<input type="hidden" name="role" id="role" value="user">
							
							<button type="button" name="register-submit"  tabindex="4" class="form-control btn-register check_register_form_vendor" value="Register" style="display: block; padding:0px; ">Register</button>
							<!-- ---------------A-------------- -->
							@endif
							@endif
					</div>
					</div>
					@if(Session::get('getemail') == "")
					<button  id="hidbtn" name="hidbtn">Proceed</button>
					@endif
				</form>	
              @if(Session::get('getemail') == "")
				<div class="btm-head" id="botm-hid">
					<div class="botm-head">
					<div></div><b>or</b><div></div>
					</div>
					<b>Continue with</b>
					<div class="social-log">
						<img src="{{ asset('/frontend/images/login/fb.png') }}" alt="IMG">
						<img src="{{ asset('/frontend/images/login/google.png') }}" alt="IMG">
					</div>
				</div>
              @endif
			</div>
		</div>
	</div>
	<script type="text/javascript">
	var lg=document.getElementById("loginn");
	var fg=document.getElementById("fogott");
    
	function showforgotmodal() {
		if(fg.style.display=="none")
		{
			fg.style.display="block";
			lg.style.display="none";
		}
	}
function showmodall(){
	fg.style.display="none";
			lg.style.display="block";
}

</script>

<script>  

        $(window).ready(function() { 
        $(".loginFormVendor").on("keypress", function (event) { 
            // console.log("aaya"); 
            var keyPressed = event.keyCode || event.which; 
            if (keyPressed === 13) { 
                // alert("You pressed the Enter key!!"); 
                event.preventDefault(); 
		        $(".check_login_form_vendor").trigger("click");
			

                // return false; 
            } 
        }); 
        }); 
  
    </script> 

    <script>

$(function() {


	$(".check_login_form_vendor").click(function(e) {
		e.preventDefault();
		var username = $("#username").val(); 
		var login_password = $("#login_password").val(); 
		if(username == ''){
			$("#username").css("border", "1px solid red");
		}else{
			$("#username").css("border", "1px solid green");
		}
		if(login_password == ''){
			$("#login_password").css("border", "1px solid red");
		}else{
			$("#login_password").css("border", "1px solid green");
		}

		if(username != '' && login_password != ''){
			   var _token = "{{ csrf_token() }}";
				$.post("{{ url('authlogin/vendor') }}", {username:username,password:login_password,_token:_token}, function(result){
			    	if(result.status == 'success'){
			    		window.location.href = "/Vendor/dashboard";
			    	}else{
			    		$(".check_login_password").text(result.status);
			    	}
			  },"json");
		}
		
	});
	$(".check_register_form_vendor").click(function(e){
		e.preventDefault();
		var firstname = $("#regfirstname_vendor").val();
		var displayname = $("#reg_displayname_vendor").val();
		var email = $("#reg_email_vendor").val();
		var password = $("#reg_password_vendor").val();
		var check = $("#check").val();
		var confirmpassword = $("#reg_confirmpassword_vendor").val();
		var role = 'vendor';
		if(firstname == ''){ 
			$(".regfirstname").text("Please enter your first name!");
		}
		else
		{
			$(".regfirstname").text("");
		}
		if(displayname == "") {
			$(".reg_displayname").text("Please enter your Phone No!");
		}
		else
		{
			$(".reg_displayname").text("");
		}
		if(email == "") {
			$(".reg_email").text("Please enter your email!");
		}
		else
		{ 
			$(".reg_email").text("");
		}

		if(password == "") {
			$("#reg_password").css("border","1 px solid red");
		}
		else
		{
			$("#reg_password").css("border", "1 px solid green");
		}

		if(confirmpassword == "") {
			$("#reg_confirmpassword").css("border","1 px solid red");
		}
		else
		{
			$("#reg_confirmpassword").css("border", "1 px solid green");
		}
		
		if(password !== confirmpassword){
			$(".confirmpassword").text("Password and confirm password don not matched!");
		}else{
			$(".confirmpassword").text("");
		}
		
		if(email !== '' && displayname !== '' && password !== '' && firstname !== ''){ 
			   
			    var _token = "{{ csrf_token() }}";
			    var _token = "{{ csrf_token() }}";
			    	$.post("{{ url('authsignup')}}",{first_name:firstname,email:email,role:role,username:displayname,password:password,_token:_token}, function(result){
			    	if(result.status == 'success'){
			    		window.location = "{{ url('storedetails')}}";
			    	}else if(result.status == 'duplicate email'){
			    		$(".reg_email").text(result.message);
			    	}else if(result.status == 'duplicate username'){
			    		$(".reg_displayname").text(result.message);
			    	}
			  },"json");
		}

	})

});



</script>
</body>
</html>