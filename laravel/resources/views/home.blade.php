@extends('layouts.app')
@section('content')
@include('layouts.home-navigation')
<?php use App\storeDetail; ?>
<style type="text/css">
@media only screen and (max-width: 480px){
[class*='col-xs'] {
    width: 50%;
}}
@media (min-width: 1200px){
.container {
    width: 1280px;
}
}
.azadi-p-t{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
}
.p-md{
    overflow:hidden;
}
.section-category{
    background: #fff;
    padding: 0 1.25rem;
}
.section-title:after{
    background-color:unset;
}
.section-category h2{
    color: #333e48;
    margin: 0 0 10px;
    font-weight: 700;
    font-size: 16px;
    text-transform: uppercase;
}
.bar-t-inner{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.bar-b-t{
  display: flex;
    justify-content: space-around;
    align-items: center;
    max-width: 50%;
    margin: 15px auto;
}
.bar-t-inner{
  width: 120px;
}
.bar-t-inner-t{
  height: 55px;
  width: 55px;
  display: flex;
  justify-content: center;
align-items: center;
}
.bar-t-inner-t img{
  height: 55px;
  width: 55px;
  object-fit: contain;
}
.bar-t-inner-b{
    color: #3f3f3f;
    font-weight: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px 0px ;
    text-align: center;
}
.cat-box{
  display: flex;
  flex-direction: column;
}
.all_category-inner{
  display: flex;
    justify-content: space-between;
    align-items: center;
    align-content: center;
    max-width: 95%;
    margin: 0px auto;
}

.cat-box-t{
    width: auto;
    height: 120px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

}
.cat-box a:hover{
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.cat-box-t-desc{
  color: #3f3f3f;
  text-align: center;
  padding: 0px 5px;
}
.all_categor-box{
  width: 100%;
}
.cat-box-t-img{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70px;
  width: 70px;
}
.cat-box-t-img img{
  height: 100%;
  width: 100%;
  object-fit: contain;
  padding: 5px;

}

.carousel-inner item{
    height:auto !important;
}
  .top-bar{
    display: flex;
    overflow: scroll;
    scroll-behavior: auto;
  }
  .banner-top{
    margin-top: 100px;
  }
  .item {
    height: 270px;
    }
    .thumb-wrapper {
    min-height: 270px;
    
    }
    .imgs-cat{
      padding: 5px;
    }
  .img-box img {
    width: auto;
    height: 200px;
    position: absolute;
    bottom: 0;
    left: 0;
    object-fit: contain;
    margin: auto;
    transition: all .2s ease-in-out;
}
.carousel-indicators {
    bottom: 10px;
}
.carousel-indicators li {
    display: inline-block;
    width: 8px;
    height: 5px;
    text-indent: -999px;
    cursor: pointer;
    background-color: rgba(0,0,0,0);
    border: 1px solid #fff;
    border-radius: 40px;
    padding: 0px 8px;
}
.carousel-indicators .active {
    width: 8px;
    height: 5px;
    margin: 0;
    background-color: #fff;
}
.popbtn{
  outline: none; 
  position: relative; 
  top: 40px; 
  right:10px;
  opacity: 1;
}
.popbtn span{
  font-size: 24px;
    border-radius: 50%;
    color: #fff;
}
#mypopbanner button.close{
 height: 30px;
    width: 30px;
    border-radius: 15px;
    background: #212121;
}
.popbtn span:hover{
  opacity: 1 !important;
}
#mypopbanner button.close:hover{
  opacity: 1 !important;
}
.bar-t-inner:hover{
  transform: translate(0px,-2px);
}
.lowethird_banner{
  position: fixed;
  bottom: 5%;
  right: 20px;
  z-index: 1;
  
}
.lower_inner img{
  height: 100px;
  width: 100px;
}
.lower_inner span {
    position: absolute;
    top: -10%;
    right: 5%;
    font-size: 25px;
    color: #fff;
    background: red;
    height: 30px;
    width: 30px;
    text-align: center;
    border-radius: 15px;
    opacity: 0.5;
    z-index: 1;
    cursor: pointer;
}
.features{
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
}
.features-inner{
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  margin-bottom: 20px;
}
.feature-img{
  width: 80px;
  height: 80px;
}
.feature-img img{
  width: 80px;
  height: 80px;
  object-fit: contain;
}
.features-inner a{
  color: #3f3f3f !important;
  font-weight: 600;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 16px;
  text-align: center;
  padding: 10px 0px;
}
.features-inner a:hover{
  color: #333 !important;
}
.promo-banners{
  display: flex;
  overflow-x: scroll;
  width: 100%;
}
.promo-banners a img{
  width: 250px;
  max-width: none !important;
}
.features-m{
    margin: 3% auto;
}
.cat-box a{
    border: 1px solid #ddd;
}
.azadi-top{
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-justify-content: space-between;
        -moz-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0 .84375rem 0 .9375rem;
        height: 30px !important;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .azadi-top span{
      font-size: 2rem;
      text-transform: uppercase;
      color: #fff;
      white-space: pre;
      font-weight: bold;
      padding: 0 20px;
    }
    .azadi-top a{
      text-decoration: none;
      font-size: 1.75rem;
      text-transform: uppercase;
      color: #fff;
      white-space: pre;
      font-weight: bold;
      padding: 0 20px;
    }
    .azadi-p-img{
      width: 10.125rem;
    height: 10.125rem;
    display: block;
    background-position: 50%;
    }
    .azadi-p-img img{
      width: 10.125rem;
      height: 10.125rem;
      object-fit: cover;
      }
      .azadi-p-price{
            -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: .3125rem;
      }
      .azadi-bottom{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px;
      }
      .azai-content{
        background-image: url("https://cf.shopee.ph/file/361c02e89dea60112da7f5878c42d232");
        background-size: cover;
      }
      .azadi-card{
        background: #fff;
        position: relative;
        width: 12%;
        margin: 0 10px;
        border: 3px solid green;
        border-radius: 20px;
        overflow: hidden;
      }
      .azadi-top span{

      }
      .azadi-card a{
        text-decoration: none;
        color: #333;
      }
      .top-bg{
        background-image: url("/frontend/img/top-ban-azadi.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      .off-a{
        transform: scale(1.4);
    padding: 7px 8px;
    position: absolute;
    right: 0;
    top: -5px;
    z-index: 2;
      }.off-a-c{
        background-color: rgba(255,212,36,.9);
            width: 36px;
    height: 32px;
    display: inline-block;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    position: relative;
    padding: 4px 2px 3px;
    font-weight: 700;

      }
      .off-t{
        display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -ms-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    font-weight: 400;
    line-height: .8125rem;
    color: #ee4d2d;
    text-transform: uppercase;
    font-size: .75rem;
      }
      .off-t span:nth-child(1){
    font-weight: 400;
    line-height: .8125rem;
    color: #ee4d2d !important;
    text-transform: uppercase;
    font-size: .75rem;
    font-weight: bold;
      }
      .off-t span:nth-child(2){
    font-weight: 400;
    line-height: .8125rem;
    color: #333;
    text-transform: uppercase;
    font-size: .75rem;
    font-weight: bold;
      }
@media screen and (max-width:800px){
    
    .i_thumb-content{
        display: flex;
        align-items: center;
        flex-direction: column;
        align-content: center;
        justify-content: center;
    }
    
.azadi-bottom {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    padding: 10px 0;
    overflow: scroll;
}
.azadi-top{
    display:flex;
    justify-content: center;
    align-items: center;
}
  .top-bar{
    display: flex !important;
    overflow-x: scroll;
    overflow-y: hidden;
    scroll-behavior: auto;
    background: #fff;
  }
  .off-a-c{
      width:100%;
      height: auto;
  }
  body{
      overflow-x:hidden;
  }
  .banner-top{
    margin-top: 0px;
  }
  .img-box a img{
    object-fit: cover;
  }
  .title{
    font-size: 12px !important;
    
  }
  .p-md{
    padding: 0px;
  }
  .ht-res{
    position: relative;
    height: 65px;
    width: 117px;
    margin: 3px;
  }
  .ht-res a{
    position: relative;
    margin: auto;
    text-decoration: none;
    color: #fff;
    font-weight: 700;
    font-size: 12px;
  }
  .item {
    height: auto; 
    }
    .img-box {
    height: 100px;
    width: 100%;
    position: relative;
    overflow: hidden;
    }
    .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    object-fit: cover;
    }
    .thumb-wrapper {
    min-height: auto;
        
    }
    #mobile-b{
        display:block !important;
        
    }
    #web-b{
        display:none !important;
    }
    .bar-b-t {
    justify-content: space-around;
    align-items: center;
    max-width: 90%;
    margin: 0px auto;
  }
  .bar-t-inner-b {
    color: #3f3f3f;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0px 0px 10px;
    font-size: 14px;
}
  .bar-t-inner {
    margin: 10px 0px;
      width: 110px;
  }
  .bar-t-inner-t img {
    height: 35px !important;
    width: 35px !important;
    object-fit: contain;
  }
    .bar-t-inner-t {
      height: 45px;
      width: 55px;
      display: flex;
      justify-content: center;
      align-items: center;
  }
  .all_category-inner {
    display: flex;
    align-items: center;
    align-content: center;
    max-width: 95%;
    margin: 0px auto !important;
    overflow: hidden;
}
  .cat-box{
  display: flex;
  flex-direction: column;
}
  .modaltent{
    width: 80% !important;
    margin: 30% auto !important;
    box-shadow: none;
  }
  .all_categor-box{
    display: inline !important;
}
  .cat-box-t {
    width: 100%;
    height: 120px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .features-m{
    display: flex;
    margin-top: 5px;
    margin-bottom: 5px;
    overflow-x: scroll;
    margin-left: 10px;
  }
  .features-m .col-sm-2{
    padding: 0px;
    margin: 0px;
  }
  .features{
  display: flex;
  flex-direction: row !important;
  justify-content: space-around;
  align-items: center;
  }
  .features-inner{
    height: 100px;
    width: 100px;
    margin-left: 10px;
    display: flex;
    flex-direction: column;
    justify-content: normal;
    align-items: center;
    margin-bottom: 20px;
  }
  .features-inner a{
    text-transform: capitalize !important;
    color: #3f3f3f !important;
    font-weight: normal;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    text-align: center;
    padding: 0px;
  }
  .feature-img{
    height: 100px;
    width: auto;
  }
  .feature-img img{
    width: 60px;
  }
   .lowethird_banner{
  position: fixed;
  bottom: 3%;
  right: 10px;
  z-index: 1;
  
  }
  .section-title {
      position: relative;
      text-align: left;
      clear: both;
      margin-bottom: 5px;
      padding: 0px 5px;
  }
  .pull-right a {
    color: #3a3b3c !important;
    font-size: 12px;
    padding: 0px 5px;
}
}
#loadMore {
    margin-top: 10px;
    padding-bottom: 30px;
    padding-top: 30px;
    text-align: center;
    width: 100%;
}
#loadMore a {
    margin-top: 20px;
    text-decoration: none;
    background-color: #fff;
    color: #fe9126 !important;
    border: 1px solid #fe9126;
    border-radius: 3px;
    color: white;
    display: inline-block;
    padding: 10px 30px;
    transition: all 0.25s ease-out;
    -webkit-font-smoothing: antialiased;
}
#loadMore a:hover {
    background-color: #fff;
    color: #fe9126 !important;
    border: 1px solid #fe9126;
}
.fshow {
    margin-top: 10px;
    padding-bottom: 30px;
    padding-top: 30px;
    text-align: center;
    width: 100%;
}
.fshow a {
    margin-top: 20px;
    text-decoration: none;
    background-color: #fff;
    color: #fe9126 !important;
    border: 1px solid #fe9126;
    border-radius: 3px;
    color: white;
    display: inline-block;
    padding: 10px 30px;
    transition: all 0.25s ease-out;
    -webkit-font-smoothing: antialiased;
}
.fshow a:hover {
    background-color: #fff;
    color: #fe9126 !important;
    border: 1px solid #fe9126;
}
.i_thumb a{
  text-decoration: none;
}
.i_thumb_t{
  height: 150px;
  width: 150px;
  overflow: hidden;
  padding: 5px;
}
.i_thumb_img img{
  height: 150px;
  width: 150px;
  object-fit: cover;
}
.i_thumb_title span{
  color: #333;
  font-weight: bold;
}
.i_thumb_store a{
  color: #666 !important;
  text-decoration: none;
}
.i_thumb_store a:hover{
  color: #333 !important;
  text-decoration: none;
}
.i_thumb_price{
  display: flex;
}
.i_thumb_price span{
  color: #333;
}
.i_thumb_price del{
  color: #666;
  margin: 0 5px;
}
.i_thumb{
    margin: 10px 0;
}
.progress{
    position: relative;
  width: 100%;
  max-width: 150px;
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
    left: 15px;
}
  .progress-bar{
    display: block;
    height: 100%;
    background: linear-gradient(90deg,#ffd33d 17%,#fe9126 34%,#fe9126 51%,#ffd33d 68%,#d1722a 85%,#fe9126);
    background-size: 300% 100%;
    animation: progress-animation 2s linear infinite;
    }
@keyframes progress-animation{
  0%{
    background-position: 100%;
  }
  100%{
    background-position: 0;
  }
    }
     .flash_content{
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                  }
                  .flash_content li{
                    width: 16%;
                  }
                  .flash_content li a{
                    text-decoration: none;
                    color: #333;
                  }
                  .flash-t{
                    height: 200px;
                    width: 200px;
                    position: relative;
                    background-image: url("/frontend/img/Flash Deals.png") !important;
                    background-size: cover;
                  }
                  .flash-flag{
                    position: absolute;
                    top: 0;
                    right: 0;
                  }
                  .review-rating i{
                    color: #FF9529;
                    margin: 0 1px;
                  }
                  .review-rating{
                    display: flex;
                  }
                  .flash-t img{
                    position: relative;
                    display: flex;
                    top: 5px;
                    left: 0px;
                    height: 155px;
                    width: 190px;
                    object-fit: contain;
                    border: 0 none;
                    box-sizing: border-box;
                    /* height: 30%; */
                    margin: 0 auto;
                    /* max-width: 100px; */
                    vertical-align: middle;
                    align-items: center;
                    justify-content: center;
                  }
                  .flash-b{
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: 200px;
                    height: 60px;
                     justify-content: space-around;
                }
                .flash-b-t{
                     height:16px;
                }
                .flash-b-t span{
                    font-weight: bold;
                    color: #333;
                    font-size: 16px;
                }
                @media screen and (max-width:800px){
                    ::-webkit-scrollbar {
                    display:none;
                }
                    .flash_content{
                        justify-content: flex-start;
                        overflow-x: auto;
                    }
                    .flash_content li{
                    width: auto;
                  }
                }
</style>
  <!-- HOME -->
<div id="home">
    <!-- container -->
  <div class="container">
      <div class="row top-bar" style="display: none;">
        <div class="all-cat-res" style="display:flex">
          <div class="ht-res" style="background: ;">
            <a href="{{ url('/category-For-Mobile/'.encrypt(1))}}"><img src="/frontend/catimg/mobi/zmall-women-ml.webp" alt=""></a>
          </div>
          <div class="ht-res" style="background: orange;">
           <a href="{{ url('/category-For-Mobile/'.encrypt(2))}}"> <img src="/frontend/catimg/mobi/zmall-men-ml.webp" alt=""></a>
            <center><a href="">Men</a></center>
          </div>
          <div class="ht-res" style="background: orange;">
           <a href="{{ url('/category-For-Mobile/'.encrypt(510))}}"> <img src="/frontend/catimg/mobi/zmall-kids-ml.webp" alt=""></a>
            <center><a href="">Kids</a></center>
          </div>
          <div class="ht-res" style="background: orange;">
           <a href="{{ url('/category-For-Mobile/'.encrypt(516))}}"> <img src="/frontend/catimg/mobi/zmall-lifestyle-ml.webp" alt=""></a>
            <center><a href="">Lifestyle</a></center>
          </div>
          <div class="ht-res" style="background: orange;">
          <a href="{{ url('/category-For-Mobile/'.encrypt(323))}}">  <img src="/frontend/catimg/mobi/zmall-beauty-ml.webp" alt=""></a>
            <center><a href="">Beauty</a></center>
          </div>
        </div>
      </div>

      <div class="row banner-top" id="web-b" style="display:flex; align-items: center; background: #fff;">
        <div class="col-sm-8" style="padding-right: 5px;">
          <div class="row">
            <div class="col-sm-12" style="overflow: hidden;">
              <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:auto; ">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
              <li data-target="#myCarousel" data-slide-to="5"></li>
             
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <div class="item active" style="height:auto;">
                <a href="/500/deals"><img src="/frontend/img/banner/desktop/500 deal D.webp" alt="" style="width:100%;"></a>
              </div>
               <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/desktop/Electronics D.webp" alt="" style="width:100%;">
              </div>
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/desktop/Fitness Pump D.webp" alt="" style="width:100%;">
              </div>
              
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/desktop/LBAGS D.webp" alt="" style="width:100%;">
              </div>
            
             
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/desktop/Beauty Mobile.webp" alt="" style="width:100%;">
              </div>
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/desktop/zmall-fitness.webp" alt="" style="width:100%;">
              </div>
            </div>
            

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <!--<i class="fa fa-chevron-left" aria-hidden="true"></i>-->
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <!--<i class="fa fa-chevron-right" aria-hidden="true"></i>-->
              
              <span class="sr-only">Next</span>
            </a>
          </div>
         </div>
          </div>
        </div>
          <div class="col-sm-4" style="padding-left: 5px;">
            <div class="row">
              <div class="col-sm-12">
                <img src="/frontend/img/banner/desktop/Live Stream.webp" alt="" style="padding: 3px;">
              </div>
              <div class="col-sm-12">
                <a href="/products"><img src="/frontend/img/banner/desktop/MainBannerDesktop.webp" alt="" style="padding: 3px;"></a>
              </div>
            </div>
          </div>
          
      </div>

        <div class="row banner-top" id="mobile-b" style="display:none;">      
          <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="height:auto;margin-top: 0px;">
            <!-- Indicators -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" style="height:auto;">
                  <img src="/frontend/img/banner/mobile/500 deal.webp" alt="" style="width:100%;">
                </div>
                <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/mobile/Electronics.webp" alt="" style="width:100%;">
              </div>
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/mobile/Fitness Pump.webp" alt="" style="width:100%;">
              </div>
            
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/mobile/LBAGS.webp" alt="" style="width:100%;">
              </div>
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/mobile/zmall-lifestyle-mu.webp" alt="" style="width:100%;">
              </div>
              <div class="item" style="height:auto;">
                <img src="/frontend/img/banner/mobile/zmall-casual-mu.webp" alt="" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">-->
              <!--<i class="fa fa-chevron-left" aria-hidden="true"></i>-->
              <!-- <span class="sr-only">Previous</span>
              </a> -->
            <!--<a class="right carousel-control" href="#myCarousel" data-slide="next">-->
              <!--<i class="fa fa-chevron-right" aria-hidden="true"></i>-->
              
              <!-- <span class="sr-only">Next</span>
              </a> -->
          </div>
                  <!--<img src="{{ asset('frontend/img/banner/ZmallMain.png') }}" class="img-fluid" style="width:100%;" >-->
        </div>

  </div>
    <!-- /container -->

<div class="container">
  <div class="row" id="mobile-b" style="display:none;">  
    <div class="promo-banners">
      <a href="/products"><img src="/frontend/img/banner/desktop/zmall-500deals.webp" alt="" style="padding: 3px;"></a>
      <a href="/products"><img src="/frontend/img/banner/desktop/zmall-right2u.webp" alt="" style="padding: 3px;"></a>
      <a href="/500/deals"><img src="/frontend/img/banner/desktop/zmall-right1u.webp" alt="" style="padding: 3px;"></a>
    </div> 
  </div>
</div>

</div>
  <!-- /HOME --> 
 <!-- section -->
  <div class="container">
        <div class="row section-white">
          <div class="bar-b-t">
            <a href="#" id="web-b">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/zmal-cashcoins.png">
                </div>
                <div class="bar-t-inner-b">Coins Rewards</div>
              </div>
            </a>
            <a href="/products">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/zmall-freeshipping.png">
                </div>
                <div class="bar-t-inner-b">Free Shipping</div>
              </div>
            </a>
            <a href="/500/deals">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/zmall-500deal.png">
                </div>
                <div class="bar-t-inner-b">500 Sale</div>
              </div>
            </a>
            <a href="#" id="web-b">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/zmall-zmall.png" style="width: 35px;">
                </div>
                <div class="bar-t-inner-b">Z-Mall</div>
              </div>
            </a>
            <a href="#" id="web-b">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/zmall-zpay.png" style="width: 35px;">
                </div>
                <div class="bar-t-inner-b">Z-Pay</div>
              </div>
            </a>
            <a href="/z-beauty">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/znall-zbeauty.png">
                </div>
                <div class="bar-t-inner-b">Z-Beauty</div>
              </div>
            </a>
            <a href="#" id="web-b">
              <div class="bar-t-inner">
                <div class="bar-t-inner-t">
                  <img src="/frontend/img/banner/icons/zmall-zlive.png">
                </div>
                <div class="bar-t-inner-b">Z-Live</div>
              </div>
            </a>
          </div>
        </div>
  </div>
<!-- section End -->

<style type="text/css">
  .new_user{
    display: flex;
    flex-direction: column;
   
    padding: 20px;
  }
  .new_user_card{
    
  }
  .new_user_content{
      margin: 0px 8px;
     background:#fe3913;
    display: flex;
    padding: 10px;
    justify-content: space-around;
  }
  .new_user_content a{
    text-decoration: none;
    display: flex;
    flex-direction: column;
  }
  .img_newuser{
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 180px;
    width: 180px;
    overflow: hidden;
  }
  .img_newuser img{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 180px;
    width: 100%;
    object-fit: cover;
  }
  .des_newuser b{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-weight: bold;
    color: #fff;
  }
  .des_newuser p{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-weight: bold;
    color: #fff;
  }
  .img-user-top{
    width: 100%;
  }
  .img-user-top img{
    width: 100%;
    object-fit: cover;

  }
</style>

 <!-- section -->
<div class="container" id="web-b">
  <div class="row section-white">
   
    <div class="new_user">
      <div class="img-user-top">
        <img src="/frontend/img/Gifts Horizontal.webp">
        
      </div>
      
      <div class="new_user_content">
         @if(!empty($new_customer))
        @foreach($new_customer as $p)
        <div class="new_user_card">
          <a href="{{url('product-detail/'.$p->slug) }}">
            <div class="img_newuser">
              <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" class="img-fluid">
            </div>
            <div class="des_newuser">
              <b>{{substr($p->title,0,20)}}...</b>
              <p>Rs.@if(!empty($p->promotion_discount)) {{$p->price - ($p->price * $p->promotion_discount)/ 100}} @else @if(!empty($p->discount_price)) {{$p->discount_price}} @else {{$p->price}} @endif @endif</p>
            </div>
          </a>
        </div>
        @endforeach
         @endif
      </div>
    </div>
  </div>
</div>
  <div class="container section-white p-md top-cat">
      <div class="row">      
            <div class="col-md-12">
              <div class="section-title" style="border-bottom: 0px;">
                <h2 class="title">SHOP BY CATEGORY</h2>
              </div>
            </div>
     
            <div class="col-md-12">
              <div class="section-white">
                <div class="all_category">
                  <div class="all_category-inner">
                    
                      <div class="all_categor-box">
                        <div class="cat-box">
                          <a href="{{ url('products/'.encrypt(2)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat1.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Men
                              </div>
                          </div>
                        </a>
                        <a href="{{ url('products/'.encrypt(1)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat2.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Women
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                 
                    
                      <div class="all_categor-box">
                        <div class="cat-box">
                          <a href="{{ url('products/'.encrypt(1)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat3.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Mobile Accesories
                              </div>
                          </div>
                        </a>
                        <a href="{{ url('products/'.encrypt(1).'/'.encrypt(499)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat4.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Women's Bags
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                   
                      <div class="all_categor-box">
                        <div class="cat-box">
                          <a href="{{ url('products/'.encrypt(2).'/'.encrypt(508)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat5.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Men's Shoes
                              </div>
                          </div>
                        </a>
                        <a href="{{ url('products/'.encrypt(232)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat6.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Beauty
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                    
                      <div class="all_categor-box" id="web-b">
                        <div class="cat-box">
                          <a href="{{ url('products/'.encrypt(510)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat7.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Kids
                              </div>
                          </div>
                        </a>
                        <a href="{{ url('products/'.encrypt(2).'/'.encrypt(509)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat8.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Men's Watch
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                   
                   
                      <div class="all_categor-box" id="web-b">
                        <div class="cat-box">
                           <a href="{{ url('products/'.encrypt(1).'/'.encrypt(500)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat9.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Women's Shoes
                              </div>
                          </div>
                        </a>
                       <a href="{{ url('products/'.encrypt(516)) }}">

                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat10.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Lifestyle
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                   
                      <div class="all_categor-box" id="web-b">
                        <div class="cat-box">
                           <a href="#">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat11.png">
                              </div>
                              <div class="cat-box-t-desc">
                               Accessories
                              </div>
                          </div>
                        </a>
                         <a href="{{ url('products/'.encrypt(323).'/'.encrypt(524)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat12.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Makeup
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                 
               
                      <div class="all_categor-box" id="web-b">
                        <div class="cat-box">
                           <a href="{{ url('products/'.encrypt(677)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat14.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Electronics
                              </div>
                          </div>
                        </a>
                         <a href="{{ url('products/'.encrypt(2).'/'.encrypt(507).'/'.encrypt(664)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat15.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Sunglasses
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                 
                      <div class="all_categor-box" id="web-b">
                        <div class="cat-box">
                           <a href="{{ url('products/'.encrypt(1).'/'.encrypt(500)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat16.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Women's Shoes
                              </div>
                          </div>
                        </a>
                         <a href="{{ url('products/'.encrypt(516).'/'.encrypt(517)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat17.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Home Appliances
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                  
                      <div class="all_categor-box" id="web-b">
                        <div class="cat-box">
                           <a href="{{ url('products/'.encrypt(516).'/'.encrypt(517)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat18.png">
                              </div>
                              <div class="cat-box-t-desc">
                               Home Appliances
                              </div>
                          </div>
                        </a>
                         <a href="{{ url('products/'.encrypt(516).'/'.encrypt(521)) }}">
                          <div class="cat-box-t">
                              <div class="cat-box-t-img">
                                 <img src="/frontend/img/cat19.png">
                              </div>
                              <div class="cat-box-t-desc">
                                Medical Supplies
                              </div>
                          </div>
                        </a>
                        </div>
                      </div>
                  
                    
                  </div>
                </div>
              </div>
            </div>
          
      </div>
  </div>
<!-- section End -->




<!-- -------------------------------------Flash Sale products------------------------------------ -->
<!-- section -->
  <div class="container section-white p-md top-cat">
        <div class="row">
              
              <div class="col-md-12">
                <div class="section-title">
                  <img src="/frontend/img/flashdeal.png" style="padding: 0 5px; width:150px;">

                    <div class="pull-right">
                        <a href="/flash-deal">show more</a>
                    </div>
                </div>
              </div>
              <div class="col-md-12">

                <div class="flash">
                    <ul class="flash_content">
                      @if(!empty($flash_sale))
                      @foreach($flash_sale->take(6) as $p)
                        <li>
                            <a href="{{url('product-detail/'.$p->slug) }}">
                                <div class="flash-t">
                                    <div class="off-a">
                                      <div class="off-a-c">
                                        <div class="off-t">
                                          <span>@if(!empty($p->promotion_discount)){{$p->promotion_discount}}%@else{{round((($p->price - $p->discount_price)/($p->price)) * 100) }}%@endif</span>
                                          <span>OFF</span>
                                        </div>
                                      </div>
                                    </div>
                                    <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}" class="img-fluid">
                                </div>
                                <div class="flash-b">
                                    <div class="flash-b-t">
                                        <span>Rs.@if(!empty($p->promotion_discount)){{$p->price - ($p->price * $p->promotion_discount)/ 100}}@else{{$p->discount_price}}@endif</span>
                                    </div>
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
                                        
                                      <span class="progress-bar" style="width: {{rand(40,90)}}%"></span>
                                      <span class="sold-pro">{{rand(10,20)}} Products Sold</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                      @endforeach
                      @endif
                    </ul>
                </div>   
             </div>
        </div>
  </div>

