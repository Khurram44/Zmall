@extends('layouts.app')

@section('content')
@include('layouts.second-nav')

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row clearfix section-white p-sm">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Your Cart Is Empty! </h2>
            
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