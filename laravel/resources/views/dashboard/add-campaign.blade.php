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
        font-weight: 600;
    }
    .title-sub{
        font-size: 18px;
        color: #666;
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

    .table>tbody>tr, .table>tbody>tr, .table>tfoot>tr, .table>tfoot>tr, .table>thead>tr, .table>thead>tr{
        height:20px;
    }
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle;
    border-top: 1px solid #ddd;
    }
</style>
<div class="row">
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff;">
        <div class="voucher-top">
            <div class="voucher-left">
                <div class="voucher-left-inner">
                    <div class="title">{{$campaign->compaign_title}}</div>
                    
                </div>
            </div>
            <div class="voucher-right">
                
                <a href="{{ url('/Vendor/add-campaign/new/'.$campaign->id)}}" class="top-btn"> <i class="fa fa-plus" aria-hidden="true"></i> Add Voucher
                </a>
            </div>
        </div>
        <div class="table-detail">
            <table class="table table-borderless" id="mytable">
                <thead>
                    <tr>
                        <th>Campaign Id</th>
                        <th>Voucher Title</th>
                        <th>Voucher Code</th>
                        <th>Campaign Banner</th>
                        <th>Starting Time</th>
                        <th>Ending Time</th>
                        <th>Discount Type</th>
                        <th>Discount Amount</th>
                        <th>Quantity</th>
                        <th>Claimed</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @if(!empty($voucher))
                    @foreach($voucher as $v)
                    <tr style="height:20px">
                        <td>{{$campaign->id}}</td>
                        <td>{{$v->voucher_name}}</td>
                        <td>{{$v->voucher_code}}</td>
                        <td>{{$campaign->banner}}</td>
                        <td>{{\Carbon\Carbon::parse($v->starting_time)->isoFormat('MMM Do YYYY')}}</td>
                        <td>{{\Carbon\Carbon::parse($v->ending_time)->isoFormat('MMM Do YYYY')}}</td>
                        <td>{{$v->discount_type}}</td>
                        <td>{{$v->amount}}</td>
                        <td>{{$v->quantity}}</td>
                        <td>{{$v->claimed}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                
            </table>
            
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('#mytable').DataTable();
    } );
</script>


@endsection