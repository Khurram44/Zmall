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
            @if (session('status'))
                <div class="alert" style="color: #fe9126;font-weight: bold;font-size: 20px;">
                    {{ session('status') }}
                </div>
            @endif
               
           
          </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection