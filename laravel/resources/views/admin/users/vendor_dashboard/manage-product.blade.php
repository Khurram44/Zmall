@extends('admin.users.vendor_dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
    @media screen and (max-width: 800px){
        .res-pro{
            margin:0px !important;
        }
        .add-pro-top{
            margin:0px !important;
        }
        .add-pro-top b {
            font-weight: 200;
            color: rgb(0,0,0,0.5);
            padding: 0px 20px;
        }
        .res-pro{
            margin: 0px !important;
            height:100%:;
        }
        .pro-add-left {
            position: relative;
            top:0;
            left: 10px;
        }
       .addpro-img img{
           margin-top:50px;
           width:100%;
           height:auto;
       }
       .pro-add-btn{
           display: flex;
           justify-content: center;
           flex-direction:column;
           align-items: center;
       }
    }
</style>
<div class="row">
                
                <div class="col-sm-10">
                    

                    <div class="row res-pro" style="margin-top: 70px;">
                        <div class="col-sm-6">
                            <div class="pro-add-left">
                                <div class="pro-add-desc">
                                    <h4>Download. Bulk edit. Upload.</h4>
                                    <p>Download the excel file, make changes and re-upload.</p>
                                    <p>Stock updates will take immediate effect. All other changes will be reviewed </p>
                                    <p>before they are visible on Zilingo.</p>
                                </div>
                                <br>
                                <form>
                                <div class="pro-add-btn">
                                    <button formaction="/admin/tovendor/approved-products">Edit Price</button>
                                    <button formaction="/admin/tovendor/approved-products">Edit Stock</button>
                                </div>
                                <div class="pro-add-btn">
                                    <button formaction="/admin/tovendor/approved-products">Edit Images</button>
                                    <button formaction="/admin/tovendor/approved-products">Edit Attributess</button>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="addpro-img">
                                <img src="/frontend/img/vendor_dash/inventory_management.png" class="img-fluid">
                            </div>
                        </div>
                    </div>          
                </div>
                
            </div>

@endsection