<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Password Reset</title>
    @if(session('success'))
    <meta http-equiv="refresh" content="1;url=https://zmall.pk/login_register">
    @endif
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

<!--    FOR SLIDER MOBILE -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>

<body>
    
    <div class="container-fluid bg">
        <div class="row">
            @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
             @endif
            <div class="log-form">
                <img src="{{ asset('frontend/images/login/logo.png') }}" alt="IMG">
                <br>
             <form method="POST" id="loginForm" action="">
                        @csrf
                    <div class="form-inner">
                        <div class="inp-field">
                            <input id="email" type="password" class=" @error('email') is-invalid @enderror input" name="password" value="" required autocomplete="email" placeholder="Enter your new password" autofocus>
                        </div>
                        <div class="inp-field">
                             <input id="password" type="password" class=" @error('password') is-invalid @enderror  input" name="password_confirmation" required autocomplete="current-password" placeholder="Repeat your new password">

                                @error('password')
                                    <br><span class="invalid-feedback" role="alert" >
                                        <p><strong style="color: red">{{ $message }}</strong></p>
                                    </span>
                                @enderror
                        </div>
                        <div class="inp-field">
                        <button type="submit" name="update_password"  tabindex="4" class="btn btn-register" style=" color: #fff; outline: none; border: none;">Submit</button>
                        </div>
                    
                     
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>