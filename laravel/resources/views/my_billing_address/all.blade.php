
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
                                <h3 class="title">Billing Method</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        
                                        <th>Address</th>
                                        
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @if(!empty($billing_address))
                                    @foreach($billing_address as $a)
                                    <tr>
                                        
                                        <td class="">
                                            {{$a->payment_method.",".$a->phone_number.",".$a->cnic}}</td>
                                        
                                        <td class="text-center">
                                        <a  href="#" data-toggle="modal" data-target="#editaddress_{{$a->id}}">

                                        <i class="fa fa-pencil icon-whish"></i>
                                        </a>
                                        <a  href="{{url('delete-billing-address/'.$a->id)}} " onclick="return confirm ('are you sure to delete?')"  >
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
<!-- Billing Address -->
<div class="modal fade" id="exampleModalCenter" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#16a085;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white;">Billing Address</h4>
        </div>
        <form action="{{route('addbillingaddress')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
         
          <div class="form-group">
            <label for="sel1">Payment Method:</label>
            <select class="form-control" id="payment_method" name="payment_method" onchange="showDiv(this.value)" >
              <option value="Jazz Cash">Jazz Cash</option>
              <option value="Easy Paisa" >Easy Paisa</option>
              <option value="Omani" >Omni</option>
              <option value="Direct Bank">Direct Bank</option>
            </select>
          </div>
        <div id="phone_cnic_fields" style="display: none;"> 
              <div class="form-group">
                <label for="pwd">CNIC:</label>
                <input type="text" class="form-control" placeholder="Enter CNIC" name="cnic" value="">
              </div>
               <div class="form-group">
                <label for="pwd">Phone No:</label>
                <input type="text" class="form-control" placeholder="Enter Phone No" name="phone_number" value="">
              </div>
          </div>
          <div id="bank_fields" style="display: none;"> 
                <div class="form-group">
                    <label for="sel1">Bank Name:</label>
                              <input type="text" class="form-control" placeholder="Enter Branch Code" name="bank_name">
                </div>
               <div class="form-group">
                <label for="pwd">Branch Code:</label>
                <input type="text" class="form-control" placeholder="Enter Branch Code" name="branch_code">
              </div>
              <div class="form-group">
                <label for="pwd">Account Title:</label>
                <input type="text" class="form-control" placeholder="Enter Account Title" name="account_title">
              </div>
              <div class="form-group">
                <label for="pwd">Account No</label>
                <input type="text" class="form-control" placeholder="Enter Account No" name="account_number">
              </div>
          </div>
        
        </div>
        <div class="modal-footer">
            <input type="hidden" name="type" value="1">
           <input type="submit" name= "addbillingaddress" class="primary-btn">
             
          <button type="button" class="primary-btn" data-dismiss="modal" style="margin-right: 10px;" >Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>



<!--Modal-->
@if(!empty($billing_address))
@foreach($billing_address as $a)
<div class="modal fade" id="editaddress_{{$a->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#16a085;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:white;">Billing Address</h4>
        </div>
        <form action="{{route('addbillingaddress')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
         
          <div class="form-group">
            <label for="sel1">Payment Method:</label>
            <select class="form-control" id="payment_method" name="payment_method" onchange="showDiv1(this.value)" >
              <option value="Jazz Cash" {{$a->payment_method  == 'Jazz Cash' ? 'selected' : ''}}>Jazz Cash</option>
              <option value="Easy Paisa" {{$a->payment_method  == 'Easy Paisa' ? 'selected' : ''}}>Easy Paisa</option>
              <option value="Omani" {{$a->payment_method  == 'Omani' ? 'selected' : ''}}>Omni</option>
              <option value="Direct Bank" {{$a->payment_method  == 'Direct Bank' ? 'selected' : ''}}>Direct Bank</option>
            </select>
          </div>
        <div id="phone_cnic_fields1" style="display: none;"> 
              <div class="form-group">
                <label for="pwd">CNIC:</label>
                <input type="text" class="form-control" placeholder="Enter CNIC" name="cnic" value="{{$a->cnic}}">
              </div>
               <div class="form-group">
                <label for="pwd">Phone No:</label>
                <input type="text" class="form-control" placeholder="Enter Phone No" name="phone_number" value="{{$a->phone_number}}">
              </div>
          </div>
          <div id="bank_fields" style="display: none;"> 
                <div class="form-group">
                    <label for="sel1">Bank Name:</label>
                              <input type="text" class="form-control" placeholder="Enter Branch Code" name="bank_name">
                </div>
               <div class="form-group">
                <label for="pwd">Branch Code:</label>
                <input type="text" class="form-control" placeholder="Enter Branch Code" name="branch_code">
              </div>
              <div class="form-group">
                <label for="pwd">Account Title:</label>
                <input type="text" class="form-control" placeholder="Enter Account Title" name="account_title">
              </div>
              <div class="form-group">
                <label for="pwd">Account No</label>
                <input type="text" class="form-control" placeholder="Enter Account No" name="account_number">
              </div>
          </div>
        
        </div>
        <div class="modal-footer">
            <input type="hidden" name="type" value="1">
           <input type="submit" name= "addbillingaddress" class="primary-btn">
             
          <button type="button" class="primary-btn" data-dismiss="modal" style="margin-right: 10px;" >Close</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
 

@endforeach
@endif

<script type="text/javascript">

function showDiv1(element)
{   

    if(element == "Direct Bank"){
      document.getElementById("bank_fields").style.display =  'block';
      document.getElementById("phone_cnic_fields1").style.display =  'none';
  }else{
    document.getElementById("bank_fields").style.display =  'none';
        document.getElementById("phone_cnic_fields1").style.display =  'block';
  }   
}

$(window).on('load', function(){
    $("#phone_cnic_fields1").show();
    $("#bank_fields").hide();
});
</script>

<script type="text/javascript">

function showDiv(element)
{   

    if(element == "Direct Bank"){
      document.getElementById("bank_fields").style.display =  'block';
      document.getElementById("phone_cnic_fields").style.display =  'none';
  }else{
    document.getElementById("bank_fields").style.display =  'none';
        document.getElementById("phone_cnic_fields").style.display =  'block';
  }   
}

$(window).on('load', function(){
    $("#phone_cnic_fields").show();
    $("#bank_fields").hide();
});
</script>
@endsection