@extends('layouts.app')
@section('content')
<style type="text/css">
	.page-title.background-page {
    background-image: url('{{ asset('frontend/images/banner-img.jpg') }}');
    
}
</style>

<main id="main" class="site-main">
			<div class="page-title background-page">
				<div class="container">
					<h1>Login</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="{{ asset('home/') }}">Home</a><span>/</span></li>
							<li>Login</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="container">
				<div class="main-content">
					<div class="form-login">
						<h2>Log in with yourdfdghjkjgfdasfghf account</h2>
						<form action="authlogin/user" method="POST" id="loginForm" class="clearfix">
			  				<div class="field">
			  					<input type="email" value="" name="s" placeholder="E-mail Address">
			  				</div>
			  				<div class="field">
			  					<input type="text" value="" name="s" placeholder="Password">
			  				</div>
			  				<div class="inline clearfix">
						  		<button type="submit" value="Send Messager" class="btn-primary">Login</button>
						  		<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                                                </fb:login-button>
						  		<p>Not a member yet? <a href="register.html">Register Now</a></p>
						  	</div>
					  	</form>
					</div>
				</div>
			</div>	
		</main>
<div class="row" style="height: 30px;"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}
</script>
		@endsection