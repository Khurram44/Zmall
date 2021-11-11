@extends('layouts.admin')

@section('content')

  <title>Bootstrap Example</title>
 
<style type="text/css">

.container{
    width: 100%;
}

</style>

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Orders</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ORDERS DETAILS</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="container">
                                        <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Full Name</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->first_name}} {{$order_detail->last_name}}</div>
                                </div>

                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Country</b></div>
                                    <div class="col-md-8 col-xs-6">Pakistan</div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>City</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->city}}</div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Shipment Address</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->address}}</div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Payment method</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->payment_method}}</div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Status</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->status}}</div>
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Store Name</b></div>
                                    <div class="col-md-8 col-xs-6"><a href="/store/{{$order_detail->userinfo->id}}">{{$order_detail->userinfo->storeinfo->store_name}}</a></div>
                                </div>

                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Phone Number</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->userinfo->storeinfo->phone}}</div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>Address</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->userinfo->storeinfo->address}}</div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4 col-xs-6"><b>City</b></div>
                                    <div class="col-md-8 col-xs-6">{{$order_detail->userinfo->storeinfo->city}}</div>
                                    </div>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="table-responsive table-desi">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                           
                                            <table class="table table-hover dataTable no-footer" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                     <tr>
                   <th align="center">Name</th>
                   <th align="center text-left">Image</th>
                   <th align="center">Unit Price</th>
                   <th align="center">Quantity</th>
                   <th align="center" class="text-center">Total</th>
               </tr>
                                                </thead>
                                                <tbody>
                                                 @if($order_products->count() > 0)
                                                         @foreach($order_products as $all)
                                                       <tr>
                                                           <!-- <td class="price text-left">ZM-014</td> -->
                                                           <td align="" class="price text-left">
                                                            <a href="{{url('product-detail/'.$all->productinfo->slug)}}">{{ $all->productinfo->title }}</a>
                                                            <br>
                                                           <?= " <b>Color:</b> ".$all->color."  <b>Size:</b> ".$all->size; ?>
                                                           

                                                           </td>
                                                           <td align="center" class="thumb"><img src="{{ asset('/storage/uploads/'.$all->productinfo->images) }}" alt="" style="width: 100px"></td>

                                                           <td align="center" class="text-left">{{ number_format($all->total_price,2) }}</td>
                                                           <td align="center" class="price text-left">{{ $all->quantity }}</td>
                                                           <td align="center" class="price">{{ number_format($all->total_price,2) }}</td>                                  
                                                        </tr>   
                                                        @endforeach
                                                    @endif

                                                </tbody>
                                                    
                                                
                                            </table>
                                           
                                           

                                        </div>
                                        




                                            
                                        </div>
                                            
                                    </div>

                                    <div class="row">

                          <div class="col-md-4 col-xs-6 col-md-offset-6 text-right">

                            <b >SUB TOTAL:</b>

                          </div>

                          <div class="col-md-2 col-xs-5 text-right" style="padding-right: 5%">
                            {{   "Rs ".number_format($order_detail->sub_total,2) }}

                          </div>

                        </div>



                        <div class="row">

                          <div class="col-md-4 col-xs-6 col-md-offset-6 text-right">

                            <b >SHIPPING CHARGES:</b>

                          </div>

                          <div class="col-md-2 col-xs-5 text-right" style="padding-right: 5%">
                            {{   "Rs ".number_format($order_detail->shipment_charges,2) }}

                          </div>

                        </div>



                        <div class="row">

                          <div class="col-md-4 col-xs-6 col-md-offset-6 text-right">

                            <b >TOTAL PRICE:</b>

                          </div>

                          <div class="col-md-2 col-xs-5 text-right" style="padding-right: 5%">
                            {{   "Rs ".number_format($order_detail->grand_total,2) }}

                          </div>

                        </div>
                        <div style="clear: both;height: 50px"></div>
                        <div class="row">

                          <div class="col-md-4 col-xs-6 col-md-offset-6 text-right">


                          </div>

                          <div class="col-md-2 col-xs-5 text-right" style="padding-right: 5%">
                            <button type="button" onclick="window.history.go(-1);" class="btn btn-primary pull-right" style="display: inline-block; ">Back</button>

                          </div>

                        </div>
                        <div style="clear: both;height: 50px"></div>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
       
@endsection
