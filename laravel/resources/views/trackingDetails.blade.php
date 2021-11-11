
@extends('layouts.app')

@section('content')
@include('layouts.home-navigation')

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
    
    margin: 0 0 20px;
    }
    .sell-top-tit{
        font-size: 12px;
    color: #282c3f;
    vertical-align: middle;
    line-height: 26px;
    font-family: circular, Arial, sans-serif;
}
.top{
    display: flex;
    justify-content: space-between;
}
.card {
    z-index: 0;
    padding-bottom: 20px;
    margin-top: 10px;
    margin-bottom: 90px;
    border-radius: 10px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.tophead {
    margin-top: 10px;
}
.tophead h3{ 

    font-size: 18px;

}
.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #fe9126;
    padding-left: 0px;
    margin-top: 30px;
    width: 64%;
    margin-left: auto;
    margin-right: auto;
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 24.5%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: block;
    font-size: 20px;
    background: #4A4E5A;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #4A4E5A;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #fe9126;
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px;
}

.icon-content {
    padding-bottom: 20px;
     text-align: center;
}
.icon-content p{
   
}
.top-pro{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 3px solid #fe9126;;
    padding: 5px 40px;
    background: #fff;
    border-radius: 20px;

}
.top-pro p{
    margin: 0px;
    font-weight: 500;
}
.top-pro h5{
    margin: 0px;
}
@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%
    }
}
</style>
<body>

    <section class="top-b-section">
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
                            <span><a href="" style="text-decoration: none;  color: #282c3f;">Return & Refund Policies</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="container">
    <div class="tophead">
          <h3>Tracking order #{{$buffer['packet_list']['0']['track_number']}}</h3>
    </div>
  
    <div class="card">
        <div class="row top">
            <div class="top-pro">
                <h5>ORDER <span class="text-primary font-weight-bold">#{{$buffer['packet_list']['0']['booked_packet_order_id']}}</span></h5>
            </div>
            <div class="top-pro">
                <p class="mb-0">Shipped From <span><b>{{$buffer['packet_list']['0']['origin_city_name']}}</b> TO <b>{{$buffer['packet_list']['0']['destination_city_name']}}</b></span></p>
                <p>Total Amount <span class="font-weight-bold"> RS: {{$buffer['packet_list']['0']['booked_packet_collect_amount']}}</span></p>
            </div>
        </div> <!-- Add class 'active' to progress -->
        <div class="row">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                  @if($buffer['packet_list']['0']['booked_packet_status'] == 'Delivered')
                    <li class="active step0"></li>
                    @else
                    <li class=" step0"></li>
                    @endif
                    @if(!empty($buffer['packet_list']['0']['Tracking Detail']))
                    @if($buffer['packet_list']['0']['Tracking Detail']['0']['Activity_Date'] == 'null')
                    <li class="step0"></li>
                    @else
                    <li class="active step0"></li>
                    @endif
                    @if($buffer['packet_list']['0']['Tracking Detail']['1']['Activity_Date'] == 'null')
                    <li class="step0"></li>
                    @else
                    <li class="active step0"></li>
                    @endif
                    @if($buffer['packet_list']['0']['Tracking Detail']['7']['Status'] == 'Delivered')
                    <li class="active step0"></li>
                    @else
                    <li class=" step0"></li>
                    @endif
                    @else
                    <li class="step0"></li>
                    <li class="step0"></li>
                    <li class="step0"></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="row top" style="padding-top: 0px;">
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Processed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Shipped</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>En Route</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Arrived</p>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection