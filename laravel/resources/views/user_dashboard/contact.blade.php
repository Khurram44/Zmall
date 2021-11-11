@extends('user_dashboard.layout.profile')
@section('content2')


				<div class="col-sm-9">
					<div class="contact">
						<div class="contact-inner">
							<div class="upper-header">
								<h2>Profile</h2>
								<a href="/change-pass"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Change Password</a>
							</div>
							<div class="contact-field">
								<label>Name</label>
								<input type="text" name="" class="input-cont" value="{{$user->first_name}}" disabled="disabled">
							</div>
							<div class="contact-field">
								<label>Email</label>
								<input type="text" name="" class="input-cont" value="{{$user->email}}" disabled="disabled">
							</div>
							<div class="contact-field">
								<label>Phone Number</label>
								<input type="text" name="" class="input-cont" value="{{$user->phone}}" disabled="disabled">
							</div>
						</div>
					</div>
				</div>
			
@endsection