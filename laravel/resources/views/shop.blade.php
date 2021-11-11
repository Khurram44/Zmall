@extends('layouts.app')

@section('content')
@include('layouts.second-nav')

<section class="shopContainer">
    <div class="container">
      <div class="shop-logo">

        <a href="#"><img src="{{asset('storage/uploads/'.$vendor_info->image)}}" /></a>
        <div class="pull-right">
          <h4 style="margin:none;padding-top: 16px;padding-right: 10px;">{{$vendor_info->business_name}}</h4>
          <!-- <ul class="social-network social-circle m-b-md" style="display: none;"> -->
                        <!-- <li><a href="#" class="icoFacebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter"><i class="fa fa-twitter"></i></a></li> -->
                        <!-- <li><a href="#" class="icoRss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoGoogle"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin"><i class="fa fa-linkedin"></i></a></li> -->
                  <!--   </ul> -->
        </div>
      </div>
    </div>  
  </section>

<!--  <section class="section-gray">
    <div class="container">
      <div class="row shop-nav">
        <nav class="navbar navbar-default navbar-static ">
            <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          
          
          <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Home</a></li>
              <li class="dropdown dropdown-large">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                
                <ul class="dropdown-menu dropdown-menu-large row">
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Casual Shoes</li>
                      <li><a href="#">Men Sneakers</a></li>
                      <li><a href="#">Women Sneakers</a></li>
                      <li><a href="#">Kids Sneakers</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Boots</li>
                      <li><a href="#">Men Boots</a></li>
                      <li><a href="#">Women Boots</a></li>
                      <li><a href="#">Kids Boots</a></li>
                      <li><a href="#">Infants Boots</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Casual Shoes</li>
                      <li><a href="#">Men Sneakers</a></li>
                      <li><a href="#">Women Sneakers</a></li>
                      <li><a href="#">Kids Sneakers</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Boots</li>
                      <li><a href="#">Men Boots</a></li>
                      <li><a href="#">Women Boots</a></li>
                      <li><a href="#">Kids Boots</a></li>
                      <li><a href="#">Infants Boots</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Casual Shoes</li>
                      <li><a href="#">Men Sneakers</a></li>
                      <li><a href="#">Women Sneakers</a></li>
                      <li><a href="#">Kids Sneakers</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Boots</li>
                      <li><a href="#">Men Boots</a></li>
                      <li><a href="#">Women Boots</a></li>
                      <li><a href="#">Kids Boots</a></li>
                      <li><a href="#">Infants Boots</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header">Casual Shoes</li>
                      <li><a href="#">Men Sneakers</a></li>
                      <li><a href="#">Women Sneakers</a></li>
                      <li><a href="#">Kids Sneakers</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Boots</li>
                      <li><a href="#">Men Boots</a></li>
                      <li><a href="#">Women Boots</a></li>
                      <li><a href="#">Kids Boots</a></li>
                      <li><a href="#">Infants Boots</a></li>
                    </ul>
                  </li>
                </ul>
                
              </li>
              <li><a href="#">Sale Items</a></li>
              <li><a href="#">Top Selling</a></li>
              <li><a href="#">Feedback</a></li>
            </ul>
            
          </div>/.nav-collapse
        </nav>
      </div>
    </div>
  </section> -->
  
  <!-- TOP BANNER -->
  <section>
    <!-- container -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="product product-widget mb-0">
          <img src="{{asset('storage/uploads/'.$vendor_info->banner)}}" style="height: 455px; width: 100%;" class="img-responsive" > 
         <!--    <iframe width="100%" height="440" src="https://www.youtube.com/embed/DxVOudge9yw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  -->
              
            </div>
            <hr>
            <div id="productSlider" class="carousel slide hidden-xs" data-ride="carousel" style="display: none;">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                               @if(!empty($new_products))
                                  @foreach($new_products as $index => $p)
                                <div class="col-sm-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="{{ asset('/storage/uploads/'.$p->images) }}" style="width: 254px;height: 100px" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-12">
                                                    <h5>{{ $p->title }}</h5>
                                                    <h5 class="price-text-color">
                                                        Rs Rs {{ $p->price }}</h5>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($index == 2) 
                              </div>
                            </div>  
                          <div class="item ">
                             <div class="row">
                                @endif
                              @endforeach
                            @endif
                            </div>
                        </div>
                     
                    </div>
                </div>
        </div>
        <div class="col-sm-3" style="display: none;">
            <div id="chat" class="chat_box_wrapper chat_box_small chat_box_active" style="opacity: 1; display: block; transform: translateX(0px);">
                        <div class="chat_box touchscroll chat_box_colors_a">
                            <div class="chat_message_wrapper">
                                <div class="chat_user_avatar">
                                    <a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" >
                                    <img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)"  src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg" class="md-user-image">
                                    </a>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eum? </p>
                                    </li>
                                    <li>
                                        <p> Lorem ipsum dolor sit amet.<span class="chat_message_time">13:38</span> </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_wrapper chat_message_right">
                                <div class="chat_user_avatar">
                                <a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" >
                                    <img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="md-user-image">
                                </a>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus distinctio dolor earum est hic id impedit ipsum minima mollitia natus nulla perspiciatis quae quasi, quis recusandae, saepe, sunt totam.
                                            <span class="chat_message_time">13:34</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_wrapper">
                                <div class="chat_user_avatar">
                                <a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" >
                                    <img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg" class="md-user-image">
                                </a>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea mollitia pariatur porro quae sed sequi sint tenetur ut veritatis.https://www.facebook.com/iamgurdeeposahan
                                            <span class="chat_message_time">23 Jun 1:10am</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_wrapper chat_message_right">
                                <div class="chat_user_avatar">
                                <a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" >
                                    <img alt="Gurdeep Osahan (Web Designer)" title="Gurdeep Osahan (Web Designer)" src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg" class="md-user-image">
                                </a>
                                </div>
                                <ul class="chat_message">
                                    <li>
                                        <p> Lorem ipsum dolor sit amet, consectetur. </p>
                                    </li>
                                    <li>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            <span class="chat_message_time">Friday 13:34</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chat_submit_box">
              <div class="uk-input-group">
                  <div class="gurdeep-chat-box">  
                  <input type="text" placeholder="Type a message" id="submit_message" name="submit_message" class="md-input form-control">
                  </div>
              
              <span class="uk-input-group-addon">
              <a href="#"><i class="fa fa-send"></i></a>
              </span>
              </div>
          </div>
          </div>
      </div>
    </div>
    <!-- /container -->
  </section>
  <!-- TOP BANNER-->

  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!--  Product Details -->
        <div class="product product-details clearfix">
          <!-- ASIDE -->
        <div id="aside" class="col-md-3">
          <!-- aside widget -->
          <div class="aside section-white p-md">
            <h3 class="aside-title">About Store</h3>
            <!-- widget product -->
            <div class="product product-widget">
            <p>{{$vendor_info->about_us}}</p>   

            
            <ul class="social-network social-circle m-b-md">
                        <!-- <li><a href="#" class="icoFacebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter"><i class="fa fa-twitter"></i></a></li> -->
                        <!-- <li><a href="#" class="icoRss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoGoogle"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin"><i class="fa fa-linkedin"></i></a></li> -->
                    </ul>
                    <hr>
                    <b>Total Visitors : {{$vendor_info->visitor_count}}</b>
               <!-- <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=ef00ac3240700ed91ec70f69248ecc8c09c273e0'></script>
                <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/799336/t/0"></script> -->
            </div>
            <!-- /widget product -->

          </div>
          <!-- /aside widget -->

          <!-- aside widget -->
          <div class="aside section-white p-sm" style="display: none;">
            <h3 class="aside-title">Flash Sale</h3>
           <!--  <div class="countDown">
                   <span class="sale-timer">Sale up to 45%!</span>
                   <div class="timer">
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
                   </div>
      
            </div> -->
            <!-- widget product -->
            <div class="product product-widget">
              <div class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
      @if(!empty($flash_sale))
              @foreach($flash_sale as $index => $p)
                        <div class="item  {{($index=== 0) ? 'active' : ''}}">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="product product-single">
                          <div class="product-outer">
                            <div class="product-thumb w-100">
                              <div class="product-label">
                                <!-- <span class="new">New</span>
                                <span class="sale">-20%</span> -->
                              </div>
                              <!--<ul class="product-countdown">
                                <li><span>00 H</span></li>
                                <li><span>00 M</span></li>
                                <li><span>00 S</span></li>
                              </ul>-->
                              <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                              <img src="{{ asset('/storage/uploads/'.$p->images) }}" alt="">
                            </div>
                            <div class="product-body p-l-10">
                              <h3 class="product-price">Rs {{ $p->price - 
                    $p->price * 0.20 }}<br/> <del class="product-old-price"> Rs {{ $p->price }}</del></h3>
                              <!-- <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                              </div> -->
                              <span class="product-name"><a href="{{url('product-detail/'.$p->slug) }}">{{ $p->title }}</a></span>
                             <!-- <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                 <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> 
                              </div>-->
                            </div>
                          </div>
                          
                        </div>
                                </div>
                            </div>
                        </div>
             @endforeach
        @endif
                    </div>
                </div>
            </div>
          </div>
          <!-- /aside widget -->

          <!-- aside widget -->
          <div class="aside section-white p-sm" style="display: none;">
            <h3 class="aside-title">Recommended For You</h3>
            <!-- widget product -->

                <!-- section title -->
        @if(!empty($recommentded))
              @foreach($recommentded as $index => $p)
              <div class="product product-widget">
              <div class="product-thumb">
                <img src="{{ asset('/storage/uploads/'.$p->images) }}" alt="">
              </div>
              <div class="product-body">
                <span class="product-name"><a href="{{url('product-detail/'.$p->slug) }}">{{ substr($p->title,0,50) }}</a></span>
                <h3 class="product-price">Rs {{ $p->price - 
                    $p->price * 0.20 }}<br/> <del class="product-old-price"> Rs {{ $p->price }}</del></h3>
                <!-- <div class="product-rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o empty"></i>
                </div> -->
              </div>
            </div>
            <!-- /widget product -->
          <hr>


         @endforeach
        @endif

          </div>
          <!-- /aside widget -->

        
        </div>
        <!-- /ASIDE -->
          
          
            <div class="col-md-9 section-white">
            <!-- section title -->
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title">trending products</h2>
              </div>
            </div>
            <!-- section title -->
            
              <!-- store bottom filter -->
