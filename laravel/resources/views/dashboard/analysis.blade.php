@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
.a-expstock-inner{
  padding: 0;
  display: block;
}
#myTable2{
  width: 100% !important;
}
  .a-top-right select{
    border: 1px solid #ddd;
    outline: none;
    padding: 2px 5px;
    background: rgb(0,0,0,0.05);

  }
  .img-title{
      display: flex;
      align-items: center;
  }
  @media screen and (max-width:  800px){
      .a-top-seller, .a-stock-pro, .a-expstock {
            background: #fff;
            padding: 10px;
            width: 90%;
        }
  .col-res{
    width: 100% !important;
    margin-right: 0px !important;
    padding: 0px 5px !important;
    margin-left: 20px !important;
  }
  .a-top-left h4 {
      font-size: 12px !important;
      font-weight: 600 !important;
      width: 150px !important;
  }
  .a-top-right{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-right: 20px;
  }
  .a-top-right span{
    padding-right: 20px;
  }
}
</style>
  
  <div class="row">
        <div class="col-sm-10 col-res" style="padding: 5px; margin-left: 20px; width: 83%;">
          <div class="a-top-seller">
            <div class="a-top-bar">
              <div class="a-top-bar-inner">
                <div class="a-top-left">
                  <h4>Top Selling Products</h4>
                </div>
                <div class="a-top-right">
                  <span>1 April, 2021-7 April 2021</span>
                  <select>
                    <option>This Month</option>
                    <option>This week</option>
                    <option>Last Month</option>
                    <option>Last Week</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="a-top-seller-inner">
              <b>No Products!</b>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-res" style="padding: 5px; margin-left: 20px; width: 83%;">
          <div class="a-stock-pro">
            <div class="a-top-bar">
              <div class="a-top-bar-inner">
                <div class="a-top-left">
                  <h4 style="color: #fe9126;">Out Of Stock Products (Sorted By Units Sold)</h4>
                </div>
                <div class="a-top-right">
                  <span>1 April, 2021-7 April 2021</span>
                  <select>
                    <option>This Month</option>
                    <option>This week</option>
                    <option>Last Month</option>
                    <option>Last Week</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="outofstock">
              <table class="table table-borderless display" id="myTable1">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Added On</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @if(!empty($outOfStock))
                        @foreach($outOfStock as $p)
                        <tbody>
                        <tr>
                            
                             <td>
                                <div class="img-title">
                                    <div class="ti-img">
                                        <img style="width: 50px;" src="{{ asset('frontend/storage/uploads/'.$p->images) }}">
                                    </div>
                                    <div class="tit">
                                        <a>{{$p->title}}</a>
                                    </div>
                                </div>
                                
                            </td>
                              <td>{{$p->added_on}}</td>
                               <td>Rs.{{$p->price}}</td>
                                <td>{{$p->quantity}}</td>
                                <td>
                                    <div class="action">
                                       <a href="{{url('edit-product/'.$p->id)}}"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
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
          </div>
        </div>
        <div class="col-sm-10 col-res" style="padding: 5px; margin-left: 20px; width: 83%;">
          <div class="a-expstock">
            <div class="a-top-bar">
              <div class="a-top-bar-inner">
                <div class="a-top-left">
                  <h4>Expected To Be Out Of Stock (In Next 10-15 Days)</h4>
                </div>
                <div class="a-top-right">
                  <span>1 April, 2021-7 April 2021</span>
                  <select>
                    <option>This Month</option>
                    <option>This week</option>
                    <option>Last Month</option>
                    <option>Last Week</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="a-expstock-inner">
              <table class="table table-borderless display" id="myTable2">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Added On</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @if(!empty($soonOutOfStock))
                        @foreach($soonOutOfStock as $p)
                        <tbody>
                        <tr>
                            
                             <td>
                                <div class="img-title">
                                    <div class="ti-img">
                                        <img style="width: 50px;" src="{{ asset('frontend/storage/uploads/'.$p->images) }}">
                                    </div>
                                    <div class="tit">
                                        <a>{{$p->title}}</a>
                                    </div>
                                </div>
                                
                            </td>
                              <td>{{$p->added_on}}</td>
                               <td>Rs.{{$p->price}}</td>
                                <td>{{$p->quantity}}</td>
                                <td>
                                    <div class="action">
                                       <a href="{{url('edit-product/'.$p->id)}}"><i class="fa fa-pencil-square-o fa-2x" title="Edit" aria-hidden="true"></i></a>
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
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready( function () {
          $('#myTable1').DataTable();
          $('#myTable2').DataTable();
      } );
      </script>
@endsection