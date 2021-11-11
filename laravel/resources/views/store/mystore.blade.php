@section('content')
@include('layouts.second-nav')
@extends('layouts.app')
<?php use App\storeDetail; ?>
<style type="text/css">
@media (min-width: 1200px){
.container {
    width: 1280px;
}
}
.store-menu {
    display: flex;
    background: #fff;
    margin-top: 5px;
    padding: 10px 0px;
}
.profile-pic{
    width: 86px;
    height: 86px;
    object-fit: contain;
    border-radius: 0px;
}
    .product-card-wrap{
        padding-bottom: 150px;
    }
      .title-l h1{
    font-weight: 700;
      font-size: 1.7rem;
      line-height: 1.5em;
      color: rgba(49, 53, 59, 0.96);
      text-decoration: initial;
      white-space: normal;
      word-break: break-word;
      margin-left: 20px;
  }
  .profile-title-m ul li span{
    display: block;
    position: relative;
    font-weight: 400;
    font-size: 1.3rem;
    line-height: 18px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 0px;
  }
  .profile-title-b-t button{
    display: inline-block;
    position: relative;
    font-family: "Nunito Sans", sans-serif;
    font-weight: 700;
    font-size: 1.257143rem;
    line-height: 26px;
    text-indent: initial;
    height: auto;
    width: auto;
    color: rgb(255, 255, 255);
    cursor: pointer;
    padding: 0px 16px;
    background-position: center center;
    background-color: #fe9126;
    border-width: initial;
    border-style: none;
    border-color: initial;
    border-image: initial;
    border-radius: 8px;
    outline: none;
    transition: background 0.8s ease 0s;
    margin-left: 5px;
  }
  .profile-title-b-b button{
    display: inline-block;
      position: relative;
      padding: 0px 16px;
      font-family: "Nunito Sans", sans-serif;
      font-weight: 700;
      font-size: 1.257143rem;
      line-height: 26px;
      text-indent: initial;
      height: auto;
      width: auto;
      color: var(--color-text-high,rgba(49,53,59,0.96));
      background: radial-gradient(circle, transparent 1%, transparent 1%) center center / 15000% transparent;
      border: 1px solid var(--N75,#E5E7E9);
      border-radius: 8px;
      outline: none;
      transition: background 0.8s ease 0s;
      cursor: pointer;
      margin-left: 10px;
  }
  .profile-title-b{
    display: flex;
    margin-top: 10px;
    
  }
  .cover-b-m p{
    margin: 0px;
    margin-bottom: 5px;
    font-weight: 500;
    font-size: 1.5rem;
    color: var(--color-text-high,rgba(49,53,59,0.76));
  }
  .cover-b-m h2{
    font-weight: 700;
    margin-left: 5px;
      font-size: 2.8rem;
      line-height: 30px;
      font-family: "Nunito Sans", -apple-system, sans-serif;
      color: var(--color-text-high,rgba(49,53,59,0.90));
      text-decoration: initial;
  }
  .cover-b-m2 p{
    margin: 0px;
    margin-bottom: 5px;
    font-weight: 500;
    font-size: 1.5rem;
    color: var(--color-text-high,rgba(49,53,59,0.76));
  }
  .rating-detail h2{
    font-weight: 700;
      font-size: 2.3rem;
      line-height: 30px;
      color: var(--color-text-high,rgba(49,53,59,0.90));
      text-decoration: initial;
  }
  .rating-detail b{
    position: relative;
      font-weight: 800;
      font-family: "Nunito Sans", -apple-system, sans-serif;
      font-size: 1.457143rem;
      color: var(--color-text-low,rgba(49,53,59,0.68));
      text-decoration: initial;
      margin: 0px 0px 0px 8px;
      display: inline-block;
      vertical-align: middle;
      line-height: 2.14286rem;
  }
  .store-det a{
    text-decoration:none;
    display: block;
      position: relative;
      font-weight: 800;
      font-family: "Nunito Sans", -apple-system, sans-serif;
      font-size: 1.257143rem;
      line-height: 18px;
      text-decoration: initial;
      color: #fe9126;
      cursor: pointer;
  }
  .rating-detail{
    display: flex;
    align-items: initial;
  }
  .card-title a{
    text-decoration: none;
      font-size: 1.56rem;
      color: rgba(49, 53, 59, 0.86);
      text-overflow: ellipsis;
      overflow: hidden;
      margin-top: 0px;
  }
  .card-des p{
    margin: 0px;
    line-height: 18px;
    color: rgba(49, 53, 59, 0.96);
  }
  .card-des{
    max-width: 164px;
    max-height: 64px;
    overflow: hidden;
    margin: 0px 0px;
  }
  .product-card{
    display: block;
      position: relative;
      overflow: hidden;
      background-color: var(--color-card,#FFFFFF);
      padding: 0px;
      height: 264px;
      width: 180px;
      border-radius: 9px;
      box-shadow: rgb(49 53 59 / 12%) 0px 1px 6px 0px;
      margin: 10px;
  }
  .card-img img{
    width: 164px;
    height: 164px;
    object-fit: cover;
  }
  .modal-dialog {
    margin: auto !important;
}
 .modal {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    outline: 0;
}
.modal-content {
    width: auto;
    margin: auto;
}
.mod-desc b{
    display: block;
    position: relative;
    font-weight: 600;
    font-family: "Nunito Sans", -apple-system, sans-serif;
    font-size: 1.257143rem;
    line-height: 18px;
    color: var(--color-text-disabled,rgba(49,53,59,0.52));
    text-decoration: initial;
    margin: 0px 0px 5px;
  }
  .mod-desc{
    max-width: 80%;
    margin-top: 20px;
  }
  .mod-desc p{
    font-weight: 400;
    font-size: 1.1rem;
    line-height: 20px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 0px;
    white-space: normal;
    word-break: break-word;
  }
  .mod-address b{
    display: block;
    position: relative;
    font-weight: 600;
    font-family: "Nunito Sans", -apple-system, sans-serif;
    font-size: 1.257143rem;
    line-height: 18px;
    color: var(--color-text-disabled,rgba(49,53,59,0.52));
    text-decoration: initial;
    margin: 15px 0px 5px;
  }
  .mod-address{
    max-width: 80%;
    margin-top: 50px;
  }
  .mod-address p{
    font-weight: 400;
    font-size: 1.1rem;
    line-height: 20px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 0px;
    white-space: normal;
    word-break: break-word;
  }

  .mod-open b{
    display: block;
    position: relative;
    font-weight: 600;
    font-family: "Nunito Sans", -apple-system, sans-serif;
    font-size: 1.257143rem;
    line-height: 18px;
    color: var(--color-text-disabled,rgba(49,53,59,0.52));
    text-decoration: initial;
    margin: 10px 0px 5px;
  }
  .mod-open{
    max-width: 80%;
    margin-top: 50px;
  }
  .mod-open p{
    font-weight: 400;
    font-size: 1.1rem;
    line-height: 20px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 0px;
    white-space: normal;
    word-break: break-word;
  }
  .sdesc-inner b{
    display: block;
    position: relative;
    font-weight: 600;
    font-family: "Nunito Sans", -apple-system, sans-serif;
    font-size: 1rem;
    line-height: 20px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 0px 0px 2px;
    padding: 0px 10px;
  }
  .sdesc-inner p{
    display: block;
    position: relative;
    font-weight: 400;
    font-family: "Nunito Sans", -apple-system, sans-serif;
    font-size: 1rem;
    line-height: 20px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 0px 0px 2px;
    padding: 0px 10px;
  }
  .ship-service h3{
    display: block;
    position: relative;
    font-weight: 600;
    font-family: "Nunito Sans", -apple-system, sans-serif;
    font-size: 1.4rem;
    line-height: 22px;
    color: var(--color-text-high,rgba(49,53,59,0.96));
    text-decoration: initial;
    margin: 10px 0px 12px;
  }

.modal-lg {
    width: auto;
}
@media only screen and (max-width: 800px)
{
   
    .star-rate {
    margin-left: 0px;
    }
   
    .container{
        margin-top: 0px !important;
    }
    .product-card-wrap {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    margin-left: 0px;
    }
    .modal-content{
        overflow: scroll;
    }
    .mod-cont-inner{
        display: flex;
        flex-direction: column;
    }
    .mod-cont-l {
    max-width: 100%;
}
}
.pro-card{
     background: #fff;
    flex-basis: 20%;
    overflow: hidden;
    height: 400px;
    max-width: 20%;
    padding: 10px;
}
.info-name {
    text-transform: capitalize;
    max-width: 182px;
    max-height: 20px;
    overflow:hidden;
}
.pro-card a{
  color: #282c3f;
}
.pro-card a:hover{
  color: #282c3f;
}
  .info__name {
    font-size: 14px;
    text-align: left;
    margin-bottom: 4px;
    color: #282c3f;
    margin: 0 auto 2px;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    line-height: 1.2;
    padding-top: 8px;
}
.amount_discount{
  display: flex;
}
.amount_old{
  margin: 0;
    font-size: 12px;
    text-decoration: line-through;
    color: #a5a7ae;
    padding: 0 4px 0 0;
    overflow: hidden;
    white-space: nowrap;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
}
.amount_perc{
    margin: 0;
    font-size: 12px;
    color: #bf221c;
    white-space: nowrap;
    padding: 0 15px 0 0;
}
.pro-rate{
  display: flex;
    font-size: 10px;
    color: #282c3f;
    line-height: 1.4;
  }
.rate-n{
    font-size: 10px;
    color: #282c3f;
    line-height: 1.4;
  }
.rate-i{    
    color: orange;
}
.review-i{
    color: #a5a7ae;
    margin-left: 4px;
  }
.info-price{
  display: flex;
  flex-direction: column;
}
.amount_discount{
  display: flex;
}
.amount_original{
    padding: 0;
    margin: 0;
    font-size: 12px;
    color: #282c3f;
    font-weight: 700;
}
.pro-ship a{
      color: rgba(40, 44, 63, 1.0);
    font-size: 12px;
    letter-spacing: 0px;
}
.pro-ship a:hover{
      color: #fe9126;
}
.pro-ship small{
      color: rgba(165, 167, 174, 1.0);
    font-size: 12px;
    letter-spacing: 0px;
}
.pro-des{
  padding: 5px;
}
.pro-img{
  margin-bottom: 4px;
 border: 1px solid #e4e4e6;
  position:relative;
  width:100%;
  font-size:0;
  background:#fff;
  overflow: hidden;
  padding-bottom:140%
}
.pro-img img{
  position: absolute; 
  width: 100%; height: 100%; 
  left: 0px; 
  transition-duration: 0.3s; 
  opacity: 1;
  object-fit: contain;
}
.pro-img img:hover{
  transform: scale(1.05);
}
.top-head{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.top-head-l{
  display: inline-block;
padding-left: 20px;
}
.top-head-l span{
    font-size: 14px;
    color: #282c3f;
    margin-right: 3px;
}
.top-head-r{
  display: inline-block;
    padding-bottom: 16px;
}
.top-head-r select{
  color: #282c3f;
  border: none;
  outline: none;
  background: none;
    font-size: 18px;
    padding: 12px 4px 0 0;
    cursor: pointer;
}
.top-head-r span{
  font-size: 14px;
    color: #a5a7ae;
    margin-right: 3px;
}
.filter-head{
  display: flex;
  justify-content: space-between;
  padding-right: 5px;
    font-size: 12px;
    color: #525564;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.filter-head a{
  color: #fe9126;
  font-weight: normal;
  padding: 0px;
}
.filter-group{
  padding-right: 6px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    color: #525564;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    letter-spacing: 1px;

}
.expand_caret {
    transform: scale(1.6);
    margin-left: 8px;
    margin-top: -4px;
}
a[aria-expanded='false'] > .expand_caret {
    transform: scale(1.6) rotate(180deg);
}
.cos-da{
  text-decoration: none;
  color: #525564;
  cursor: pointer;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    color: #525564;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    letter-spacing: 1px;
}
.filter-unit{
  display: flex;
  flex-direction: column;

}
.filter-unit label{
  cursor: pointer;
  font-size: 12px;
  font-weight: normal;
}

.filter{
  padding: 0px 20px;
}
.color-filter{
  display: flex;
  justify-content: start;
  align-items: center;
  cursor: pointer;
}
.colr{
  height: 30px;
  width: 30px;
  margin: 10px 0px;
}
.color-filter span{
  margin-left: 10px;
}
.prange{
  margin-top: 5px;
}
.prange b{
  font-weight: normal;
}
.prange input{
  width: 100%;
  height: 20px;
  font-size: 12px;
  background: #ddd;
  outline: none;
  border: 1px solid #ddd;
  margin-top: 5px;
}
.mobi{
  display: none;
}
.fil_active{
    color: #fe9126 !important;
}
.active{
    border-bottom: 2px solid #fe9126;
    color: #fe9126 !important;
}
.store-menu-wrap{
    margin-bottom: 20px;
}
@media only screen and (max-width: 600px) {
  .filter{
    position: fixed;
    top: 0%;
    left: 0%;
    z-index: 1;
    background: #fff;
    width: 100%;
    height: 100%;
    overflow: scroll;
    padding: 20px 20px;
  }
  #filtermobi{
    display: none;
  }
  .container{
    margin-top: 0px !important;
  }
  .pro-card {
    background: #fff;
    flex-basis: 20%;
    overflow: hidden;
    height: 350px;
    width: 50%;
    max-width: 50%;
    padding: 0px 15px;
    float: left;
}
.desk{
  display: none;
}
.mobi{
  display: block !important;
  font-size: 18px !important;
  cursor: pointer;
  color: #282c3f !important;
}
.pro-img {
    margin-bottom: 4px;
    border: 1px solid #e4e4e6;
    position: relative;
    width: 100%;
    height: 220px;
    font-size: 0;
    background: #fff;
    overflow: hidden;
    padding-bottom: 140%;
}
.info-name {
    text-transform: capitalize;
    max-width: 182px;
    max-height: 20px;
    overflow: hidden;
}

}
</style>
<div class="container" style="margin-top: 100px;">  
        <div class="row">
            <div class="col-sm-12">
                <div class="cover">
                    <div class="cover-photo">
                        @if(!empty($storeDetail->img))
                        <img src='{{ asset("/public/frontend/storage/uploads/$storeDetail->img") }}' alt="img">
                        @else
                        <img src='{{ asset("/public/frontend/storage/uploads/coverDefault.webp") }}' alt="img">
                        @endif
                    </div>
                    <div class="cover-b">
                        <div class="row">
                            <div class="col-sm-1">
                                <div class="cover-b-l-wrap">
                                    <div class="cover-b-l">
                                        <div class="profile-photo">
                                            
                                            <img class="profile-pic" src='{{ asset("/public/frontend/storage/uploads/$storeDetail->logo") }}' alt="{{$storeDetail->store_name}}">
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    <div class="col-sm-5 cover-b-r">
                                        <div class="profile-title">
                                            <div class="profile-title-t">
                                                <div class="title-l">
                                                    <h1>{{$storeDetail->store_name}}</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profile-title-m">
                                            <ul>
                                                <!-- --------If Online--------- -->
                                                <li><span class="online">Online</span></li>
                                                <!-- --------------------------- -->
                                                <!-- <li><span>Reply Within 3 minute</span></li> -->
                                                <li><span><i class="fa fa-map-marker"></i> {{$storeDetail->city}} {{$storeDetail->state}}</span></li>
                                                @if(!empty($followers))
                                                <li><span style="font-weight: 700;">{{$followers}} Followers</span></li>
                                                @else
                                                <li><span style="font-weight: 700;">0 Follower</span></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="profile-title-b">
                                            <div class="profile-title-b-t">
                                                @if(!empty($iffollowing))
                                                <button style="background: #fff; color:#fe9126; border: 1px solid #fe9126;">Following </button>
                                                @else
                                                <form action="{{url('follow-store/'.$storeDetail->owner_id) }}" method="POST">
                                                <button name="follow_store">Follow</button>
                                                </form>
                                                @endif
                                                <!-- <button>Chat Seller</button> -->
                                            </div>
                                            <div class="profile-title-b-b">
                                                <button type="button" data-toggle="modal" data-target=".store-info_m">Store Info</button>
                                                <!-- <button><i class="fa fa-stack-exchange"></i></button> -->
                                            </div>
                                        </div>
                                    </div>
                                
                            <div class="col-sm-2" style="padding-left: 5px;">
                                <div class="cover-b-m-wrap">
                                    <div class="cover-b-m">
                                        <p>Product Sold</p>
                                        <h2>@if(!empty($itemSold)) {{$itemSold}} @else 0 @endif<small style="font-weight: 300;"> Items</small></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="cover-b-r-wrap">
                                    <div class="cover-b-m2">
                                        <div class="pro-quality">
                                            <p>Product Quality</p>
                                        </div>
                                        <div class="rating-detail">
                                            <h2>5.0</h2>
                                            <div class="star-rate">
                                                <span class="fa fa-star fil_active"></span>
                                                    <span class="fa fa-star fil_active"></span>
                                                    <span class="fa fa-star fil_active"></span>
                                                    <span class="fa fa-star fil_active"></span>
                                                    <span class="fa fa-star fil_active"></span>
                                            </div>
                                            <b>(@if(!empty($itemSold)) {{$itemSold}} @else 0 @endif Reviews)</b>
                                        </div>
                                        
                                        <div class="store-det">
                                            <a type="button" data-toggle="modal" data-target=".store-stats_m" style="color: #fe9126;">Check store statistic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="store-menu-wrap">
                    <ul class="store-menu">
                        <li><a href="javascript:void(0)" class="active cat-list" id="m_all" onclick="show1()">All Products</a></li>
                        <li><a href="javascript:void(0)" id="m_men" class="cat-list" class="cat-list" onclick="show2()">Men</a></li>
                        <li><a href="javascript:void(0)" id="m_women" class="cat-list" onclick="show3()">Women</a></li>
                        <li><a href="javascript:void(0)" id="m_kid" class="cat-list" onclick="show4()">Kids</a></li>
                        <li><a href="javascript:void(0)" id="m_lifestyle" class="cat-list" onclick="show5()">Lifestyle</a></li>
                        <li><a href="javascript:void(0)" id="m_beauty" class="cat-list" onclick="show6()">Beauty</a></li>
                        <li><a href="javascript:void(0)" id="m_electronics" class="cat-list" onclick="show7()">Electronics</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div class="container">
  <div class="row">
    <div class="product-grid" id="all">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{  $p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
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

<!-- ----------------------------Men--------------------------------- -->
<div class="product-grid" id="men">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
              @if($p->category == 2)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{ $p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endif
              @endforeach   
          @endif
        </div>
</div>


<!-- ----------------------------Women--------------------------------- -->
<div class="product-grid" style="display:none;" id="women">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
              @if($p->category == 1)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{ $p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endif
              @endforeach   
          @endif
        </div>
</div>


    <!-- ----------------------------Kids--------------------------------- -->
  <div class="product-grid" style="display: none;" id="kid">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
              @if($p->category == 510)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{$p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endif
              @endforeach   
          @endif
        </div>
</div>


    <!-- ----------------------------Lifestyle--------------------------------- -->
  <div class="product-grid" style="display: none;" id="lifestyle">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
              @if($p->category == 516)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{ $p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endif
              @endforeach   
          @endif
        </div>
</div>

        <!-- ----------------------------Beauty--------------------------------- -->
    <div class="product-grid" style="display: none;" id="beauty">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
              @if($p->category == 323)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{$p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endif
              @endforeach   
          @endif
        </div>
</div>

        <!-- ----------------------------Electronics--------------------------------- -->
    <div class="product-grid" style="display: none;" id="electronics">
        <div class="product-grid-inner">
          @if($product->count() > 0)
              @foreach($product as $index => $p)
              @if($p->category == 745)
          <div class="pro-card col-sm-2">
            <a href="{{url('product-detail/'.$p->slug)}}">
            <div class="pro-card-inner">
              <div class="pro-img">
                <div class="img-inner">
                  <img src="{{ asset('/frontend/storage/uploads/'.$p->images) }}">
                </div>
              </div>
              <div class="pro-des">
                <div class="pro-des-inner">
                  <div class="pro-t">
                    <div class="info-name">
                      {{ substr($p->title,0,20) }}...
                    </div>
                    <div class="info-price">
                        <div class="amount_original">
                          @if(!empty($p->promotion_discount))
                          {{$p->price - ($p->price * $p->promotion_discount)/ 100}}
                          </div>
                          <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{$p->promotion_discount}}% Off
                          </div>
                        </div>
                          @else
                          @if(!empty($p->discount_price))
                    Rs {{ $p->discount_price}}
                    @else Rs {{ $p->price }}
                    @endif
                        </div>
                        @if(!empty($p->discount_price))
                        <div class="amount_discount">
                          <div class="amount_old">
                            RS {{$p->price}}
                          </div>
                          <div class="amount_perc">
                            {{round((($p->price - $p->discount_price)/($p->price)) * 100) }}% Off
                          </div>
                        </div>
                        @endif
                        @endif
                    </div>
                  </div>
                  <div class="pro-b"> 
                    <div class="pro-ship">
                      <?php $store = storeDetail::where('owner_id',$p->added_by)->first(); ?>
                      <small>Ships from </small>@if(!empty($store)) <a href="{{asset('store/'.$store->owner_id)}}">{{$store->store_name}}</a>@endif
                    </div>
                    <div class="pro-rate">
                      <div class="rate-n">5</div> 
                      <div class="rate-i"><span class="fa fa-star checked"></span></div>  
                      <div class="review-i">(3)</div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          @endif
              @endforeach   
          @endif
        </div>
</div>
</div>
</div>
    <!-- ---------------Store Info Modal--------------- -->
  <div class="modal fade store-info_m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="cutom-content">
                <div class="mod-header">
                    <h2>Store Info</h2>
                </div>
                <div class="mod-cont">
                    <div class="mod-cont-inner">
                        <div class="mod-cont-l">
                            <div class="mod-desc">
                                <b>Description</b>
                                <p>{!!$storeDetail->description!!}</p>
                            </div>
                            <div class="mod-address">
                                <b>Store Address</b>
                                <p>{{$storeDetail->address}}</p>
                            </div>
                            <div class="mod-open">
                                <b>Open since</b>
                                <p>{{$storeDetail->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                        <div class="mod-cont-r">
                            <div class="ship-service">
                                <h3>Services</h3>
                                <div class="ship-services-inner">


                                    <div class="ship-box">
                                        <div class="ship-box-inner">
                                            <div class="ship-img">
                                                <img src='{{ asset("/frontend/store/img/icons/maincat.png")}}'>
                                            </div>
                                            <div class="ship-desc">
                                                <div class="sdesc-inner">
                                                    <b>Main Category</b>
                                                    <p>{{$storeDetail->category}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ship-box">
                                        <div class="ship-box-inner">
                                            <div class="ship-img">
                                                <img src='{{ asset("/frontend/store/img/icons/joinedon.png")}}'>
                                            </div>
                                            <div class="ship-desc">
                                                <div class="sdesc-inner">
                                                    <b>Joined on</b>
                                                    <p>{{$storeDetail->created_at}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="ship-services-inner">


                                    <div class="ship-box">
                                        <div class="ship-box-inner">
                                            <div class="ship-img">
                                                <img src='{{ asset("/frontend/store/img/icons/shipment.png")}}'>
                                            </div>
                                            <div class="ship-desc">
                                                <div class="sdesc-inner">
                                                    <b>On-Time Shipment</b>
                                                    <p>91%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ship-box">
                                        <div class="ship-box-inner">
                                            <div class="ship-img">
                                                <img src='{{ asset("/frontend/store/img/icons/cancelrate.png")}}'>
                                            </div>
                                            <div class="ship-desc">
                                                <div class="sdesc-inner">
                                                    <b>Cancellation Rate</b>
                                                    <p>3%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


        <!-- ---------------Store Statistics Modal--------------- -->
  <div class="modal mod2 fade store-stats_m" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style=" max-width: 700px; margin-left: auto; margin-right: auto;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="cutom-content">
                <div class="mod-header">
                    <h2>Store Statistic</h2>
                </div>
                <div class="mod-cont">
                    <div class="mod-cont-inner" style="display:flex; justify-content: space-around;">
                        <div class="mod-cont-l">
                            <div class="mod-desc">
                                <b>Product Quality</b>
                            </div>
                            <style type="text/css">
                                
                            </style>
                            <div class="mod-rate">
                                <div class="mod-overall-rate">
                                    <span>5.0</span>
                                </div>
                                <div class="mod-rate-star">
                                    <div class="mod-star">
                                        <div class="star-rate">
                                                <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                                    <span class="fa fa-star active"></span>
                                            </div>
                                    </div>
                                    <div class="mod-review">
                                        <small>(@if(!empty($itemSold)) {{$itemSold}} @else 0 @endif Reviews)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mod-cont-r">
                            <div class="ship-service">
                                <h3>Shipping Services</h3>
                                <div class="ship-services-inner">


                                    <div class="ship-box">
                                        <div class="ship-box-inner">
                                            <div class="ship-img">
                                                <img src='{{ asset("/frontend/store/img/blue-ex.png")}}'>
                                            </div>
                                            <div class="ship-desc">
                                                <div class="sdesc-inner">
                                                    <b>Blue-Ex</b>
                                                    <p>Normal Delivery</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ship-services-inner">
                                    <div class="ship-box">
                                        <div class="ship-box-inner">
                                            <div class="ship-img">
                                                <img src="{{ asset('/frontend/store/img/leopards.png')}}">
                                            </div>
                                            <div class="ship-desc">
                                                <div class="sdesc-inner">
                                                    <b>Leopards</b>
                                                    <p>Normal Delivery</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- <script type="text/javascript">
        $(document).ready(function(){
        $('.store-menu li a').click( function() {
            $(this).addClass('active').siblings().removeClass('active');
          });
        });
    </script> -->
    <script>
        var a= document.getElementById('all');
        var b= document.getElementById('men');
        var c= document.getElementById('women');
        var d= document.getElementById('kid');
        var e= document.getElementById('lifestyle');
        var f= document.getElementById('beauty');
        var g= document.getElementById('electronics');

        var m_a= document.getElementById('m_all');
        var m_b= document.getElementById('m_men');
        var m_c= document.getElementById('m_women');
        var m_d= document.getElementById('m_kid');
        var m_e= document.getElementById('m_lifestyle');
        var m_f= document.getElementById('m_beauty');
        var m_g= document.getElementById('m_electronics');

        function show1(){
            if (a.style.display==="none") {
                a.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";

                m_a.classList.add("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
            else{
                a.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";

                m_a.classList.add("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");

            }
        }
        function show2(){
            if (b.style.display==="none") {
                b.style.display="block";
                a.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.add("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
            else{
                b.style.display="block";
                a.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.add("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
        }
        function show3(){
            if (c.style.display==="none") {
                c.style.display="block";
                b.style.display="none";
                a.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.add("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
            else{
                c.style.display="block";
                b.style.display="none";
                a.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";

                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.add("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
        }
        function show4(){
            if (d.style.display==="none") {
                d.style.display="block";
                b.style.display="none";
                c.style.display="none";
                a.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.add("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
            else{
                d.style.display="block";
                b.style.display="none";
                c.style.display="none";
                a.style.display="none";
                e.style.display="none";
                f.style.display="none";
                g.style.display="none";

                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.add("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
        }
        function show5(){
            if (e.style.display==="none") {
                e.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                a.style.display="none";
                f.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.add("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
            else{
                e.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                a.style.display="none";
                f.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.add("active");
                m_f.classList.remove("active");
                m_g.classList.remove("active");
            }
        }
        function show6(){
            if (f.style.display==="none") {
                f.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                a.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.add("active");
                m_g.classList.remove("active");
            }
            else{
                f.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                a.style.display="none";
                g.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.add("active");
                m_g.classList.remove("active");
            }
        }
        function show7(){
            if (g.style.display==="none") {
                g.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                a.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.add("active");
            }
            else{
                g.style.display="block";
                b.style.display="none";
                c.style.display="none";
                d.style.display="none";
                e.style.display="none";
                f.style.display="none";
                a.style.display="none";
                m_a.classList.remove("active");
                m_b.classList.remove("active");
                m_c.classList.remove("active");
                m_d.classList.remove("active");
                m_e.classList.remove("active");
                m_f.classList.remove("active");
                m_g.classList.add("active");
            }
        }
    </script>

@endsection