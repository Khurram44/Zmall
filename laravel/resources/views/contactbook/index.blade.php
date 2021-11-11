
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
                              <!-- SECTION START / END  -->

               
                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        
@if(session()->has('status'))
<div class="alert alert-success">
    {{session()->get('status')}}
</div>
@endif


                        <div class="pull-right">
                                <!-- <a href="payment.php" class="primary-btn">Add Another Address</a> -->

<!-- <a  href="#" data-toggle="modal" data-target="#Track-Order-modal" class="btn primary-btn" >Add another Address</a> -->


<a  href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn primary-btn" >Add another Address</a>

                            </div>
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Address Book</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        
                                        <th>Address</th>
                                        
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @if(!empty($all_address))
                                    @foreach($all_address as $a)
                                    <tr>
                                        
                                        <td class="">
                                            {{ $a->address.",".$a->city.",".$a->state }}</td>
                                        
                                        <td class="text-center">
                                        <a  href="#" data-toggle="modal" data-target="#update_contact_address_{{ $a->id }}">

                                        <i class="fa fa-pencil icon-whish"></i>
                                        </a>
                                        <a  href="{{url('delete-contactbook/'.$a->id)}} " onclick="return confirm ('are you sure to delete?')"  >
                                        <i class="fa fa-trash icon-whish"></i>
                                        </a>
                                        </td>
                                        </tr>                                  
                                    @endforeach
                                @endif


                                   
                                   
                                   
                                </tbody>

                             
                            </table>
                           <!-- btn div was here -->
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     


                </div>
                <!-- SECTION START / END  -->
                
       
            </div>
       
        

        </div>

<!--  -->


  </div>
</div>
        <!-- /container -->
    </div>
    <!-- /section -->
<!-- FOOTER -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h4 class="modal-title" id="exampleModalLongTitle">Add New Address</h4>

      </div>
       <form role="form" method="post" action="{{ route('createcontactbook') }}">
      <div class="modal-body">
       
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            
                        
        

            @csrf
             <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                      <div class="form-group">
                        <label for="">Address Line 1:</label>
                        <input type="text" name="address" class="form-control input-lg" id="" placeholder="" tabindex="3">
                    </div>
                   
                </div>

            </div>
          


  <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="">Province:</label>
                      <select class="form-control input-lg load_province_cities" name="state" id="" required="required">
                        
                        <option value="">Select</option>
                        @if(!empty($province))
                        @foreach($province as $p)
                        <option value="{{$p->id}}">{{$p->name}}</option>
                        @endforeach
                        @endif
                      </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="">City:</label>
                        <select class="form-control input-lg citiesdropdownfield" name="city" id="" required="required">
                       

                        <option value="">Select</option>
                        @if(!empty($cities))
                        @foreach($cities as $c)
                         <option value="{{$c->name}}">{{$c->name}}</option>
                         @endforeach
                         @endif
                           

                      </select>
                    </div>
                </div>
            </div>

              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                      <div class="form-group">
                        <label for="">Phone:</label>
                        <input type="text" name="phone" class="form-control input-lg" id="" placeholder="" tabindex="3">
                    </div>
                   
                </div>

            </div>
        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     

       

        

    
      </div>
      <div class="modal-footer">
        <div class="pull-right">
        <button type="submit" name="add_contact_book" value="Save" class="primary-btn">Save</button>
        <button type="button" class="primary-btn vendr_notava" data-dismiss="modal" aria-label="Close" class="primary-btn">Back</button>
          

        </div>
      </div>
      </form>
      <!-- modal body  end  -->
      

        </div>
  </div>
</div>
<!-- New Modal for test  -->
 @if(!empty($all_address))
            @foreach($all_address as $a)
<div class="modal fade" id="update_contact_address_{{ $a->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">

        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h4 class="modal-title" id="exampleModalLongTitle">Update Address</h4>

      </div>
       <form role="form" method="post" action="{{ route('updatecontactbook') }}">
      <div class="modal-body">
       
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            
                        
        

            @csrf
             <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                      <div class="form-group">
                        <label for="">Address :</label>
                        <input type="text" name="address" value="{{ $a->address }}" class="form-control input-lg" id="" placeholder="" tabindex="3">
                    </div>
                   
                </div>

            </div>


  <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="">Province:</label>
                      <select class="form-control input-lg load_province_cities" name="state" id="" required="required">
                        
                        @if(!empty($province))
                          @foreach($province as $c)
                           <option value="{{$c->id}}"{{$c->id ==  $a->state ? 'selected' : ''}}>{{$c->name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="">City:</label>
                        <select class="form-control input-lg citiesdropdownfield" name="city" id="" required="required">
                       

                        <option value="" disabled selected>Select The City</option>
                        @if(!empty($cities))
                        @foreach($cities as $c)
                         <option value="{{$c->name}}"{{$c->name ==  $a->city ? 'selected' : ''}}>{{$c->name}}</option>
                        @endforeach
                        @endif
                       
                        
                      </select>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-12">
                      <div class="form-group">
                        <label for="">Phone:</label>
                        <input type="text" name="phone" value="{{$a->telephone}}" class="form-control input-lg" id="" placeholder="" tabindex="3">
                    </div>
                   
                </div>

            </div>
        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     

       

        

    
      </div>
      <div class="modal-footer">
        <div class="pull-right">
            <input type="hidden" name="row_id" value="{{ $a->id }}">
        <button type="submit" name="add_contact_book" value="Save" class="primary-btn">Save</button>
        <button type="button" class="primary-btn vendr_notava" data-dismiss="modal" aria-label="Close" class="primary-btn">Back</button>
          

        </div>
      </div>
      </form>
      <!-- modal body  end  -->
      

        </div>
  </div>
</div>
@endforeach
@endif
@endsection