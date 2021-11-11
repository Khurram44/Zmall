
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

                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif


                  <!-- DIV START OF WHISHLISH -->

                <div class="bhoechie-tab-content active">

                  
            <!-- row -->
            <div class="row">
                   <div class="pull-right m-pr-15 m-d-f">
                                <!-- <a href="payment.php" class="primary-btn">Add Another Address</a> -->

<!-- <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn primary-btn" >Add another Address</a> -->

<a  href="{{route('addproduct1')}}"  class="btn primary-btn m-zi-9"  >Add Products</a>

                            </div>
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Products</h3>
                            </div>

                             <div class="table-responsive"> 
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                       
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        
                                        <!-- <th class="text-center" style="width: 10%;">Status</th>              -->                           
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                               @foreach($products as $p)
                                    <tr>
                                        
                                        <td class="thumb">
                                            <img src="{{  url('public/frontend/storage/uploads/'.$p->images) }}" alt="">
                                        </td>
                                        <td class="details">
                                            <a href="{{url('product-detail/'.$p->slug)}}"><?= wordwrap($p->title, 20, "<br>", true); ?></a>
                                            <ul>
                                                <li><span>{{$p->size}}</span></li>
                                                <li><span>{{$p->color}}</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">{{$p->categoryinfo->name}}</td>
                                        <td class="price text-left">{{ "PKR ".number_format($p->price,2) }}</td>
                                        <td class="price text-left">{{$p->quantity}}</td>
                               
                                       
                                        <!-- <td class="price text-center"><STRONG>Live</STRONG></td> -->
                                        <td class="text-center">
                                            <a href="{{url('edit-product/'.$p->id)}}"><i class="fa fa-pencil icon-whish"></i></a>
                                            <a href="{{url('del-product/'.$p->id)}}"  onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash icon-whish"></i></a>
                                            </td>

                                    </tr>   
                                    @endforeach
                                    
                                   
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