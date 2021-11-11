@extends('user_dashboard.layout.profile')
@section('content2')

@if(session()->has('status'))
<div class="alert alert-success">
  {{session()->get('status')}}
</div>
@endif
<form method="post" action="{{route('updatepassword')}}" enctype="multipart/form">
  @csrf
				<div class="col-sm-9">
					<div class="contact">
						<div class="contact-inner">
							<div class="upper-header">
								<h2>Change Password</h2>
							</div>
							<div class="contact-field">
								<label>Enter Current Password</label>
								<input type="password" id="" placeholder="******" name="oldpass" class="form-control @error('oldpass') is-invalid @enderror" style="cursor: pointer;">
							      @if(session()->has('old_password_not_matched'))
							      <div class="alert alert-danger">
							      {{session()->get('old_password_not_matched')}}
							      </div>
							      @endif
							      @error('oldpass')
							      <div class="alert alert-danger">Please Enter Your Current Paassword</div>
     								@enderror
							</div>
							<div class="contact-field">
								<label for="inputEmail4">Enter New Password</label>
							    <input type="password" id="" placeholder="******" name="password" class="form-control @error('password') is-invalid @enderror" style="cursor: pointer;">
							    @error('password')
							    <div class="alert alert-danger">{{ $message }}</div>
							     @enderror
							</div>
							<div class="contact-field">
								<label for="inputEmail4">Confirm New Password</label>
							    <input type="password" class="form-control @error('confirmed') is-invalid @enderror" id="" placeholder="******" name="password_confirmation" style="cursor: pointer;">
							    @error('confirmed')
							    <div class="alert alert-danger">{{ $message }}</div>
							     @enderror
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-primary pull-right" name="updatepassword" value="Updata Now">
				</div>
				</form>

			
@endsection