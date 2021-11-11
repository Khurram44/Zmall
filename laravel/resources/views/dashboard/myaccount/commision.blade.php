@extends('dashboard.dash-layout.account')
@section('content3')
<style type="text/css">
.month_ac{
    background-color: #5336ca;
    color: #FFFFFF;
    padding: 12px 32px;
    margin: 16px 5px;

    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    font-family: "Montserrat";
    text-transform: uppercase;
    display: inline-block;
    border-radius: 64px;
    outline: none;
    border: none;
}
 .month_ac.active_sub{
    background-color: #fff;
    color: #5336ca;
    border: 1px solid #5336ca;
  }
  .sub_button{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
  }
    .commision-top{
        display: flex;
        justify-content: space-between;
        padding: 20px 0px;
    }
    @media only screen and (max-width: 600px){
       .seller-logo{
           margin-left:20px;
           width:90%;
           overflow-y: scroll;
       }
       .commision-top input{
           width:200px;
       }
    }
        .table-su{
            border: 1px solid #ddd;
            background: #3a3c3b;
            color:  #fff;
            margin: 20px auto;
        }
    .table-su tr{
        border: 0px !important;
    }
    .table-su tr:hover{
        background: rgb(0,0,0,0.2);
        cursor: pointer;
    }
    .table-su tr td{
        border: 0px !important;
        padding: 0 20px;
    }
    .main {
    box-shadow: 0 0 24px rgba(0, 0, 0, 0.15);
    font-family: "Open Sans";
    margin: 0 auto;
}
.price-table {
    width: 100%;
    border-collapse: collapse;
    border: 0 none;
}
.price-table tr:not(:last-child) {
    border-bottom: 1px solid rgba(0, 0, 0, 0.03);
}
.price-table tr td {
    border-left: 1px solid rgba(0, 0, 0, 0.05);
    padding: 8px 24px;
    font-size: 14px;
}
.price-table tr td:first-child {
    border-left: 0 none;
}
.price-table tr td:not(:first-child) {
    text-align: center;
}
.price-table tr:nth-child(even) {
    background-color: #FFFFFF;
}
.price-table tr:hover {
    background-color: #EEEEEE;
}
.price-table .fa-check {
    color: #5336ca;
}
.price-table .fa-times {
    color: #D8D6E3;
}

/* Highlighted column */
.price-table tr:nth-child(2n) td:nth-child(3) {
    background-color: rgba(216, 214, 227, 0.25);
}
.price-table tr td:nth-child(3) {
    background-color: rgba(216, 214, 227, 0.15);
}
.price-table tr td:nth-child(3) .fa-check,
.price-table tr:nth-child(2n) td:nth-child(3) .fa-check {
    /* color: #ffffff; */
}
/**/

.price-table tr.price-table-head td {
    font-size: 16px;
    font-weight: 600;
    font-family: "Montserrat";
    text-transform: uppercase;
}
.price-table tr.price-table-head {
    background-color: #5336ca;
    color: #FFFFFF;
}
.price-table td.price {
    color: #f43f54;
    padding: 16px 24px;
    font-size: 16px;
    font-weight: 600;
    font-family: "Montserrat";
}
.price-table td.price a {
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
}
.price-table td.price-table-popular {
    font-family: "Montserrat";
    border-top: 3px solid #5336ca;
    color: #5336ca;
    text-transform: uppercase;
    font-size: 12px;
    padding: 12px 48px;
    font-weight: 700;
}
.price-table .price-blank {
    background-color: #fafafa;
    border: 0 none;
}
.paymnt-cont{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .pay{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid #ddd;
        width: 90%;
        margin:5px 0px;
        padding: 10px 20px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
    .transaction_id input{
        border: 1px solid #ddd;
        padding: 10px 50px;
        text-align: center;
        color: #666;
        outline: none;
    }

</style>
@if($user->subscription == 0)
<div class="seller-logo" stye="width:65%;">
<div class="main" id="6_months">
    <table class="price-table">
        <tbody>
            <tr>
                <td class="price-blank" colspan="3"></td>
                <td class="price-blank"></td>
                <td class="price-table-popular">Most popular</td>
                <td class="price-blank"></td>
            </tr>
            <tr class="price-table-head">
                <td colspan="3"></td>
                <td>
                    Basic
                    <br><small style="font-size: 12px; font-weight: 400;">Starter plan</small>
                </td>
                <td>
                    Standard
                    <br><small style="font-size: 12px; font-weight: 400;">Long Term Plan</small>
                </td>
                <td class="green-width">
                    Premium
                    <br><small style="font-size: 12px; font-weight: 400;">Our Complete Solution</small>
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
                                <td class="price">
                                    <del style="color: #999; font-size: 14px;">PKR 9,000/6 Months</del>
                                    <br>PKR 6,000/6 Months
                                    <br>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#basicmodal6">Get started</a>
                                </td>
                                <td class="price">
                                    <del style="color: #999; font-size: 14px;">PKR 17,000/year</del>
                                    <br>PKR 15,000/year
                                    <br>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#standardmodal6">Get started</a>
                                </td>
                                <td class="price">
                                    <del style="color: #999; font-size: 14px;">PKR 30,000/year</del>
                                    <br>PKR 20,000/year
                                    <br>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#premiummodal6">Get started</a>
                                </td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Store Front</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Products Upload Limit</td>
                <td>Upto 50</td>
                <td>&#8734;</td>
                <td>&#8734;</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Free Flyers</td>
                <td><i class="fa fa-times"></i></td>
                <td>50 Flayers</td>
                <td>100 Flayers</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Products Promotion</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Vouchers</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Transaction Fee</td>
                <td>1.5%</td>
                <td>0%</td>
                <td>0%</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Discount Codes</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Online Streaming</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Monitor & Track Performance</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Incress sales with in 3 months</td>
                <td>Not Guranteed</td>
                <td>Not Guranteed</td>
                <td>Guranteed</td>
            </tr>    
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Manual Order Creation</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Live Win Gifts By Z-Mall</td>
               <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Identified performance weaknesses</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Get Discout on Resubscribing</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Free Shiping Promotions</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Feature Sellers</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Z-Mall sale campaigns</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>

            <tr>
                <td colspan="3"></td>
                <td class="price">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#basicmodal6">Get started</a>
                </td>
                <td class="price">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#standardmodal6">Get started</a>
                </td>
                <td class="price">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#premiummodal6">Get started</a>
                </td>
            </tr>
        </tbody>
    </table>
</div> 
<div class="main" id="1_year" style="display:none;">
    <table class="price-table">
        <tbody>
            <tr>
                <td class="price-blank" colspan="3"></td>
                <td class="price-blank"></td>
                <td class="price-table-popular">Most popular</td>
                <td class="price-blank"></td>
            </tr>
            <tr class="price-table-head">
                <td colspan="3"></td>
                <td>
                    Basic
                    <br><small style="font-size: 12px; font-weight: 400;">Starter plan</small>
                </td>
                <td>
                    Standard
                    <br><small style="font-size: 12px; font-weight: 400;">Long Time Retention</small>
                </td>
                <td class="green-width">
                    Premium
                    <br><small style="font-size: 12px; font-weight: 400;">Our complete Colution</small>
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
                                <td class="price">
                                    <del style="color: #999; font-size: 14px;">PKR 1000</del>
                                    <br>PKR 6,000/Year
                                    <br>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#basicmodal12">Get started</a>
                                </td>
                                <td class="price">
                                    <del style="color: #999; font-size: 14px;">PKR 1750</del>
                                    <br>PKR 14,400/Year
                                    <br>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#standardmodal12">Get started</a>
                                </td>
                                <td class="price">
                                    <del style="color: #999; font-size: 14px;">PKR 3500</del>
                                    <br>PKR 30,000/Year
                                    <br>
                                     <a href="javascript:void(0)" data-toggle="modal" data-target="#premiummodal12">Get started</a>
                                </td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Marketing</td>
                <td><i class="fa fa-times"></i></td>
                <td>10 Products</td>
                <td>Unlimited Products</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Free Flyers</td>
                <td>05 Flayers</td>
                <td>10 Flayers</td>
                <td>25 Flayers</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Products upload limit </td>
                <td>50 Products</td>
                <td>Unlimited Product</td>
                <td>Unlimited Product</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Vouchers</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Fraud Analysis</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Reports</td>
                <td><i class="fa fa-times"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> 24/7 Support</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Sales Channel</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Abandoned Cart Recovery</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>    
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Manual Order Creation</td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
                <td><i class="fa fa-check"></i></td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Live Stream Product Limit</td>
                <td><i class="fa fa-times"></i></td>
                <td>05 Products/Month</td>
                <td>25 Products/Month</td>
            </tr>
            <tr>
                <td colspan="3"><a href="javascript:void(0);" class="price-table-help"><i class="fa fa-fw fa-question-circle"></i></a> Featured Products In The Story</td>
                <td><i class="fa fa-times"></i></td>
                <td>02 Products/Month</td>
                <td>05 Product/Month</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td class="price">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#basicmodal12">Get started</a>
                </td>
                <td class="price">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#standardmodal12">Get started</a>
                </td>
                <td class="price">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#premiummodal12">Get started</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
@endif


<!--------------IF PENDING------------->
@if($user->subscription == 1)
<div class="seller-logo">
    <div class="sub_pending">
        <table class="table table-su" style="width: 60%;">
            <tr>
                <td colspan="2"><center><h3>Subscription's Detail</h3></center></td>
                
            </tr>
            <tr>
                <td>Package Plan</td>
                <td>{{$user->subscription_package}}</td>
            </tr>
            <tr>
                <td>Package Type</td>
                <td>{{$user->package_type}}</td>
            </tr>
            <tr>
                <td>Price Paid</td>
                <td>Rs. {{$user->subscription_amount}}</td>
            </tr>
            <tr>
                <?php $starting = strtotime($user->starting_date); 
                $ending = strtotime($user->ending_date); 
                $days = ($ending - $starting)/60/60/24;?>
                <td>Days Left</td>
                <td>{{$days}} Days</td>
            </tr>
            <tr>
                <td>Ending on</td>
                <td>{{$user->ending_date}}</td>
            </tr>
            <tr>
                <td>Status</td>
               @if($user->account_status == 'pending') <td style="color: red;"> <b> Pending Approval </b> </td> @endif @if($user->account_status == 'approve') <td style="color: green;"> <b> Approved </b></td>  @endif
            </tr>
        </table>
        
    </div>
</div>
@endif
<!------------------------------------->

<!-----------------Standard Account---------------->
<div class="modal fade" id="basicmodal6" tabindex="-1" role="dialog" aria-labelledby="basicmodal6" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Basic Subscription Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="paymnt-cont">
            <h5 style="color: red; font-weight:bold;">Please send your subscriptio's payment to any of given accounts: </h5>
            <div class="bank_pay pay">
                <h3 style="color:red;">Pay Rs.6000/- via Bank Account</h3>
                <span><b>Bank Name:</b>&nbsp; HBL Bank</span>
                <span><b>Title:</b>&nbsp; Zmall Private Limited</span>
                <span><b>Account#</b>&nbsp; 22927917160103</span>
                <b style="color:red;">IBAN</b><span><span style="color:red;">[ </span>PK55HABB0022927917160103<span style="color:red;"> ]</span></span>
            </div>
            <div class="easy_pay pay">
                <h3 style="color:red;">Pay Rs.6000/- via Easypaisa</h3>
                <span><b>Title:</b>&nbsp; Muhammad Usama</span>
                <span><b>Number</b>&nbsp; +92 313 5969646</span>
            </div>
            <div class="jazz_pay pay">
                <h3 style="color:red;">Pay Rs.6000/- via JazzCash</h3>
                <span><b>Title:</b>&nbsp; </span>
                <span><b>Number</b>&nbsp; +92 </span>
            </div>
            <form method="POST" action="{{ asset('/Vendor/saveYourSubscription') }}" enctype="multipart/form-data">
            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <div class="contact_pay pay">
                    <b>Note:</b> <span>After Payment upload screenshot of your payment reciept here</span>
                    <input type="file" name="screenshot">
                </div>
                <span>OR</span>
                <div class="transaction_id">
                    <input type="text" placeholder="Transaction Id" name="transaction_id">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="type" value="6_month">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="basic" class="btn btn-primary">Send</button>
      </div>
      </form>
        </div>
    </div>
</div>

<div class="modal fade" id="standardmodal6" tabindex="-1" role="dialog" aria-labelledby="standardmodal6" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Standard Subscription Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
        <div class="paymnt-cont">
            <h5 style="color: red; font-weight:bold;">Please send your subscriptio's payment to any of given accounts: </h5>
            <div class="bank_pay pay">
                <h3 style="color:red;">Pay Rs.15,000/- via Bank Account</h3>
                <span><b>Bank Name:</b>&nbsp; HBL Bank</span>
                <span><b>Title:</b>&nbsp; Zmall Private Limited</span>
                <span><b>Account#</b>&nbsp; 22927917160103</span>
                <b style="color:red;">IBAN</b><span><span style="color:red;">[ </span>PK55HABB0022927917160103<span style="color:red;"> ]</span></span>
            </div>
            <div class="easy_pay pay">
                <h3 style="color:red;">Pay Rs.15,000/- via Easypaisa</h3>
                <span><b>Title:</b>&nbsp; Muhammad Usama</span>
                <span><b>Number</b>&nbsp; +92 313 5969646</span>
            </div>
            <div class="jazz_pay pay">
                <h3 style="color:red;">Pay Rs.15,000/- via JazzCash</h3>
                <span><b>Title:</b>&nbsp; </span>
                <span><b>Number</b>&nbsp; +92 </span>
            </div>
            <form method="POST" action="{{ asset('/Vendor/saveYourSubscription') }}" enctype="multipart/form-data">
            <div class="contact_pay pay">
                <b>Note:</b> <span>After Payment upload screenshot of your payment reciept here</span>
                <input type="file" name="screenshot">
            </div>
            <span>OR</span>
            <div class="transaction_id">
                <input type="text" placeholder="Transaction Id" name="transaction_id">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="type" value="6_month">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="standard" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="premiummodal6" tabindex="-1" role="dialog" aria-labelledby="premiummodal6" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Premium Subscription Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="paymnt-cont">
            <h5 style="color: red; font-weight:bold;">Please send your subscriptio's payment to any of given accounts: </h5>
            <div class="bank_pay pay">
                <h3 style="color:red;">Pay Rs 20,000/- via Bank Account</h3>
                <span><b>Bank Name:</b>&nbsp; HBL Bank</span>
                <span><b>Title:</b>&nbsp; Zmall Private Limited</span>
                <span><b>Account#</b>&nbsp; 22927917160103</span>
                <b style="color:red;">IBAN</b><span><span style="color:red;">[ </span>PK55HABB0022927917160103<span style="color:red;"> ]</span></span>
            </div>
            <div class="easy_pay pay">
                <h3 style="color:red;">Pay Rs 20,000/- via Easypaisa</h3>
                <span><b>Title:</b>&nbsp; Muhammad Usama</span>
                <span><b>Number</b>&nbsp; +92 313 5969646</span>
            </div>
            <div class="jazz_pay pay">
                <h3 style="color:red;">Pay Rs 20,000/- via JazzCash</h3>
                <span><b>Title:</b>&nbsp; </span>
                <span><b>Number</b>&nbsp; +92 </span>
            </div>
            <form method="POST" action="{{ asset('/Vendor/saveYourSubscription') }}" enctype="multipart/form-data">
            <div class="contact_pay pay">
                <b>Note:</b> <span>After Payment upload screenshot of your payment reciept here</span>
                <input type="file" name="screenshot">
            </div>
            <span>OR</span>
            <div class="transaction_id">
                <input type="text" placeholder="Transaction Id" name="transaction_id">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="type" value="6_month">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="premium" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!------------------------------------------------->


@endsection