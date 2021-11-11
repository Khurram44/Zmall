
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
                   <div class="pull-right">
                                <!-- <a href="payment.php" class="primary-btn">Add Another Address</a> -->

<!-- <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn primary-btn" >Add another Address</a> -->

<a  href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn primary-btn" >Add Products</a>

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
                                        <th class="text-center">aCTION</th>

                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="product-page.php">Shoes</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">Garments</td>
                                        <td class="price text-left">250 PKR</td>
                                        <td class="price text-left">25</td>
                               
                                       
                                        <!-- <td class="price text-center"><STRONG>Live</STRONG></td> -->
                                        <td class="text-center">
                                            <a href="vendor_editproduct.php"><i class="fa fa-pencil icon-whish"></i></a>
                                            <a href="#"><i class="fa fa-trash icon-whish"></i></a>
                                            </td>

                                    </tr>   
                                    <tr>
                                       
                                        <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="product-page.php">Shoes</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">Garments</td>
                                        <td class="price text-left">250 PKR</td>
                                        <td class="price text-left">25</td>

                                       <td class="text-center">
                                            <a href="vendor_editproduct.php"><i class="fa fa-pencil icon-whish"></i></a>
                                            <a href="#"><i class="fa fa-trash icon-whish"></i></a>
                                            </td>

                                    </tr>  
                                    <tr>
                                       
                                        <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="product-page.php">Shoes</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">Garments</td>
                                        <td class="price text-left">250 PKR</td>
                                        <td class="price text-left">25</td>
                                       <td class="text-center">
                                            <a href="vendor_editproduct.php"><i class="fa fa-pencil icon-whish"></i></a>
                                            <a href="#"><i class="fa fa-trash icon-whish"></i></a>
                                            </td>
                                    </tr>  
                                    <tr>
                                 
                                        <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="product-page.php">Shoes</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">Garments</td>
                                        <td class="price text-left">250 PKR</td>
                                        <td class="price text-left">25</td>
                                       <td class="text-center">
                                            <a href="vendor_editproduct.php"><i class="fa fa-pencil icon-whish"></i></a>
                                            <a href="#"><i class="fa fa-trash icon-whish"></i></a>
                                            </td>
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