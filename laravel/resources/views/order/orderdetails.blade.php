
@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style type="text/css">
   .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
.rating-header {
    margin-top: -10px;
    margin-bottom: 10px;
}

</style>
<?php use App\ProductAttributes; ?>
       <!-- BREADCRUMB -->
       <div id="breadcrumb hide-on-mbl">
           <div class="container">
               <ul class="breadcrumb">
                   <li><a href="index.php">Home</a></li>
                  <li><a href="dbrdcust-order.php">Orders</a></li>
                   <li class="active">Order Details</li>
               </ul>
           </div>
       </div>
       <!-- /BREADCRUMB -->

       <!-- section -->
       <div class="section">
           <!-- container -->
           <div class="container">
               <div class="row">



                <!--  -->

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                    <!--  <?php //include 'includes/left-tab.php';?> -->

   <!-- 

    <div class="row col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                 <div class="list-group">

                <a href="dashboard-cust-info.php" class="list-group-item  text-center">
                     <h4 class="fa fa-shopping-basket"></h4><br/>My Zmall
                   </a> 
                  
                   <a href="dbrdcust-acc-setting.php" class="list-group-item  text-center">
                     <h4 class="fa fa-cogs"></h4><br/>Account Settings
                   </a>

                     <a href="dbrdcust-order.php" class="list-group-item active text-center">
                     <h4 class="fa fa-cube"></h4><br/>Orders
                   
                   </a>


                   <a href="dbrdcust-wishlist.php" class="list-group-item text-center">
                     <h4 class="fa fa-heart"></h4><br/>Wishlist
                   </a>

                   <a href="dbrdcust-contactbook.php" class="list-group-item text-center">
                     <h4 class="fa fa-map-signs"></h4><br/>My Shipping Address
                   </a>


                   <a href="dbrdcust-changepass.php" class="list-group-item text-center">
                     <h4 class="fa fa-lock"></h4><br/>Change Password
                   </a> 


                 </div>
        </div>    

    -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab">


     <!-- DIV START OF WHISHLISH -->

     <div class="bhoechie-tab-content active">

       <!-- row -->
       <div class="row">
           <div class="clearfix section-white p-sm">
               <div class="col-md-12">

                 <div class="pull-right">
                   <a href="#"  onclick="window.history.go(-1); return false;" class="primary-btn">Back To Orders</a>
               </div>

               <div class="order-summary clearfix">
                   <div class="section-title">
                       <h3 class="title">Order Details</h3>
                   </div>





                   <div class="row">




                     <div class="col-md-4">
                       <div class="cuone">
                          <div class="vensecond">
                           <!-- <h3 class="cuifo"><i class="fa fa-first-order" aria-hidden="true"></i>Default Address</h3> -->
                           <h4 class="venifo"> <i class="fa fa-info-circle" aria-hidden="true"></i> General info
                              <!--  <i class="fa fa-pencil pull-right pd-r-5" aria-hidden="true"></i> --></h4>
                          </div>


                          <div class="row">
                             <div class="col-md-12">

                               <address>
                                   <p class="pd-lft-5" > <span><strong>Order#: </strong> </span>{{ $order_detail->order_no }}</p>

                                   <p class="pd-lft-5" > <span><strong>Order Date:</strong>  </span> {{ date("d M, Y",strtotime($order_detail->added_on)) }} </p>

                                   

                                   <p class="pd-lft-5" > <span><strong>Status: </strong> </span>{{ ucfirst($order_detail->status) }}</p>
                                   <p class="pd-lft-5" > </p>

                               </address>



                           </div>

                       </div>
                   </div>




               </div>


               <div class="col-md-4">
                   <div class="cuone">
                      <div class="vensecond">
                       <!-- <h3 class="cuifo"><i class="fa fa-first-order" aria-hidden="true"></i>Default Address</h3> -->
                       <h4 class="venifo"><i class="fa fa-address-card" aria-hidden="true"></i> Shipping Address
                          <!--  <i class="fa fa-pencil pull-right pd-r-5" aria-hidden="true"></i> --></h4>
                      </div>


                      <div class="row">
                         <div class="col-md-12">

                           <address>
                            <p class="pd-lft-5" ><span><strong>Tracking id#: </strong> </span>{{ $order_detail->order_no }}</p>
                               <p class="pd-lft-5" >{{ $order_detail->address }} , {{ $order_detail->city }},{{ $order_detail->zip_code }}</p>

                   

                               <p class="pd-lft-5" ></p>

                               <p class="pd-lft-5">{{ $order_detail->phone }}</p>
                           </address>



                       </div>

                   </div>
               </div>




           </div>




           <div class="col-md-4">
               <div class="cuone">
                  <div class="vensecond">
                   <!-- <h3 class="cuifo"><i class="fa fa-first-order" aria-hidden="true"></i>Default Address</h3> -->
                   <h4 class="venifo"><i class="fa fa-address-card" aria-hidden="true"></i> Billing Address
                       <!-- <i class="fa fa-pencil pull-right pd-r-5" aria-hidden="true"></i> --></h4>
                   </div>


                   <div class="row">
                     <div class="col-md-12">

                      <address>
                          <p class="pd-lft-5" >{{ $order_detail->address }} , {{ $order_detail->city }},{{ $order_detail->zip_code }}</p>
                           <p class="pd-lft-5" ></p>

                           <p class="pd-lft-5">{{ $order_detail->phone }}</p>
                       </address>




                   </div>

               </div>
           </div>

       </div>


   </div>
   <br> 





   <div class="row">
       <div class="col-md-12 table-responsive">
          <table class="shopping-cart-table table">

             <thead align="center">
               <tr>

                   <!-- <th align="center">Order No</th> -->
                   <th align="center">Name</th>
                   <th align="center text-left">Image</th>

                   <th align="center">Unit Price</th>
                   <th align="center">Quantity</th>
                   <th align="center" class="text-center">Total</th>





               </tr>
           </thead>

           <tbody align="center">
            @if($order_products->count() > 0)
                 @foreach($order_products as $all)
               <tr>
                   <!-- <td class="price text-left">ZM-014</td> -->
                   <td align="" class="price text-left">
                    <a href="{{url('product-detail/'.$all->productinfo->slug)}}">{{ $all->productinfo->title }}</a>
                    <br>
                   <?php if(!empty($all['color'])) { ?> <?= " <b>Color:</b> ".$all->color;?> <?php } ?>
                   <?php if(!empty($all['size'])) { ?> <?= "<b>Size:</b> ".$all->size; ?> <?php } ?>
                   

                   </td>
                   <td align="center" class="thumb"><img src="{{ asset('/storage/uploads/'.$all->productinfo->images) }}" alt=""></td>

                   <td align="center" class="text-left">{{ number_format($all->total_price,2) }}</td>
                   <td align="center" class="price text-left">{{ $all->quantity }}</td>
                   <td align="center" class="price">{{ number_format($all->total_price,2) }}</td>                                  
                </tr>   
                @endforeach
            @endif

             <tr>  
                  
                   <td></td>
                   <td></td>

                   <td></td>
                   <td align="center" class="price text-left">Sub Total</td>
                   <td align="center" class="price"> {{ number_format($order_detail->sub_total,2) }} </td>


               </tr>  

               <tr>
                   <td></td>
                   <td></td>

                   <td></td>
                   <td align="center" class="price text-left">Shipment</td>
                    @if($order_detail->shipment_charges != 0)
                   <td align="center" class="price"> {{ number_format($order_detail->shipment_charges,2) }} </td>
                    @else
                    <td align="center" class="price"> Free </td>
                    @endif


               </tr> 

               <tr>

                   <td></td>
                   <td></td>

                   <td></td>
                   <td align="center" class="price text-left"><strong>Grand Total</strong></td>
                   <td align="center" class="price"><strong class="text-red"> {{ number_format($order_detail->grand_total,2) }} /-</strong></td>


               </tr> 



                                       </tbody>


                                   </table> 
                               </div>

                           </div>





                           <div class="row">

                               <div class="col-md-12">

                                   <label>
                                     <!-- <a  href="#"  style="margin-left: 15px;">Create Distibute</a> -->
                                     <a href="#">   Terms and conditions applied.</a>
                                 </label>
                           <!--     <ul class="termlist">
                                   <li>
                                       Shipping time frames and terms
                                   </li>
                                                                   <li>
                                       Shipping time frames and terms
                                   </li>
                                                                   <li>
                                       Shipping time frames and terms
                                   </li>
                               </ul> -->
                           </div>

                       </div>




                       <div class="row">
                          <div class="col-md-12 pull-right" >

                             <button type="button" onclick="window.history.go(-1);" class="btn btn-primary pull-right" style="display: inline-block; ">Back</button>
                             <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn btn-primary pull-right" style="display: inline-block; margin-right:5px;">Track Order</a>
                             @if(auth()->user()->role == 'user')
                             <a  href="#" data-toggle="modal" data-target="#disbute-order" class="btn btn-primary pull-right" style="display: inline-block; margin-right:5px;">Create Dispute</a>
                              <a class="btn btn-success pull-right" href="#reviews-anchor" id="open-review-box"  data-toggle="modal" data-target="#feedbackModal" style="display: inline-block; margin-right:5px;">Leave a Review</a>
                              @endif
                              @if(auth()->user()->role == 'vendor')
                              <a  href="#" data-toggle="modal" data-target="#update-order" class="btn btn-primary pull-right" style="display: inline-block; margin-right:5px;">Update Status</a>
                              @endif


                            <!--  <a  href="#" data-toggle="modal" data-target="#disbute-order" class="btn btn-primary" >Add another Address</a> -->

                         </div>




    <!--    <div class="col-md-12">

   <button type="button" onclick="window.location.href='dbrdcust-order.php'"; class="btn btn-primary pull-right" style="margin-left: 15px;">Back</button>
   <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn btn-primary pull-right"  style="margin-left: 15px;">Track Order</a>
          <a  href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right"  style="margin-left: 15px;">Create Distibute</a>



       </div>

   -->
</div>










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

<!-- New Modal for test  -->

<!-- Modal -->
<div class="modal fade" id="disbute-order" tabindex="-1" role="dialog" aria-labelledby="disbute-order" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h4 class="modal-title" id="disbute-order">Dispute Order</h4>

      </div>



      <div class="modal-body">


<!-- for address section in modal body  -->


 <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            
                        <form>
           <div class="row">
               <div class="col-md-12 form-group">

                   <label for="reason">Reason:</label>
                   <select class="form-control" name="reason" id="reason">
                       <option value="broken">Item was broken.</option>
                       <option value="irrelevent">This was not what i ordered. </option>
                       <option value="fake">Fake item.</option>
                       <option value="other">Other</option>
                   </select>


               </div>


               <div class="col-md-12 form-group">

                   <label for="comts">Comments:</label><br/>
                   <textarea class="form-group form-control"  id="comts" name="comments" rows="4" >

                   </textarea>

                   <label>Attachment:</label><br/>
                   <input type="file" id="myFile" name="filename">



               </div>


              





         </div>


     </form>
                      
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     

<!--  for address section in modal body -->



        <br> 

       <div class="pull-right">
                <a href="dbrdcust-order-details.php" class="primary-btn">Submit</a>

            <a  data-dismiss="modal" class="primary-btn vendr_notava">Back</a>

        </div>

        <br>

      </div>

      <!-- modal body  end  -->
      

        </div>
  </div>
</div>
<!-- New Modal for test  -->




<!--  for disbute -->




<!--  modal for track order  -->
<div class="modal fade" id="Track-Order-modal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel2"  aria-hidden="true" style="display: none;">

  <div class="modal-content">
   <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
       <h4 class="modal-title" id="myModalLabel">Track Order</h4>

   </div>
   <div class="modal-body">

      <!-- row -->
      <div class="row">
         <div class="clearfix section-white p-sm">
             <div class="col-md-12">
                 <div class="order-summary clearfix">
                     <div class="section-title" style="    margin-bottom: 0px;margin-top: 0px;">
                         <h3 class="title">Estimate Dilvery {{date('M d', strtotime($order_detail->added_on))}}-{{date('M d, Y', strtotime("+5 days", strtotime($order_detail->added_on)))}}</h3>
                     </div>
                    

                   
                     <div class="row bs-wizard" style="border-bottom:0;">

                         <div class="col-xs-12 col-sm-3 bs-wizard-step active">
                           <div class="text-center bs-wizard-stepnum">Step 1</div>
                           <div class="progress"><div class="progress-bar"></div></div>
                           <a href="#" class="bs-wizard-dot"></a>
                           <div class="bs-wizard-info text-center">Placed.</div>
                       </div>

                       <div class="col-xs-12 col-sm-3 bs-wizard-step <?php if($order_detail->is_processed == 1){ echo "active"; }else{ echo "disabled";}?>"><!-- complete -->
                           <div class="text-center bs-wizard-stepnum">Step 2</div>
                           <div class="progress"><div class="progress-bar"></div></div>
                           <a href="#" class="bs-wizard-dot"></a>
                           <div class="bs-wizard-info text-center">Processed</div>
                       </div>

                       <div class="col-xs-12 col-sm-3 bs-wizard-step <?php if($order_detail->is_shipped == 1){ echo "active"; }else{ echo "disabled";}?>"><!-- complete -->
                           <div class="text-center bs-wizard-stepnum">Step 3</div>
                           <div class="progress"><div class="progress-bar"></div></div>
                           <a href="#" class="bs-wizard-dot"></a>
                           <div class="bs-wizard-info text-center">Shipped</div>
                       </div>

                       <div class="col-xs-12 col-sm-3 bs-wizard-step <?php if($order_detail->is_delivered == 1){ echo "active"; }else{ echo "disabled";}?>"><!-- active -->
                           <div class="text-center bs-wizard-stepnum">Step 4</div>
                           <div class="progress"><div class="progress-bar"></div></div>
                           <a href="#" class="bs-wizard-dot"></a>
                           <div class="bs-wizard-info text-center">Delivered</div>
                       </div>
                   </div>

                  




                           <!--  <div class="pull-right">
                                 <a href="payment.php" class="primary-btn">Place Order</a>
                             </div> -->
                         </div>

                     </div>
                 </div>
                 
             </div>
             <!-- /row -->


             <!-- Start Dilvery -->
             <div class="row">
                 <div class="clearfix section-white p-sm">
                     <div class="col-md-12">
                         <div class="order-summary clearfix">
                             <div class="section-title">
                                 <h3 class="title">Packet Tracking</h3>
                             </div>

                             <!-- start steps -->
                             <div class="row">

                                 <div class="col-sm-4 col-md-12 side-content">
                                     <div class="bs-vertical-wizard">
                                         <ul>
                                             <li class="complete">
                                                 <a href="#">Placed <i class="ico fa fa-check ico-green"></i>
                                                     <span class="desc">{{$order_detail->address}}</span>
                                                     <span class="desc">{{ date("d M, Y h:i a",strtotime($order_detail->added_on)) }}</span>
                                                 </a>
                                             </li>

                                             <li class="<?php if($order_detail->is_processed == 1){ echo "complete"; }else{ echo "prev-step";}?>">
                                                 <a href="#">Processed <?php if($order_detail->is_processed == 1){ echo "<i class='ico fa fa-check ico-green'></i>"; }?>
                                                     <span class="desc">{{$order_detail->processed_comments}}</span>
                                                     <span class="desc">
                                                       @if($order_detail->is_processed == 1)
                                                          {{ date("d M, Y h:i a",strtotime($order_detail->processed_at)) }}
                                                      @endif
                                                     </span>
                                                 </a>
                                             </li>
                                             <li class="<?php if($order_detail->is_shipped == 1){ echo "complete"; }else{ echo "prev-step";}?>">
                                                 <a href="#">Shipped <?php if($order_detail->is_shipped == 1){ echo "<i class='ico fa fa-check ico-green'></i>"; }?>
                                                     <span class="desc">{{$order_detail->shipped_comments}}</span>
                                                     <span class="desc">
                                                      @if($order_detail->is_shipped == 1)
                                                          {{ date("d M, Y h:i a",strtotime($order_detail->shipped_at)) }}
                                                      @endif
                                                     </span>
                                                 </a>
                                             </li>
                                             <li class="<?php if($order_detail->is_delivered == 1){ echo "complete"; }else{ echo "prev-step";}?>">
                                                 <a href="#">Dilvered <?php if($order_detail->is_delivered == 1){ echo "<i class='ico fa fa-check ico-green'></i>"; }?>
                                                     <span class="desc">{{$order_detail->delivered_comments}}</span>
                                                     <span class="desc">
                                                      @if($order_detail->is_delivered == 1)
                                                          {{ date("d M, Y h:i a",strtotime($order_detail->delivered_at)) }}
                                                      @endif
                                                     </span>
                                                 </a>
                                             </li>
                                           
                         
                             </ul>
                         </div>
                     </div>

                     <!-- <div class="col-sm-8 col-md-9">
                     </div> -->

                 </div>
                 <!-- end steps -->
                           <!--  <div class="pull-right">
                                 <a href="payment.php" class="primary-btn">Place Order</a>
                             </div> -->
                         </div>

                     </div>
                 </div>
                 
             </div>
             <!-- End Dilvery -->

             <br>
             <div class="pull-right">
                 <a  data-dismiss="modal" class="primary-btn vendr_notava">Back</a>

             </div> 
             <br>



         </div>
     </div>
</div>    

   <!--  modal for track order  -->

<!-- Feedback-->
<div class="modal" id="feedbackModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content"  id="post-review-box" >
      <div class="modal-header">
        <h5 class="modal-title">Order Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="{{route('save_review')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label>Product</label><br>
            <select class="form-control" name="product_id">
              <option>SELECT</option>
              @if($order_products->count() > 0)
                 @foreach($order_products as $all)
              <option value="{{$all->productinfo->id}}">{{$all->productinfo->title}}</option>
              @endforeach
              @endif
            </select>
            

          </div>

          <div class="form-group">
            <label>Product</label><br>
              <option>SELECT</option>
             <textarea name="review_description"  class="form-control"></textarea>
          </div>
          <div class="row>">
          <div class="form-group" id="rating-ability-wrapper">
      <label class="control-label" for="rating">
      <span class="field-label-header">How would you rate your ability to use the computer and access internet?*</span><br>
      <span class="field-label-info"></span>
      <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
      </label>
      
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="1" id="rating-star-1" name="star" value="1">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="2" id="rating-star-2" name="star" value="2">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="3" id="rating-star-3" name="star" value="3">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="4" id="rating-star-4" name="star" value="4">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-md" data-attr="5" id="rating-star-5" name="star" value="5">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
  </div> 
</div>
  <h2 class="bold rating-header" style="">
      <span class="selected-rating">0</span><small> / 5</small>
      </h2>


        </div>
        <div class="modal-footer">
          <div class="text-right">
              <div class="stars starrr" data-rating="0"></div>
              <a class="btn btn-danger" data-dismiss="modal" href="#" id="close-review-box" >
              <span class="fa fa-time" ></span>Cancel</a>
              <input type="hidden" class="btn btn-success" name="order_id" value="{{$order_detail->order_no}}">
             
              <input type="submit" class="btn btn-success" name="savereview" value="Save">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Update Order Status Modal -->
<div class="modal fade" id="update-order" tabindex="-1" role="dialog" aria-labelledby="disbute-order" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h4 class="modal-title" id="disbute-order">Update Order Status</h4>
      </div>
      <form method="post" action="{{route('updatestatus')}}" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
<!-- for address section in modal body  -->
 <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            
                        
           <div class="row">
               <div class="col-md-12 form-group">
                   <label for="reason">Reason:</label>
                   <select class="form-control" name="status" id="reason">
                       <option value="placed">Placed</option>
                       <option value="processed">Processed</option>
                       <option value="shipped">Shipped</option>
                       <option value="delivered">Delivered</option>
                       <option value="cancelled">Cancel</option>
                   </select>
               </div>
               <div class="col-md-12 form-group">

                   <label for="comts">Comments:</label><br/>
                   <textarea class="form-group form-control"  id="comts" name="status_comment" rows="4" ></textarea>
                   
               </div>
         </div>
     
                        </div>
                    </div>
                </div>                
            </div>
            <!-- /row -->
<!--  for address section in modal body -->
        <br> 
       <div class="pull-right">
                <input type="hidden" name="rowid" value="{{$order_detail->id}}">
                <input type="submit" class="primary-btn" name="update_status" value="submit">
            <input type="submit" data-dismiss="modal" class="primary-btn vendr_notava" value="Back">
        </div>
        <br>

      </div>
      </form>
    </div>
  </div>
</div>
<!-- <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <form accept-charset="UTF-8" action="" method="post">
                        <input id="ratings-hidden" name="rating" type="hidden"> 
                        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
        
                        <div class="text-right">
                            <div class="stars starrr" data-rating="0"></div>
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div> -->
<script type="text/javascript">
  
    jQuery(document).ready(function($){
      
  $(".btnrating").on('click',(function(e) {
  
  var previous_value = $("#selected_rating").val();
  
  var selected_value = $(this).attr("data-attr");
  $("#selected_rating").val(selected_value);
  
  $(".selected-rating").empty();
  $(".selected-rating").html(selected_value);
  
  for (i = 1; i <= selected_value; ++i) {
  $("#rating-star-"+i).toggleClass('btn-warning');
  $("#rating-star-"+i).toggleClass('btn-default');
  }
  
  for (ix = 1; ix <= previous_value; ++ix) {
  $("#rating-star-"+ix).toggleClass('btn-warning');
  $("#rating-star-"+ix).toggleClass('btn-default');
  }
  
  }));
  
    
});
</script>


@endsection