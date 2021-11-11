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

<!--    FOR SLIDER MOBILE -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>

<body>
    
    <div class="container-fluid bg">
        <div class="row">
            <div class="log-form">
                <img src="{{ asset('frontend/images/login/logo.png') }}" alt="IMG">
                <br>
                <small>Reset your password</small>
                <form>
                    <div class="form-inner">
                        <p style="margin: 10px; font-size: 14px; color: #333;">Enter your email ID and we'll send you a link to reset your password</p>
                        <div class="inp-field">
                            <p class="forget_user_email_notification"></p>
                            <input type="email" name="email" id="forget_user_email" tabindex="2" class="" placeholder="Email Address" value="" style="width: 100%;">
                            <input type="hidden" name="flag" id="flag"  tabindex="2" value="{{$id}}" style="width: 100%;">
                        </div>
                       <button type="button" name="login-submit" id="forget_password_send" tabindex="4" class="btn btn-login onSubmit forget_password_send" value="Submit" style="display: block; width: 100%; color: #fff; outline: none;
                       border: none;">Send Link</button>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
$(function() {
    $(".forget_password_send").click(function(e) {
        e.preventDefault();
        var email = $("#forget_user_email").val(); 
        if(email == ''){
            $("#forget_user_email").css("border", "1px solid red");
        }else{
            $("#forget_user_email").css("border", "1px solid green");
        }
        $(".forget_user_email_notification").html("").show();
        if(email != ''){
               var _token = "{{ csrf_token() }}";
                $.post("{{ url('forgetPasswordVendor')}}", {email:email,_token:_token}, function(result){
                    if(result.status == 'success'){
                        $(".forget_user_email_notification").html("<span style='color:green;text-align:center'>"+result.message+"</span>").fadeOut(10000);
                    }else{
                        $(".forget_user_email_notification").html("<span style='color:red;text-align:center'>"+result.message+"</span>").fadeOut(10000);
                    }
              },"json");
        }
        
    });
});

</script>
</body>
</html>