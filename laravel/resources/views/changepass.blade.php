
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


           
<div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Change Password</h3>
                            </div>
<form method="post" action="{{route('updatepassword')}}" enctype="multipart/form">
  @csrf
  <div class="row">

 
    <div class="form-group col-md-6">
      <label for="inputEmail4">Enter Current Password</label>
      <input type="password" id="" placeholder="******" name="oldpass" class="form-control @error('oldpass') is-invalid @enderror">
      @if(session()->has('old_password_not_matched'))
      <div class="alert alert-danger">
      {{session()->get('old_password_not_matched')}}
        
      </div>
      @endif

      @error('oldpass')
     <div class="alert alert-danger">Please Enter Your Current Paassword</div>
     @enderror
    </div> 
     

    <div class="form-group col-md-6">
     
    </div>
</div>

 <div class="row">
    <div class="form-group col-md-6">
       <label for="inputEmail4">Enter New Password</label>
      <input type="password" id="" placeholder="******" name="password" class="form-control @error('password') is-invalid @enderror">
       @error('password')
     <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    

    <div class="form-group col-md-6">
      <label for="inputEmail4">Confirm New Password</label>
      <input type="password" class="form-control @error('confirmed') is-invalid @enderror" id="" placeholder="******" name="password_confirmation">
       @error('confirmed')
     <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    

</div>


  </div>


  
  <input type="submit" class="btn btn-primary pull-right" name="updatepassword" value="Updata Now">
</form>

                          
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


@endsection