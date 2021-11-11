@extends('layouts.app')

@section('content')
@include('layouts.second-nav')



<style type="text/css">
  .panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #fe9126;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: #fff;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 400;
}
  .act{
  background:#4A4E5A !important;}
.panel-body {
  
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  content: '\e146';
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: ' ';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: ' ';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\e909';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
  content: '\e316';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: rotate(180deg);
  transition: all 0.5s;
  visibility: hidden;
}

#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}
.show {
    display: none !important;
}
.collapse.in{
  display: block !important;
}
  .forcustomer-all{
    margin-top: 20px;
  }
.btn-forcustomer a{
	text-decoration: none;
  
  color: #fff;
  font-size: 16px;
  padding: 10px 20px;
  
 	cursor: pointer;
}
.btn-forcustomer{
	display:inline-block;
    width:200px !important;
  background:#fe9126;
  margin-bottom: 50px;
}

  .btn-forcustomersub{
    border: none;
  background:#fe9126;
  color: #fff;
  font-size: 16px;
  padding: 10px 250px;
    margin-bottom:50px !important;

  }
  .landing-forms{
    margin: 40px 0px;
    
  }
  .input-text{
		display: block;
		width: 100%;
		height: 36px;
		border-width: 0 0 1px 0;
		border-color: black;
		font-size: 18px;
		line-height: 26px;
		font-weight: 400;
    	margin-top:30px;
  	 	
    background: transparent;
    transition: 0.2s;
    
    border-color:rgba(0,0,0,0.3);
	}
	.input-text:focus{
		outline: none;
      border-color: #fe9126;
	}
  .top-btn-cs button{
		border: none;
		background: #fe9126;
		
    	height: 50px;
		font-size: 14px;
		color: #fff;
		padding:0px 37px;
    	font-weight:bold;
   		display: inline;
		
	}
	.top-btn-cs button:focus{
		border: none;
		outline:none;
	}
 
</style>


  <link href="{{ asset('frontend/main/css/all.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- /NAVIGATION -->
<!-- _____________________________________________________ -->

  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{asset('/home')}}">Home</a></li>
        <li class="active">Customer Care</li>
      </ul>
    </div>
  </div>

 
 
  <script>
    AOS.init();
  </script>

  

 

    <!-- <section class="visitingCard">
    <div class="container"> -->
      <!-- <div class="row">
        <img src="images/download.jpg" class="img-responsive appDownload">
      </div> -->
      

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <section style="background:#fff;background-blend-mode: multiply; height:200px;">
          <h2 class="" style="padding-top:80px; text-align:center; color:#444; font-weight:600; font-size: 30px;  text-transform: uppercase; 
}">
            <span style="font-size:40px;font-family: inherit; box-shadow: 0px; "> Welcome to Zmall Shopping Support! </span><br> What Can We Help You With?
          </h2>
         </section>
     
