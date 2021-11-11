@extends('layouts.app')

@section('content')
@include('layouts.second-nav')


  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{ asset('/home') }}">Home</a></li>
        <li class="active">Account Setting</li>
      </ul>
    </div>
  </div>
  <!-- /BREADCRUMB -->

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <div class="row">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">



         @include('layouts.left-tab')





          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
            <!-- flight section -->
            <div class="bhoechie-tab-content active">



              <div class="row">
                <div class="clearfix section-white p-sm">
                  <div class="col-md-12">
                    <div class="order-summary clearfix">
                      <div class="section-title">
                        <h3 class="title">Account setting</h3>
                      </div>


                      <form>

                        <div class="row ">

                          <div class="form-group col-md-6">
                            <label>Name:</label><!-- <span class="pd-lft-5"><a href="dbrdcust-profile-edit.php">Edit</a></span> -->
                            <p>John smith</p>    
                          </div>    




                          <div class="form-group col-md-6">

                            <label>Gender:</label><span class="pd-lft-5" style="float: right;"><a href="dbrdcust-profile-edit.php">Edit</a></span>
                            <p>Male</p>
                          </div>   



                        </div>


                        <div class="row">

                          <div class="form-group col-md-6">

                            <label>Email Address:</label><span class="pd-lft-5"><a href="dbrdcust-email-edit.php">Edit</a></span>
                            <p>Johnsmith@gmail.com</p>        

                          </div>   

                          <div class="form-group col-md-6">

                            <label>Phone Number:</label><span class="pd-lft-5"><a href="dbrdcust-phone-edit.php">Edit</a></span>
                            <p>+923001234567</p>        

                          </div>   

                        </div>
                      </form>


                    </div>

                  </div>
                </div>

              </div>

            </div>


          </div>



        </div>

        <!--  -->


      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /section -->
  <!-- FOOTER -->



</form>
</div>

@endsection