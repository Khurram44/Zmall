@extends('dashboard.dash-layout.layout')
@section('content')

<style>
.modal-header{
   display: flex; 
   justify-content: flex-end;
}
.modal-dialog {
    width: 800px;
    margin: 30px auto;
}
.subtn{
    background-color: #5336ca;
    color: #FFFFFF;
    padding: 12px 32px;
    margin-top: 16px;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    font-family: "Montserrat";
    text-transform: uppercase;
    display: inline-block;
    border-radius: 64px;
    outline:none;
    border: none;
    margin: 34px 0px;
}
.modal-header{
    border-bottom: none;
    padding: 0;
}
.modal-header .close {
    position: relative;
    top: -10px;
    right: -10px;
    background: #b22828;
    opacity: 0.8;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    color: #fff;
}
    .left-ban{
    background: url("/frontend/img/vendor_dash/addpro-banner.jpg") !important;
    background-repeat: no-repeat !important;
        background-size: cover !important;
        object-fit:cover;
        padding-bottom: 30px;
        width: 100%;
        -webkit-box-shadow: 0 0 4px 0 hsl(0deg 0% 40% / 20%);
        box-shadow: 0 0 4px 0 hsl(0deg 0% 40% / 20%);
        padding: 10px;
        height: 400px;
    }
    input[type='radio']:after {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: -1px;
        left: -1px;
        position: relative;
        background-color: #fff;
        border: 2px solid #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
        
    }

    input[type='radio']:checked:after {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: -1px;
        left: -1px;
        position: relative;
        background-color: #fff;
        border: 2px solid green;
        content: '';
        display: inline-block;
        visibility: visible;
        outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
        
    }
    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 7px;
      background: #fff;
      outline: none;
      opacity: 0.8;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none !important;
      appearance: none !important;
      width: 20px;
      outline: none;
      height: 20px;
      border: 2px solid #fff;
      border-radius:50%;
      background: #fe9126;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
    
      width: 20px;
      outline: none;
      height: 20px;
      border: 2px solid #fff;
      border-radius:50%;
      background: #fff;
      cursor: pointer;
    }
    .stats-div{
        height: 350px;
    }
    .stats-report{
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      vertical-align: middle;
      height: 100%;
    }
    .stats-report h3{
      text-align: center;
      margin-top: 0px;
    }
    .stats-report-inner{
      display: flex;
      justify-content: space-between;
 
      vertical-align: middle;
    }
    .stats-report-inner-t{
      display: flex;
      flex: 6;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      vertical-align: middle;
    }
    .stats-report-inner-t span:nth-child(1){
      font-weight: bold;
      font-size: 16px;
      color: #666;
    }
    .stats-report-inner-t span:nth-child(2){
      font-weight: bold;
      font-size: 26px;
    }
    @media screen and (max-width:  800px){
      .modal-dialog {
    width: 400px;
  }
      .stats-report-inner-t span:nth-child(1) {
        font-weight: bold;
        font-size: 16px;
        color: #333;
    }
    .stats-report-inner-t span:nth-child(2) {
        font-weight: normal; 
        font-size: 26px;
        color: #999;
    }
      .col-res{
        width: 100% !important;
        margin-right: 0px
        padding: 0px 5px !important;
        margin-left: 20px !important;
      }
      .order-prog input{
        width: 100%;
      }
      .stats-div{
        padding-left: 30px;
      }
    
    }
    .campaign-events-content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 15px;
        
    }
    .campaign-events a{
        margin: 0 auto;
        padding: 15px;
        border:1px solid #e6e7eb;
        text-decoration: none;
        color: #333;

    }
    .camp-img img{
        height: 160px;
        object-fit: contain;
    }
    .down-counter{
        padding: 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: space-around;
    }
    .timer{
        display: flex;
        justify-content: space-between;
        width: 200px;
    }   
    .time-inner{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .camp-desc p{
        font-weight: 700;
    line-height: 1.5em;
    font-size: 1.3em;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    overflow: hidden;
    -webkit-box-orient: vertical;
    color: #333;
    }
    .camp-date p{
        color: #999;
    font-size: .9em;
    }
    .camp-type
    {
        color: #333;
        margin-top: 8px;
        } 
        .camp-type p{
        
        margin: 0;
        font-size: 14px;
    }
    
    
    .time-inner p:nth-child(1){
        font-size: 20px;
        margin-bottom: 0px;
    }
    .camp-btn{
        margin: 8px;
        display: flex;
    justify-content: flex-start;
    align-content: space-around;
    align-items: center;
    }
    .camp-btn p:nth-child(1){
        margin: 0;
        height: 28px;
        padding: 0 16px;
        font-size: 14px;
        line-height: 26px;
        background-color: #fe9126;
        text-decoration: none;
        color: #fff;
    }
    .camp-btn p:nth-child(2){
        font-size: 14px;
        color: #666;
        margin-bottom: 0;
        margin-left: 10px;
    }
    .camp-btn p:nth-child(3){
        font-size: 14px;
        color: #666;
        margin-bottom: 0;
        margin-left: 10px;
    }
    .camp-ceontent{
        display: flex;
        padding: 20px;
        
    }

</style>

@error('name')
 <script>
        alert({{ $message }});
  </script>
@enderror
<div class="row" style="width:100%;">
        <div class="col-sm-7 col-res" style="padding: 5px; margin-left: 20px;">
        <div class="Banner-div">
          <div class="left-ban">
            <div class="left-ban-inner">
              <div class="content-ban">
                <h3>Quickly add products to your store</h3>
                <p>Bulk upload using an excel file or add single products.</p>
                <form>
                <button type="submit" formaction="{{ asset('/Vendor/addproduct') }}">Add Products<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
              </form></div>
              <div class="order-prog">
                <h4><span>{{$product_added}}</span>/100 products added</h4>
                <p>Sellers with 100+ products sell almost 2x more!</p>
                <input type="range" class="slider" name="" min="0" max="100" value="{{$product_added}}" disabled>
              </div>
            </div>
          </div>  
        </div>
        </div>
        <div class="col-sm-3 col-res" style="padding: 5px; margin: 0px;">
          <div class="right-ban">
            <div class="right-ban-inner">
                <h3>Go Live on Zmall. <br> You are just 2 steps away!</h3>
                <div class="pro-inner">
                  <div class="pro-inner-div">
                    <p><input type="radio" name="" checked="checked"> &nbsp; Contact Details <span class="badge badge-pill badge-success" style="background: green;"> COMPLETED</span></p>
                  </div>
                  @if(empty($store_status))
                  <div class="pro-inner-div">
                    <p><input type="radio" name=""> &nbsp; Store Profile <span class="badge badge-secondary" style="background: ;"> PENDING</span> </p> 
                    <br><a href="/storeupdate" style="font-weight:600;">(Complete Now)</a>
                  </div>
                  @else
                  <div class="pro-inner-div">
                    <p><input type="radio" name=""  checked="checked"> &nbsp; Store Profile <span class="badge badge-secondary" style="background: green;"> COMPLETED</span></p> 
                    <small>Cover image & description for your store on Zmall</small>
                  </div>
                  @endif
                 
                  @if(empty($flyerstatus))
                  <div class="pro-inner-div">
                    <p><input type="radio" name="" > &nbsp; Order Flayers <span class="badge badge-secondary" style="background: ;"> PENDING</span> </p>
                    <small>Order your flayer here in 3 different sizes</small> <br><a href="/flayers" style="font-weight:600;">(Order Now)</a>
                  </div>
                  @else
                  <div class="pro-inner-div">
                    <p><input type="radio" name="" disabled checked="checked"> &nbsp; Flayers <span class="badge badge-secondary" style="background: green;"> COMPLETED</span></p>
                    <small>Order your flayer here in 3 different sizes</small> <br><a href="/flayers" style="font-weight:600;">(Order Now)</a>
                  </div>
                  @endif
                </div>
                  <!--<div class="btn-proce">-->
                  <!--    <form>-->
                  <!--  <button formaction="{{ asset('/Vendor/myaccount') }}">View your Account <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>-->
                  <!--  </form>-->
                  <!--</div>-->
            </div>
          </div>
        </div>
        <div class="row" style="">
          <div class="col-sm-4 col-res" style="padding: 5px; margin-left: 20px;">
            <div class="stats-div">
              <table class="table table-borderless">
                <tr>
                  <td colspan="2" class="tit-tab">Order</td>
                </tr>
                <tr>
                  <td colspan="2"><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>Awaiting Confirmation</td>
                  <td>Awaiting Pick Up Request</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>24 or more hours</td>
                  <td>24 or more hours</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>12 to 24 hours</td>
                  <td>12 to 24 hours</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>Last 12 hours</td>
                  <td>Last 12 hours</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-sm-2 col-res" style="padding: 5px; margin: 0px; width:21%;">
            <div class="stats-div">
              <table class="table table-borderless">
                <tr>
                  <td colspan="2" class="tit-tab">Revenue</td>
                </tr>
                <tr>
                  <td colspan="2"><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>This Month</td>
                </tr>
                <tr>
                  <td>@if(!empty($month_earnings)) PKR. {{$month_earnings}}@else<div class="emptyspan"></div>@endif</td>
                </tr>
                <tr>
                  <td>This Week</td>
                </tr>
                <tr>
                  <td>@if(!empty($week_earnings)) PKR. {{$week_earnings}}@else<div class="emptyspan"></div>@endif</td>
                </tr>
                <tr>
                  <td>Today</td>
                </tr>
                <tr>
                  <td>@if(!empty($today_earnings)) PKR. {{$today_earnings}}@else<div class="emptyspan"></div>@endif</td>
                </tr>
                <tr>
                  <td>All Time</td>
                </tr>
                <tr>
                  <td>@if(!empty($total_earnings)) PKR. {{$total_earnings}}@else<div class="emptyspan"></div>@endif</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-sm-4 col-res" style="padding: 5px; margin: 0px; width:27.3%;">
            <div class="stats-div">
              <table class="table table-borderless">
                <tr>
                  <td colspan="2" class="tit-tab">Ratings</td>
                </tr>
                <tr>
                  @if(!empty($total_order->where('status','placed')->Where('status','pending')))
                  <td colspan="2"><div>5.0</div></td>
                  @else
                  <td colspan="2"><div class="emptyspan"></div></td>
                  @endif
                </tr>
                <tr>
                  <td colspan="2">Total orders</td>
                </tr>
                <tr>
                  @if(!empty($total_order->where('status','placed')->Where('status','pending')))
                  <td colspan="2"><div>{{$total_order->where('status','placed')->count()}}</div></td>
                  @else
                  <td colspan="2"><div>0</div></td>
                  @endif
                </tr>
                <tr>
                  <td>Rejected</td>
                  <td>Cancelled</td>
                </tr>
                <tr>
                  @if(!empty($total_order->where('status','cancel')))
                  <td ><div>{{$total_order->where('status','cancel')->count()}}</div></td>
                  @else
                  <td ><div>0</div></td>
                  @endif
                  <td><div >0</div></td>
                </tr>
                <tr>
                  <td>Confirmed in < 24hrs</td>
                  <td>Ready to ship in < 24hrs</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>Avg order confirmed time</td>
                  <td>Avg order ready to ship time</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="col-sm-4 col-res" style="padding: 5px; margin-left: 20px;">
            <div class="stats-div" style="height: 275px; overflow:hidden;">
              <div class="stats-report">
                <h3>Business Insights</h3>
                <div class="stats-report-inner">
                  <div class="stats-report-inner-t">
                    <span>Clicks</span>
                    <span>{{$user->visitor_count}}</span>
                  </div>
                  <div class="stats-report-inner-t">
                    <span>Visitors</span>
                    <span>{{$user->visitor_count}}</span>
                  </div>
                </div>
                <div class="stats-report-inner">
                  <div class="stats-report-inner-t">
                    <span>Orders</span>
                    <span>0</span>
                  </div>
                  <div class="stats-report-inner-t">
                    <span>Conversion Rate</span>
                    <span>0.00%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-res" style="padding: 5px; width: 48.3%;">
            <div class="campaign-events" style="overflow:hidden; background: #fff;">
                <div class="camp-title" style="padding: 0px 20px;">
                    <h3>Campaign Events</h3>
                </div>
                <div class="camp-ceontent">
                @if(!empty($campaign))
                @foreach($campaign as $c)
                    <div class="campaign-events-content">
                        <a href="{{ url('/Vendor/campaign-details/'.$c->id)}}">
                    <input type="hidden" name="timing" id="timing" value="{{$c->register_time}}">
                    <div class="down-counter">
                        <div class="timer">
                            <div class="time-inner">
                                <p id="day"></p>
                                <p>Days</p>
                            </div>
                            <div class="">
                                :
                            </div>
                            <div class="time-inner">
                                <p id="hour"></p>
                                <p>HOURS</p>
                            </div>
                            <div class="">
                                :
                            </div>
                            <div class="time-inner">
                                <p id="mint"></p>
                                <p>MINS</p>
                            </div>
                            <div class="">
                                :
                            </div>
                            <div class="time-inner">
                                <p id="sec"></p>
                                <p>SECS</p>
                            </div>
      
                        </div>
                    </div>
                    <div class="camp-img">
                        <img src="{{ asset('/frontend/storage/uploads/'.$c->banner) }}">
                    </div>
                    <div class="camp-desc">
                        <p>{{$c->compaign_title}}</p>
                    </div>
                    <div class="camp-date">
                        <p>{{\Carbon\Carbon::parse($c->starting_time)->isoFormat('MMM Do YYYY')}} - {{\Carbon\Carbon::parse($c->ending_time)->isoFormat('MMM Do YYYY')}}</p>
                    </div>
                    <div class="camp-type">
                        <p>Minimum price discount</p>
                        <p>Registration until {{\Carbon\Carbon::parse($c->register_time)->isoFormat('MMM Do YYYY')}}</p>
                    </div>
                    <div class="camp-btn">
                        <p>Join</p>
                        <p>Seller: {{$c->total_seller}}</p>
                        <p>Products: {{$c->total_products}}</p>
                    </div>

                </a>
                </div>
            @endforeach
            
            @else
            <h2>These Is No Campaign Right Now.</h2>
            @endif
            </div>
          </div>
          
        </div>

      </div>
  <script>
    
// Set the date we're counting down to
var countDownDate = new Date(document.getElementById('timing').value).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Output the result in an element with id="tampo"
  document.getElementById("day").innerHTML ="0"+days;
  document.getElementById("hour").innerHTML =hours;
  document.getElementById("mint").innerHTML =minutes;
  document.getElementById("sec").innerHTML =seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("tampo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>
<style>
    .sub_all{
        display:flex;
        justify-content: space-around;
        align-items: flex-start;
    }
    .sub_content{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .sub-inner{
        margin-top:10px;
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .sub-inner span{
        margin-top:2px;
    }
    .sub-inner span i{
        padding-right:5px;
    }
    .sub_content del{
        color: #888;
        font-size: 12px;
    }
    .sub_content h4{
        color: ##f43f54;
    }
    .ann-des{
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 10px 20px;
        border: 1px solid #ddd;
        background: #3a3b3c;
    }
    .ann-des span{
        color: #fff;
    }
</style>
@if($user->subscription == 0)
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="ann-des">
                    <center><h3 style="color:red; font-weight: bold; border-bottom: 2px solid #fff;">Announcment</h3></center>
                <span>Zmall announced that it will launch a subscription package on <b style="color:red;">1st October</b></span>
                <span>Before <b style="color:red;">30 September,</b> sellers can use their previous accounts without subscribing.</span>
                <span>Subscriptions purchased by vendors will grant them access to the platform.</span>
                <span><b style="color:red;">0% commission</b> will be charged on subscriptions.</span>
                </div>
        <center><h4 style="text-transform: uppercase; font-weight: bold; color:#f43f54;">Subscribe to Sell More</h4></center>
                <form>
                    <div class="sub_all">
                        <div class="sub_content">
                            <h2>Basic</h2>
                            <del>PKR 9,000/6 Months</del>
                            <h4>PKR 6,000/6 Months</h4>
                            <div class="sub-inner">
                                <span><i class="fa fa-check" aria-hidden="true"></i>Store Front</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Limited Products Upload</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Manual Order Creation</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Discount codes</span>
                            </div>
                        </div>
                        <div class="sub_content">
                            <h2>Standard</h2>
                            <del>PKR 17,000/year</del>
                            <h4>PKR 15,000/year</h4>
                            <div class="sub-inner">
                                 <span><i class="fa fa-check" aria-hidden="true"></i>Store Front</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Unimited Products Upload</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Online streaming</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Free Promotions</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Free 50 Flyers</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Z-Mall Sale Campaigns</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Vouchers</span>
                            </div>
                        </div>
                        <div class="sub_content">
                            <h2>Premium</h2>
                            <del>PKR 25,000/year</del>
                            <h4>PKR 20,000/year</h4>
                            
                            <div class="sub-inner">
                                <span><i class="fa fa-check" aria-hidden="true"></i>Store Front</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Unimited Products Upload</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Online Streaming</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Sales Reports</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Monitor and Track Performance</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Incress sales with in 3 months</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Free Maketing</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Win Gift by Zmall </span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Identified performance weaknesses</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Get Discout on Resubscribing</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Free shiping promotions</span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Free 100 Flyers  </span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Feature Sallers  </span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Z-Mall sale campaigns  </span>
                                <span><i class="fa fa-check" aria-hidden="true"></i>Vouchers</span>
                            </div>
                        </div>
                    </div>
                    <center><button class="subtn" formaction="/Vendor/commision">View Subscription</button></center>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
@endsection