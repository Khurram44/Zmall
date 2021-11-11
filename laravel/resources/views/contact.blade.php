@extends('layouts.app')

@section('content')
@include('layouts.second-nav')

  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{asset('/home')}}">Home</a></li>
        <li class="active">Contact</li>
      </ul>
    </div>
  </div>
  <!-- /BREADCRUMB -->

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12 col-sm-12" style="padding: 0px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.5702171685066!2d72.98091771520428!3d33.64238408071948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df973334a06c71%3A0xfaa53f37a4467619!2sZmall!5e0!3m2!1sen!2s!4v1617273917469!5m2!1sen!2s" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <br>
      <div class="row">
         @if(session()->has('status'))
          <div class="alert alert-success alert-dismissible fade in" delay="10s" >
              {{session()->get('status')}}
          </div>
          @endif
        <form id="checkout-form" class="clearfix section-white p-sm" method="POST" action="{{ route('savecontact') }}" enctype="multipart/form-data" style="padding-top: 20px;">
          @csrf
        
          <div class="col-md-9">
            <div class="billing-details">
              
              <div class="section-title">
                <h3 class="title">Contact Us</h3>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <input class="input" type="text" name="first_name" placeholder="First Name">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <input class="input" type="text" name="last_name" placeholder="Last Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input class="input" type="email" name="email" placeholder="Email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input class="input" type="subject" name="subject" placeholder="Subject">
              </div>
            </div>
            <div class="col-md-12">
                  <div class="form-group">
                                        <textarea class="input" name="message"  cols="30" rows="9" placeholder="Enter Message"></textarea>
                                    </div>

            </div>
            <div class="col-md-12">
          <!-- <a href="payment.php" class="primary-btn pull-right">Proceed to Payment</a> -->
          <input type="submit" name="savecontact" value="Send"  class="primary-btn pull-right">
          </div>
            
              
            </div>
          </div>
          <div class="col-md-3">
            <br>
            
                         
                            
                                <h3><i class="fa fa-home contact_icon"></i> <span class="contact_detail">Address</span></h3>
                                <p class="contact_address">Office#201, 2nd floor, CIE Building,</p>
                                <p class="contact_address">The National University of Sciences & Technology, Islamabad</p>

                                <br>
                                <h3><i class="fa fa-mobile contact_icon"></i> <span class="contact_detail">Phone #</span></h3>
                                <p class="contact_address">{{$gnsettings->phone}}</p>

                                <br>
                                <h3><i class="fa fa-envelope contact_icon" ></i> <span class="contact_detail">Email Address</span></h3>
                                <p class="contact_address">{{$gnsettings->email}}</p>
                                
                          
                        
          </div>

  
          
          
        </form>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection