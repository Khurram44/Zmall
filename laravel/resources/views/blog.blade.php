@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style type="text/css">
  .cme
  {
    height: 170px;
    width: 100%;
  }
  .popular_newhd{
      font-size: 12px;
  }
  .popular_news{
      border: 1px solid #ddd;
  }
  .popular_news_content a{
      text-decoration: none;
      color: #333;
      font-weight: 600;
  }
 .latest_new_box{
      border: 1px solid #ddd !important;
      box-shadow: 0 0 0px 0 #ddd !important;
  }
  .latest_new_box a{
      text-decoration: none;
      color: #333;
      font-weight: 600;
  }
</style>
  <!-- BREADCRUMB -->
  <div id="breadcrumb" style="margin-top: 100px;">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{asset('/home')}}">Home</a></li>
        <li class="{{asset('/blogs')}}">Blogs</li>
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
        <div class="col-md-8 col-sm-8">
          <div class="section-title">
                <h3 class="title">Today News</h3>
              </div>
          <div class="news_first" style="background-image:url('{{asset('frontend/storage/uploads/'.$most_latest->image)}}');">
            <h2 class="newshd"><a href="{{url('blog_detail/'.$most_latest->id)}}">{{$most_latest->title}}</a></h2>
          </div>
         
        </div>
        <div class="col-md-4">
          <div class="section-title">
                <h3 class="title">Popular News</h3>
          </div>
          <div class="popular_news">
            @foreach($popular_news as $p_news)
            <div class="popular_flex">
               <img src="{{asset('frontend/storage/uploads/'.$p_news->image)}}" class="popular_newimg">
              <div class="popular_news_content">
                  <h5 class="popular_newhd"><a href="{{url('blog_detail/'.$p_news->id)}}">{{$p_news->title}}</a></h5>
                  <p class="popular_newhd">{{ \Illuminate\Support\Str::limit($p_news->short_description, 120, $end='...') }} <a href="{{url('blog_detail/'. $p_news->id)}}">read more</a></p>
                  <p class="popular_newhd" style="text-align: right;">{{ date("M d, Y",strtotime($p_news->added_on)) }}</p>
            </div>
          </div>
          @endforeach
          
         
        
          

          </div>

          </div>
        </div>
<br>
          <!-- latest new -->
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="section-title">
                <h3 class="title">Latest News</h3>
              </div>
            </div>
          </div>
          
          <div class="row">

            @foreach($latest_news as $index=>$l_news)
            <div class="col-md-3" >
              
              <div class="latest_new_box">
                <img src="{{asset('frontend/storage/uploads/'.$l_news->image)}}" class="cme">
                <div style="height: 54px;"><h4 class="latest_boxhd"><a href="{{url('blog_detail/'.$l_news->id)}}">{{substr($l_news->title, 0,30)}}...</a></h4></div>
                <p class="latest_para">{{ \Illuminate\Support\Str::limit($l_news->short_description, 30, $end='...') }} <a href="{{ url('blog_detail/'.$l_news->id) }}">Read More >></a></p>
                <p style="text-align: right;">{{ date("M d, Y",strtotime($l_news->added_on)) }}...</p>
             
              </div>

            </div>
            
           
          @endforeach
           
          </div>
          
          <br>
         
  

      </div>
      <br>
     
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection