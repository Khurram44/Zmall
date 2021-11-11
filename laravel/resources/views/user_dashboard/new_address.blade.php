@extends('user_dashboard.layout.profile')
@section('content2')
<style type="text/css">
.contact-fill label{
	font-size: 12px;
    color: #979797;
    display: block;
    min-height: 14px;
    margin-top: 10px;
    font-weight: 400;
}
.contact-fill input{
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    padding: 9px 12px;
    display: block;
    margin-bottom: 0;
    height: 39px;
    width: 100%;
    font-family: circular,Arial,sans-serif;
    border: 1px solid #ddd;
    outline: none;
}
.contact-fill select{
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    padding: 9px 12px;
    display: block;
    margin-bottom: 0;
    height: 39px;
    width: 100%;
    font-family: circular,Arial,sans-serif;
    border: 1px solid #ddd;
    outline: none;
}
.contact-fill input:focus{
    border: 1px solid #fe9126;
}
.imp-star{
	color: red;
}
.buttons-rm{
	display: flex;
}
.bt-submit button{
	background: #fe9126;
	color: #fff;
	border: 1px solid #fe9129;
	outline: none;
	padding: 10px 20px;
	margin-left: 10px;
}
.bt-cancel button{
	background: #fff;
	color: #fe9126;
	outline: none;
	border: 1px solid #fe9129;
	padding: 10px 20px;
	margin-left: 10px;
}
</style>

				<div class="col-sm-9">
					<div class="new-address">
						<div class="new-address-inner">
							<div class="upper-header">
								<h2>Add New Address</h2>
							</div>
						<form method="post" action="{{ route('createcontactbook') }}">
							@csrf
							<div class="form-row">
							    <div class="form-group col-md-6">
							    	<div class="contact-fill">
								      <label for="name">Name <span class="imp-star">*</span></label> 
								      <input type="text" id="name" name="name" required>
							    	</div>
								</div>
							    <div class="form-group col-md-6">
							    	<div class="contact-fill">
								      <label for="phone">Phone No <span class="imp-star">*</span></label> 
								      <input type="number" id="phone" name="phone" required>
							    	</div>
								</div>
							</div>
							<div class="form-group col-md-12">
							    	<div class="contact-fill">
								      <label for="address">Home Address/Building and Floor  <span class="imp-star">*</span></label> 
								      <input type="text" name="address" id="address" required>
							    	</div>
							</div>
							<div class="form-row">
							    <div class="form-group col-md-4">
							    	<div class="contact-fill">
								      <label for="name">Province <span class="imp-star">*</span></label> 
								      <select class="load_province_cities"  name="state" required="required">
								      	<option disabled="disabled">Select</option>
								      	@if(!empty($province))
                        				@foreach($province as $p)
				                        <option value="{{$p->id}}">{{$p->name}}</option>
				                        @endforeach
				                        @endif
								      </select>
							    	</div>
								</div>
							    <div class="form-group col-md-4">
							    	<div class="contact-fill">
								      <label for="city">City <span class="imp-star">*</span></label> 
								      <select class="citiesdropdownfield" name="city" id="" required="required">
								      	<option disabled="disabled">Select</option>
								      	@if(!empty($cities))
                        				@foreach($cities as $c)
				                        <option value="{{$c->name}}">{{$c->name}}</option>
				                        @endforeach
				                        @endif
								      </select>
							    	</div>
								</div>
							</div>
								<div class="form-group col-md-12">
							    	<div class="contact-fill">
								      <label for="country">Country  <span class="imp-star">*</span></label> 
								      <input type="text" id="country" placeholder="Pakistan" disabled="disabled">
							    	</div>
								</div>
								<div class="form-group col-md-12">
							    	
								      <input type="checkbox" id="default"> <label for="default" style="color: #979797; font-weight: 400;">Set As Default</label>
							    	
								</div>
							
							<div class="col-md-6 buttons-rm">
								<div class="bt-submit">
									<button type="submit" name="add_contact_book" value="Save">Save</button>
								</div>
								<div class="bt-cancel">
									<button>Cancel</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			
@endsection