<!-- section End -->


<!-- section -->  
  <section class="section p-t-n">
      <div class="container section-white p-md top-cat">
        <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h2 class="title"> FEATURED SELLER</h2>
                </div>
              </div>             
              <div class="col-md-12 col-sm-6 section-title" style="margin:0;">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="square-banner">
                      <div style="display:flex; align-items: center; justify-content:center">
                            
                        <div id="myCarousel-s" class="carousel slide" data-ride="carousel" style="height:auto; ">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel-s" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel-s" data-slide-to="1"></li>
                            <li data-target="#myCarousel-s" data-slide-to="2"></li>
                            <li data-target="#myCarousel-s" data-slide-to="3"></li>
                            <li data-target="#myCarousel-s" data-slide-to="4"></li>
                            <li data-target="#myCarousel-s" data-slide-to="5"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="item active" style="height:auto;">
                              <img src="/frontend/img/banner/desktop/zmall-sellerbanner-1.webp" alt="" style="width:100%;">
                            </div>
                            <div class="item" style="height:auto;">
                              <img src="/frontend/img/banner/desktop/zmall-sellerbanner-2.webp" alt="" style="width:100%;">
                            </div>
                          
                            <div class="item" style="height:auto;">
                              <img src="/frontend/img/banner/desktop/zmall-sellerbanner-3u.webp" alt="" style="width:100%;">
                            </div>
                            <div class="item" style="height:auto;">
                              <img src="/frontend/img/banner/desktop/zmall-sellerbanner-4.webp" alt="" style="width:100%;">
                            </div>
                            <div class="item" style="height:auto;">
                              <img src="/frontend/img/banner/desktop/zmall-sellerbanner-5.webp" alt="" style="width:100%;">
                            </div>
                            <div class="item" style="height:auto;">
                              <img src="/frontend/img/banner/desktop/zmall-sellerbanner-6.webp" alt="" style="width:100%;">
                            </div>
                           
                          </div>
                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel-s" data-slide="prev">
                            <!--<i class="fa fa-chevron-left" aria-hidden="true"></i>-->
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel-s" data-slide="next">
                            <!--<i class="fa fa-chevron-right" aria-hidden="true"></i>-->
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="features-m">
                    <div class="col-sm-2">
                       <div class="features">
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/210612091734IMG-20201020-WA0022.jpg">
                           </div>
                           <a href="/store/451">Ayra</a>
                         </div>
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/210622121449mono new final.jpg">
                           </div>
                           <a href="/store/436">WT TRADERS GRW</a>
                         </div>
                       </div>
                    </div>
                    <div class="col-sm-2">
                       <div class="features">
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/210612105719LOGO GAME.png">
                           </div>
                           <a href="/store/487">Skipper</a>
                         </div>
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/210625120902Logo-01.jpg">
                           </div>
                           <a href="/store/360">Jewellery By Ayat Naz</a>
                         </div>
                       </div>
                    </div>
                    <div class="col-sm-2">
                       <div class="features">
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/210716050617inbound802703470788754293.jpg">
                           </div>
                           <a href="/store/854">1-Link Traders</a>
                         </div>
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/logoDefault.webp">
                           </div>
                           <a href="/store/364">Toukry</a>
                         </div>
                       </div>
                    </div>
                    <div class="col-sm-2">
                       <div class="features">
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/logo/zmalllogo-b.png">
                           </div>
                           <a href="/store/132">Zmall Store</a>
                         </div>
                         <div class="features-inner">
                           <div class="feature-img">
                             <img src="https://zmall.pk/frontend/storage/uploads/logoDefault.webp">
                           </div>
                           <a href="/store/530">Grace&Glory</a>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
  </section>

<!-- section End -->  
<!-- section --> 
<div class="container section-white p-md top-cat">
      <div class="row"> 
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title" style="padding-bottom: 10px; border-bottom: 3px solid #fe9126;">New Arrival</h2>
                <div class="pull-right">
                  <a href="/products">view all</a>
                  </div>
              </div>
            </div>
            <div class="col-md-12">
                
              @if(!empty($new_arrival))
              @foreach($new_arrival->slice(19)->take(6) as $index => $p)
             
                <div class="col-sm-2 col-md-2 col-xs-2">
                  <div class="i_thumb">
                    <a href="{{url('product-detail/'.$p->slug) }}">
                      <div class="i_thumb-content">
                        <div class="i_thumb_t">
                          <div class="i_thumb_img">
                            <img src="{{ asset('https://zmall.pk/frontend/storage/uploads/'.$p->images) }}" class="img-fluid">
                          </div>
                        </div>
                        <div class="i_thumb_b">
                          <div class="i_thumb_title">
                            <span>{{ substr($p->title,0,15) }}...</span>
                          </div>
                          <?php $storeDetail = storeDetail::where("owner_id", $p->added_by)->first(); ?>
                          <div class="i_thumb_store">
                            @if(!empty($storeDetail))
                            <a href="{{ asset('store/'.$storeDetail->owner_id)}}">{{substr($storeDetail->store_name,0,15) }}</a>@else <a href="javascript:void();">Zmall</a>@endif
                          </div>
                          <div class="i_thumb_price">
                            @if(!empty($p->promotion_discount))
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
                            @endif
                          </div>
                          <div class="i_thumb_ratings">
                            <div class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                             </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                
              @endforeach
              @endif 
              
           </div>
          
      </div>
  </div> 
<!-- section End --> 




  <div class="container section-white p-md top-cat">
      <div class="row"> 
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title" style="padding-bottom: 10px; border-bottom: 3px solid #fe9126;">Daily Deals</h2>
                <div class="pull-right">
                  <a href="/Daily-Deals">view all</a>
                  </div>
              </div>
            </div>
            <div class="col-md-12">
                
              @if(!empty($latest_products))
              @foreach($latest_products->slice(10)->take(60) as $index => $p)
             
                <div class="col-sm-2 col-md-2 col-xs-2 blogBox moreBox" style="display:none;">
                  <div class="i_thumb">
                    <a href="{{url('product-detail/'.$p->slug) }}">
                      <div class="i_thumb-content">
                        <div class="i_thumb_t">
                          <div class="i_thumb_img">
                            <img src="{{ asset('https://zmall.pk/frontend/storage/uploads/'.$p->images) }}" class="img-fluid">
                          </div>
                        </div>
                        <div class="i_thumb_b">
                          <div class="i_thumb_title">
                            <span>{{ substr($p->title,0,15) }}...</span>
                          </div>
                          <?php $storeDetail = storeDetail::where("owner_id", $p->added_by)->first(); ?>
                          <div class="i_thumb_store">
                            @if(!empty($storeDetail))
                            <a href="{{ asset('store/'.$storeDetail->owner_id)}}">{{substr($storeDetail->store_name,0,15) }}</a>@else <a href="javascript:void();">Zmall</a>@endif
                          </div>
                          <div class="i_thumb_price">
                            @if(!empty($p->promotion_discount))
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
                            @endif
                            
                          </div>
                          <div class="i_thumb_ratings">
                            <div class="review-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                             </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                
              @endforeach
              @endif 
              
           </div>
           <div id="loadMore" style="display: block;">
                <a href="#">Load More</a>
            </div>
            <div id="viewall" class="fshow" style="display: none;">
                <a href="/Daily-Deals">View All</a>
            </div>
      </div>
  </div>


  

<div class="modal fade" id="mypopbanner">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modaltent" style="width: 100%; margin: 10% auto; box-shadow: none;">
                <button type="button" class="close popbtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <a href="/products"><img src="https://zmall.pk/frontend/img/Hush.webp" class="img-fluid"></a>
        </div>
    </div>
</div>

<div class="lowethird_banner" id="lowerthird" style="display:block;">
  <div class="lower_inner">
        <span onclick="hidelower();">×</span>
       <img src="https://zmall.pk/frontend/img/banner/desktop/zmall-lowerthird.png" class="img-fluid">
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>

<script type="text/javascript">
  
window.addEventListener('load', (event) => {
    $(".moreBox").slice(0, 12).show();
    if ($(".blogBox:hidden").length != 0) {
      $("#loadMore").show();
    }   
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".moreBox:hidden").slice(0, 12).slideDown();
      if ($(".moreBox:hidden").length == 0) {
        $("#loadMore").fadeOut('slow');
        $("#viewall").show();
      }
    });
  });
</script>

<script type="text/javascript">
  function hidelower(){
  var a= document.getElementById('lowerthird');
  if (a.style.display==="block") {
    a.style.display="none";
  }
    else
    {
      a.style.display="block";
    }
  }
</script>
<script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav:true,
        dots:false,
        
        responsive:{
            0:{
                items:3
            },
            600:{
                items:5
            },
            1000:{
                items:9
            }
        }
        })
</script>
<script type="text/javascript">
   $(document).ready(function(){
      $('#mypopbanner').modal('show');
    });
</script>
<script src="{{ asset('frontend/main/js/jquery.min.js') }}"></script> 
@endsection