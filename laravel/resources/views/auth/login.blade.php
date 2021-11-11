@extends('layouts.app')

@section('content')
<style>
    .invalid-feedback{ display:block;}
    .loginmodal-container input[type=text], input[type=password]{
        width: 100%;
    padding: 5px 10px;
    border: none;
    background-color: transparent;
    -webkit-box-shadow: 0px 0px 0px 1px #DADADA inset, 0px 0px 0px 5px transparent;
    box-shadow: 0px 0px 0px 1px #DADADA inset, 0px 0px 0px 5px transparent;
    -webkit-transition: 0.3s all;
    transition: 0.3s all;
    outline: none;
    }
</style>

  <!-- BREADCRUMB -->
  
 <!--  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
      
       <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active">Login</li>
      </ul>
    </div>
  </div> -->
  <!-- /BREADCRUMB -->

<!-- <main id="main" class="site-main">
            <div class="page-title background-page">
                <div class="container">
                   
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a><span>/</span></li>
                            <li>Login</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                <!-- </div>
            </div> --><!-- .page-title -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <div class="main-content authlogin_bx">
                    <div class="form-login">
                        <h2 class="auth_loginhd">Log in with your account</h2>
                            <form method="POST" id="loginForm" action="{{ url('logindirect/user') }}">
                        @csrf
                            <div class="form-group authlgfied">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror input" name="username" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group authlgfied">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror  input" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="inline clearfix">
                                 <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    {{ __('Login') }}
                                </button>   
                            </div>
                            <br>
                             <p style="text-align: center;">Not a member yet? <a href=""  data-toggle="modal" data-target="#Modal-Register">Register Now</a></p>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
                <br>
                <br>
                
            </div>  
        <!-- </main> --><!-- .site-main -->

@endsection
