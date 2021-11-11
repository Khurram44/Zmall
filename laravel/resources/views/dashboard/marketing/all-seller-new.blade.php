@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
.voucher-form{
    padding: 0px 20px;
    width: 70%;
}
.form-in{
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
}
.form-title{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex: 3;
}
.form-input{
    display: flex;
    justify-content: flex-start;
    align-items: center;

    flex: 9;
    margin-left: 20px;
}
.form-input input{
    display: table-cell;
    width: 100%;
    padding: 0px 10px;
    color: #333;
    vertical-align: middle;
    background-color: inherit;
    border: 1px solid #ddd;
    outline: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    height: 30px;
    font-size: 14px;
}
.form-input select{
    padding: 0px 10px;
    color: #333;
    vertical-align: middle;
    background-color: inherit;
    border: 1px solid #ddd;
    outline: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    height: 30px;
    font-size: 14px;
}
.v-type{
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 192px;
    height: 64px;
    padding: 12px;
    overflow: hidden;
    box-shadow: 0 0 17px 0 #e2e2e2;
    cursor: pointer;
}
.v-type-inner{

}
.check{
    position: relative;
    top: -20px;
    left: 30px;
    width: 20px;
    color: #fff;
    height: 22px;
    padding: 0px 3px;
    background-color: rgba(0,0,0,.5);
    
    
}
.checked{
    position: relative;
    top: -20px;
    left: 30px;
    width: 20px;
    color: #fff;
    height: 22px;
    padding: 0px 3px;
    color: #fff;
    background-color: #fe9126;
}
.v-code::before{
    content: '' attr(data-domain);
    position: relative;
    top: 15px;
    left: 8px;
    font-weight: normal;
    font-size: 16px;
    display: block;
    line-height: 0;
    color: #999;
    vertical-align: middle;
    border-right: 1px solid #ddd;
    width: 100%;
    text-transform: capitalize;
    font-weight: 500;
}
input[type=datetime-local]{
    width: 40% !important;
}
input[type="datetime-local"]::-webkit-calendar-picker-indicator {
        background: url(https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/calendar-16.png) center/80% no-repeat;
        color: rgba(0, 0, 0, 0);
        opacity: 0.5
    }
#mid-sp{
    padding: 0px 10px;
}
.sub-action{
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.button-s{
    padding: 5px 15px;
    outline: none;
    border: none;
    background-color: #fe9126;
    color: #fff;
    margin-right: 10px;
}
.button-c{
     padding: 5px 15px;
    outline: none;
    border: 1px solid #666;
    background-color: #fff;
    color: #666;
    margin-right: 10px;
}
@media only screen and (max-width: 600px) {
  .col-res{
        padding: 10px 20px;
        margin: auto !important;
        margin-top: 5px !important;
        width: 90% !important;
     }
     .voucher-form{
        width: 100%;   
     }
     .form-in {
        display: flex;
        justify-content: flex-start;
        margin-top: 20px;
    }
    .v-type{
        padding: 5px !important;
    }
    input[type=datetime-local] {
        width: 100% !important;
    }
    .res-input{
        display: flex;
        flex-direction: column;
    }
    .voucher-form{
        padding: 0px;
    }
}
</style>
<div class="row">
    <div class="col-sm-10 col-res" style="padding: 0px 10px; margin-left: 25px; width: 82%;">
        <h3 style="font-size: 22px; color: #333; margin-top:10px;">Create New Discount Promotion</h3>
    </div>
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff; padding-bottom: 200px;">
        <form method="POST" action="{{route('savenewpromotion')}}" enctype="multipart/form-data">

        <h5 style="font-size: 18px; color: #333; font-weight:600;">Basic Information</h5>
        <div class="voucher-form">
            <div class="voucher-form-inner">
                <div class="form-in">
                    <div class="form-title">
                        <span>Promotion Type</span>
                    </div>
                    <div class="form-input">
                        <div class="v-type">
                            <img src="/frontend/img/v-type1.png">
                            <span style="margin-left: 10px;">Shop Voucher</span>
                            <div class="checked">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-in">
                    <div class="form-title">
                        <span>Promotion Name</span>
                    </div>
                    <div class="form-input res-input">
                        <input type="text" name="promotion_name" required>
                        <small>Promotion Name name is not visible to buyers.</small>
                    </div>
                </div>
                <div class="form-in">
                    <div class="form-title">
                        <span>Promotion Period</span>
                    </div>
                    <div class="form-input res-input">
                            <input type="datetime-local" name="starting" required> <span id="mid-sp"> -- TO -- </span> <input type="datetime-local" name="ending" required>
                    </div>
                </div> 
            </div>
        </div>

        <h5 style="font-size: 18px;margin-top: 20px;color: #333; font-weight:600;">Voucher Settings</h5>
        <div class="voucher-form">
            <div class="voucher-form-inner">
                <div class="form-in">
                    <div class="form-title">
                        <span> Discount Type | Amount</span>
                    </div>
                    <div class="form-input">
                        <select name="discount_type">
                            <option value="By Percentage">By Percentage</option>
                        </select><input type="text" name="discount_amount" required>
                    </div>
                </div>
                <div class="form-in">
                    <div class="form-title">
                        <span> Usage Quantity </span>
                    </div>
                    <div class="form-input">
                        <input type="number" name="quantity" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-action">
            <button class="button-s">Submit</button>
            <button formaction="/Vendor/all-sellers" class="button-c">Cancel</button>
        </div>
        </form>
    </div>

</div>

@endsection