<hr>
           <div class="col-sm-12" style="margin-top:10px;">
          
              
              
              
              <div class="top-btn-cs">
              <button id="btn1" class="act">Accounts</button>
              @guest
                <button type="button"  data-toggle="modal" data-target="#logreq">Shipping & Delivery</button>
                <button type="button"  data-toggle="modal" data-target="#logreq"> Product, Return & Cancellation</button>
                <button type="button"  data-toggle="modal" data-target="#logreq"> Payment & Checkout</button>
                <button type="button"  data-toggle="modal" data-target="#logreq"> Cupons/Cashback</button>

              @else
              <button id="btn2">Shipping & Delivery</button>
              <button id="btn3">Product, Return & Cancellation</button>
              <button id="btn4">Payment & Checkout</button>
              <button id="btn5">Cupons/Cashback</button>
                @endif
              </div>
             <hr>
                              <!---------------------------------------- Modal------------------------------- -->
            <div class="modal fade" id="logreq" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>PLease login to proceed</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" style="padding: 10px 30px;">Cancel</button>
                    <button type="submit" class="btn" data-toggle="modal" data-target="#Modal-Login" class="text-uppercase" onclick="showmodall()" style="background: #f39126; color:#fff; padding: 10px 30px;">LOG IN</button>              
                  </div>
                </div>
              </div>
            </div>
            <!----------------------------------- Close modal -------------------------------->
              
              
              
              
           		<!--<div class="btn-forcustomer">
           		<a id="btn1" class="active">Accounts</a>
           		</div>
           		<div class="btn-forcustomer">
           		<a id="btn2">Shipping & Delivery</a>
           		</div>
           		<div class="btn-forcustomer">
           		<a id="btn3">Product,Return & Cancellation</a>
           		</div>
           		<div class="btn-forcustomer">
           		<a id="btn4">Payment & Checkout</a>
           		</div>
           		<div class="btn-forcustomer">
           		<a id="btn5">Cupons/Cashback</a>
           		</div>-->
          
           </div>
          
          <br><br><br>
          
          
          <!--------------------------------- Starting Accounts Form here ----------------------------------->
          
       <title>Contact Us | Contact Zmall Team | Zmall.pk</title>
       <meta name="description" content="Still, have questions to ask? Contact us and Zmall support team will provide full assistance and information to you.">
          
          <div class="show1">
          <form action="{{asset('/customercare_accounts')}}" method="POST" id="loginForm" class="clearfix">
            <div class="all-forms" id="accounts">
          <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px; ">
            <h4> 1. Issue Details </h4>
            <label style= "font-weight:Bold;"> Sub Issues:<span style="color:red;">*</span> </label>
            
           
            	{{ csrf_field() }}
              <div class="input-group">
                           
                                <select name="sub_issue" id="sub_issue" class="input-text">
                                    <option disabled="disabled" selected="selected">Please Select</option>
                                    <option value="Unable to Signup">Unable to Signup</option>
                                    <option value="Unable to Login">Unable to Login</option>
                                    <option value="Unable to Forgot Password">Unable to Forgot Password</option>
                                  <option value="Unable to Update Shipping/Billing Address">Unable to Update Shipping/Billing Address</option>
                                  <option value="others">others</option>
                                </select>                            
                       
                </div>               
           	                              
                        <div class="form-group">
                           <input type="text" placeholder="Message" name="message" class="input-text">
                       </div>
                          
                
                <div class="group-form">
                 
                <input type="file" name="img" placeholder="uplaod image" > 
               </div>
            </div>
              
              <div class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px; margin-top:0px !imporant; ">
            <h4> 2. Enter Contact Deatils </h4>
            
            	{{ csrf_field() }}
                <div class="row">
              <div class="group-group col-sm-6">
                           <input type="text" placeholder="Full Name*" name="name" class="input-text">
                </div>
              
                        <div class="form-group col-sm-6">
                           <input type="text" placeholder="Email ID*" name="email" class="input-text">
                       </div>
                    
                
                <div class="group-form col-sm-6">
                  <input type="text" placeholder="Phone Number*" name="phoneno"  class="input-text">
               </div>
                  
                 <div class="col-sm-12" style="padding:15px;">
                   <label style="font-size:20px;"> Preferred mode of communication <span style="color:red; margin-top:20px;">*</span> </label>
                       <p> We will keep you updated with your request </p>
              	</div>
                 <div class="form-group">
                   
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="email"> <label style="font-size:20px;"> Email*</label>
                   </div>
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="phoneno"> <label style="font-size:20px;"> Phone Number*</label>
                   </div>
              </div>
            </div>
              </div>
             <center>   
              <button type="submit" name="save_account" class="btn-forcustomersub"> Submit </button> 
            </center>         
            </div>
           </form> 
      		</div>
          <!----------------------------------- Closing Accounts Form here ------------------------------------>
          
          <!--------------------------------- Starting Shipping & Delivery Form here ----------------------------------->
          
          <div class="show2" style="display:none;">

          <form action="{{asset('/customercare_shipping')}}" method="POST" id="loginForm" class="clearfix">
            <div class="all-forms" id="accounts">
          <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 1. Issue Details </h4>
            <label style= "font-weight:Bold;"> Sub Issue:<span style="color:red;">*</span> </label>
            
            	{{ csrf_field() }}
              <div class="input-group">
                           
                                <select name="issue" id="issue" class="input-text">
                                    <option disabled="disabled" selected="selected">Please Select</option>
                                    <option value="Unable to check delivery status">Unable to check delivery status</option>
                                    <option value="Change in delivery address/phone number">Change in delivery address/phone number</option>
                                    <option value="Delay Delivery">Delay Delivery</option>
                                  <option value="Missed delivery">Missed delivery</option>
                                  <option value="Delivery Charges Query">Delivery Charges Query</option>
                                  <option value="others">others</option>
                                </select>                            
                        
                </div>               
           		                               
                        <div class="form-group">
                           <input type="text" placeholder="Message" name="message" class="input-text">
                       </div>
                
                <div class="group-form">
                 
                <input type="file" name="img" placeholder="uplaod image"> 
               </div>
            </div>
              
              
             <div  class="landing-forms"  style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 2. Enter Your Order ID: </h4>
          <div class="row">
            
            	{{ csrf_field() }}
                           
           		<div class="col-sm-12">                                
                        <div class="form-group">
                           <input type="text" placeholder="Order ID" name="trackingid" class="input-text">
                       </div>
                 </div>            
                
               
            </div> 
              
              </div>
              
              
              
              <div class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px; margin-top:0px !imporant;">
            <h4> 3. Enter Contact Deatils </h4>
            
            	{{ csrf_field() }}
                <div class="row">
              <div class="form-group col-sm-6">
                           <input type="text" placeholder="Full Name*" name="name" class="input-text">
                </div>
              
                        <div class="form-group col-sm-6">
                           <input type="text" placeholder="Email ID*" name="email" class="input-text">
                       </div>
                    
                
                <div class="group-form col-sm-6">
                  <input type="text" placeholder="Phone Number*" name="phoneno"  class="input-text">
               </div>
                  
                 <div class="col-sm-12" style="padding:15px;">
                   <label style="font-size:20px;"> Preferred mode of communication <span style="color:red; margin-top:20px;">*</span> </label>
                       <p> We will keep you updated with your request </p>
              	</div>
                 <div class="form-group">
                   
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="email"> <label style="font-size:20px;"> Email*</label>
                   </div>
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="phoneno"> <label style="font-size:20px;"> Phone Number*</label>
                   </div>
              </div>
            </div>
              </div>
             <center>   
              <button type="submit" name="save_account" class="btn-forcustomersub"> Submit </button> 
            </center>         
            </div>
           </form> 
      		</div>
         
          <!----------------------------------- Closing Shipping & Delivery Form here ------------------------------------>
          
          <!--------------------------------- Starting Product/Return & Cancellation Form here ----------------------------------->
          <div class="show3" style="display:none;">
          <form action="{{asset('/customercare_product')}}" method="POST" id="loginForm" class="clearfix">
            <div class="all-forms" id="accounts">
          <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 1. Issue Details </h4>
            <label style= "font-weight:Bold;"> Sub Issue:<span style="color:red;">*</span> </label>
            
            	{{ csrf_field() }}
            
              <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="issue" id="issue" class="input-text">
                                    <option disabled="disabled" selected="selected">Please Select</option>
                                    <option value="Request Return">Request Return</option>
                                    <option value="Check Status of return">Check Status of return</option>
                                    <option value="Request Cancellation">Request Cancellation</option>
                                  <option value="Check Status of Refund">Check Status of Refund</option>
                                  <option value="Recieved Incomplete Order">Recieved Incomplete Order</option>
                                  <option value="Recieved Wrong Product">Recieved Wrong Product</option>
                                  <option value="Incorrect Funds">Incorrect Funds</option>
                                  <option value="Product does not meet expectation">Product does not meet expectation</option>
                                  <option value="Received Defected/damaged Item">Received Defected/damaged Item</option>
                                  <option value="others">others</option>
                                </select>                            
                          </div>
                </div>               
           		                               
                        <div class="form-group">
                           <input type="text" placeholder="Message" name="message" class="input-text">
                       </div>
                      
                
                <div class="group-form">
                 
                <input type="file" name="img" placeholder="uplaod image"> 
               </div>
            </div>
              
              
             <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 2. Enter Your Order ID: </h4>
          <div class="row">
            
            	{{ csrf_field() }}
                           
           		<div class="col-sm-12">                                
                        <div class="form-group">
                           <input type="text" placeholder="Order ID" name="order_id" class="input-text">
                       </div>
                 </div>            
                
               
            </div> 
              
              </div> 
              
              
              
              <div class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px; margin-top:0px !imporant;">
            <h4> 3. Enter Contact Deatils </h4>
            
            	{{ csrf_field() }}
                <div class="row">
              <div class="form-group col-sm-6">
                           <input type="text" placeholder="Full Name*" name="name" class="input-text">
                </div>
              
                        <div class="form-group col-sm-6">
                           <input type="text" placeholder="Email ID*" name="email" class="input-text">
                       </div>
                    
                
                <div class="group-form col-sm-6">
                  <input type="text" placeholder="Phone Number*" name="phoneno"  class="input-text">
               </div>
                  
                 <div class="col-sm-12" style="padding:15px;">
                   <label style="font-size:20px;"> Preferred mode of communication <span style="color:red; margin-top:20px;">*</span> </label>
                       <p> We will keep you updated with your request </p>
              	</div>
                 <div class="form-group">
                   
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="email"> <label style="font-size:20px;"> Email*</label>
                   </div>
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="phoneno"> <label style="font-size:20px;"> Phone Number*</label>
                   </div>
              </div>
            </div>
              </div>
             <center>   
              <button type="submit" name="save_account" class="btn-forcustomersub"> Submit </button> 
            </center>         
            </div>
           </form> 
       
      		</div>
          <!----------------------------------- Closing Product/Return & Cancellation Form here ------------------------------------>
          
           <!--------------------------------- Starting Payment & Checkout Form here ----------------------------------->
          <div class="show4" style="display:none;">
          <form action="{{asset('/customercare_payment_checkout')}}" method="POST" id="loginForm" class="clearfix">
            <div class="all-forms" id="accounts">
          <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 1. Issue Details </h4>
            <label style= "font-weight:Bold;"> Sub Issue:<span style="color:red;">*</span> </label>
            
            	{{ csrf_field() }}
              <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="issue" id="issue" class="input-text">
                                    <option disabled="disabled" selected="selected">Please Select</option>
                                    <option value="Unable to complete Bank Transfer">Unable to complete Bank Transfer</option>
                                    <option value="Unable to make offline epayment">Unable to make offline epayment</option>
                                    <option value="Unable to make card payment">Unable to make card payment</option>
                                  <option value="Unable to checkout with CoD">Unable to checkout with CoD</option>
                                  <option value="Unable to Checkout">Unable to Checkout</option>
                                  <option value="others">others</option>
                                </select>                            
                          </div>
                </div>               
           		    
                  
                        <div class="form-group">
                           <input type="text" placeholder="Message" name="message" class="input-text">
                       </div>
                        
                
                <div class="group-form">
                 
                <input type="file" name="img" placeholder="uplaod image"> 
               </div>
            </div>
              
              
             <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 2. Enter Your Order ID: </h4>
          <div class="row">
            
            	{{ csrf_field() }}
                           
           		<div class="col-sm-12">                                
                        <div class="form-group">
                           <input type="text" placeholder="Order ID" name="order_id" class="input-text">
                       </div>
                 </div>            
                
               
            </div> 
              
              </div>  
              
              
              
              <div class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px; margin-top:0px !imporant;">
            <h4> 3. Enter Contact Deatils </h4>
            
            	{{ csrf_field() }}
                <div class="row">
              <div class="form-group col-sm-6">
                           <input type="text" placeholder="Full Name*" name="name" class="input-text">
                </div>
              
                        <div class="form-group col-sm-6">
                           <input type="text" placeholder="Email ID*" name="email" class="input-text">
                       </div>
                    
                
                <div class="group-form col-sm-6">
                  <input type="text" placeholder="Phone Number*" name="phoneno"  class="input-text">
               </div>
                  
                 <div class="col-sm-12" style="padding:15px;">
                   <label style="font-size:20px;"> Preferred mode of communication <span style="color:red; margin-top:20px;">*</span> </label>
                       <p> We will keep you updated with your request </p>
              	</div>
                 <div class="form-group">
                   
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="email"> <label style="font-size:20px;"> Email*</label>
                   </div>
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="phoneno"> <label style="font-size:20px;"> Phone Number*</label>
                   </div>
              </div>
            </div>
              </div>
             <center>   
              <button type="submit" name="save_account" class="btn-forcustomersub"> Submit </button> 
            </center>         
            </div>
           </form> 
        
      		</div>
          <!----------------------------------- Closing Payment & Checkout Form here ------------------------------------>
          
          <!--------------------------------- Starting Cupons Form here ----------------------------------->
          <div class="show5" style="display:none;">

          <form action="{{asset('/customercare_cupons')}}" method="POST" id="loginForm" class="clearfix">
            <div class="all-forms" id="accounts">
          <div  class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px;">
            <h4> 1. Issue Details </h4>
            <label style= "font-weight:Bold;"> Sub Issues:<span style="color:red;">*</span> </label>
            
            	{{ csrf_field() }}
              <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="issue" id="issue" class="input-text">
                                    <option disabled="disabled" selected="selected">Please Select</option>
                                    <option value="Unable to apply coupon code">Unable to apply coupon code</option>
                                    <option value="Unable to use cashback">Unable to use cashback</option>
                                    <option value="Cashback not recieved">Cashback not recieved</option>
                                  <option value="others">others</option>
                                </select>                            
                          </div>
                </div>               
           		                               
                        <div class="form-group">
                           <input type="text" placeholder="Message" name="message" class="input-text">
                       </div>
                       
                
                <div class="group-form">
                 
                <input type="file" name="img" placeholder="uplaod image"> 
               </div>
            </div>
              
              <div class="landing-forms" style="border: 1px solid rgba(0,0,0,0.3); padding: 30px; margin-top:0px !imporant;">
            <h4> 2. Enter Contact Deatils </h4>
            
            	{{ csrf_field() }}
                <div class="row">
              <div class="form-group col-sm-6">
                           <input type="text" placeholder="Full Name*" name="name" class="input-text">
                </div>
              
                        <div class="form-group col-sm-6">
                           <input type="text" placeholder="Email ID*" name="email" class="input-text">
                       </div>
                    
                
                <div class="group-form col-sm-6">
                  <input type="text" placeholder="Phone Number*" name="phoneno"  class="input-text">
               </div>
                  
                 <div class="col-sm-12" style="padding:15px;">
                   <label style="font-size:20px;"> Preferred mode of communication <span style="color:red; margin-top:20px;">*</span> </label>
                       <p> We will keep you updated with your request </p>
              	</div>
                 <div class="form-group">
                   
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="email"> <label style="font-size:20px;"> Email*</label>
                   </div>
                   <div class=" col-sm-6">
                     <input type="radio" name="radio" value="phoneno"> <label style="font-size:20px;"> Phone Number*</label>
                   </div>
              </div>
            </div>
              </div>
             <center>   
              <button type="submit" name="save_account" class="btn-forcustomersub"> Submit </button> 
            </center>         
            </div>
           </form> 
      
      		</div>
          <!----------------------------------- Closing Cupons Form here ------------------------------------>
          
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        $(".show1").show();
      $(".show2").hide();
       $(".show4").hide();
    $(".show5").hide();
    $(".show3").hide();
    });
    $("#btn2").click(function(){
      @guest
     alert('You Need to Login First');
      @else
       $(".show2").show();
      $(".show1").hide();
    $(".show4").hide();
    $(".show5").hide();
    $(".show3").hide();
    @endif
    });
  $("#btn3").click(function(){
      
    @guest
     alert('You Need to Login First');
    @else
      $(".show3").show();
      $(".show1").hide();
    $(".show2").hide();
    $(".show5").hide();
    $(".show4").hide();
    @endif
    });
  $("#btn4").click(function(){  
    @guest
     alert('You Need to Login First');
    @else
     $(".show4").show();
      $(".show1").hide();
    $(".show2").hide();
    $(".show5").hide();
    $(".show3").hide();
    @endif
    });
  $("#btn5").click(function(){ 
    @guest
     alert('You Need to Login First');
    @else
     $(".show5").show();
     $(".show1").hide();
    $(".show2").hide();
    $(".show4").hide();
    $(".show3").hide();
    @endif
    });
});
  
    $(document).on('click', '.top-btn-cs button', function(){
  	$(this).addClass('act').siblings().removeClass('act')
  })
 
</script>
        </div>
      </div>
    </div>
  </section>






@endsection