<!--           <div class="col-md-12 store-filter clearfix">
            <div class="pull-left">
              <div class="row-filter">
                <a href="#"><i class="fa fa-th-large"></i></a>
                <a href="#" class="active"><i class="fa fa-bars"></i></a>
              </div>
              <div class="sort-filter">
                <span class="text-uppercase">Sort By:</span>
                <select class="input">
                    <option value="0">Position</option>
                    <option value="0">Price</option>
                    <option value="0">Rating</option>
                  </select>
              </div>
            </div>
            <div class="pull-right">
              <div class="page-filter">
                <span class="text-uppercase">Show:</span>
                <select class="input">
                    <option value="0">10</option>
                    <option value="1">20</option>
                    <option value="2">30</option>
                  </select>
              </div>
              <ul class="store-pages">
                <li><span class="text-uppercase">Page:</span></li>
                <li class="active">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
              </ul>
            </div>
          </div> -->
          <!-- /store bottom filter -->



        

         <!-- section title -->
        @if(!empty($vendor_products))
              @foreach($vendor_products as $index => $p)
 <!--Style -->
 <style type="text/css">
   .product.product-single .product-thumb:after{
    position: relative !important;
}
 </style>
 <!--Style -->           
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
                  <h3 class="product-price">Rs {{ $p->price - 
                    $p->price * 0.20 }}<br/> <del class="product-old-price"> Rs {{ $p->price }}</del></h3>
                  <span class="product-name"><a href="{{url('product-detail/'.$p->slug) }}">{{ substr($p->title,0,50) }}</a></span>
                  
                   <!-- <div class="product-rating">
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
              <!-- store bottom filter -->
          <div class="store-filter clearfix p-b-md">
          
            <div class="pull-right">
        
              <ul class="store-pages">
                <!-- <li><a href="#"><i class="fa fa-caret-left"></i></a></li>
                <li class="active">1</li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i></a></li> -->
              </ul>
            </div>
          </div>
          <!-- /store bottom filter -->
      </div>

        </div>
        <!-- /Product Details -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /section -->
  


@endsection