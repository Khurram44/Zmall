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





            <form method="post" action="{{route('updateaboutus')}}" enctype="multipart/form-data">
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
                                <h3 class="title">Update About Us</h3>
                            </div>
                        
                        <!-- product add -->
                        <form role="form">
          
            <div class="row">
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Logo:</label>
                        <input type="file" class="form-control input-lg" id="email" name="image" value="{{$admin->image}}" placeholder="Upload Logo" tabindex="3">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Banner:</label>
                        <input type="file" class="form-control input-lg" id="email" name="banner" value="{{$admin->banner}}" placeholder="Upload Banner" tabindex="3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description *</label>
                    
                  <textarea name="description" id="editor1" class="form-control" name="description" cols="100" rows="5" >{{$admin->description}}</textarea>
                    </div>
                </div>
            </div>


                

  



            
           

                       
            
            
        </form>
                          <div class="pull-right">
                             <a href="javascript:void();" class="primary-btn" onclick="window.history.go(-1); return false;">Back</a>
                                <input type="submit" name="updateaboutus" class="primary-btn">
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