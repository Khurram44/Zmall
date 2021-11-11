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

              <form method="post" action="{{route('updatemail')}}" enctype="multipart/form-data">
                @csrf


                  <!-- DIV START OF WHISHLISH -->

                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Update Email</h3>
                            </div>
                        
          
            <div class="row">
            


                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="email">Enter New Email Address:</label>
                        <input type="email" name ="email" class="form-control input-lg" id="email" value="{{$admin->email}}" placeholder=" Email Address" tabindex="3">
                    </div>
                </div>



            </div>




      
            
            
            
       
                          <div class="pull-right">
                             <a href="javascript:void();" class="primary-btn" onclick="window.history.go(-1); return false;">Back</a>
                                <input type="submit" name="updatemail" class="primary-btn" value="UPDATE">
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     


                </div>
                <!-- DIV END OF WHISHLISH -->

            

           </form>
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