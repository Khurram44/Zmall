@extends('layouts.app')

@section('content')
@include('layouts.home-navigation')
<?php use App\storeDetail; ?>
<style type="text/css">
      .sales_page_header{
          margin-top:100px;
        padding: 25px 0;
        top: 0;
        z-index: 3;
        opacity: .95;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 2px 6px 0 rgb(40 44 63 / 8%);
      }
      .sales_deal_content{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .sale_title img{
        height: 20px;
      }
      .sale_ends_in{
       
      }
      .sale_ends_in i{
        padding-left: 10px;
        padding-right: 5px;
      }
      .sale_ends_in span{
        text-transform: uppercase;
      }
      .sale_timmer{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 5px;
      }
      .sale_timmer_content{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .sale_timmer_content p{
        margin-bottom: 0px;
        background: #444;
        color: #fff;
        margin-left: 2px;
        padding: 2px 5px;

      }
      .all_cards{

        padding: 0px;
       
      }
      .all_cards a{
        text-decoration: none;
      }
      .product_card{
background: #fff;
        padding: 15px;
        margin:  5px;
         border: 1px solid #ddd;
      }
      .product_card:hover{
        cursor: pointer;
        transform: translateY(-0.0625rem);
      }
      .card_active{
        
      }
     .product_details{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
     }
     .product_img{
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;

     }
     .product_img img{
      height: 150px;
      width: 150px;
      object-fit: contain;
     }
     .review-rating i{
        color: #FF9529;
        margin: 0 1px;
      }
    .review-rating{
        display: flex;
      }
     .progress{
      position: relative;
      width: 130px;
      height: 20px !important;
      background: #e1e4e8;
      min-height:20px;
      border-radius: 20px;
      overflow: hidden;
      margin-bottom: 0px;
      }
    .sold-pro{
       position: absolute;
        top: 0;
        font-weight: 600;
        left: 45px;
        color: #fff;
        text-align: center;
    }
    .flash-b-b{
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5px 0;
    }
      .progress-bar{
        display: block;
        height: 100%;
        background: linear-gradient(90deg,#ffd33d 17%,#fe9126 34%,#fe9126 51%,#ffd33d 68%,#d1722a 85%,#fe9126);
        background-size: 300% 100%;
        animation: progress-animation 2s linear infinite;
    }
    .product_title span{
      font-size: 14px;
      color: #333;
      line-height: 16px;
    }
    .product_shop{
      line-height: 14px;
      height: 16px;
      max-width: 200px;
      overflow: hidden;
    }
    .product_shop a{
      text-decoration: none;
      font-size: 14px;
      color: #666;
    }
    .product_price a{
      text-decoration: none;
      font-size: 16px;
      color: #333;
      font-weight: bold;
    }
    @keyframes progress-animation{
      0%{
        background-position: 100%;
      }
      100%{
        background-position: 0;
      }
    }
    
     @media screen and (max-width:800px){
         .sales_page_header{
             margin-top: 0px;
         }
         .all_cards{
            
             float: left;
             width:50%;
         }
         .flash_ban{
             padding: 0px;
         }
         
     }
     @media screen and (max-width: 340px){
        .all_cards {
           
            margin: 1px auto;
            width:50%;
        }
        }
    </style>


<div class="sales_page_header">
      <div class="container">
        <div class="sales_deal_content">
          <div class="sale_title">
            <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/29b1283107e74a84ae1bdb3b85537b08.png">
          </div>
          <div class="sale_ends_in">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <span>ends in</span>
          </div>
          <div class="sale_timmer">
            <div class="sale_timmer_content">
                <p id="days"></p>
                <p id="hours"></p>
                <p id="mins"></p>
                <p id="secs"></p>
                <h2 style="font-size:14px;" id="end"></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container flash_ban">
      <div class="deal_banner">
          <img src="https://cf.shopee.ph/file/579978355c4e2784d2c2d34d88b1043b" class="img-fluid">
      </div>
    </div>
    <div class="container">
      <div class="product_grid">
        <div class="row product_grid_inner">
            @if(!empty($flash_sale))
            @foreach($flash_sale as $p)
          <div class="col-sm-2 all_cards" >
            <a href="{{url('product-detail/'.$p->slug)}}">
              
            <div class="product_card">
              <div class="product_card_content">
                <div class="product_img">
                    <img src="{{asset('/frontend/storage/uploads/'.$p->images)}}">
                </div>
                <?php $storedetail= storeDetail::where('owner_id',$p->added_by)->first(); 
                ?>
                <div class="product_details">
                  <div class="product_title">
                    <span>{{substr($p->title, 0, 15)}}...</span>
                  </div>
                  <div class="product_shop">
                      @if(!empty($storedetail->store_name))
                    <a href="">{{substr($storedetail->store_name, 0, 15)}}...</a>
                    
                    @endif
                  </div>
                  <div class="product_price">
                    <span>@if(!empty($p->promotion_discount))
                            <span>{{$p->price - ($p->price * $p->promotion_discount)/ 100}}</span>
                            <del>Rs {{ $p->price }}</del>
                            @else
                            @if(!empty($p->discount_price))
                            <span>
                            Rs {{ $p->discount_price}}
                            @else Rs {{ $p->price }}
                            @endif</span>
                            @if(!empty($p->discount_price))
                            <del>Rs {{ $p->price }}</del>
                            @endif
                            @endif<span>
                  </div>
                  <div class="product_ratings">
                    <div class="flash-b-b">
                      <div class="review-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="progress">                     
                      <span class="progress-bar" style="width: {{rand(40,90)}}%;"></span>
                      <span class="sold-pro">In Stock</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
<script>
      // The data/time we want to countdown to
      var countDownDate = new Date("Sept 18, 2021 16:37:52").getTime();

      // Run myfunc every second
      var myfunc = setInterval(function() {

      var now = new Date().getTime();
      var timeleft = countDownDate - now;
          
      // Calculating the days, hours, minutes and seconds left
      var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
      var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
          
      // Result is output to the specific element
      if (days < 10) {
        document.getElementById("days").innerHTML = '0' + days;
      }
      else{
        document.getElementById("days").innerHTML = days;
      }
      if (hours < 10) {
        document.getElementById("hours").innerHTML = '0' + hours;
      }
      else{
        document.getElementById("hours").innerHTML = hours;
      }
      if (minutes < 10) {
        document.getElementById("mins").innerHTML = '0' + minutes;
      }
      else{
        document.getElementById("mins").innerHTML = minutes;
      }
      if (seconds < 10) {
        document.getElementById("secs").innerHTML = '0' + seconds;
      }
      else{
        document.getElementById("secs").innerHTML = seconds;
      }
      
      
      // Display the message when countdown is over
      if (timeleft < 0) {
          clearInterval(myfunc);
          document.getElementById("days").style.display = "none";
          document.getElementById("hours").style.display = "none";
          document.getElementById("mins").style.display = "none";
          document.getElementById("secs").style.display = "none";
          document.getElementById("end").innerHTML = "Sale Ended!!";
          document.getElementById("end").style.marginBottom = "0px";
      }
      }, 1000);
    </script>

@endsection