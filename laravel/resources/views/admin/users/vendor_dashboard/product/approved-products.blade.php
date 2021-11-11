@extends('admin.users.vendor_dashboard.dash-layout.layout')
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
    .activy{
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
    #myTable1_length select{
        padding: 2px 5px;
        border: 1px solid #ddd;
        outline: none;
    }
    #myTable2_length select{
        padding: 2px 5px;
        border: 1px solid #ddd;
        outline: none;
    }
    #myTable3_length select{
        padding: 2px 5px;
        border: 1px solid #ddd;
        outline: none;
    }
    #myTable4_length select{
        padding: 2px 5px;
        border: 1px solid #ddd;
        outline: none;
    }
    .dataTables_filter input{
        padding: 2px 5px;
        border: 1px solid #ddd;
        outline: none;
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
    <div class="col-sm-10" style="width:82%; padding:5px; margin-left:25px; margin-top:5px; background: #fff; height: 830px; overflow: scroll;">
        <div class="pro-top">
            <div class="pro-top-inner">
                <h5>All Products<small>({{$allProductNo}})</small></h5>
                <a href="/admin/tovendor/addproduct"><i class="fa fa-plus-square-o" aria-hidden="true"></i>   Add a New Product</a>
            </div>
            <div class="products-list">
                <ul>
                    <li id="actdiv2" class="activy" onclick="bnshow2();">Live ({{$approved_product_no}})</li>
                    <li id="actdiv5" onclick="bnshow5();">Rejected ({{$rejected_product_no}})</li>
					<li id="actdiv3" onclick="bnshow3();">Deleted ({{$delisted_product_no}})</li>
                    <li id="actdiv4" onclick="bnshow4();">Pending Approval ({{$pending_product_no}})</li>
                </ul>
            </div>
            <div class="pro-tab" id="live">
                <table class="table table-borderless" id="myTable2">
                    <thead>
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @if(!empty($approved_product))
                    @foreach($approved_product as $p)
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}">
                                </div>
                                <div class="tit">
                                    <a>{{$p->title}}</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>{{$p->added_on}}</td>
                          <td>{{$p->sku}}</td>
                           <td>Rs.{{$p->price}}</td>
                            <td>{{$p->quantity}}</td>
                            <td>
                                <div class="action">
                                   <a href="{{url('edit-product/'.$p->id)}}"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
                                   <a href="{{url('Vendor/del-product/'.$p->id)}}" onclick="return ('Are you sure to delete?')"><i class="fa fa-trash-o fa-2x" title="Delete" aria-hidden="true"></i></a>
                                   <a href="{{url('product-detail/'.$p->slug) }}"><i class="fa fa-eye fa-2x" title="View Product's Detail" aria-hidden="true"></i></a>
                                </div>
                            </td>
                    </tr>
                    @endforeach
                        @else
                        <b>No products</b>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="pro-tab" id="pending" style="display: none;">
                <table class="table table-borderless" id="myTable3">
                    <thead>
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    @if(!empty($pending_product))
                    @foreach($pending_product as $p)
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}">
                                </div>
                                <div class="tit">
                                    <a>{{$p->title}}</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>{{$p->added_on}}</td>
                          <td>{{$p->sku}}</td>
                           <td>Rs.{{$p->price}}</td>
                            <td>{{$p->quantity}}</td>
                            <td>
                                <div class="action">
                                   <a href="{{url('edit-product/'.$p->id)}}"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
                                   <a href="{{url('Vendor/del-product/'.$p->id)}}" onclick="return ('Are you sure to delete?')"><i class="fa fa-trash-o fa-2x" title="Delete" aria-hidden="true"></i></a>
                                   <a href="{{url('product-detail/'.$p->slug) }}"><i class="fa fa-eye fa-2x" title="View Product's Detail" aria-hidden="true"></i></a>
                                </div>
                            </td>
                    </tr>
                    @endforeach
                        @else
                        <b>No products</b>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="pro-tab" id="delisted" style="display: none;">
                <table class="table table-borderless" id="myTable4">
                    <thead>
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Price</th>
                        <th>Stock</th>
                    </tr>
                    </thead>
                    @if(!empty($delisted_product))
                    @foreach($delisted_product as $p)
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}">
                                </div>
                                <div class="tit">
                                    <a>{{$p->title}}</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>{{$p->added_on}}</td>
                          <td>{{$p->sku}}</td>
                           <td>Rs.{{$p->price}}</td>
                            <td>{{$p->quantity}}</td>
            
                    </tr>
                    @endforeach
                        @else
                        <b>No products</b>
                        @endif
                    </tbody>
                </table>
            </div>
			<div class="pro-tab" id="rejected" style="display: none;">
                <table class="table table-borderless" id="myTable5">
                    <thead>
                    <tr>
                        <th> <input type="checkbox" name="" id="al" style="margin: 0px;"> <label for="al" style="margin: 0px 5px;">All</label></th>
                        <th>Title</th>
                        <th>Added On</th>
                        <th>SKU</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Rejection Reason</th>
                    </tr>
                    </thead>
                    @if(!empty($rejected_product))
                    @foreach($rejected_product as $p)
                    <tbody>
                    <tr>
                        <td><input type="checkbox" name=""></td>
                         <td>
                            <div class="img-title">
                                <div class="ti-img">
                                    <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}">
                                </div>
                                <div class="tit">
                                    <a>{{$p->title}}</a>
                                </div>
                            </div>
                            
                        </td>
                          <td>{{$p->added_on}}</td>
                          <td>{{$p->sku}}</td>
                           <td>Rs.{{$p->price}}</td>
                            <td>{{$p->quantity}}</td>
                            <td>{{$p->reject_reason}}</td>
            
                    </tr>
                    @endforeach
                        @else
                        <b>No products</b>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>     
    </div>            
</div>
<script>
    $(document).ready( function () {
    $('#myTable1').DataTable();
    $('#myTable2').DataTable();
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();
	$('#myTable5').DataTable();
} );
    </script>
<script type="text/javascript">
    var b = document.getElementById("live");
    var c = document.getElementById("delisted");
    var f = document.getElementById("pending");
	var g = document.getElementById("rejected");
    var y = document.getElementById("actdiv2");
    var z = document.getElementById("actdiv3");
    var t = document.getElementById("actdiv4");
	var w = document.getElementById("actdiv5");
    function bnshow2(){
          if (b.style.display === "none") {
            b.style.display = "block";
            c.style.display = "none";
            f.style.display = "none";
			g.style.display = "none";
            y.classList.add("activy");
            z.classList.remove("activy");
            t.classList.remove("activy");
			w.classList.remove("activy");
          } 
          else{
            b.style.display = "block";
            c.style.display = "none";
            f.style.display = "none";
			g.style.display = "none";
            y.classList.remove("activy");
            z.classList.remove("activy");
            t.classList.remove("activy");
			w.classList.remove("activy");
          }
        }
    function bnshow3(){      
          if (c.style.display === "none") {
            c.style.display = "block";
            b.style.display = "none";
            f.style.display = "none";
			g.style.display = "none";
            z.classList.add("activy");
            y.classList.remove("activy");
            t.classList.remove("activy");
			w.classList.remove("activy");
          } 
          else{
            c.style.display = "block";
            b.style.display = "none";
            f.style.display = "none";
			g.style.display = "none";
            z.classList.remove("activy");
            y.classList.remove("activy");
            t.classList.remove("activy");
			w.classList.remove("activy");
          }
        }
        function bnshow4(){      
          if (f.style.display === "none") {
            f.style.display = "block";
            c.style.display = "none";
            b.style.display = "none";
			g.style.display = "none";
            t.classList.add("activy");
            y.classList.remove("activy");
            z.classList.remove("activy");
			w.classList.remove("activy");
          } 
          else{
            c.style.display = "none";
            b.style.display = "none";
            f.style.display = "block";
			g.style.display = "none";
            t.classList.remove("activy");
            y.classList.remove("activy");
            z.classList.remove("activy");
			w.classList.remove("activy");
          }
        }
		function bnshow5(){      
          if (g.style.display === "none") {
            g.style.display = "block";
			f.style.display = "none";
            c.style.display = "none";
            b.style.display = "none";
            t.classList.remove("activy");
            y.classList.remove("activy");
            z.classList.remove("activy");
			w.classList.add("activy");
          } 
          else{
            c.style.display = "none";
            b.style.display = "none";
            f.style.display = "none";
			g.style.display = "block";
            t.classList.remove("activy");
            y.classList.remove("activy");
            z.classList.remove("activy");
			w.classList.remove("activy");
          }
        }
</script>
@endsection