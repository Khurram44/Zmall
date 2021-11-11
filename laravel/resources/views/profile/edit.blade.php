@extends('layouts.app')
<style type="text/css">
	.page-title.background-page {
    background-image: url('{{ asset('images/banner-img.jpg') }}');
    
}
</style>
@section('content')
<main id="main" class="site-main">
			<div class="page-title background-page">
				<div class="container">
					<h1>Update Agent</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="{{ route('home') }}">Home</a><span>/</span></li>
							<li>Update Agent</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="account-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							@include('nav_bar')
						</div>
						<div class="col-lg-9">
							<div class="account-content backed-campaigns account-table">
								
								<div class="row" style="    background-color: #ededed;">
									<div class="col-lg-12">
										<h3 class="account-title">Update Agent</h3>
									</div>
									
								</div>
								<div class="account-main">
									<form method="POST" action="{{ route('saveaccounts') }}"  id="registerForm" class="clearfix">
                            @csrf
                            <div class="row">
                            	<div class="col-lg-4 form-group">
                            		<label>Full Name</label>
                            		<input type="text" name="full_name" class="form-control"  required="required" value="{{$MyAgents->full_name}}">
                            	</div>
                            	<div class="col-lg-4 form-group">
                            		<label>Contact Number</label>
                            		<input type="text" name="contact_number" class="form-control"  required="required" value="{{$MyAgents->contact_number}}">
                            	</div>
                                <div class="col-lg-4 form-group">
                                    <label>Country</label>
                                    <select name="country_id" id="country"  class="form-control"  required="required" >  
                                        <option value="">Select </option> 
                                        <?php if(!empty($Countries)){
                                                    foreach($Countries as $c){?> 
                                         <option  value="<?php echo $c->id; ?>"
                                            <?php if($MyAgents->country_id == $c->id){
                                                echo "selected";
                                            }?>>
                                            <?php echo $c->country_name; ?>
                                        </option>
                                    <?php }
                                }?>
                                     </select>  
                                </div>
                            	
                            </div>
                            <div class="row">
                            	
                            	<div class="col-lg-4 form-group">
                            		<label>City</label>
                            		<input type="text" name="city" class="form-control"  required="required" value="{{$MyAgents->city}}">
                            	</div>
                            	<div class="col-lg-4 form-group">
                            		<label>State</label>
                            		<input type="text" name="state" class="form-control"  required="required" value="{{$MyAgents->state}}">
                            	</div>
                                <div class="col-lg-4 form-group">
                                    <label>Postal Code</label>
                                    <input type="text" name="postal_code" class="form-control"  required="required" value="{{$MyAgents->postal_code}}">
                                </div>
                                </div>
                            <div class="row">
                            	
                                <div class="col-lg-12 form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control"  required="required" value="{{$MyAgents->address}}">
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-lg-6 form-group">
                            		<label>Email</label>
                            		<input type="email" name="email" class="form-control" required="required" value="{{$UserInfo->email}}">
                            	</div>
                            	<div class="col-lg-6 form-group">
                            		<label>Password</label>
                            		<input type="password" name="password" class="form-control" required="required" value="{{$UserInfo->password}}">
                            	</div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="hidden" name="rowid" value="{{$MyAgents->id}}">
                                    <input type="submit" value="Submit" name="update_agents" class="btn btn-success pull-right">
                                </div>
                                
                            </div>
                        </form>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .account-content -->
		</main>
		<div class="row" style="height: 70px;"></div>
		@endsection