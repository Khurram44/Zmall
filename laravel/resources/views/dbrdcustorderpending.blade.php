
@extends('layouts.app')

@section('content')
@include('layouts.second-nav')


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
                        <div class="order-summary clearfix ">
                            <div class="section-title">
                                <h3 class="title">My orders</h3>
                            </div>
                          


                           <!-- ------ROW FOR TABS -->

                            <div class="row">


                                <div class="col-md-12 text-center">
                                    <div class="list-group order-list">

             <a href="dbrdvendor-order.php" class="list-group-item-order  text-center ">
            <h4>Processed</h4> </a> 
            
                         <a href="dbrdvendor-order-pending.php" class="list-group-item-order  text-center active">
            <h4>Pending</h4> </a> 
               
                <a href="dbrdvendor-order-shipped.php" class="list-group-item-order   text-center">
                  <h4>Shipped</h4>
                </a>

                  <a href="dbrdvendor-order-delivered.php" class="list-group-item-order   text-center">
                  <h4>Delivered</h4>
                
                </a>


                <a href="dbrdvendor-order-dispute.php" class="list-group-item-order  text-center">
                  <h4 >Dispute</h4>
                </a>

  
              </div>
                                    
                                </div>




                                <div class="col-md-12">
                                <table id="vender-order-table" class="shopping-cart-table table ">
                                <thead>
                                    <tr>
                                        <th>Order No</th>
                                        <th> Date</th>
                                        <th class="text-left">Store</th>
                                        <th class="text-center">Status</th>                                        
                                        <th class="text-center">aCTIONs</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <td class="price text-left">MZ-156</td>
                                        <td class="price text-left">October08 20200</td>
                                        <td class="details"> <a href="">Smith</a> </td>
                                        <td class="price text-center"><strong class="label label-info">Pending</strong></td>
                                      <td class="text-center"><a href="vender-order-details.php"><i class="fa fa-eye icon-whish"></i></a></td>

                                    </tr>   
                                     <tr>
                                        <td class="price text-left">MZ-156</td>
                                        <td class="price text-left">October08 20200</td>
                                        <td class="details"> <a href="">Smith</a> </td>
                                        <td class="price text-center"><strong class="label label-info">Pending</strong></td>
                                      <td class="text-center"><a href="vender-order-details.php"><i class="fa fa-eye icon-whish"></i></a></td>

                                    </tr>   
                                     <tr>
                                        <td class="price text-left">MZ-156</td>
                                        <td class="price text-left">October08 20200</td>
                                        <td class="details"> <a href="">Smith</a> </td>
                                        <td class="price text-center"><strong class="label label-info">Pending</strong></td>
                                      <td class="text-center"><a href="vender-order-details.php"><i class="fa fa-eye icon-whish"></i></a></td>

                                    </tr>   
                                     <tr>
                                        <td class="price text-left">MZ-156</td>
                                        <td class="price text-left">October08 20200</td>
                                        <td class="details"> <a href="">Smith</a> </td>
                                        <td class="price text-center"><strong class="label label-info">Pending</strong></td>
                                      <td class="text-center"><a href="vender-order-details.php"><i class="fa fa-eye icon-whish"></i></a></td>

                                    </tr>   
                                     <tr>
                                        <td class="price text-left">MZ-156</td>
                                        <td class="price text-left">October08 20200</td>
                                        <td class="details"> <a href="">Smith</a> </td>
                                        <td class="price text-center"><strong class="label label-info">Pending</strong></td>
                                      <td class="text-center"><a href="vender-order-details.php"><i class="fa fa-eye icon-whish"></i></a></td>

                                    </tr>   
                                   
                                </tbody>

                             
                            </table>
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