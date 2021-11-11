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
</style>
<div class="row">
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff;">
        <div class="voucher-top">
            <div class="voucher-left">
                <div class="voucher-left-inner">
                    <div class="title">Shopee Ads List</div>
                    <div class="title-sub">Use Shopee Ads to boost exposure and increase sales by ensuring that shoppers see your products first! </div>
                </div>
            </div>
            <div class="voucher-right">
                
                <a href="javascript:void(0);" class="top-btn" data-toggle="modal" data-target="#foradtraget"> <i class="fa fa-plus" aria-hidden="true"></i> Create
                </a>
            </div>
        </div>
        
        <div class="table-detail">
            <ul class="voucher-menu">
                <li class="voc" onclick="showall();" id="l1">All Ads</li>
                <li onclick="showongoing();" id="l2">Search</li>
                <li onclick="showupcoming();" id="l3">Discovery</li>
            </ul>
            <table class="table table-borderless" id="all">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th>Product Name</th>
                        <th>Promotion Type</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Status</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
               
                <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td
                    </tr>
                </tbody>
                
            </table>
            <table class="table table-borderless" id="ongoing" style="display: none;">
               <thead>
                    <tr>
                        <th>S No</th>
                        <th>Product Name</th>
                        <th>Promotion Type</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Status</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
               
                <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td
                    </tr>
                </tbody>
            </table>
            <table class="table table-borderless" id="upcoming" style="display: none;">
                <thead>
                    <tr>
                        <th>S No</th>
                        <th>Product Name</th>
                        <th>Promotion Type</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Status</th>
                        <th>Actions</th> 
                    </tr>
                </thead>
               
                <tbody>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="foradtraget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header" style="display:flex; align-items: center; justify-content: center;">
                <h5 class="modal-title" id="exampleModalLongTitle" style="width: 95%;">Choose Ad Type</h5>
                <button type="button" style="width: 5%;" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="display:flex; justify-content: space-around; padding: 50px 0;">
                  <a href="/Vendor/zmall-ads/search" style="text-decoration: none; color: #666;">
                    <div class="search_div" style="display:flex; justify-content: space-around; align-items: center; height:200px; width: 200px; margin: auto 10px; border: 1px solid #ddd;">
                        Search Ads
                    </div>
                    </a>
                    <a href="/Vendor/zmall-ads/discovery" style="text-decoration: none; color: #666;">
                    <div class="discovery_div" style="display:flex; justify-content: space-around; align-items: center; height:200px; width: 200px; margin: auto 10px; border: 1px solid #ddd;">
                        Discovery Ads
                    </div>
                    </a>
                
              </div>
            </div>
          </div>
        </div>



<script type="text/javascript">
    var a = document.getElementById('all');
    var b = document.getElementById('ongoing');
    var c = document.getElementById('upcoming');
    var l1= document.getElementById('l1');
    var l2= document.getElementById('l2');
    var l3= document.getElementById('l3');

    function showall(){
        if (a.style.display==="none") {
            a.style.display="table";
            b.style.display="none";
            c.style.display="none";
            l1.classList.add("voc");
            l2.classList.remove("voc");
            l3.classList.remove("voc");
        }
        else{
            a.style.display="table";
            b.style.display="none";
            c.style.display="none";
        }
    }
    function showongoing(){
        if (b.style.display==="none") {
            b.style.display="table";
            a.style.display="none";
            c.style.display="none";
            l2.classList.add("voc");
            l1.classList.remove("voc");
            l3.classList.remove("voc");
        }
        else{
            b.style.display="table";
            a.style.display="none";
            c.style.display="none";
        }
    }
    function showupcoming(){
        if (c.style.display==="none") {
            c.style.display="table";
            b.style.display="none";
            a.style.display="none";
            l3.classList.add("voc");
            l2.classList.remove("voc");
            l1.classList.remove("voc");
        }
        else{
            c.style.display="table";
            a.style.display="none";
            b.style.display="none";
        }
    }
</script>
@endsection