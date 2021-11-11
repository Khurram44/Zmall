<?php
use App\Manage;
$Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->limit(7)->get();

?>
@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style type="text/css">
  .view_categories_bx{
    border:1px solid orange;
    padding: 15px;
    width: 100%;
   
  }
</style>
  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{asset('/home')}}">Home</a></li>
        <li class="active">All Categories</li>
      </ul>
    </div>
  </div>
  <!-- /BREADCRUMB -->

  <!-- section -->
  
  <!-- /section -->
  <!-- /section -->
  <div class="section">
    <!-- container -->
    <div class="container section-white p-md">
      <!-- row -->
  <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">All Categories</h2>
            
          </div>
        </div>
        @if(!empty($Categories))
              @foreach($Categories as $c)
          <div class="col-md-3">
            <div class="view_categories_bx">
               <a href="{{ url('products/'.encrypt($c->id)) }}" class="thumbnail">
                              <img src="{{asset('storage/uploads/'.$c->image)}}" alt="Image" style="width:100%;height: 230px;">
                            </a>
                             <div style="background: orange;padding-top: 11px;padding-bottom: 11px;text-align: center;">
                             <a href="{{ url('products/'.encrypt($c->id)) }}"><span class="cat-title" style="color: black;">{{$c->name}}</span></a> 
                          </div>
            </div>
          </div>
          @endforeach   
          @endif 

         

          

           
                 
             
               
                               
           
                              
        
               
       

             

              <!--  -->

        

      </div>
      <!-- /row -->
    </div>
    </div>


@endsection