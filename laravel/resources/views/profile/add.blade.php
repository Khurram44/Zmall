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
					<h1></h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="{{ route('home') }}">Home</a><span>/</span></li>
							<li></li>
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
										<h3 class="account-title">Edit Personal Information</h3>
									</div>
									
								</div>
								<div class="account-main">
									<form method="POST" action="{{ route('updateprofile') }}"  id="registerForm" class="clearfix">
                            @csrf
                            <div class="row">
                            	<div class="col-lg-4 form-group">
                            		<label>Full Name</label>
                            		<input type="text" name="name" class="form-control"  required="required" value="<?php echo $userss->name; ?>">
                            	</div>
                            	<div class="col-lg-4 form-group">
                            		<label>Contact Number</label>
                            		<input type="text" name="contact_number" class="form-control"  required="required" value="<?php echo $userss->contact_number; ?>">
                            	</div>
                                <div class="col-lg-4 form-group">
                                    <label>Country</label>
                                    <select name="country_id" id="country"  class="form-control"  required="required" >  
                                        <option value="">Select </option> 
                                        <?php if(!empty($Countries)){
                                                    foreach($Countries as $c){?> 
                                         <option  value="<?php echo $c->id; ?>"
                                            <?php if($userss->country_id == $c->id){
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
                            		<input type="text" name="city" class="form-control"  required="required" value="<?php echo $userss->city; ?>">
                            	</div>
                            	<div class="col-lg-4 form-group">
                            		<label>State</label>
                            		<input type="text" name="state" class="form-control"  required="required" value="<?php echo $userss->state; ?>">
                            	</div>
                                <div class="col-lg-4 form-group">
                                    <label>Postal Code</label>
                                    <input type="text" name="postal_code" class="form-control"  required="required" value="<?php echo $userss->postal_code; ?>">
                                </div>
                                </div>

                            <div class="row">
                            	
                                <div class="col-lg-12 form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control"  required="required" value="<?php echo $userss->address; ?>">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6 form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" class="form-control"  required="required" value="<?php echo $userss->age; ?>">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>Gender</label>
                                    <select class="form-control show-tick" name="gender" required>
                                                <option value="">-- Select --</option>
                                                <option value="Male"  <?php if($userss->gender == 'Male'){ echo "selected";}?>>Male</option>
                                                <option value="Female"  <?php if($userss->gender == 'Female'){ echo "selected";}?>>Female</option>
                                            </select>  
                                </div>
                                
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                    <label>Experience</label>
                                    <select class="form-control show-tick" name="experience" required>
                                                <option value="">-- Select --</option>
                                                <option value="<1 Year"  <?php if($userss->experience == '<1 Year'){ echo "selected";}?>><1 Year </option>
                                                    <option value="1 Year"  <?php if($userss->experience == '1 Year'){ echo "selected";}?>>1 Year </option>
                                                    <option value="2 "  <?php if($userss->experience == '2 Year'){ echo "selected";}?>>2 Year </option>
                                                    <option value="3 Year"  <?php if($userss->experience == '3 Year'){ echo "selected";}?>>3 Year </option>
                                                    <option value="4 Year"  <?php if($userss->experience == '4 Year'){ echo "selected";}?>>4 Year </option>
                                                    <option value="5 Year"  <?php if($userss->experience == '5 Year'){ echo "selected";}?>>5 Year </option>
                                                    <option value="6 Year"  <?php if($userss->experience == '6 Year'){ echo "selected";}?>>6 Year </option>
                                                    <option value="7 Year"  <?php if($userss->experience == '7 Year'){ echo "selected";}?>>7 Year </option>
                                                    <option value="8 Year"  <?php if($userss->experience == '8 Year'){ echo "selected";}?>>8 Year </option>
                                                    <option value="9 Year"  <?php if($userss->experience == '9 Year'){ echo "selected";}?>>9 Year </option>
                                                    <option value="10 Year"  <?php if($userss->experience == '10 Year'){ echo "selected";}?>>10 Year </option>
                                                    <option value="11 Year"  <?php if($userss->experience == '11 Year'){ echo "selected";}?>>11 Year </option>
                                                    <option value="12 Year"  <?php if($userss->experience == '12 Year'){ echo "selected";}?>>12 Year </option>
                                                    <option value="13 Year"  <?php if($userss->experience == '13 Year'){ echo "selected";}?>>13 Year </option>
                                                    <option value="14 Year"  <?php if($userss->experience == '14 Year'){ echo "selected";}?>>14 Year </option>
                                                    <option value="15 Year"  <?php if($userss->experience == '15 Year'){ echo "selected";}?>>15 Year </option>
                                                    <option value="16 Year"  <?php if($userss->experience == '16 Year'){ echo "selected";}?>>16 Year </option>
                                                    <option value="17 Year"  <?php if($userss->experience == '17 Year'){ echo "selected";}?>>17 Year </option>
                                                    <option value="18 Year"  <?php if($userss->experience == '18 Year'){ echo "selected";}?>>18 Year </option>
                                                    <option value="19 Year"  <?php if($userss->experience == '19 Year'){ echo "selected";}?>>19 Year </option>
                                                    <option value="20 Year"  <?php if($userss->experience == '20 Year'){ echo "selected";}?>>20 Year </option>
                                                    <option value="21 Year"  <?php if($userss->experience == '21 Year'){ echo "selected";}?>>21 Year </option>
                                                    <option value="22 Year"  <?php if($userss->experience == '22 Year'){ echo "selected";}?>>22 Year </option>
                                                    <option value="23 Year"  <?php if($userss->experience == '23 Year'){ echo "selected";}?>>23 Year </option>
                                                    <option value="24 Year"  <?php if($userss->experience == '24 Year'){ echo "selected";}?>>24 Year </option>
                                                    <option value="25 Year"  <?php if($userss->experience == '25 Year'){ echo "selected";}?>>25 Year </option>
                                                    <option value=">25 Year"  <?php if($userss->experience == '>25 Year'){ echo "selected";}?>>>25 Year </option>
                                                
                                            </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>Expected Salary</label>
                                    <input type="text" name="expected_salary" class="form-control"  required="required" value="<?php echo $userss->expected_salary; ?>">
                                </div>
                               
                            </div>
                            <div class="row">
                            	<div class="col-lg-12 form-group">
                            		<label>About Me</label>
                                    <textarea style="width: 100%;" class="form-control" name="about_me"><?php echo $userss->about_me; ?></textarea>
                            	</div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required="required" value="<?php echo $userss->email; ?>">
                                </div>
                            	<div class="col-lg-6 form-group">
                            		<label>Password</label>
                            		<input type="password" name="password" class="form-control" required="required" value="<?php echo $userss->password; ?>">
                            	</div>
                            </div>
                            
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                     <input type="hidden" name="rowid" value="{{$userss->id}}">
                                    <input type="submit" value="Submit" name="update_resume" class="btn btn-success pull-right">
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