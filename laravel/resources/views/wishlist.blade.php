
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
                                <h3 class="title">Whishlist items</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                         <!-- <th><input type="checkbox" id="selectall"/></th> -->
                                        <th>Product</th>
                                        <th>name</th>
                                        <th class="text-center">Price</th>
                                        
                                        <th class="text-center">aCTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @foreach($wishlist as $w_list)
                                    <tr>
                                        <!-- <td><input type="checkbox" class="singlechkbox" name="username" value="1"/></td> -->
                                        <td class="thumb"><img src="{{asset('storage/uploads/'.$w_list->productinfo->images)}}" alt=""></td>
                                        <td class="details">
                                            <a href="{{asset('product-detail/'.$w_list->productinfo->slug)}}">{{$w_list->productinfo->title}}</a>
                                            <!-- <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul> -->
                                        </td>
                                        <td class="price text-center"><strong>{{$w_list->productinfo->price}}</strong></td>
                                        

                                        <td class="text-center"><a href="{{url('delete-from-wishlist/'.$w_list->id)}}"  title="Remove"><i class="fa fa-close icon-whish"></i></a>                                                                                        

                                        </td>                                        
                                    </tr> 
                                    @endforeach  

                                       <!-- <tr>
                                        <td><input type="checkbox" class="singlechkbox" name="username" value="1"/></td>
                                        <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="product-page.php">Product Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center"><strong>32.50</strong></td>
                                        

                                        <td class="text-center"><i class="fa fa-close icon-whish"></i>                                                                                        

                                        </td>                                        
                                    </tr> -->  

                                      <!--  <tr>
                                        <td><input type="checkbox" class="singlechkbox" name="username" value="1"/></td>
                                        <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="product-page.php">Product Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center"><strong>32.50</strong></td>
                                        

                                        <td class="text-center"><i class="fa fa-close icon-whish"></i>                                                                                        

                                        </td>                                        
                                    </tr>      -->                             
                                                  
                                </tbody>

                             
                            </table>
                           <div class="pull-right">
                                <!-- <a href="payment.php" class="primary-btn"><i class="fa fa-shopping-cart icon-whish"></i>Place Order</a> -->
                                <!-- <button onclick="window.location.href='viewcart.php';" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
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