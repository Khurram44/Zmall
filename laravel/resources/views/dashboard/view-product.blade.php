@extends('dashboard.dash-layout.layout')
@section('content')
<style>
    .pro-top-inner{
        display: flex;
        justify-content: space-between;
        padding: 20px 10px;
    }
    .pro-top-inner h5{
        font-weight: 600;
        font-size: 20px;
    }
    .pro-top-inner h5 small{
       font-size: 100%;
       margin-left: 5px;
    }
    .pro-top-inner a{
        text-decoration: none;
        color: #fff;
        background: #fe9126;
        padding: 10px 40px;
    }
    .products-list ul{
        display: flex;
        padding-inline-start: 0px;
    }
    .products-list ul li{
        list-style: none;
        font-size: 16px;
        margin-left: 15px;
        cursor: pointer;
        padding-bottom: 5px;
    }
    .active{
        color: #fe9126;
        font-weight: 700;
        border-bottom: 2px solid #fe9126;
    }
    .action{
            display: flex;
    }
    .action a{
        color: #3f3f3f;
        margin-left: 5px;
    }
    .action a:hover{
        color: #fe9126;
    }
    .img-title{
        display: flex;
        align-items: center;
    }
    .ti-img{
        border: 1px solid #ddd;
        height: 80px;
        width: 60px;
    }
    .ti-img img{
        height: 80px;
        width: 60px;
        object-fit: contain;
    }
    .table tr th{
        vertical-align: middle !important;
    }
    .table tr td{
        vertical-align: middle !important;
    }
    .table tr{
        border-bottom: 1px solid #ddd;
    }
    .tit{
        margin-left: 10px;
    }
    .tit a{
        color: #2f2f2f;
        font-weight: 600;
    }
    .fa-2x {
    font-size: 1.3em;
    }
    @media screen and (max-width:  800px){
        .pro-top-inner{
            padding: 20px 10px;
        }
        .pro-top-inner a{
            padding: 2px 5px;
        }
        .pro-top-inner h5{
            margin: 0px;
        }

    }
        
</style>
<div class="row">
    <div class="col-sm-10" style="width:82%; padding:5px; margin-left:25px; margin-top:5px; background: #fff; height: 830px;">
        <div class="pro-top">
            <div class="pro-top-inner">
                <h5>All Products<small>(42)</small></h5>
                <a href="/add-prouct"><i class="fa fa-plus-square-o" aria-hidden="true"></i>   Add a New Product</a>
            </div>
            <div class="products-list">
                <ul>
                    <li id="actdiv1" class="active" onclick="bnshow1();">All (42)</li>
                    <li id="actdiv2" onclick="bnshow2();">Live (21)</li>
                    <li id="actdiv3" onclick="bnshow3();">Delisted (12)</li>
                </ul>
            </div>
            <div class="pro-tab" id="all">
                <table class="table table-borderless">
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="https://zmall.pk/public/frontend/storage/uploads/210315054521WhatsAppImage2021-03-10at9.16.34AM(1).jpeg">
                                </div>
                                <div class="tit">
                                    <a href="#">1Ponds Age Mirac...</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>21-02-1021</td>
                          <td>zmall4545</td>
                           <td>Footwear</td>
                           <td>Rs.200</td>
                            <td>10</td>
                            <td>
                                <div class="action">
                                   <a href="#"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
                                   <a href="#"><i class="fa fa-trash-o fa-2x" title="Delete" aria-hidden="true"></i></a>
                                   <a href="#"><i class="fa fa-eye fa-2x" title="View Product's Detail" aria-hidden="true"></i></a>
                                </div>
                            </td>
                    </tr>
                </table>
            </div>
            <div class="pro-tab" id="live" style="display: none;">
                <table class="table table-borderless">
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="https://zmall.pk/public/frontend/storage/uploads/210315054521WhatsAppImage2021-03-10at9.16.34AM(1).jpeg">
                                </div>
                                <div class="tit">
                                    <a href="#">2Ponds Age Mirac...</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>21-02-1021</td>
                          <td>zmall4545</td>
                           <td>Footwear</td>
                           <td>Rs.200</td>
                            <td>10</td>
                            <td>
                                <div class="action">
                                   <a href="#"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
                                   <a href="#"><i class="fa fa-trash-o fa-2x" title="Delete" aria-hidden="true"></i></a>
                                   <a href="#"><i class="fa fa-eye fa-2x" title="View Product's Detail" aria-hidden="true"></i></a>
                                </div>
                            </td>
                    </tr>
                </table>
            </div>
            <div class="pro-tab" id="delisted" style="display: none;">
                <table class="table table-borderless">
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="https://zmall.pk/public/frontend/storage/uploads/210315054521WhatsAppImage2021-03-10at9.16.34AM(1).jpeg">
                                </div>
                                <div class="tit">
                                    <a href="#">3Ponds Age Mirac...</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>21-02-1021</td>
                          <td>zmall4545</td>
                           <td>Footwear</td>
                           <td>Rs.200</td>
                            <td>10</td>
                            <td>
                                <div class="action">
                                   <a href="#"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
                                   <a href="#"><i class="fa fa-trash-o fa-2x" title="Delete" aria-hidden="true"></i></a>
                                   <a href="#"><i class="fa fa-eye fa-2x" title="View Product's Detail" aria-hidden="true"></i></a>
                                </div>
                            </td>
                    </tr>
                </table>
            </div>
        </div>     
    </div>            
</div>

<script type="text/javascript">
    var a = document.getElementById("all");
    var b = document.getElementById("live");
    var c = document.getElementById("delisted");
    var x = document.getElementById("actdiv1");
    var y = document.getElementById("actdiv2");
    var z = document.getElementById("actdiv3");
    function bnshow1(){
          if (a.style.display === "none") {
            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "none";
            x.classList.add("active");
            y.classList.remove("active");
            z.classList.remove("active");
          } 
          else{
            a.style.display = "block";
            b.style.display = "none";
            c.style.display = "none";
            x.classList.remove("active");
            y.classList.remove("active");
            z.classList.remove("active");
          }
        }
    function bnshow2(){
          if (b.style.display === "none") {
            b.style.display = "block";
            a.style.display = "none";
            c.style.display = "none";
            y.classList.add("active");
            x.classList.remove("active");
            z.classList.remove("active");
          } 
          else{
            b.style.display = "block";
            a.style.display = "none";
            c.style.display = "none";
            y.classList.remove("active");
            x.classList.remove("active");
            z.classList.remove("active");
          }
        }
    function bnshow3(){      
          if (c.style.display === "none") {
            c.style.display = "block";
            b.style.display = "none";
            a.style.display = "none";
            z.classList.add("active");
            y.classList.remove("active");
            x.classList.remove("active");
          } 
          else{
            c.style.display = "block";
            b.style.display = "none";
            a.style.display = "none";
            z.classList.remove("active");
            y.classList.remove("active");
            x.classList.remove("active");
          }
        }
</script>

@endsection