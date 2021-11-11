@extends('layouts.app')

@section('content')
@include('layouts.second-nav')

  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="">Home</a></li>
        <li class="active">Thank you</li>
      </ul>
    </div>
  </div>
  <!-- /BREADCRUMB -->

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row clearfix section-white p-sm">
          <div class="col-md-6 col-md-offset-3 text-center">
                <div class="alert" style="color: #fe9126;font-weight: bold;font-size: 20px;">
                    Your New Account has been created successfully.<br>
                    Please <a href="/login_register" style="color: blue;font-size: 25px">Click here</a> to Login
                </div>
               
           
          </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection