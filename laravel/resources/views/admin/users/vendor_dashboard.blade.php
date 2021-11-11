@extends('layouts.admin')

@section('content')

<style>
  .vedorbox4,.vedorbox5,.vedorbox6,.vedorbox7,.vedorbox8,.vedorbox9
  {
    background: #fff;
    margin-top:10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    border: none;
    width: 250px;
    height: 100px; 
    transition: 0.4s;
  }
.vedorbox4:hover,.vedorbox5:hover,.vedorbox6:hover,.vedorbox7:hover,.vedorbox8:hover,.vedorbox9:hover
  {
    transform: scale(1.01);
    cursor:pointer;
  }
  .venic,.venic1, .venic2, .venic3, .venic4, .venic5, .venic6, .venic7, .venic8{
   width: 65px; 
    
   
  }
 
   .venic:hover,.venic1:hover, .venic2:hover, .venic3:hover, .venic4:hover, .venic5:hover, .venic6:hover, .venic7:hover, .venic8:hover{
    background: black;
  }
  .vendorbx_price{
    
  }
  

  .sb2-2{
  
    width: 85%;
    margin-left: 15%;
    }
    .sb2-2-3{
      
    }
  .block-links-vendor{
    padding:10px;
    margin-top: 10px;
    transition: 0.5s;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    height:90px;
  }
  .block-links-inner{
    padding: 10px;
  }
  .block-links-vendor:hover{
    transform: scale(1.01);
    cursor:pointer;
    
  }
  .btnn{
    padding: 10px 20px;
    text-transform: capitalize;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    border:none;
    color:white;
    background: #5cb85c;
    font-weight:bold;
    border: 1px solid rgba(0,0,0,0.3);
  }
   .btnn:focus{
    outline: none;
  }
  .btnn:active{
    
  }
</style>
           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Companies </a>
                        </li>
                    </ul>
                </div>
             
                 <div class="row">
                   <div class="col-md-12">
                            <div class="box-inn-sp" style="padding:10px;">
                                <div class="inn-title">
                                  <div class="row">
                                    <div class="col-md-4 col-sm-12" style="background-color: white; height: 250px; ">
                                        @if(!empty($storeDetail))
                                      <a href="#"><img style="height: 50px; width: 50px; margin-left: 100px; margin-top: 50px; margin-bottom:20px;" src='{{ asset("/frontend/storage/uploads/$storeDetail->logo") }}' /></a>
                                      @else
                                      <a href="#"><img style="height: 50px; width: 50px; margin-left: 100px; margin-top: 50px; margin-bottom:20px;" src='{{ asset("/frontend/storage/uploads/logoDefault.webp") }}' /></a>
                                      @endif
                                      <p style="margin-left: 80px;"><b>{{$GetData->first_name}} {{$GetData->last_name}}</b></p>
                                     <div class="product-rating" style="margin-left: 90px;">
                                        <i class="fa @if($avg_store_reviews == 0.5) fa-star-half-o @elseif($avg_store_reviews > 0.5) fa-star @else fa-star-o empty @endif "></i>
                                        <i class="fa @if($avg_store_reviews == 2.5) fa-star-half-o @elseif($avg_store_reviews > 2.5) fa-star @else fa-star-o empty @endif "></i>
                                        <i class="fa @if($avg_store_reviews == 3.5) fa-star-half-o @elseif($avg_store_reviews > 3.5) fa-star @else fa-star-o empty @endif"></i>
                                        <i class="fa @if($avg_store_reviews == 4.5) fa-star-half-o @elseif($avg_store_reviews > 4.5) fa-star @else fa-star-o empty @endif"></i>
                                        <i class="fa @if($avg_store_reviews == 5) fa-star-half-o @elseif($avg_store_reviews > 4.5) fa-star @else fa-star-o empty @endif"></i>
                                    </div>
                                      <ul>
                                        <li><i class="material-icons">place</i>  {{$GetData->city}}</li>
                                        <li><span  style='font-size:20px;'>&#128231;</span>  {{$GetData->email}}</li>
                                      </ul>
                                      <button type="button" class="btnn" ><i class="fa fa-envelope" style="margin-right:3px;  "></i>send Email</button>
                                      
                                      <button type="button" class="btnn" style="background:#f7f7f7; color:black;" ><i class="fa fa-times" style="color:red; margin-right:3px;"></i>Disable</button>
                                      <a type="submit" href="{{url('/admin/users/viewdashboard/'.$GetData->id)}}" class="btnn" style="background:#f7f7f7; color:black;" ></i>view dashboard</a>
                                    </div>
                                    <div class="col-md-8 col-sm-12" style="height: 250px; ">
                                        @if(!empty($storeDetail))
                                      <a href="#"><img style="height: 270px; width: 100%;" src='{{ asset("/frontend/storage/uploads/$storeDetail->img") }}' /></a>
                                      @else
                                      <a href="#"><img style="height: 270px; width: 100%;" src='{{ asset("/frontend/storage/uploads/coverDefault.webp") }}' /></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                            </div>
                   </div>
                 </div>
           
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-9" style="padding:0px;">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    
                                
                                <div class="row" style="margin:0px !important;">
                                    <div class="col-md-4 col-sm-8" style="margin:0px !important;">
                                        <h3>Products</h3>
                                         <div class="vedorbox4">
                                            <div class="venic">
                                            <i class="fa fa-cubes vendor_icon"></i>
                                            </div>
                                            <div>
                                              <p class="boxdes"><span class="vendor_bxqua">{{$total_products->count()}}</span> <br><span class="vendorbx_price">Total Products</span></p>
                                             </div>
                                        </div>
                                        <div class="vedorbox4" >
                                            <div class="venic1">
                                            <i class="fa fa-snowflake-o vendor_icon1"></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua1">{{$item_sold->count()}}</span> <br><span class="vendorbx_price">Items Sold</span></p>
                                        </div>
                                        <div class="vedorbox4" >
                                            <div class="venic2">
                                            <i class="fa fa-group vendor_icon3"></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua3">{{ $GetData->visitor_count }}</span> <br><span class="vendorbx_price">Store Visitor</span></p>
                                        </div>
                                    </div>


                                    <div class="col-md-4 col-sm-12" style="margin:0px !important;">
                                        <h3>Revenue</h3>
                                         <div class="vedorbox4">
                                            <div class="venic3" >
                                            <i class="fa fa-shopping-cart vendor_icon4"></i>
                                        </div>
                                            <p class="boxdes" ><span class="vendor_bxqua4">{{$order_processed->count()}}</span> <br><span class="vendorbx_price">Order Processed</span></p>
                                        </div>
                                        <div class="vedorbox5"  style="max-height: 150px;">
                                            <div class="venic4">
                                            <i class="fa fa-money vendor_icon5"></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua5"><span style="font-size:14px">PKR.</span> {{ number_format($total_earnings,2) }}</span> <br><span class="vendorbx_price">Gross Sale</span></p>
                                        </div>
                                        <div class="vedorbox6" style="max-height: 150px;">
                                            <div class="venic5">
                                            <i class="fa fa-qrcode vendor_icon6"></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua6"><span style="font-size:14px">PKR.</span> {{ number_format($total_earnings,2) }}</span> <br><span class="vendorbx_price">Tot Earning</span></p>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-12" style="margin:0px !important;">
                                        <h3>Others</h3>
                                         <div class="vedorbox7">
                                             <div class="venic6" >
                                            <i class="fa fa-money vendor_icon7" ></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua7"><span style="font-size:14px">PKR.</span> {{ number_format($total_earnings,2) }}</span> <br><span class="vendorbx_price">Current Balance</span></p>
                                        </div>
                                        <div class="vedorbox8" style="max-height: 150px;">
                                             <div class="venic7">
                                            <i class="fa fa-user vendor_icon8"></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua8"><span style="font-size:14px">PKR.</span> 00.0</span> <br><span class="vendorbx_price">Admin Commission</span></p>
                                        </div>
                                        <div class="vedorbox9" style="max-height: 150px;">
                                             <div class="venic8">
                                            <i class="fa fa-comments-o vendor_icon9"></i>
                                        </div>
                                            <p class="boxdes"><span class="vendor_bxqua9">0</span> <br><span class="vendorbx_price">Review</span></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                
                            </div>
                        </div>
                      <div class="col-md-3">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                  <div class="row" style="height: 414px; padding:5px;">
                                        <div class="col-sm-12 block-links-vendor">
                                            <p><b>Register since</b></p>
                                              <div class="block-links-inner">
                                               <p>{{$GetData->created_at}}</p>
                                               </div>
                                        </div>
                                    
                                        <div class="col-sm-12 block-links-vendor">
                                             <div>
                                                <p><b>Social Profile</b></p>
                                              </div>
                                               <div>
                                              <ul class="block-links-inner">
                                                <li style="font-size: 20px;"><a href=""><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
                                                <a href=""><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
                                                <a href=""><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
                                                <a href=""><i class="fa fa-youtube"></i></a></li>
                                              </ul>
                                              </div>
                                        </div>
                                     <div class="col-sm-12 block-links-vendor">
                                       <div>
                                      <p><b>Payment Method</b></p>
                                       </div>
                                      <div class="block-links-inner">
                                         <ul>
                                            <li style="font-size: 20px;"><a href=""><i class="fa fa-money" style="font-size:24px"></i></a>&nbsp;&nbsp;
                                                 <a href=""><i class="fa fa-bank" style="font-size:24px"></i></a>&nbsp;&nbsp;
                                            </li>
                                          </ul>
                                        </div>
                                     </div>
                                  </div>  
                                </div>
                            </div>
                     </div>
                                    
                    </div>
                </div>
            </div>
       
@endsection
