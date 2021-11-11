
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

    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif


                  <!-- DIV START OF WHISHLISH -->

                <div class="bhoechie-tab-content active">

                  
            <!-- row -->
            <div class="row">
                   <div class="pull-right">
                                <!-- <a href="payment.php" class="primary-btn">Add Another Address</a> -->

<!-- <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn primary-btn" >Add another Address</a> -->



                            </div>
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Payout History</h3>
                            </div>

                             <div class="table-responsive"> 
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                       
                                        <th>Sr No</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Date/Time</th>
                                        
                                        <!-- <th class="text-center" style="width: 10%;">Status</th>              -->                           
                                        

                                    </tr>
                                </thead>
                                <tbody>
                              
                                    <tr>
                                        
                                        <td class="thumb">
                                            <span>1</span>
                                        </td>
                                        <td class="details">
                                            <span>5000</span>
                                        </td>
                                        <td class="price text-left"><span>Jazz Cash</span></td>
                                        <td class="price text-left"><span>With Draw</span></td>
                                        <td class="price text-left"><span>Pending</span></td>
                                        <td class="price text-left"><span>Dec 04, 2020 01:13</span></td>
                               
                                       
                                        <!-- <td class="price text-center"><STRONG>Live</STRONG></td> -->
                                       

                                    </tr>   
                                
                                   
                                   
                                </tbody>

                             
                            </table>
                        </div>
                          
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