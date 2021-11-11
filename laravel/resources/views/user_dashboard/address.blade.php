@extends('user_dashboard.layout.profile')
@section('content2')

<style type="text/css">
	.already-address{
			display: flex;

	}
	.address-inner{
		display: flex;

	}
	.address-inner img{
		display: block;
	    margin: 0 auto;
	    width: auto;
	}
	.address-inner b{
		font-size: 18px;
    	color: #282c3f;
    	margin: 0;
    	text-align: center;
	}
	.address-inner p{
		    font-size: 16px;
		    color: #a5a7ae;
		    margin: 8px 0 24px;
		    text-align: center;
	}
	.address-inner a{
		
	    color: #fe9126;
	    text-transform: uppercase;
	    border: none;
	    padding: 0;
	    text-align: center;
	    justify-content: center;

	}
	.already-address-inner{
		margin-top: 20px;
		border: 1px solid #eeeeef;
	    min-height: 120px;
	    width: 250px;
	    padding: 16px;
	    margin-left: 20px;
	}
	.bt-add button{
		border: 1px solid #fe9126;
		display: block;
		margin-top: 10px;
		padding: 5px 10px;
		margin-left: auto;
		margin-right: auto;
		color: #fe9126;
		background: #fff;
	}
	.address-details p{
		text-align: left;
		margin: 0px;
		color: #000;
		font-size: 12px;
		margin-top: 5px;
	}
	.edi a{
		text-decoration: none;
		color: #fe9126;
		margin-left: 10px;
		padding: 5px 20px;
		border: 1px solid #fe9126;

	}
</style>

				<div class="col-sm-9">
					
					<div class="address">
						<div class="address-inner" style="display:flex; flex-direction:column;">
							@if($all_address->isEmpty())
							<img src="{{ asset('/frontend/img/customer/address.png')}}" class="center" style="height: 200px;">
							<b>No address added yet</b>
							<p>Your address will be displayed here</p>
							<a type="submit" href="{{asset('/profile/new-address')}}">ADD NEW ADDRESS</a>
							@else
							<div class="already-address">
								<div class="already-address-inner">
									<img src="{{ asset('/frontend/img/customer/add-address.png')}}">
									<div class="bt-add">
									    <form>
									        <button formaction="{{asset('/profile/new-address')}}">Add New Address</button>
									    </form>
										
									</div>
								</div>
							 
							
								@foreach($all_address as $p)
								
								<div class="already-address-inner">
									<div class="address-details">
										<label>{{$user->first_name}}</label>
										<p>"{{$p->address}}" "{{$p->city}}" "{{$p->state}}" </p>
										<p>Pakistan</p>
										<p>Phone: "{{$p->telephone}}" </p>
										<hr>
										<div class="edi">
											<a  href="{{url('delete-contactbook/'.$p->id)}} " onclick="return confirm ('are you sure to delete?')">Remove</a>
											<a href="{{url('edit-address/'.$p->id)}}">Edit</a>
										</div>
									</div>
								</div>
								
								@endforeach
								
							
							</div>
							@endif
							
						</div>
					</div>
				</div>
			
@endsection