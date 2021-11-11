@extends('layouts.app')
@section('content')
@include('layouts.home-navigation')
<?php $current_route_name = Route::getFacadeRoot()->current()->uri(); ?>
<style type="text/css">
  body{
    background:#fff;
  }
  section{
    font-family: circular, Arial, sans-serif;
  }
  .top-b-section{
    width: 100%;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f2f2f2),to(#fafafa));
    margin-top: 120px;

  }
  .sell-top-nav{
    justify-content: center;
    position: relative;
      padding: 4px 0;
      
  }
  .sell-top-tit{
  font-size: 12px;
    color: #282c3f;
    vertical-align: middle;
    line-height: 26px;
    font-family: circular, Arial, sans-serif;
}
.acc-head{
  font-family: circular,Arial,sans-serif;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.14;
    border-bottom: 1px solid #eeeeef;
    margin: 0;
    margin-top: 10px;
    margin-left: 10px;
    padding: 0 0 12px;
    color: #303030;
}
.pr-menu-left li{
  list-style:none;
}
.nav-header{
  text-decoration: none;
  color: #979797;
  text-transform: uppercase;
  font-size: 12px;
  margin-top: 10px;
}
.nav-header:hover{

  color: #979797;
  
}
.pr-menu-left li a{
  text-decoration: none;
  color: #303030;
  display: block;
  padding: 4px 0;
}
.pr-menu-left li a:hover{
  color: #fe9126;
}
.pr-menu-left li a.active{
  color: #fe9126;
}
.contact-field label{
  font-size: 12px;
    color: #979797;
    display: block;
    min-height: 14px;
    margin-top: 10px;
}
.contact-field input{
    font-size: 14px;
    padding: 9px 12px;
    display: block;
    margin-bottom: 0;
    height: 39px;
    width: 100%;
    font-family: circular,Arial,sans-serif;
    outline: none;
    border: 1px solid #ddd;
    background-color: #f4f4f4;
}
.contact-field input:hover{
  background-color: #f4f4f4;
    cursor: not-allowed;
}
.upper-header{
  margin-top: 10px;
  display: flex;
  justify-content: space-between;
}
.upper-header h2{
  color: #0d0d0d;
    font-style: normal;
    font-weight: 400;
}
.upper-header a{
  color: #fe9126;
    
}
</style>
<body>

  <section class="top-b-section" style="margin-top: 120px;">
    <div class="container">
      <div class="sell-top-nav">
        <div class="row">
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
              <span>Free Returns</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
              <span> 100% Authentic</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
              <span> Secure Payments</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="sell-top-tit">
              <span><a href="/return-and-refund" style="text-decoration: none;  color: #282c3f;">Return & Refund Policies</a> </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <section>
    <div class="container">
      <div class="row" style="padding-bottom: 100px;">
        <h3 class="acc-head">Your Account</h3>
        <div class="col-sm-3" style="border-right: 1px solid #eeeeef;">
          <ul class="pr-menu-left">
            <li class="nav-header">ACCOUNT</li>
            <li><a href="{{ asset('/profile/contact')}}" class="@if ($current_route_name === 'profile/contact' || $current_route_name === 'profile') active @endif">Profile</a></li>
            <li><a href="{{ asset('/profile/address')}}" class="{{ $current_route_name === 'profile/address' ? 'active' : null }}">Addresses</a></li>
            <li><a href="{{ asset('/profile/vouchers')}}" class="{{ $current_route_name === 'profile/vouchers' ? 'active' : null }}">Vouchers</a></li>
            <li><a href="{{ asset('/profile/cashback')}}" class="{{ $current_route_name === 'profile/cashback' ? 'active' : null }}">Cashback</a></li>
            <li><a href="{{ asset('/profile/wishlist')}}" class="{{ $current_route_name === 'profile/wishlist' ? 'active' : null }}">Wishlist</a></li>
            <li><a href="{{ asset('/profile/wallet')}}" class="{{ $current_route_name === 'profile/wallet' ? 'active' : null }}">Wallet</a></li>
            <hr>
            <li class="nav-header">ORDERS</li>
            <li><a href="/profile/orderSummaries">My Orders</a></li>
            <hr>
            <li class="nav-header">HELP</li>
            <li><a href="{{asset('/customercare')}}">Customer Care</a></li>
            <li><a href="{{asset('/return-and-refund')}}">Return & Refund FAQ</a></li>
            <li><a href="{{asset('/faqs')}}">FAQ</a></li>
          </ul>
        </div>

    @yield('content2')
    
    </div>
    </div>
  </section>
<script>
            $(document).on('click', '.pr-menu-left li a', function(){
        $('.pr-menu-left li a').click(function() {
        $(this).addClass('active')
    });
            });
</script>



@endsection