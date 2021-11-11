<?php
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Orders;
$Userid= Auth::id();
$user= User::where('id', $Userid)->first();
$generalsettings =  \DB::table('generalsettings')->where('id', 1)->first();
$orders_tracking = Orders::where('order_no')->where('added_by', Auth::id())->get();
?>
<?php
use App\Manage;
$Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->limit(10)->get();

?>


<style type="text/css">

html, body {
    touch-action: auto;
    font-family: font-family: 'Montserrat', sans-serif !important;
}
.product.product-widget .product-thumb>img{
    width: 50px;
    height: 50px;
    object-fit: contain;
}
.logo{
    margin-right:25px;
}
.nav-acc-icons ul li a{
    color: #fff !important;
}
.nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
    background-color: transparent;
    border-color: #337ab7;
}
.nav-acc-icons ul li a:hover{
    color: #fff !important;
    opacity: 0.8 !important;
}
.content .row a{
    color: #337ab7;
    font-size: 14px;
    font-weight: 500;
}
.modal-content{
    width:50%;
    margin: 10% auto;
}
.nav-search input{
    background: #fff;
}
.nav-links li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    padding: 0 10px;
    line-height: 0px;
    text-transform: capitalize;
    transition: all .2s ease;
}
.nav-links li a:hover{
     color: #fff !important;
    opacity: 0.8 !important;
}
.mega-box .content .row {
    width: auto;
    line-height: 45px;
    margin-left: auto;
    margin-right: auto;
}
.row .mega-links li a{
    padding: 0 20px;
}
.row .mega-links li a:hover{
    padding: 0 20px;
    margin-left: 1px;
}
.show-menu{
  display: none;
}
.mega-box .content .row {
    width: 100%;
    line-height: 0;
    margin-left: auto;
    margin-right: 0p;
}
.mega-box .content {
    background: #fff;
    padding: 25px 20px;
    margin-left: 0;
    display: flex;
    width: 100%;
    justify-content: space-between;
    box-shadow: 0 6px 10px rgb(0 0 0 / 15%);
}
.content .row a {
    color: #337ab7;
    font-size: 14px;
    line-height: 40px;
    font-weight: 500;
}
.mega-box {
    position: absolute;
    left: 0;
    width: 100%;
    padding: 0;
    top: 85px;
    opacity: 0;
    visibility: hidden;
}
  @media screen and (max-width:800px){
      .qty{
        color:#fff;
    }
    .header-cart{
        list-style:none;
    }
    .dropdown.default-dropdown>.custom-menu {
    left: -48px;
    width: 180px;
    overflow: hidden;
}
      .modal-content{
    width:80%;
    margin: 10% auto;
}
    nav{
      display:none;
      }
     .responsive-nav{
      display:block;
       padding:10px;
       width:100%;
       height:auto;
       background-color: #1f1f1f;
       justify-content:space-around;
       align-items:center;
      }
      .logo-response{
      display: flex;
      justify-content: space-around;
      padding: 10px 0px;
      border-bottom: 1px solid #666;
      }
     .logo-response i{
      color: #fff;
     }
     .clickhere-close{
      position:absolute;;
      top:20px;
      left:10px;
      z-index: 80;
      }
    .responsive-nav .hand-burger .line{
      background:#fff;
      width:30px;
      height:3px;
      margin:4px;
      opacity: 0.8;
      z-index:99;
    }
    .responsive-nav .hand-burger:hover{
      cursor:pointer;
   
    }
    .nav-links-res li a{
      color:#fff !important;
      font-size:18px;
      text-decoration: none;
      width: 100%;

     
    }
    .nav-links-res li{
        margin-top: 10px;
        display: block;
        padding: 5px 15px;
        margin: 5px 0px;
        background: #1f1f1f;
        text-align: left;
      
      

    }
    .line-close1{
    background:#fff;
    width:30px;
    height:3px;
    margin:4px;
    transform: rotate(-45deg);
    opacity: 0.8;
    z-index:99;
    }
    .line-close2{
    background:#fff;
    width:30px;
    height:3px;
    margin:4px;
    transform: rotate(45deg);
    opacity: 0.8;
    z-index:99;
    }
  .show-menu{
    position:fixed;
    list-style:none;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color: #1f1f1f;
    justify-content:space-around; 
    display:none;
    flex-direction:column;
    transition:all 0.5s ease-out;
    z-index:1;
  }
  .show-menu ul li a{
    text-decoration:none;
    color:#fff;
    
  }
  .res-inner {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
  }
  .show-menu.open{
    display: flex;
  }
  .res-top{
    position: relative;
    top: 0px;
    left: 0px;
    overflow: hidden !important;
    height: 110px;

  }
  .res-top img{
    z-index: -99;
    filter: blur(10px);
    opacity: 0.9;
    background: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
    border-bottom: 3px solid #000;
  }
  .res-top-icons{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .res-login-btn{
    position: relative;
    bottom: 55px;
    left: 0px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    padding: 0px 10px;
  }
  .res-top-icons a{
    color: #fff;
    text-decoration: none;
  }
  .nav-links-res span{
    font-size: 18px;
    color: #fff;
    float: right;
    padding-right: 5px;
  }
  .res-log-top{
    display: flex;
    justify-content: space-between;
    padding: 5px 0px;
  }
  .res-logo-top{
    width: 80px;
  }
  .res-log-top i{
    color: #fff;
    margin-right: 5px;
  }
  .responsive-nav .hand-burger .line {
    height: 4px;
    border-radius: 8px;
    margin-top: 5px;
    width: 30px;
    background-color: #fff;
    z-index: 99;
    cursor: pointer;
}
.container-fluid{
  width: 100%;
}
.nav-others a{
  color: #ddd !important;
}
   .hand-burger-close i{
      color: #fff;
      font-size: 32px;
      font-weight: bold;
    }
    .fa-long-arrow-left:before {
    content: "\f177";
    font-size: 40px;
    color: #fff;
    margin-left: 10px;
}
}
.nav-acc-icons {
    display: flex;
    position: normal;
    margin: 0;
    align-items: center;
    justify-content: flex-end;
    position: unset;
    right: 0;
    top: 0;
}
.show-it{
    box-shadow: 0 10px 20px -5px rgb(0 0 0 / 25%);
}
.mega-links li a:hover{
    color: #333 !important;
    opacity: 0.8 !important;
}
.mega-box .content .row a:hover{
    color: #333 !important;
    opacity: 0.8 !important;
}
</style>
<!-- top Header -->

<!-- /top Header -->

<div class="responsive-nav" style="width: 100%;">
      <div class="res-log-top">
        <a class="clickhere" href="javascript:void(0);">
          <div class="hand-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </a>
        <a href="{{ url('/home') }}">
            <img class="res-logo-top" src="{{ asset('/frontend/img/logo_w.png') }}" alt="">
        </a>
        <li class="header-cart dropdown default-dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
            <span class="qty">0</span> 
        </a>
        <div class="custom-menu" id="cm">
              <div id="shopping-cart">
                <div class="shopping-cart-list">
                  <div class="product product-widget">
                    <p class="text-center">Your cart is empty</p>
                  </div>
                </div>
              </div>
            </div>
        </li>
      </div>
</div>  
<div class="show-menu">
      <div class="res-inner" id="all-cat">
        <div class="res-top">
            <a class="clickhere-close" href="javascript:void(0);">
              <div class="hand-burger-close">
              <i style="font-size:24px" class="fa">&#x2715;</i>
             </div> 
            </a>
            <img src="{{ asset('/frontend/img/ZMall_banner.webp') }}">
            <a href="/login_register" class="res-login-btn">Login or Signup <span style="color: #fff; font-size: 20px; float: right; padding: 0px 20px;">></span></a>
        </div>
        <center>
            <div class="logo-response">
              <div class="res-top-icons">
                <a href="{{ url('home/') }}"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
                <a href="/">Home</a>
              </div>
              <div class="res-top-icons">
                <a href="/profile/wishlist"><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i></a>
                <a href="/profile/wishlist">Wishlist</a>
              </div>
              <div class="res-top-icons">
                <a href="/orders/placed"><i class="fa fa-cube fa-2x" aria-hidden="true"></i></a>
                <a href="/orders/placed">Orders</a>
              </div>
            </div>  

            <ul class="nav-links-res" id="all-cat">
       <!--      ######################################################## -->
              @if(!empty($Categories))
              @foreach($Categories as $c)
             <li onclick="showsub({{$c->id}});"><a href="#">{{ $c->name }} <span>></span></a></li>
            @endforeach
            @endif
       <!--      ######################################################## -->
       
       @if(!empty($user))
              <li class="nav-others" style="border-top: 1px solid #666;">@if($user->role == 'user')
       <a href="{{ asset('profile') }}">My Account<span>></span></a>
       @endif
       @if($user->role == 'vendor')
       <a href="/profile">My Account<span>></span></a>
       @endif
     
       </li>
       @endif
              <li class="nav-others"><a href="/profile/wishlist">Wishlists <span>></span></a></li>
              <li class="nav-others" style="border-top: 1px solid #666;"><a href="{{ asset('sell-on-zmall') }}">Sell on Zmall <span>></span></a></li>
               <li class="nav-others"><a href="" data-toggle="modal" data-target="#TrackingOrder">Tracking Order<span>></span></a></li>
              <li class="nav-others"><a href="{{asset('/customercare')}}">Customer Support<span>></span></a></li>
            </ul>

        </center>
      </div>
      <div class="res-inner" id="sub-categ" style="display:none;">
            <a onclick="subback();">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
        <center>
            <ul class="nav-links-res" id="all-cats">
            </ul>
        </center>
      </div>
      <div class="res-inner" id="sub-type" style="display:none;">
            <a onclick="typeback();">
              
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
             
            </a>
        <center>
            <ul class="nav-links-res" id="all-catss">
            </ul>
        </center>
      </div>
</div>
<nav class="nav" style="top:0px; background: linear-gradient(-180deg,#f53d2d,#f63);">
 <div class="container">
       
    @include('layouts.topheader')
    <div class="row">
	   <div class="wrapper" style="padding: 0px; justify-content: space-around;">
		    <div class="logo">
		      	<a href="{{ url('home/') }}">
		        	<img src="{{ asset('/frontend/img/zmall_logo_2.png') }}" alt="" style="width:130px; height:auto; margin-bottom:10px;">
		        </a>
	    	</div>
	      <ul class="nav-links">
	        	@if(!empty($Categories))
	             @foreach($Categories as $c)
	            <?php 
	            $sub_categories = Manage::where('module_id', 2)->where('parent_id', $c->id)->where('is_deleted', 0)->orderBy('name')->get();
	            ?>
		        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
		        @if($sub_categories->count() > 0)
		        <li>
		          <a href="{{ url('products/'.encrypt($c->id)) }}" class="desktop-item">{{ $c->name }}</a>
		          <div class="mega-box">
		            <div class="content">
		              @foreach($sub_categories as $sc)
		                  <?php 
		                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
		                  ?>
		              <div class="row">
		                <a href="{{ url('products/'.encrypt($c->id).'/'.encrypt($sc->id)) }}">{{ $sc->name }}</a>
		               <!--  <header>{{ $sc->name }}</header> -->
		                <ul class="mega-links">
		                  @if($sub_categories_types->count() > 0)
		                        @foreach($sub_categories_types as $sct)
		                  <li><a href="{{ url('products/'.encrypt($c->id).'/'.encrypt($sc->id).'/'.encrypt($sct->id)) }}"> {{ $sct->name }}</a></li>
		                  @endforeach
		                      @endif    
		                </ul>     
		              </div>
		             @endforeach
		            </div>
		          </div>  
		        </li>
		        @else
		              <li><a href="{{ url('products/'.encrypt($c->id)) }}">{{ $c->name }}</a></li>
		            @endif
		            @endforeach
		            @endif
	        
	      </ul>
	    <div class="nav-acc-icons"style="">
	        <ul style="display:inline-flex; justify-content:end;">
	           	<li class="search-nav" style=""> 
	             <div class="nav-search">   
		             <form method="get" action="{{ route('searchproducts') }}"  id="searchformkeyword" class="searchbox" enctype="multipart/form-data">
				        <input type="text" placeholder="&#xf002; Search" name="search" class="searchbox-input" required style="font-family: FontAwesome; display:block; color:black;">
				        <!-- onkeyup="buttonUp();" -->        
				      </form>
	             </div>
	            
	            </li>
	            <div class="account-it">
		           	<li class="dropdown default-dropdown">
		             <a href="#"><i class="fa fa-user-o"></i><br>Account</a>
		             <div class="show-it">
			               @guest
			               <p style="font-weight: 500;">Welcome to Zmall Shopping</p>
			              <p style="color: rgb(0,0,0,0.8);">Sign Up or Login for a personalised experience and faster checkout!</p>  
			              <a href="/login_register" class="text-uppercase"  style="font-weight: 500; color:#333 !important; ">Login</a> or <a href="/login_register" class="text-uppercase" style="font-weight: 500; color:#333 !important; ">Signup</a>
			               @else
						    <a  href="#" class="text-uppercase" style="font-size: 12px; color: #333 !important;"><b>@if(!empty( auth()->user()->first_name  ))
						      {{auth()->user()->first_name}} @endif</b></a>
						          <hr>
						  	<div style="text-align: left;">
						        @if($user->role == 'vendor')
						     <a href="{{ asset('Vendor/addproduct') }}" style="color: #333 !important;">Add Product</a><br>
						     <a href="{{ asset('Vendor/mystore/'.$Userid)}}" style="color: #333 !important;">My Store</a><br>
						        @endif
						        @if($user->role == 'user')
						       <a href="{{ asset('profile') }}" style="color: #333 !important;">My Account</a><br>
						       @endif
						       @if($user->role == 'vendor')
						       <a href="{{ asset('Vendor/dashboard') }}" style="color: #333 !important;">My Account</a><br>
						       @endif
						       <a href="{{ asset('orders/placed') }}" style="color: #333 !important;"> My Orders</a><br>
						      <a href="{{asset('/profile/wishlist')}}" style="color: #333 !important;">My Wishlist</a><br>
						      <a href="{{ asset('dbrdcust-contactbook') }}" style="color: #333 !important;"> Address Book</a><br>
						       <a href="{{ asset('change-pass') }}" style="color: #333 !important;">Change Password</a><br>
						   		<hr>
						        <a  href="{{ route('logout') }}"  
						           onclick="event.preventDefault();
						                         document.getElementById('logout-form').submit();" class="ho-dr-con-last waves-effect" style="color: #333 !important;">            
						            {{ __('Logout') }}
						        </a><br>
						        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						            @csrf
						        </form>  
							</div>
				       	 @endif
		       		</div>    
		           </li>
	   			</div>
	           	<li><a href="{{asset('/profile/wishlist')}}"><i class="fa fa-heart"></i><br>Wishlist</a></li>
	           <li class="header-cart dropdown default-dropdown">
	              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
	                <i class="fa fa-shopping-cart"></i>
	                <span class="qty">0</span> 
	                <br>Cart
	              </a>
		            <div class="custom-menu" id="cm">
		              <div id="shopping-cart">
		                <div class="shopping-cart-list">
		                  <div class="product product-widget">
		                    <p class="text-center">Your cart is empty</p>
		                  </div>
		                </div>
		              </div>
		            </div>
	          </li>
	        </ul>
	    </div>
	   </div>
  
  	</div>
 </div>
</nav>
<div class="modal fade" id="TrackingOrder" tabindex="-2" role="dialog" aria-labelledby="myModalLabel2"  aria-hidden="true" style="display: none;">
  <form method="POST" action="{{ route('tracking-order') }}" enctype="multipart/form-data">
  <div class="modal-content">
   <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
       <h4 class="modal-title" id="myModalLabel">Track Order</h4>
   </div>
   <div class="modal-body">
             <div class="row">
              <div class="col-md-12 col-sm-6">
                  <div class="form-group">
                    <label>Tracking Number</label>
                    <input type="text" name="trackingno" class="form-control searchTrackNo" placeholder="Enter Tracking No" value="">
                  </div>
                </div>
             </div>
             <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <button type="submit" class="primary-btn btn" style="color:#fff; background: #fe9126;">Submit</button>
                  </div>
                </div>
             </div>
             <div class="row" id="trackingDetail">   
             </div>
             <!-- End Dilvery -->
             <div class="modal-footer">
               <div class="pull-right">
                   <a  data-dismiss="modal" class="vendr_notava" style="color:#fff; cursor:pointer;">Close</a>
               </div> 
             </div> 
         </div>
     </div>
     </form>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
   AOS.init();
</script> 
<script>
   $(document).ready(function(){
      $(".clickhere").click(function(){
        $(".show-menu").addClass("open");
      });
      $(".clickhere-close").click(function(){
        $(".show-menu").removeClass("open");
      });
    });
</script>
<script>
              $(document).ready(function() {
                 var submitIcon = $('.searchbox-icon');
                 var inputBox = $('.searchbox-input');
                 var searchBox = $('.searchbox');
                 var isOpen = false;
                 submitIcon.click(function() {
                   if (isOpen == false) {
                     searchBox.addClass('searchbox-open');
                     inputBox.focus();
                     isOpen = true;
                   } else {
                     searchBox.removeClass('searchbox-open');
                     inputBox.focusout();
                     isOpen = false;
                   }
                 });
                 submitIcon.mouseup(function() {
                   return false;
                 });
                 searchBox.mouseup(function() {
                   return false;
                 });
                 $(document).mouseup(function() {
                   if (isOpen == true) {
                     $('.searchbox-icon').css('display', 'block');
                     submitIcon.click();
                   }
                 });
               });
</script>
<script type="text/javascript">
  $(document).ready(function($) {
    $('#trackingDetail').hide();
    $('.searchTrackBtn').click(function() {
      $('#trackingDetail').show();   
    });
  });
      $(window).scroll(function(){
        var sc = $(window).scrollTop();
        if(sc > 50){
          $(".nav").addClass("sticky");
          $(".logo a img").style.marginBottom = "0px";
        }
        else{
          $(".nav").removeClass("sticky");
        }
      });
</script>
<script>
       $("#mydiv").hover(function () 
		{
		    $(this).toggleClass("active");
		    // or $(this).toggle();
		  }
		);
		function toggle(obj)
		{
		    var item = document.getElementByClass('show-it');
		    if(item.style.display == 'block') { item.style.visibility = 'none'; }
		    else { item.style.visibility = 'block'; }
		}
	</script>
<script type="text/javascript">
  var a= document.getElementById("sub-categ");
  var b= document.getElementById("sub-type");
  var x= document.getElementById("all-cat");
  function showsub(id){
  if (a.style.display==="none") {
    $.ajax({
      type: 'GET',
      url: '/getsubcategory/' + id,
      success: function (response) {
      var response = JSON.parse(response);
      console.log(response);
      $('#all-cats').empty();
      response.forEach(element => {
        $('#all-cats').append(`<li onclick="showtype(${element['id']},${element['parent_id']});"><a href="#">${element['name']} <span>></span></a></li>`);
        });
          }
         });
    a.style.display="block";
    x.style.display="none";
    b.style.display="none";
  }
  else{
    a.style.display="block";
    x.style.display="none";
    b.style.display="none";
  	}
	}
	function showtype(id,id2){
	  if (b.style.display==="none") {
	    $.ajax({
	      type: 'GET',
	      url: '/getsubtype/' + id,
	      success: function (response) {
	      var response = JSON.parse(response);
	      console.log(response);
	      $('#all-catss').empty();
	      response.forEach(element => {
	        $('#all-catss').append(`<li><a href="products/"encrypt(id)"/"encrypt(${element['parent_id']})"/"encrypt(${element['id']})>${element['name']} <span>></span></a></li>`);
	        });
	          }
	         });
	    b.style.display="block";
	    x.style.display="none";
	    a.style.display="none";
	  }
	  else{
	    b.style.display="block";
	    x.style.display="none";
	    a.style.display="none";
	  }
	}
	function subback(){
	  if (x.style.display==="none") {
	    $('#all-cats').empty();
	    x.style.display="block";
	    a.style.display="none";
	    b.style.display="none";
	  }
	  else{
	    $('#all-cats').empty();
	    x.style.display="block";
	    a.style.display="none";
	    b.style.display="none";
	  }
	}
	function typeback(){
	  if (a.style.display==="none") {
	    a.style.display="block";
	    x.style.display="none";
	    b.style.display="none";
	  }
	  else{
	    a.style.display="block";
	    x.style.display="none";
	    b.style.display="none";
	  }
	}
</script>
