<?php use App\User;
	  
 ?>
 <?php 

					if(isset($_REQUEST['hidbtn'])){
					$user = "";
					$mail = $_GET["username"];
					$user = User::where('email',$mail)->first();
					if(!empty($user)){
					Session::put('getemail', 'yes');
				}
					else{
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
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/login-style.css?v=version2') }}">

	<!-- <link rel="stylesheet" href="css/ads-style.css" type="text/css" media="screen"/> -->
	<script src="{{ asset('main/js/cufon-yui.js') }}" type="text/javascript"></script>


 <script src="{{ asset('/js/confetti.js') }}"></script>

<!-- 	FOR SLIDER MOBILE -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<style>
    .form-inner input{
        width:100%;
    }
    .form-inner select{
        width:100%;
    }
    .log-form button{
        width:100%;
        padding:0px;
        outline:none;
    }
    .log-form button:hover{
        color:#fff;
        outline:none;
    }
    .log-form button:focus{
        color:#fff;
        outline:none;
        border:none;
    }
    .log-form button:active{
        color:#fff;
        outline:none;
        border:none;
    }
</style>


</head>

<body>
	<div class="container-fluid bg">
		<div class="row">
			
			<div class="log-form">
				<img src="{{ asset('frontend/images/login/logo.png') }}" alt="IMG">
				<br>
				<small>WELCOME, BE A PART OF US</small>
				<form>
					<div class="form-inner">
						<b>Continue with Email</b>
						<div class="inp-field">
							@if(Session::get('getemail') == "")
							<input type="text"  name="username" id="username"  placeholder="Email">
							@elseif(Session::get('getemail') == "no")
							<input type="email" name="email" id="reg_email" tabindex="2" class="" placeholder="Email Address" value="">
							<p class="reg_email" style="color: red"></p>
							@elseif(Session::get('getemail') == "yes")
							<p class="check_login_password"></p>
							<p class="registration_confirmation"></p>
							<input type="text" name="email" id="email" tabindex="1" class="" placeholder="Email" value="">
							@endif
						</div>
						<div id="show-log-bot" style="display: block;">
							@if($user = Session::get('getemail'))
							@if($user == 'yes')
							<div class="inp-field">
								<input type="password" name="password" id="login_password" placeholder="Password">
							</div>
							<button  type="button" name="login-submit" id="login-submit" class="btn-login onSubmit check_login_form" style="display: block;">Login</button>
					<!-- -------------------/session end--------------------- -->
					<a href="" id="notyou" >Not You?</a>
					@elseif($user == 'no')
					<!-- ---------------Agar sign up krnwana ha to disoplay one hata do-------------- -->
					<div >
					<div class="inp-field">
					<input type="text" name="firstname" id="regfirstname" class="form-control " placeholder="Name" value="" required>
					<p class="regfirstname" style="color: red"></p>
					</div>
					<div class="inp-field">
					<input type="text" name="displayname" id="reg_displayname" tabindex="2" class="form-control" placeholder="Phone Number" required>
					<p class="reg_displayname" style="color: red"></p>
					</div>
					<div class="inp-field">
					
					<select name="gender" id="reg_gender" tabindex="2" class="form-control" required>
    						<option value="Male">Male</option>
						    <option value="Female">Female</option>
						    <option value="Other">Other</option>
						  	</select>
					<p class="reg_gender" style="color: red"></p>
					</div>
					<div class="inp-field">	
					<input type="password" name="password" id="reg_password" tabindex="2" class="form-control" autocomplete="on" placeholder="Password" required>
					</div>
					<div class="chk">
					<label for="ctr1"><input type="checkbox" name="" required id="ctr1" style="width:auto;">  By signing up, I agree to Zmall's <a href=""> Privacy Policy </a>and <a href="">Terms & Conditions</a></label> 
					</div>
					<div class="chk">
					 <label for="ctr2"><input type="checkbox" name="" id="ctr2" style="width:auto;">   Subscribe to our exclusive offers & promotions</label>
					</div>
					</div>
					<input type="hidden" name="role" id="role" value="user">
					<button id="signs" type="button" name="register-submit"  tabindex="4" class="form-control btn btn-register check_register_form" style="display: block; color#fff;">Signup</button>
					@endif
					@endif
					</div>
					</div>
					<!-- -----------Is Button p sessiona lagana agr phla sa login hwa to aur dislplay none hata do----------- -->
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
						<img src="{{ asset('frontend/images/login/fb.png') }}" alt="IMG">
						<img src="{{ asset('frontend/images/login/google.png') }}" alt="IMG">
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
        $(".loginForm").on("keypress", function (event) { 
            // console.log("aaya"); 
            var keyPressed = event.keyCode || event.which; 
            if (keyPressed === 13) { 
                // alert("You pressed the Enter key!!"); 
                event.preventDefault(); 
		        $(".check_login_form").trigger("click");
                // return false; 
            } 
        }); 
        }); 
    </script> 
<script>
$(function() {
	$(".check_login_form").click(function(e) {
		e.preventDefault();
		var username = $("#email").val(); 
		var login_password = $("#login_password").val(); 
		if(username == ''){
			$("#email").css("border", "1px solid red");
		}else{
			$("#email").css("border", "1px solid green");
		}
		if(login_password == ''){
			$("#login_password").css("border", "1px solid red");
		}else{
			$("#login_password").css("border", "1px solid green");
		}

		if(username != '' && login_password != ''){
			   var _token = "{{ csrf_token() }}";
				$.post("{{ url('authlogin/user')}}", {username:username,password:login_password,_token:_token}, function(result){
			    	if(result.status == 'success'){
			    		window.location.href = "/checkout";
			    	}else{
			    		$(".check_login_password").text(result.status);
			    	}
			  },"json");
		}
		
	});

	//for registration form 
	$(".check_register_form").click(function(e){
		e.preventDefault();
		var firstname = $("#regfirstname").val();
		var displayname = $("#reg_displayname").val();
		var email = $("#reg_email").val();
		var gender = $("#reg_gender").val();
		var password = $("#reg_password").val();
		var role = $("#role").val();

		if(firstname == ''){ 
			$(".regfirstname").text("Please enter your name!");
		}
		else
		{
			$(".regfirstname").text("");
		}
		if(gender == ''){ 
			$(".reg_gender").text("Please select your Gender!");
		}
		else
		{
			$(".reg_gender").text("");
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
			$("#reg_password").text("Please enter your Password!");
		}
		else
		{
			$("#reg_password").text("");
		}
		
		if(email !== '' && displayname !== '' && gender !== '' && password !== ''  && firstname !== ''){  
			    var _token = "{{ csrf_token() }}";
			    var _token = "{{ csrf_token() }}";
			    
				$.post("{{ url('authsignup')}}", {first_name:firstname,gender:gender,email:email,role:role,username:displayname,password:password,_token:_token}, function(result){
			    	if(result.status == 'success'){
			    	$.post("{{ url('authlogin/user')}}", {username:email,password:password,_token:_token}, function(result){
			    	if(result.status == 'success'){
			    		window.location.href = "/checkout";
			    	}else{
			    		$(".check_login_password").text(result.status);
			    	}
			  },"json");
			    		//window.location.href = "/successfull";
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