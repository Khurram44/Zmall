
@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
    <!-- BREADCRUMB -->

<?php
use App\Manage;
use App\Products;
$Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->get();

?>

<!-- Style-->
<style type="text/css">
  .product.product-single .product-thumb:after{
    position: relative !important;
}
</style>
<!-- Style-->

    <div id="breadcrumb">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="{{asset('/home')}}">Home</a></li>
          <li class="active">Sale</li>
        </ul>
      </div>
    </div>
    <!-- /BREADCRUMB -->
    <!-- section -->
    <div class="section">
      <!-- container -->
      <div class="container section-white  p-t-md">
        <!-- row -->
        <!-- MAIN -->
   
          <div class="row">
        <!-- section-title -->
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">Sale</h2>
            <div class="pull-right">
         <!-- <span class="sale-timer">Sale up to 45%!</span> -->
        <!--  <div class="timer">
            <div>
               <span class="days" id="day"></span> 
               <div class="smalltext">Days</div>
            </div>
            <div>
               <span class="hours" id="hour"></span> 
               <div class="smalltext">Hours</div>
            </div>
            <div>
               <span class="minutes" id="minute"></span> 
               <div class="smalltext">Minutes</div>
            </div>
            <div>
               <span class="seconds" id="second"></span> 
               <div class="smalltext">Seconds</div>
            </div>
            <p id="time-up"></p>
         </div> -->
      
              <div class="product-slick-dots-1 custom-dots"></div>
            </div>
          </div>
        </div>
        <!-- /section-title -->

  

        <!-- Product Slick -->
        <div class="col-md-12 col-sm-6 col-xs-6">
          <div class="row">
            <div id="product-slick-1" class="product-slick">
              <!-- Product Single -->
              <div class="product product-single">
                
                @if(!empty($sale_products))
                    @foreach($sale_products as $index => $p)
                <div class="product-outer">
                <div class="product-thumb">
                  <!-- <div class="product-label">
                    <span class="new">New</span>
                    <span class="sale">-20%</span>
                  </div> -->
                  <!--<ul class="product-countdown">
                    <li><span>00 H</span></li>
                    <li><span>00 M</span></li>
                    <li><span>00 S</span></li>
                  </ul>-->
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                  <a href="{{url('product-detail/'.$p->slug)}}"><img src="{{ asset('/storage/uploads/'.$p->images) }}" alt=""></a>
                </div>
                <div class="product-body">
                  <span class="product-name"><a href="{{url('product-detail/'.$p->slug)}}">{{ substr($p->title,0,50) }}</a></span>
                  <h3 class="product-price">Rs {{ $p->price - 
                    $p->price * 0.20 }} <del class="product-old-price">Rs {{ $p->price }}</del></h3>
                  <!-- <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                  </div> -->
                  
                  <div class="product-btns">
                    <button class="main-btn icon-btn add_product_to_wishlist wishlist{{base64_encode($p->id)}}" id="{{base64_encode($p->id)}}"><i class="fa fa-heart"></i></button>
                    <!-- <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button> -->
                    <button class="primary-btn add-to-cart add_product_to_cart" id="{{base64_encode($p->id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                     
                  </div>
                </div>
                </div>
                      
                       @if($index % 2 == 0)

                        </div>
                        <div class="product product-single">
                          @endif
                      
                  @endforeach
                @endif
              </div>
              


            </div>
            
          </div>
        </div>
        <!-- /Product Slick -->
      </div>
      
  
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
  
      
     <div class="section p-t-n">
      <!-- container -->
      <div class="container section-white p-t-md"> 
        
  <!--     <style>
          .vertical-tabs{
          font-size:15px;
          color:#FFF
          }
          .vertical-tabs .nav-tabs .nav-link{
          border-radius: 0;
          min-height: 120px;
          text-align:center;
          font-size: 16px;  
          color:#333e48;
      background: transparent;
          }
          .vertical-tabs .nav-tabs .nav-link:hover{
          color: #fe9126;
          }         
          .vertical-tabs .nav-tabs .nav-link .text  {
          position: relative;
          bottom: -100px;
          text-align: center;
          }       
          .vertical-tabs .nav-tabs>li>a{
          border: none;
          }         
          .vertical-tabs .nav-tabs .bags{
          background: url(images/icons/bags-shoes.svg) no-repeat center top;
          height: auto;
          width: 100%;
          }       
          .vertical-tabs .nav-tabs .bags:hover{
          background: url("images/icons/bags-shoes-hover.svg") no-repeat center top;
          background-color: transparent;
          border:none;
          border-bottom: none;
          }         
          .vertical-tabs .nav-tabs .men{
          background: url("images/icons/men-collection.svg") no-repeat center;
          height: auto;
          width: 100%;
          float: left;
          }       
          .vertical-tabs .nav-tabs .men:hover{
          background: url("images/icons/men-collection-hover.svg") no-repeat center;
          background-color: transparent;
          border:none;
          }           
          .vertical-tabs .nav-tabs .nav-link.active{
          color:#fff;
          }
          .vertical-tabs .tab-content>.active{
          background:#fff;
          display:block;
          }
          .vertical-tabs .nav.nav-tabs{
          border-bottom:0;
          padding: 15px 0 20px 10px;
          display:inline-grid;
          float:left;
          }
          .vertical-tabs .nav.nav-tabs .nav-item{
          min-height: 150px;
          border-bottom: 1px solid #DDD;
          padding-top: 5px;
          }
     
      .vertical-tabs .nav.nav-tabs .nav-item:hover{
          background-color: rgb(254 145 38 / 10%);
          }
          .vertical-tabs .sv-tab-panel{
          background:#fff;   
          width: 100%;
          }
          .vertical-tabs .tab-content>.tab-pane {
          width: 100%;
          float: right;
          }         
          @media only screen and (max-width: 420px){
          .titulo{font-size: 22px}
          }
          @media only screen and (max-width: 325px){
          .vertical-tabs{ padding:8px;}
          }
        </style>-->
    <style>
      .flash {  
      }
