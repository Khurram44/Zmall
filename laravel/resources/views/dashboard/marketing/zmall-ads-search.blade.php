@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
.voucher-form{
    padding: 0px 20px;
    width: 80%;
}
.form-in{
    display: flex;
    justify-content: space-around;
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
    height: 64px;
    padding: 12px;
    overflow: hidden;
    cursor: pointer;
    border: 1px solid #e5e5e5;
}
.voc-active{
    box-shadow: 0 0 17px 0 #e2e2e2;
}
.check{
    position: relative;
    top: -20px;
    width: 20px;
    color: #fff;
    height: 22px;
    padding: 0px 3px;
    background-color: rgba(0,0,0,.5);
    
    
}
.act-chk{
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
    margin-top: 60px;
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
.captions{
    display: flex;
    flex-direction: column;
    align-items: center;
}
small{
    color: #777;
}
.all-applicable{
    display: flex;

}
.all-applicable li{
    cursor: pointer;
    list-style: none;
}
.table thead tr th{
        padding-top: 10px;
        padding-bottom: 11px;
        line-height: 18px;
        color: #666;
        font-weight: normal;
}
.modal-dialog{
    width: 900px;
    margin: 50px auto;
}
.table .dataTables_length select{
    border: 1px solid #ddd;
}
.table .dataTables_filter input {
    border: 1px solid #ddd;
    
}
.prev-pro ul{
    display: inline-block;
}
.prev-pro ul li{
     float: left;
    list-style: none;
    border: 1px solid #ddd;
    height: 170px;
    width: 150px;
    padding: 10px;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
    align-content: center;
    flex: 3;
    margin: 5px;
}
.prev-pro ul li a{
    text-decoration: none;
    color: #666;
    text-align: center;
}
.prev-pro ul li img{
    height: 80px;
    width: 70px;
    margin: 5px auto;
    object-fit: contain;
}
.prev-pro ul li p{
    height: 20px;
    color: #666;
    text-overflow: ellipsis;
overflow: hidden;
white-space: nowrap;
}
.prev-pro ul li b{
    text-overflow: ellipsis;
overflow: hidden;
white-space: nowrap;
    height: 20px;
    color: #333;
}
#show_product{
    margin-top: 20px;
}
#show_product span{
    position: relative;
    top: -10px;
    left: 125px;
    border: 0px;
    outline: none;
    cursor: pointer;
}
.table tbody tr.acttable{
    background: lightcyan;
}
.pros-list{
    float: left;
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
        <h3 style="font-size: 22px; color: #333; margin-top:10px;">Create Search Ads</h3>
    </div>
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff; padding-bottom: 50px;">

        <h5 style="font-size: 18px; color: #333; font-weight:600;">Basic Information</h5>
        <div class="voucher-form">
            <div class="voucher-form-inner">
                <div class="form-in">
                    <div class="form-title">
                        <span>Ad Type</span>
                    </div>
                    <div class="form-input">
                        <div class="v-type voc-active" id="act-shop"> 
                            <img src="/frontend/img/v-type1.png">
                            <span style="margin-left: 10px;">Search Ads</span>
                            <div class="check act-chk" id="chk-shop">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product">
                    
                    <form method="POST" action="{{route('savenewvoucher')}}" enctype="multipart/form-data">
                        <div class="form-in">
                            <div class="form-title">
                                <span>Budget</span>
                            </div>
                            <div class="form-input">
                                <div class="captions res-input">
                                    <input type="number" name="search_budget" required>
                                     <small>Enter your total budget in PKR.</small>
                                </div>
                                
                            </div>
                        </div>
                       
                        <div class="form-in">
                            <div class="form-title">
                                <span>End Time Period</span>
                            </div>
                            <div class="form-input res-input">
                                    <input type="datetime-local" name="starting" required> <span id="mid-sp"> -- TO -- </span> <input type="datetime-local" name="ending" required>
                            </div>
                        </div>
                        <h5 style="font-size: 18px;margin-top: 20px; color: #333; font-weight:600;">Campaign Settings</h5>
                        <div class="voucher-form">
                                <div class="voucher-form-inner">
                                   <div class="form-in">
                                    <div class="form-title">
                                        <span> Add Products </span>
                                    </div>
                                    <div class="form-input">
                                        <div class="captions">
                                            <button class="button-s" type="button" data-toggle="modal" data-target="#addproduct">Add Products</button>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>
                        </div>
                        <div class="sub-action">
                            <button class="button-s" name="V_shop">Submit</button>
                            <button formaction="/Vendor/zmall-ads" class="button-c">Cancel</button>
                        </div>
                     </form>
                
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="addproductTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Select Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-borderless" id="myTable">
                <thead>
                    <tr>
                        <th>All</th>
                        <th>S N0</th>
                        <th>Product Name</th>
                        <th>Price (PKR)</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a = 0; ?>
                    @if(!empty($products))
                    @foreach($products as $p)
                    <?php $a++;?>
                    
                    <tr class="" id="{{$a}}">
                        <td><input type="checkbox" name=""  onclick="showdata('{{$a}}','{{$p->id}}','{{$p->images}}','{{$p->title}}','{{$p->price}}','{{$p->quantity}}');"></td>
                        <td>{{$a}}</td>
                        <td id="title">{{$p->title}}</td>
                        <td id="price">{{$p->price}}</td>
                        <td id="stock">{{$p->quantity}}</td>
                    </tr>
                    
                    @endforeach
                    @endif
                </tbody>
                
         </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="button-c" data-dismiss="modal">Close</button>
        <button type="button" class="button-s" data-dismiss="modal">Add</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
$('#myTable').DataTable();
} );
</script>
<script type="text/javascript">
    var a= document.getElementById('product');
    var b= document.getElementById('shop');
    var ca= document.getElementById('chk-product');
    var cb= document.getElementById('chk-shop');
    var aa= document.getElementById('act-product');
    var ab= document.getElementById('act-shop')
    function product(){
        if (a.style.display==="none") {
        a.style.display="block";
        b.style.display="none";
        aa.classList.add("voc-active");
        ab.classList.remove("voc-active");
        ca.classList.add("act-chk");
        cb.classList.remove("act-chk");
        }
        else{
            a.style.display="block";
            b.style.display="none";
            aa.classList.add("voc-active");
        ab.classList.remove("voc-active");
        ca.classList.add("act-chk");
        cb.classList.remove("act-chk");
        }
    }
    function shop(){
        if (b.style.display==="none") {
        a.style.display="none";
        b.style.display="block";
        ab.classList.add("voc-active");
        aa.classList.remove("voc-active");
        cb.classList.add("act-chk");
        ca.classList.remove("act-chk");
        }
        else{
            a.style.display="none";
            b.style.display="block";
            ab.classList.add("voc-active");
            aa.classList.remove("voc-active");
            cb.classList.add("act-chk");
            ca.classList.remove("act-chk");
           
        }

    }
    function showdata(id,p_id,pic,title,price,stock){
        $('#show_product').append(`<div class="pros-list" id='c`+id+`'><li><a>
            <input type="hidden" name="id[]" value="`+p_id+`"/>
            <span onclick="clspro(c`+id+`);">x</span>
            <img src="{{ asset('/public/frontend/storage/uploads/`+pic+`') }}" alt="Image" class="img-responsive" alt="">
            <b>`+title+`</b>
            <p> Rs. `+price+`</p>
            </a></li></div>`);
        document.getElementById(id).style.backgroundColor = '#ddd';
    }

</script> 
<script type="text/javascript">
    function clspro(c){
        c.innerHTML = null;

        
    }
</script>
@endsection