@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
    .voucher-top{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .voucher-left-inner{
        display: flex;
        flex-direction: column;
    }
    .title{
        font-size: 18px;
        color: #333;
        line-height: 20px;
        margin-bottom: 16px;
        font-weight: 500;
    }
    .title-sub{
        font-size: 14px;
        color: #999;
        line-height: 16px;
        margin-bottom: 20px;
     
    }
    .voucher-right a{
        text-decoration: none !important;
    }
    .voucher-right a:hover{
        color: #fff;
    }
    .voucher-right a:focus{
        color: #fff;
    }
    .top-btn{
        color: #fff;
        background-color: #fe9126;
        height: 40px;
        min-width: 100px;
        padding: 8px 16px;
        font-size: 14px;
        outline: none;
        border: none;
        font-weight: bold;
        text-decoration: none;
    }
    .voucher-menu{
        display: flex;
        padding-inline-start: 0px;
    }
    .voucher-menu li{
        list-style: none;
        padding: 0px 10px;
        padding-bottom: 10px;
        cursor: pointer;
        color: #666;
    }
    .voc{
        border-bottom: 1px solid #fe9126;
        font-weight: bold;
    }
    .table thead tr th{
        padding-top: 10px;
        padding-bottom: 11px;
        line-height: 18px;
        color: #666;
        font-weight: normal;
    }
    .table{
        min-height: 675px;
    }
    @media only screen and (max-width: 600px) {
     .col-res{
        padding: 10px 20px;
        margin: auto !important;
        margin-top: 5px !important;
        width: 87% !important;
        background: #fff;
     }
     .top-btn {
        display: flex;
        color: #fff;
        background-color: #fe9126;
        height: auto; 
        width: 80px;
        padding: 8px 16px;
        font-size: 14px;
        outline: none;
        border: none;
        font-weight: bold;
        text-decoration: none;
        align-items: center;
        justify-content: center;
         }
         .table {
            min-height: 400px;
        }
        .table-detail{
            overflow:scroll;
        }
}
</style>
<div class="row">
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff;">
        <div class="voucher-top">
            <div class="voucher-left">
                <div class="voucher-left-inner">
                    <div class="title">Promotion List</div>
                    <div class="title-sub">Start offering the best prices for your products on Zmall! Click here for our User Guide on how to create your own discounts</div>
                </div>
            </div>
            <div class="voucher-right">
                
                <a href="/Vendor/all-sellers/new" class="top-btn"> <i class="fa fa-plus" aria-hidden="true"></i> Create
                </a>
            </div>
        </div>
        <div class="table-detail">
            <ul class="voucher-menu">
                <li class="voc" onclick="showall();" id="l1">All</li>
                <li onclick="showongoing();" id="l2">Ongoing</li>
                <li onclick="showupcoming();" id="l3">Upcoming</li>
                <li onclick="showexpired();" id="l4">Expired</li>
            </ul>
            <table class="table table-borderless" id="all">
                <thead>
                    <tr>
                        <th>Promotion Code Name</th>
                        <th>Promotion Type</th>
                        <th>Discount Type</th>
                        <th>Discount Percentage</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Usage Limit</th>
                        <th>Claimed</th>
                        <th>Usage</th>
                        <th>Status</th>
                    </tr>
                </thead>
               
                <tbody>
                    @if(!empty($promotionList))
                    @foreach($promotionList as $p)
                    <tr>
                        <td>{{$p->promotion_name}}</td>
                        <td>{{$p->type}}</td>
                        <td>{{$p->discount_type}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->starting_time}}</td>
                        <td>{{$p->ending_time}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->claimed}}</td>
                        <td>{{$p->status}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
            </table>
            <table class="table table-borderless" id="ongoing" style="display: none;">
                <thead>
                    <tr>
                        <th>Promotion Code Name</th>
                        <th>Promotion Type</th>
                        <th>Discount Amount</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Usage Limit</th>
                        <th>Claimed</th>
                        <th>Usage</th>
                        <th>Status</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
               
                <tbody>
                    @if(!empty($activePromotion))
                    @foreach($activePromotion as $p)
                    <tr>
                        <td>{{$p->promotion_name}}</td>
                        <td>{{$p->type}}</td>
                        <td>{{$p->discount_type}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->starting_time}}</td>
                        <td>{{$p->ending_time}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->claimed}}</td>
                        <td>{{$p->status}}</td>
                        <td><a href="{{url('/Vendor/promotion/deactivate/'.$p->id)}}" style="padding:5px 10px; margin-left:5px; background:red; color:#fff;"></i>Deactivate</a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
            </table>
            <table class="table table-borderless" id="upcoming" style="display: none;">
                <thead>
                    <tr>
                        <th>Promotion Code Name</th>
                        <th>Promotion Type</th>
                        <th>Discount Amount</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Usage Limit</th>
                        <th>Claimed</th>
                        <th>Usage</th>
                        <th>Status</th>
                    </tr>
                </thead>
               
                <tbody>
                    @if(!empty($upcomingPromotion))
                    @foreach($upcomingPromotion as $p)
                    <tr>
                        <td>{{$p->promotion_name}}</td>
                        <td>{{$p->type}}</td>
                        <td>{{$p->discount_type}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->starting_time}}</td>
                        <td>{{$p->ending_time}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->claimed}}</td>
                        <td>{{$p->status}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
            </table>
            <table class="table table-borderless" id="expired" style="display: none;">
                <thead>
                    <tr>
                        <th>Promotion Code Name</th>
                        <th>Promotion Type</th>
                        <th>Discount Amount</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Usage Limit</th>
                        <th>Claimed</th>
                        <th>Usage</th>
                        <th>Status</th>
                    </tr>
                </thead>
               
                <tbody>
                    @if(!empty($expiredPromotion))
                    @foreach($expiredPromotion as $p)
                    <tr>
                        <td>{{$p->promotion_name}}</td>
                        <td>{{$p->type}}</td>
                        <td>{{$p->discount_type}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->starting_time}}</td>
                        <td>{{$p->ending_time}}</td>
                        <td>{{$p->discount_amount}}</td>
                        <td>{{$p->quantity}}</td>
                        <td>{{$p->claimed}}</td>
                        <td>{{$p->status}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    var a = document.getElementById('all');
    var b = document.getElementById('ongoing');
    var c = document.getElementById('upcoming');
    var d = document.getElementById('expired');
    var l1= document.getElementById('l1');
    var l2= document.getElementById('l2');
    var l3= document.getElementById('l3');
    var l4= document.getElementById('l4');

    function showall(){
        if (a.style.display==="none") {
            a.style.display="table";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            l1.classList.add("voc");
            l2.classList.remove("voc");
            l3.classList.remove("voc");
            l4.classList.remove("voc");
        }
        else{
            a.style.display="table";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
        }
    }
    function showongoing(){
        if (b.style.display==="none") {
            b.style.display="table";
            a.style.display="none";
            c.style.display="none";
            d.style.display="none";
            l2.classList.add("voc");
            l1.classList.remove("voc");
            l3.classList.remove("voc");
            l4.classList.remove("voc");
        }
        else{
            b.style.display="table";
            a.style.display="none";
            c.style.display="none";
            d.style.display="none";
        }
    }
    function showupcoming(){
        if (c.style.display==="none") {
            c.style.display="table";
            b.style.display="none";
            a.style.display="none";
            d.style.display="none";
            l3.classList.add("voc");
            l2.classList.remove("voc");
            l1.classList.remove("voc");
            l4.classList.remove("voc");
        }
        else{
            c.style.display="table";
            a.style.display="none";
            b.style.display="none";
            d.style.display="none";
        }
    }
    function showexpired(){
        if (d.style.display==="none") {
            d.style.display="table";
            b.style.display="none";
            c.style.display="none";
            a.style.display="none";
            l4.classList.add("voc");
            l2.classList.remove("voc");
            l3.classList.remove("voc");
            l1.classList.remove("voc");
        }
        else{
            d.style.display="table";
            b.style.display="none";
            c.style.display="none";
            a.style.display="none";
        }
    }
</script>
@endsection