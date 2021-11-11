@extends('layouts.app')

@section('content')
@include('layouts.second-nav')

<style type="text/css">
    .thumb-wrapper{
    min-height: 330px;
    overflow: hidden;
    -webkit-box-shadow: 0px 7px 9px 0px rgba(0,0,0,0.05); 
    box-shadow: 0px 7px 9px 0px rgba(0,0,0,0.05);
    border: 1px solid rgba(0,0,0,0.08);
    height: 200px;
  }
  .img-box{
      height: 200px;
      width: 100%;
      position: relative;
      overflow: hidden;

  }
  .img-box img{
      max-width: 100%;
      max-height: 100%;
      display: inline-block;
      position: absolute;
      bottom: 0;
      left: 0;
      margin:auto;
      transition: all .2s ease-in-out;
  }
  .img-box img:hover{
     transform: scale(1.1);
  cursor: pointer;
  }
  .thumhrefb-content{
    margin-top: 10px;
  }
.thumhrefb-content a{
  
    color: #282c3f !important;
    text-decoration: none;
    text-align: center !important;
    overflow: hidden;
    font-weight: 500;
  }
  .thumhrefb-content a:hover{
  
    color: #fe9126 !important;
    text-decoration: none;
    text-align: center !important;
    overflow: hidden;
    font-weight: 500;
  }
  .thumb-wrapper{
    color: #3a3b3c !important; 
    text-align: center;
    
  }

  .item-price {
    font-size: 12px;
   margin: 4px;
    font-weight: 500;
  }
  .item-price{
    
  }
  .item-price strike {
    color: #999;
    margin-left: 10px;
  }
  .item-price span {
    color: #3a3b3c;
    
  }
  .owl-carousel .owl-nav {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;

  }
  .owl-carousel .owl-nav .owl-prev{
        position: absolute;
        left: 0;
        display: block;
        opacity: 0.5 !important;
        transition: all 0.5s ease;
        
  }
  .owl-carousel .owl-nav .owl-next{
        position: absolute;
        right: 0;
        display: block;   
        opacity: 0.5 !important;
        transition: all 0.5s ease;
  }
.owl-carousel .owl-nav button.owl-next span, .owl-carousel .owl-nav button.owl-prev span {
  font-size: 70px;
  font-weight: 300;

}
  .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
     height: 100px;
        width: 40px;
        background: rgb(0,0,0,0.1);
        color: #fe9126;
        font-size: 14px;
        
  }
  .owl-carousel .owl-nav .owl-next:hover{
        position: absolute;
        right: 0;
        display: block;  
        background: #fff !important;
        color: #fe9126 !important; 
         opacity: 1 !important;
         -webkit-box-shadow: 0px 4px 9px 0px rgba(0,0,0,0.19); 
       box-shadow: 0px 4px 9px 0px rgba(0,0,0,0.19);
  }
  .owl-carousel .owl-nav .owl-prev:hover{
        position: absolute;
        right: 0;
        display: block;  
        background: #fff !important;
        color: #fe9126 !important; 
         opacity: 1 !important;
         -webkit-box-shadow: 0px 4px 9px 0px rgba(0,0,0,0.19); 
        box-shadow: 0px 4px 9px 0px rgba(0,0,0,0.19);
  }
   .owl-carousel .owl-nav .owl-next:focus{
       outline: none;
       
  }
  .owl-carousel .owl-nav .owl-prev:focus{
        outline: none;
         
  }
  .item {
    height: 250px;
}

.pull-right a{
  color: #3a3b3c !important;

}
.pull-right a:hover{
  color: #fe9126 !important;

}





</style>


@if(!empty($women))
<section style="margin-top:120px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">@if($value =='bags' || $value =='shoes' || $value =='watches') Women @endif {{$value}}</h2>
            
            </div>
          </div>
        </div>
        
        <div class="col-md-12 col-sm-6 col-xs-6">
      <div class="owl-carousel owl-theme">
              
                @if(!empty($women))
              @foreach($women as $index => $p)
          <div class="item">
            <div class="thumb-wrapper">
                      <div class="img-box">
                            <a href="{{url('product-detail/'.$p->slug) }}"><img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" alt="Image" class="img-responsive" alt=""></a>
                      </div>
                      <div class="thumhrefb-content">
                          <center>  <a href="{{url('product-detail/'.$p->slug) }}" style="color:black; font-size:12px;">{{ substr($p->title,0,50) }}...</a> </center>

                            <p class="item-price"><span>@if(!empty($p->discount_price))
                          Rs {{ $p->price - $p->discount_price}}
                          @else Rs {{ $p->price }}
                          @endif
                          </span>@if(!empty( $p->discount_price ))<strike>Rs {{ $p->price }}</strike>@endif </p>

                      </div>            
                   </div>
                </div>
                @endforeach
                @endif

            </div>
    </div>
  </div>
</section>
@endif
@if(!empty($men))
<section style="margin-top:60px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">@if($value =='bags' || $value =='shoes' || $value =='watches') Men @endif {{$value}}</h2>
            
            </div>
          </div>
        </div>
        
        <div class="col-md-12 col-sm-6 col-xs-6">
      <div class="owl-carousel owl-theme">
              
                @if(!empty($men))
              @foreach($men as $index => $p)
          <div class="item">
            <div class="thumb-wrapper">
                      <div class="img-box">
                            <a href="{{url('product-detail/'.$p->slug) }}"><img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" alt="Image" class="img-responsive" alt=""></a>
                      </div>
                      <div class="thumhrefb-content">
                          <center>  <a href="{{url('product-detail/'.$p->slug) }}" style="color:black; font-size:12px;">{{ substr($p->title,0,50) }}</a> </center>

                            <p class="item-price"><span>@if(!empty($p->discount_price))
                          Rs {{ $p->price - $p->discount_price}}
                          @else Rs {{ $p->price }}
                          @endif
                          </span>@if(!empty( $p->discount_price ))<strike>Rs {{ $p->price }}</strike>@endif </p>

                      </div>            
                   </div>
                </div>
                @endforeach
                @endif

            </div>
    </div>
  </div>
</section>

@endif
@if(!empty($Kid))
<section style="margin-top:60px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="section-title">
            <h2 class="title"> @if($value != "kids") Kids @endif {{$value}}</h2>
            
            </div>
          </div>
        </div>
        
        <div class="col-md-12 col-sm-6 col-xs-6">
      <div class="owl-carousel owl-theme">
              
                @if(!empty($kid))
              @foreach($kid as $index => $p)
          <div class="item">
            <div class="thumb-wrapper">
                      <div class="img-box">
                            <a href="{{url('product-detail/'.$p->slug) }}"><img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" alt="Image" class="img-responsive" alt=""></a>
                      </div>
                      <div class="thumhrefb-content">
                          <center>  <a href="{{url('product-detail/'.$p->slug) }}" style="color:black; font-size:12px;">{{ substr($p->title,0,50) }}...</a> </center>

                            <p class="item-price"><span>@if(!empty($p->discount_price))
                          Rs {{ $p->price - $p->discount_price}}
                          @else Rs {{ $p->price }}
                          @endif
                          </span>@if(!empty( $p->discount_price ))<strike>Rs {{ $p->price }}</strike>@endif </p>

                      </div>            
                   </div>
                </div>
                @endforeach
                @endif

            </div>
    </div>
  </div>
</section>

@endif
<br><br><br><br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoplay:false,
    nav:true,
    dots:false,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:5
        },
        1000:{
            items:8
        }
    }
})
</script>



@endsection