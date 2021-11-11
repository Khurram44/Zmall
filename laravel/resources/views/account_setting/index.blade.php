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
            
            <!-- flight section -->
            <div class="bhoechie-tab-content active">

               @if(session()->has('status'))
                <div class="alert alert-success">
                 {{session()->get('status')}}
                  </div>
                @endif

                @if(session()->has('profile_update'))
                <div class="alert alert-success">
                  {{session()->get('profile_update')}}
                </div>
                @endif



              <div class="row">
                <div class="clearfix section-white p-sm">
                  <div class="col-md-12">
                    <div class="order-summary clearfix">
                      <div class="section-title">
                        <h3 class="title">Account setting</h3>
                      </div>

                        <div class="row ">

                          <div class="form-group col-md-6">
                            <label>Name:</label><!-- <span class="pd-lft-5"><a href="dbrdcust-profile-edit.php">Edit</a></span> -->
                            <p>{{$user_info->first_name}} {{$user_info->last_name}}</p>    
                          </div>    




                          <div class="form-group col-md-6">

                            <label>Gender:</label><span class="pd-lft-5" style="float: right;"><a href="{{asset('/edit-profile')}}">Edit</a></span>
                            <p>{{$user_info->gender}}</p>
                          </div>   



                        </div>


                        <div class="row">

                          <div class="form-group col-md-6">

                            <label>Email Address:</label><span class="pd-lft-5"><a href="{{ asset('/edit-email')}}">Edit</a></span>
                            <p>{{$user_info->email}}</p>        

                          </div>   

                          <div class="form-group col-md-6">

                            <label>Phone Number:</label><span class="pd-lft-5"><a href="{{asset('/edit-phone')}}">Edit</a></span>
                            <p>{{$user_info->phone}}</p>        

                          </div>   

                        </div>
                        @if($user_info->role == 'vendor')
                        <div class="section-title">
                        <h3 class="title">About Us</h3>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">

                            <label>Logo:</label><br>
                            <img src="{{asset('storage/uploads/'.$user_info->image)}}" alt="Image here" class="img-thumbnail"width="200" height="200">        

                          </div> 
                           <div class="form-group col-md-6">

                            <label>Banner:</label><span class="pd-lft-5" style="float: right;"><a href="{{asset('/edit-aboutus')}}">Edit</a></span><br>
                            <img src="{{asset('storage/uploads/'.$user_info->banner)}}" alt="Image here" class="img-thumbnail"width="200" height="200">        

                          </div>  
                      </div>
                      <div class="row clearfix">
                          <div class="col-md-12">
                                  
                             <div class="form-group">
                                <label>Description *</label>
                            <p>{{$user_info->description}}</p>
                          
                                        </div>
                                </div>
                              </div>
                          @endif
                       
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