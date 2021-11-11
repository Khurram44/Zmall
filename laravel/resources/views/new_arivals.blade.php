@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
  <!-- BREADCRUMB -->
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
        <li class="active">New Arrivals</li>
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
        <!-- ASIDE -->
        <div id="aside" class="col-md-3 section-white">
          <!-- aside widget -->
          <form method="get" action="{{route('searchproducts')}}">
          <div class="aside">
            <h3 class="aside-title">Search Filter:</h3>
            <ul class="filter-list">
               <div class="form-group">
                       <select class="form-control load_sub_types" id="load_sub_categories" name="category">
                       <option>Select Category</option>
                        @if(!empty($categories))
                              @foreach($categories as $ca)
                            <option value="{{ $ca->id }}"
                           @if(!empty($_REQUEST['category']))   
                              {{($_REQUEST['category'] == $ca->id) ? 'selected' : ''}} 
                            @endif
                            >{{ $ca->name }}</option>
                            @endforeach
                        @endif
                      </select>
                      
                      
                    </div>
              <div class="form-group">
                      <select class="form-control load_sub_types  load_sub_categories" id="load_sub_categories_type" name="sub_category">
                        <option>Select Sub Category</option>
                         @if(!empty($sub_categories))
                              @foreach($sub_categories as $ca)
                            <option value="{{ $ca->id }}"  
                              @if(!empty($_REQUEST['sub_category']))   
                              {{($_REQUEST['sub_category'] == $ca->id) ? 'selected' : ''}} 
                            @endif
                            >{{ $ca->name }} </option>
                            @endforeach
                        @endif
                      </select>
                      
                    </div>
              <div class="form-group">
                      <select class="form-control load_sub_categories_type" id="type" name="type">
                        <option>Select Type</option>
                         @if(!empty($sub_categories))
                              @foreach($sub_categories as $ca)
                            <option value="{{ $ca->id }}"  
                              @if(!empty($_REQUEST['sub_category']))   
                              {{($_REQUEST['sub_category'] == $ca->id) ? 'selected' : ''}} 
                            @endif
                            >{{ $ca->name }} </option>
                            @endforeach
                        @endif
                      </select>
                      
                    </div>
              <div class="form-group">
                      <select class="form-control" id="sel1" name="brand">
                        <option value="">Select Brand</option>
                       @if(!empty($brand))
                              @foreach($brand as $b)
                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                            @endforeach
                        @endif
                      </select>
                      
                    </div>



            </ul>

             <!-- aside widget -->
          <div class="aside">
            <h3 class="aside-title">Filter by Price</h3>
            <div id="price-slider"></div>
          </div>
          <!-- aside widget -->

          <!-- aside widget -->
          <div class="aside">
            <h3 class="aside-title">Filter By Color:</h3>
            <ul class="color-option">
              <li><a href="#" style="background-color:#475984;"></a></li>
              <li><a href="#" style="background-color:#8A2454;"></a></li>
              <li class="active"><a href="#" style="background-color:#BF6989;"></a></li>
              <li><a href="#" style="background-color:#9A54D8;"></a></li>
              <li><a href="#" style="background-color:#675F52;"></a></li>
              <li><a href="#" style="background-color:#050505;"></a></li>
              <li><a href="#" style="background-color:#D5B47B;"></a></li>
            </ul>
          </div>
          <!-- /aside widget -->

          <!-- aside widget -->
          <div class="aside">
            <h3 class="aside-title">Filter By Size:</h3>
            <ul class="size-option">
              <li class="active"><a href="#">S</a></li>
              <li class="active"><a href="#">XL</a></li>
              <li><a href="#">SL</a></li>
            </ul>
          </div>
          <!-- /aside widget -->


          

            <button class="main-btn">Clear All</button>
            <button class="primary-btn">Apply Filter</button>
          </div>
          <!-- /aside widget -->

         

          <!-- aside widget -->
          <div class="aside">
            <h3 class="aside-title">Top Rated Product</h3>
            <!-- widget product -->
           @if($top_rated_products->count() > 0)
              @foreach($top_rated_products as $index => $p)
            <div class="product product-widget">
              <div class="product-thumb">
                <img src="{{ asset('/storage/uploads/'.$p->images) }}" alt="">
              </div>
              <div class="product-body">
                <span class="product-name"><a href="{{url('product-detail/'.$p->slug)}}">{{ substr($p->title,0,50) }}</a></span>
                <h3 class="product-price">Rs {{ $p->price}} 
                @if(!empty($p->discount_price)) 
                    <del class="product-old-price">Rs {{ $p->price + $p->discount_price }}
                    </del>
                  @endif
                </h3>

              </div>
            </div>
            @endforeach
            @endif
            <!-- /widget product -->



          </div>
          <!-- /aside widget -->
          </form>
        </div>
        <!-- /ASIDE -->

        <!-- MAIN -->
        <div id="main" class="col-md-9">
          <div class="col-md-12 section-white p-md">
          <div class="section-title">
            <h2 class="title">New Arrivals</h2>
          </div>
          <!-- store top filter -->
          <div class="store-filter clearfix">
            <div class="pull-left">
              <div class="row-filter">
               <!--  <a href="#"><i class="fa fa-th-large"></i></a>
                <a href="#" class="active"><i class="fa fa-bars"></i></a> -->
              </div>
              <div class="sort-filter">
                <!-- <span class="text-uppercase">Sort By:</span>
                <select class="input">
                    <option value="0">Position</option>
                    <option value="0">Price</option>
                    <option value="0">Rating</option>
                  </select> -->
              
              </div>
            </div>
            <div class="pull-right">
              <!-- <div class="page-filter">
                <span class="text-uppercase">Show:</span>
                <select class="input">
                    <option value="0">10</option>
                    <option value="1">20</option>
                    <option value="2">30</option>
                  </select>
              </div> -->
              <!-- <ul class="store-pages">
                {{ $all_products->links() }}
              </ul> -->
            </div>
          </div>
          <!-- /store top filter -->

          <!-- STORE -->
          <div id="store" class="m-t-n p-t-n b-n">
            <!-- row -->
            <div class="row">
              <!-- Product Single -->
    @if($all_products->count() > 0)
              @foreach($all_products as $index => $p)
    <div class="col-md-4 col-sm-6 col-xs-6">
              <!-- Product Single -->
        <div class="product product-single">
           
                <div class="product-outer">
                <div class="product-thumb">
                  <div class="product-label">
                   @if(strtotime("+1 week", strtotime($p->added_on)) > strtotime("now"))
                    <span class="new">New</span>
                    @endif
                    @if(!empty($p->discount_price))
                    <span class="sale">{{round($p->discount_price/($p->price+$p->discount_price) * 100) }}%</span> 
                    @endif
                  </div>
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
                  <h3 class="product-price">Rs {{ $p->price}}
                  @if(!empty($p->discount_price)) 
                    <del class="product-old-price">Rs {{ $p->price + $p->discount_price }}
                    </del>
                  @endif
                </h3>
                  <!-- <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                  </div> -->
                  
                   <div class="product-btns">
                    <button class="main-btn icon-btn add_product_to_wishlist wishlist{{base64_encode($p->id)}}" id="{{base64_encode($p->id)}}"><i class="fa fa-heart"></i></button>
                    <button class="primary-btn add-to-cart add_product_to_cart" id="{{base64_encode($p->id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    
                  </div> 
                </div>
                </div>
                
                  
               
              </div>
              
              <!-- /Product Single -->
              </div>
              <!-- /Product Single -->
                  @endforeach
                @else
                 <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <p>No matching record found</p>
              
                 </div>
              <!-- /Product Single -->
                @endif
              <!-- Product Single -->
        

              <!-- Product Single -->


              <!-- <div class="clearfix visible-md visible-lg visible-sm visible-xs"></div>


              <div class="clearfix visible-sm visible-xs"></div> -->

            </div>
            <!-- /row -->
          </div>
          <!-- /STORE -->

          <!-- store bottom filter -->
          <div class="store-filter clearfix">
            <div class="pull-left">
              <div class="row-filter">
               <!--  <a href="#"><i class="fa fa-th-large"></i></a>
                <a href="#" class="active"><i class="fa fa-bars"></i></a> -->
              </div>
              <div class="sort-filter">
                <!-- <span class="text-uppercase">Sort By:</span>
                <select class="input">
                    <option value="0">Position</option>
                    <option value="0">Price</option>
                    <option value="0">Rating</option>
                  </select> -->
              </div>
            </div>
            <div class="pull-right">
              <div class="page-filter">
                <!-- <span class="text-uppercase">Show:</span>
                <select class="input">
                    <option value="0">10</option>
                    <option value="1">20</option>
                    <option value="2">30</option>
                  </select> -->
              </div>
              <ul class="store-pages">
                {{ $all_products->links() }}
              </ul>
            </div>
          </div>
          <!-- /store bottom filter -->
          </div>
        </div>
        <!-- /MAIN -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
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
            <h2 class="title">Related Products </h2>
            <a href="{{url('products/')}}" class="main-btn pull-right">
              <i class="fa fa-eye"></i>&nbsp;View All
            </a>
          </div>
        </div>
        <!-- section title -->

        <!-- Product Single -->
            @if(!empty($related_products))
              @foreach($related_products as $index => $p)
    <div class="col-md-3 col-sm-6 col-xs-6">
              <!-- Product Single -->
        <div class="product product-single">
           
                <div class="product-outer">
                <div class="product-thumb">
                 <!--  <div class="product-label">
                    <span class="new">New</span>
                    <span class="sale">-20%</span>
                  </div> -->
                  <!--<ul class="product-countdown">
                    <li><span>00 H</span></li>
                    <li><span>00 M</span></li>
                    <li><span>00 S</span></li>
                  </ul>-->
                  <!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
                  <a href="{{url('product-detail/'.$p->slug)}}"><img src="{{ asset('/storage/uploads/'.$p->images) }}" alt=""></a>
                </div>
                <div class="product-body">
                  <h3 class="product-price">Rs {{ $p->price - 
                    $p->price * 0.20 }} <del class="product-old-price">Rs {{ $p->price }}</del></h3>
                 <!--  <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                  </div> -->
                  <span class="product-name"><a href="{{url('product-detail/'.$p->slug)}}">{{ substr($p->title,0,50) }}</a></span>
                  <div class="product-btns">
                    <button class="main-btn icon-btn add_product_to_wishlist wishlist{{base64_encode($p->id)}}" id="{{base64_encode($p->id)}}"><i class="fa fa-heart"></i></button>
                    <!-- <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button> -->
                    <button class="primary-btn add-to-cart add_product_to_cart" id="{{base64_encode($p->id)}}"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                    
                  </div>
                </div>
                </div>
                
                  
               
              </div>
              
              <!-- /Product Single -->
              </div>
              <!-- /Product Single -->
                  @endforeach
                @endif
       
        <!-- /Product Single -->

      </div>
      <!-- /row -->
    </div>
    </div>


@endsection