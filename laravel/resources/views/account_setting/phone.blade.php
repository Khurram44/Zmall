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
  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{ asset('/home') }}">Home</a></li>
        <li class="active">Account Setting</li>
      </ul
  <!-- /BREADCRUMB -->
>
    </div>
  </div>
  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <div class="row">


        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">



         @include('layouts.left-tab')





            <form method = "post" action ="{{route('updatephone')}}" enctype="multipart/form-data">
              @csrf

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">


                  <!-- DIV START OF WHISHLISH -->

                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Phone Number Update</h3>
                            </div>
                        
                        <!-- product add -->
                        <form role="form">
          





             <div class="row">
            
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="text" class="form-control input-lg" id="phone" name="phone" value="{{$admin->phone}}" placeholder="" tabindex="3">
                    </div>
                </div>


            </div>


      
            
            
            
        </form>
                          <div class="pull-right">
                             <a href="javascript:void();" onclick="window.history.go(-1); return false;"  class="primary-btn">Back</a>
                                <input type="submit" name="updatephone" value="UPDATE" class="primary-btn">
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     


                </div>
                <!-- DIV END OF WHISHLISH -->

            

       
            </div>

          </form>





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