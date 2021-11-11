@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
	.lists ul li a{
		text-decoration: none;
		font-size: 14px;
		font-weight: 500;
		color: #666;
	}
	.lists ul li{
		list-style: none;
		padding: 10px 20px;
	}
	.lists ul li a:hover{
		cursor: pointer;
		color: #fe9126;
	}
	.ser-head h3{
		padding: 5px 20px;
		font-weight:600;
		font-size:16px;
		text-transform: capitalize;
	}
	.form-right{
		padding: 25px;
	}
	.input-field{
	    margin-top: 5px;
	}
	.input-field label{
		font-size: 12px;
		color: #666;
		font-weight: 500;
		
	}
	.input-field input{
		width: 100%;
		padding: 5px 10px;
		font-size: 14px;
		border: 1px solid #ddd;
		outline: none;
	}
	.input-field input:hover{
		border: 1px solid #fe9126;
		outline: none;
	}
	.form-detail{
		padding: 5px 30px;
	}
	.form-inner h3{
		text-transform: capitalize;
		font-weight:600;
		font-size: 16px;
	}
	.svbtn button{
	    margin-top: 20px;
	    outline: none;
	    border: 0px;
	    background: #fe9126;
	    color: #fff;
	    font-weight:600;
	    width:100%;
	    padding: 10px 20px;
	}
</style>
<div class="row">
				<div class="col-sm-4" style="padding: 5px; margin-left: 25px; height: 100%; margin-top:5px; background: #fff; height: 830px;">
					<div class="ser-head"> 
						<h3>Search engine optimization(SEO)</h3>
					</div>
				    
				    <div class="lists">
				    	<ul>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Custom SEO Strategy: We customize our SEO services to fit your needs. We use the tactics that make the most impact for your unique business.</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Comprehensive Onsite SEO: Title tags, meta descriptions, alt tags, internal linking, etc</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Thorough keyword research and market analysis.</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> In-depth evaluation of the competition.</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Careful Link Building: By hand, on diverse domains with high domain authority.</a></li>
				    	</ul>
				    </div>
				</div>
				<div></div>
				
				<div class="col-sm-6 form-right" style="padding: 5px; height: 100%; margin-left: 5px; margin-top: 5px; background: #fff; height: 830px;">
				    <div class="form-detail">
				    	<div class="form-inner">
				    		<h3>Fill all the details here</h3>
				    		<form action="/Vendor/storeservice/seo" method="POST" enctype="multipart/form-data">
				    			<div class="input-field">
				    				<label>First Name</label>
				    				<input type="text" name="first_name" value="{{$user->first_name}}">
				    			</div><div class="input-field">
				    				<label>Last Name</label>
				    				<input type="text" name="last_name" value="{{$user->last_name}}">
				    			</div>
				    			<div class="input-field">
				    				<label>Cell NO.</label>
				    				<input type="text" name="cell_no"  value="{{$store->phone}}">
				    			</div>
				    			<div class="input-field">
				    				<label>Shop Name</label>
				    				<input type="text" name="store_name" value="{{$store->store_name}}">
				    			</div>
				    			<div class="input-field">
				    				<label>Email</label>
				    				<input type="text" name="email" value="{{$user->email}}">
				    			</div>
				    			<div class="input-field">
				    				<label>Requirnments</label>
				    				<textarea name="description" id="editor1" rows="10" cols="80"></textarea>
				    			</div>
				    			<div class="input-field">
				    				<label>Upload Sample Image/Document (Optional)</label>
				    				<input type="file" name="image">
				    			</div>
				    			<div class="svbtn">
				    			    <button type="submit">Submit</button>
				    			</div>
				    		</form>
				    	</div>
				    </div>
				</div>
				
</div>
	<script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
			</script>
@endsection