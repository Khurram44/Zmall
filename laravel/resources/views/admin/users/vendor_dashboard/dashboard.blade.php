@extends('admin.users.vendor_dashboard.dash-layout.layout')
@section('content')

<style>
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
                <button type="submit" formaction="{{ asset('/admin/tovendor/addproduct') }}">Add Products<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
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
                    <br><a href="/admin/tovendor/storeupdate" style="font-weight:600;">(Complete Now)</a>
                  </div>
                  @else
                  <div class="pro-inner-div">
                    <p><input type="radio" name=""  checked="checked"> &nbsp; Store Profile <span class="badge badge-secondary" style="background: green;"> COMPLETED</span></p> 
                    <small>Cover image & description for your store on Zmall</small>
                  </div>
                  @endif
                  @if(empty($finastatus))
                  <div class="pro-inner-div">
                    <p><input type="radio" name=""> &nbsp; Financial Details <span class="badge badge-secondary" style="background: ;"> PENDING</span></p>
                    <br><a href="/admin/tovendor/bank-account" style="font-weight:600;">(Complete Now)</a>
                  </div>
                  @else
                  <div class="pro-inner-div">
                    <p><input type="radio" name=""  checked="checked"> &nbsp; Financial Details <span class="badge badge-secondary" style="background: green;"> COMPLETED</span></p>
                    <small>ID Proof & Bank Details to receive payments</small>
                  </div>
                  @endif
                  @if(empty($flyerstatus))
                  <div class="pro-inner-div">
                    <p><input type="radio" name="" > &nbsp; Order Flayers <span class="badge badge-secondary" style="background: ;"> PENDING</span> </p>
                    <small>Order your flayer here in 3 different sizes</small> <br><a href="/admin/tovendor/flayers" style="font-weight:600;">(Order Now)</a>
                  </div>
                  @else
                  <div class="pro-inner-div">
                    <p><input type="radio" name="" disabled checked="checked"> &nbsp; Flayers <span class="badge badge-secondary" style="background: green;"> COMPLETED</span></p>
                    <small>Order your flayer here in 3 different sizes</small> <br><a href="/admin/tovendor/flayers" style="font-weight:600;">(Order Now)</a>
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
                  <td colspan="2"><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td colspan="2">Total orders</td>
                </tr>
                <tr>
                  <td colspan="2"><div class="emptyspan"></div></td>
                </tr>
                <tr>
                  <td>Rejected</td>
                  <td>Cancelled</td>
                </tr>
                <tr>
                  <td><div class="emptyspan"></div></td>
                  <td><div class="emptyspan"></div></td>
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
          <div class="col-sm-4 col-res" style="padding: 5px; margin-left: 20px; width:54.33333333%;">
            <div class="stats-div" style="height: auto; overflow:hidden;">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="/frontend/img/banner/Fashion.png" style="width:100%;">
        <!-- <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="/frontend/img/banner/Kids%20Fun.png" alt="img" style="width:100%;">
        <!-- <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div> -->
      </div>
    
      <div class="item">
        <img src="/frontend/img/banner/Casual.png" alt="New York" style="width:100%;">
        <!-- <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div> -->
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
            </div>
          </div>
          <div class="col-sm-4 col-res" style="padding: 5px; margin: 0px; width:27.3%;">
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
        </div>

      </div>

@endsection