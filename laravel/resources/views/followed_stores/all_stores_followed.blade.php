
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
                              <!-- SECTION START / END  -->

               
                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        
@if(session()->has('status'))
<div class="alert alert-success">
    {{session()->get('status')}}
</div>
@endif


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
                                        
                                        <th>S.No</th>
                                        <th>Store Name</th>
                                        
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($followed_stores as $index=>$fs)
                               
                                    <tr>
                                        
                                        <td>{{$index+1}}</td>
                                        <td>@if(!empty($fs->user_info->business_name)) {{$fs->user_info->business_name}} @endif</td>
                                        
                                        <td class="text-center">Followed</td>


                                        </tr>                                  
                                   @endforeach

                                   
                                   
                                   
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

<!-- Modal -->



@endsection