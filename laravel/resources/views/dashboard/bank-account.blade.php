@extends('dashboard.dash-layout.layout')
@section('content')
<style>
.top-title{
    padding:20px 50px;
}
.add-account{
    padding:0px 50px;
    display: -webkit-box;
    
}
    .add-account-inner{
        width:100px;
        height:100px;
        border: 1px solid #ddd;
        background: #fff;
        padding:35px 30px;
        cursor: pointer;
        margin-top:auto;
        margin-bottom:auto;
    }
    .add-account-inner i{
        display:flex;
        justify-content: center;
        align-items: center;
        color: #666;
    }
    .add-account-show{
        border: 1px solid #ddd;
        background: #fff;
        padding:25px 30px;
        cursor: pointer;
        max-width: 25%;
        margin-right:20px;
    }
    .add-account-show-inner{
        
    }
    .form-control:{
        outline: none;
        border: 1px solid #ddd;
        box-shadow: none;
}
    .form-control:focus {
        outline: none;
        border: 1px solid #fe9126;
        box-shadow: none;
}
@media only screen and (max-width: 600px) {
  .add-account{
      display: flex;
    flex-direction: column;
        padding: 0px 20px;
  }
  .add-account-show{
      border: 1px solid #ddd;
    background: #fff;
    padding: 10px 15px;
    cursor: pointer;
    max-width: 100%;
    margin-right: 20px;
  }
  .add-account-inner{
      margin-top:10px;
  }
  .col-res{
      padding: 0 20px !important;
      margin-left: 10px !important;
    margin-top: 0px !important;
    width: 100% !important;
  }
}
</style>
    <div class="row">
		<div class="col-sm-10 col-res" style="padding: 5px; margin-left: 25px; margin-top:5px; width: 83%; background:#fff; height:827px;;">
		    <div class="top-title"><h4>Add your bank details</h4></div>
		    
		    <div class="add-account">
                @if(!empty($bankDetail))
                @foreach($bankDetail as $b)
                	<div class="add-account-show">
                	    <div class="add-account-show-inner">
                	        <p>Title: {{$b->bank_title}} </p>
                	        <p>Account Number: {{$b->account_no}} </p>
                	        <p>Bank: {{$b->bank}} </p>
                	        <div>
                                <form>
                	            <button  class=btn btn-primary>Edit</button>
                	            <button type="submit" formaction="{{url('/Vendor/delete-bank-detail/'.$b->id)}}" class=btn btn-danger>Remove</button>
                                </form>
                	        </div>
                	    </div>
                	</div>
                	@endforeach
                    @endif
                
                	<div class="add-account-inner" data-toggle="modal" data-target="#exampleModal">
                	    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                	</div>
                	
		    </div>
		    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="{{ asset('/Vendor/bank-account-save') }}">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">Add your bank details</h4>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="recipient-name" placeholder="Enter Your Bank Title" required>
                      </div>
                      <div class="form-group">
                        <label for="accnumber" class="col-form-label">Account Number</label>
                        <input type="text" name="acc_no" class="form-control" id="accnumber" placeholder="Account Number" required>
                      </div>
                      <div class="form-group">
                          <label class="col-form-label">Bank Account</label>
							
							<select name="select_bank" required class="form-control" required>
								<option value="">Select Bank</option>
								<option value="Al Baraka Bank Pakistan Limited">Al Baraka Bank Pakistan Limited</option>
								<option value="Alfalah Bank Limited">Alfalah Bank Limited</option>
								<option value="Allied Bank Limited">Allied Bank Limited</option>
								<option value="Askari Bank Limited">Askari Bank Limited</option>
								<option value="Bank AL Habib Limited">Bank AL Habib Limited</option>
								<option value="BankIslami Pakistan Limited">BankIslami Pakistan Limited</option>
								<option value="Burj Bank Limited">Burj Bank Limited</option>
								<option value="Deutsche Bank ">Deutsche Bank </option>
								<option value="Dubai Islamic Bank Pakistan Limited">Dubai Islamic Bank Pakistan Limited</option>
								<option value="Easypaisa">Easypaisa</option>
								<option value="Faysal Bank Limited">Faysal Bank Limited</option>
								<option value="First Women Bank Limited">First Women Bank Limited</option>
								<option value="Habib Bank Limited">Habib Bank Limited</option>
								<option value="Habib Metropolitan Bank Limited">Habib Metropolitan Bank Limited</option>
								<option value="Industrial And Commercial Bank Of Chaina">Industrial And Commercial Bank Of Chaina</option>
								<option value="JazzCash">JazzCash</option>
								<option value="JS Bank Limited">JS Bank Limited</option>
								<option value="MCB Bank Limited">MCB Bank Limited</option>
								<option value="MCB Islamic Bank Limited">MCB Islamic Bank Limited</option>
								<option value="Meezan Bank Limited">Meezan Bank Limited</option>
								<option value="National Bank Of Pakistan">National Bank Of Pakistan</option>
								<option value="NIB Bank Limited">NIB Bank Limited</option>
								<option value="S.M.E. Bank Limited">S.M.E. Bank Limited</option>
								<option value="Samba Bank Limited">Samba Bank Limited</option>
								<option value="Silk Bank Limited">Silk Bank Limited</option>
								<option value="Sindh Bank Limited">Sindh Bank Limited</option>
								<option value="Soneri Bank Limited">Soneri Bank Limited</option>
								<option value="Standard Chartered Bank Pakistan Limited">Standard Chartered Bank Pakistan Limited</option>
								<option value="Summit Bank Limited">Summit Bank Limited</option>
								<option value="The Bank Of Khyber">The Bank Of Khyber</option>
								<option value="The Bank Of Punjab">The Bank Of Punjab</option>
								<option value="The Bank Of Punjab">The Bank Of Punjab</option>
								<option value="The Punjab Provincial Cooperative Bank Limited">The Punjab Provincial Cooperative Bank Limited</option>
								<option value="Ubl Bank Limited">Ubl Bank Limited</option>
								<option value="Zarai Taraqiati Bank Limited">Zarai Taraqiati Bank Limited</option>
							</select>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="outline: none;">Close</button>
                    <button type="submit" class="btn btn-primary" style="background: #fe9126; color: #fff; outline: none; border: none;">Save</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
		</div>
	</div>
@endsection