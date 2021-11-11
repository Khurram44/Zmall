
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
                              <!-- SECTION START / END  -->
               
                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">


                        <div class="pull-right">
                                <!-- <a href="payment.php" class="primary-btn">Add Another Address</a> -->

<!-- <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn primary-btn" >Add another Address</a> -->

<a  href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn primary-btn" >Add another Address</a>

                            </div>
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Address Book</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        
                                        <th>Address</th>
                                        
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td class="">Main GT Road, Defense Housing Authority, Sector F DHA Phase II, Islamabad,44000
                                            <!-- <a href="product-page.php">Product Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul> -->
                                        </td>
                                        
                                        <td class="text-center"><i class="fa fa-pencil icon-whish"></i>
                                        <i class="fa fa-trash icon-whish"></i>                                             

                                        </td>
                                        
                                    </tr>




                                    <tr>
                                        
                                        <td class="">Main GT Road, Defense Housing Authority, Sector F DHA Phase II, Islamabad,44000
                                            <!-- <a href="product-page.php">Product Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul> -->
                                        </td>
                                        
                                        <td class="text-center"><i class="fa fa-pencil icon-whish"></i>
                                        <i class="fa fa-trash icon-whish"></i>                                             

                                        </td>
                                        
                                    </tr>


                                   
                                   
                                   
                                </tbody>

                             
                            </table>
                           <!-- btn div was here -->
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     


                </div>
                <!-- SECTION START / END  -->
                
       
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