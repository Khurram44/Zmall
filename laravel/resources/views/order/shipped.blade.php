
@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style type="text/css">
  @media only screen and (max-width: 360px)
  {
.bhoechie-tab-menu {
    display: block !important;
    margin: 0 auto;
    margin-top: 10px;
}
}
@media only screen and (max-width: 375px)
  {
.bhoechie-tab-menu {
    display: block !important;
    margin: 0 auto;
    margin-top: 10px;
}
}
@media only screen and (max-width: 414px)
  {
.bhoechie-tab-menu {
    display: block !important;
    margin: 0 auto;
    margin-top: 10px;
}
}
</style>

   <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
    <div class="row">
      


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                     @include('layouts.left-tab')
            


            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">


                  <!-- DIV START OF WHISHLISH -->

                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">My orders</h3>
                            </div>
                           <!-- ------ROW FOR TABS -->

                            <div class="row">


                                <div class="col-md-12 text-center">
                                    <div class="list-group order-list">
            <a href="{{asset('/orders/placed')}}" class="list-group-item-order  text-center">
            <h4>Placed</h4> </a> 

             <a href="{{asset('/orders/processed')}}" class="list-group-item-order  text-center ">
            <h4>Processed</h4> </a> 
            <a href="{{asset('/orders/shipped')}}" class="list-group-item-order active  text-center">
              <h4>Shipped</h4>
            </a>

              <a href="{{asset('/orders/delivered')}}" class="list-group-item-order   text-center">
              <h4>Delivered</h4>
            
            </a>


            <a href="{{asset('/orders/dispute')}}" class="list-group-item-order  text-center">
              <h4 >Dispute</h4>
            </a>
            <a href="{{asset('/orders/cancelled')}}" class="list-group-item-order  text-center">
              <h4 >Cancelled</h4>
            </a>

  
              </div>
                                    
                                </div>




                                <div class="col-md-12">
                                <table id="Processed-custom-order" class="shopping-cart-table table ">
                                <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th> Date</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Phone</th>
                                        <th class="text-center">Status</th>                                        
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @if($all_orders->count() > 0)
                                    @foreach($all_orders as $all)
                                    <tr>
                                        <td class="details"> 
                                            <a href="{{ asset('/order-details/'.base64_encode($all->order_no)) }}">ZM - {{ $all->order_no }}</a> 
                                        </td>
                                       
                                        <td class="price text-left">{{ date("d M, Y",strtotime($all->added_on)) }}</td>
                                        <td class="price text-left">{{ $all->first_name." ".$all->last_name }}</td>
                                        <td class="price text-left">{{ $all->phone }}</td>
                                        
                                        <td class="price text-center"><STRONG class="label label-info">{{ ucfirst($all->status) }}</STRONG></td>
                                        <td class="text-center">
                                            <a href="{{ asset('/order-details/'.base64_encode($all->order_no)) }}">
                                                <i class="fa fa-eye icon-whish"> </i>
                                            </a>
                                        </td>

                                    </tr>
                                    @endforeach
                                @endif   
                                </tbody>

                             
                            </table>
                             <div class="pull-right">
                            <ul class="store-pages">
                            {{ $all_orders->links() }}
                          </ul>
                        </div>
                                </div>


                                
           
                              </div>
                           <!-- ------ROW FOR TABS -->
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     


                </div>
                <!-- DIV END OF WHISHLISH -->

                
       
            </div>
        </div>

<!--  -->


  </div>
</div>
        <!-- /container -->
    </div>
    <!-- /section -->
<!-- FOOTER -->


@endsection