/*.flash .nav-pills>li.active>a, .flash .nav-pills>li.active>a:focus, .flash .nav-pills>li.active>a
      {
      color: transparent;
    background-color: transparent;
    text-align: right;
    border: none;
        
      }*/
 .nav-tabs-dropdown {
  display: none;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.nav-tabs-dropdown:before {
  content: "\e114";
  font-family: 'Glyphicons Halflings';
  position: absolute;
  right: 30px;
}

@media screen and (min-width: 769px) {
  #nav-tabs-wrapper {
    display: block!important;
  }
}
@media screen and (max-width: 768px) {
    .nav-tabs-dropdown {
        display: block;
    }
    #nav-tabs-wrapper {
        display: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        text-align: center;
    }
 
}
      </style>  
    <div class="row">
        <div class="col-sm-3 flash">
            
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked">
              @if(!empty($Categories))
                  @foreach($Categories as $index => $c)
              <li @if($index == 0) class="active" @endif>
                <a href="#vtab{{$c->id}}" @if($index == 0) class="active show" @endif data-toggle="tab" aria-expanded="true">
                {{ $c->name }}
              </a>
              </li>
                  @endforeach
              @endif
            </ul>
        </div>
        <div class="col-sm-9">
            <div class="tab-content">
              @if(!empty($Categories))
                  @foreach($Categories as $index => $c)
                  <?php $CategoriesProductds = Products::where('category', $c->id)->where('is_deleted', 0)->paginate(9);?>
        <div role="tabpanel" class="tab-pane fade @if($index == 0) in active @endif " id="vtab{{$c->id}}">
          <div class="section-title">
            <h2 class="title">{{ $c->name }}</h2>
          </div>
                  <!-- row -->
                  <div class="row">
                   
                    @if(!empty($CategoriesProductds))
                      @foreach($CategoriesProductds as $index2 => $p)
                        @if($index2 % 3 == 0)
                        <div class="clearfix visible-sm visible-xs"></div>
                        @endif
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                          <div class="product product-single">
                                <div class="product-outer">
                                <div class="product-thumb">

                                  <ul class="product-countdown">
                                    <li><span>00 H</span></li>
                                    <li><span>00 M</span></li>
                                    <li><span>00 S</span></li>
                                  </ul>
                                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                  <a href="{{url('product-detail/'.$p->slug) }}"><img src="{{ asset('/storage/uploads/'.$p->images) }}" alt=""></a>
                                </div>
                                <div class="product-body">
                                  <span class="product-name"><a href="{{url('product-detail/'.$p->slug) }}">{{ substr($p->title,0,50)}}</a></span>
                                  <br/>
                                  <h3 class="product-price">Rs {{ $p->price - 
                                    $p->price * 0.20 }}<br/> <del class="product-old-price"> Rs {{ $p->price }}</del></h3>
                                  <!--  <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                  </div>
                                 <span class="product-name"><a href="product-page.php">Product Name Goes Here</a></span>  -->
                                  <div class="product-btns">
                                    <button class="main-btn icon-btn add_product_to_wishlist wishlist{{base64_encode($p->id)}}" id="{{base64_encode($p->id)}}"><i class="fa fa-heart"></i></button>
                                      <!-- <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button> -->
                                      <button class="primary-btn add-to-cart add_product_to_cart" id="{{base64_encode($p->id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    
                                  </div>
                                </div>
                                </div>
                              </div>
                        </div>
                        <!-- /Product Single -->
                         @endforeach
                        @endif
                    <!-- /Product Single -->

                  </div>
                  <!-- /row -->
                  <hr>
                  <!-- store bottom filter -->
                  <div class="store-filter">
                    <div class="pull-right">
                      <ul class="store-pages p-b-sm">
                        {{ $CategoriesProductds->links() }}
                      </ul>
                    </div>
                  </div>
                  <!-- /store bottom filter -->
                </div>
           
             @endforeach
          @endif  
            </div>
        </div>
    </div>    
      
      
      
      
  
       </div>
      </div>  
    
@endsection