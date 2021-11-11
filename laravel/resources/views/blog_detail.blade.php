@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style>
    .news_detail_bx{
        border: 1px solid #ddd;
        box-shadow: 0 0 0px 0 #ddd;
    }
</style>



  <!-- BREADCRUMB -->
  <div id="breadcrumb" style="margin-top: 100px;">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{asset('/')}}">Home</a></li>
        <li><a href="{{asset('/blogs')}}">Blogs</a></li>
        <li class="active">Blog Detail</li>
      </ul>
    </div>
  </div>
  <!-- /BREADCRUMB -->

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="section-title">
                <h3 class="title"> {{$GetData->title}}</h3>
                <span class="newsdate">{{ date("M d, Y",strtotime($GetData->added_on)) }}</span>
              </div>
          <div class="news_detail_bx">
          <div class="news_first" style="background-image: url('{{asset('frontend/storage/uploads/'.$GetData->image)}}'); background-size: contain;">
          </div>
          <hr>
          {!! $GetData->description !!}
          
        </div>
         
        </div>
        
        </div>
<br>
          <!-- latest new -->
        

  

      </div>
      <br>
     
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection