<!DOCTYPE html>
<html lang="en">

<!-- head her  -->
<?php include 'includes/head.php';?>

<!-- head her end -->
<body>
    <!-- HEADER -->
    <?php include 'includes/header.php';?>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <?php include'includes/second-nav.php';?> 
    <!-- /NAVIGATION -->

    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">My Zmall</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
    <div class="row">
        <div class="row">
          
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <span class="db-icons"><img src="svg/orders.svg" height="45"/></span>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Total Orders
                                </div>
                                <div class="circle-tile-number text-faded">
                                    265
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading green">
                                    <span class="db-icons"><img src="svg/awaiting-payment.svg" height="45"/></span>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Awaiting Payment
                                </div>
                                <div class="circle-tile-number text-faded">
                                    7
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading orange">
                                    <span class="db-icons"><img src="svg/awaiting-shipment.svg" height="45"/></span>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Awaiting Shipment
                                </div>
                                <div class="circle-tile-number text-faded">
                                    9
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading blue">
                                    <span class="db-icons"><img src="svg/awaiting-delivery.svg" height="45"/></span>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                    Awaiting Delivery
                                </div>
                                <div class="circle-tile-number text-faded">
                                    10
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading red">
                                    <span class="db-icons"><img src="svg/dispute.svg" height="45"/></span>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                    Dispute
                                </div>
                                <div class="circle-tile-number text-faded">
                                    2
                                    <span id="sparklineC"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading purple">
                                    <span class="db-icons"><img src="svg/messages.svg" height="45"/></span>
                                </div>
                            </a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded">
                                    Messages
                                </div>
                                <div class="circle-tile-number text-faded">
                                    5 <small>(Unread)</small>
                                    <span id="sparklineD"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                
        </div>
 

 <!--  -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
           <?php include 'includes/left-tab.php';?>
            

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
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Order Details</th>
                                        <th class="text-center">Status</th>
                                        
                                        <th class="text-center">aCTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                         <td class="price text-left">10056</td>
                                        <td class="details">
                                            <a href="product-page.php">Order Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center">Pending</td>
                                        

                                        <td class="text-center"><i class="fa fa-eye icon-whish"></i>
                                                                                        

                                        </td>
                                        
                                    </tr>

                                      <tr>
                                         <td class="price text-left">19689</td>
                                        <td class="details">
                                            <a href="product-page.php">Order Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center">Completed</td>
                                        

                                        <td class="text-center"><i class="fa fa-eye icon-whish"></i>
                                                                                        

                                        </td>
                                        
                                    </tr>


                                      <tr>
                                         <td class="price text-left">10056</td>
                                        <td class="details">
                                            <a href="product-page.php">Order Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center">Pending</td>
                                        
         
                                        <td class="text-center"><i class="fa fa-eye icon-whish"></i>
                                                                                        

                                        </td>
                                        
                                    </tr>


                                       <tr>
                                         <td class="price text-left">19689</td>
                                        <td class="details">
                                            <a href="product-page.php">Order Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center">Completed</td>
                                        

                                        <td class="text-center"><i class="fa fa-eye icon-whish"></i>
                                                                                        

                                        </td>
                                        
                                    </tr>



                                      <tr>
                                         <td class="price text-left">10056</td>
                                        <td class="details">
                                            <a href="product-page.php">Order Name Goes Here</a>
                                            <ul>
                                                <li><span>Size: XL</span></li>
                                                <li><span>Color: Camelot</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center">Pending</td>
                                        

                                        <td class="text-center"><i class="fa fa-eye icon-whish"></i>
                                                                                        

                                        </td>
                                        
                                    </tr>

                                   
                                </tbody>

                             
                            </table>
                          <!--  <div class="pull-right">
                                <a href="payment.php" class="primary-btn">Place Order</a>
                            </div> -->
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






    <?php include 'includes/footer.php';?>

<!--    <script>
    (document).ready(function() {
    ("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        (this).siblings('a.active').removeClass("active");
        (this).addClass("active");
        var index = (this).index();
        ("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        ("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
    </script>
 -->
</body>

</html>
