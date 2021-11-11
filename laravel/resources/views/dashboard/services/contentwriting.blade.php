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
						<h3>Content Writing</h3>
					</div>
				    
				    <div class="lists">
				    	<ul>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We save our clients time, producing web page and blog content at an efficient pace.</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We enjoy the process of writing and its practical application on websites, and our content quality reflects that commitment and desire for excellence.</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We will review your competitors, analyzing their weaknesses and adjusting your content to benefit from our findings.</a></li>
				    		<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We will identify the best keywords and phrases that will attract traffic to your site and encourage visitor-to-client conversion.</a></li>
				    		
				    	</ul>
				    </div>
				</div>
				<div></div>
				
				<div class="col-sm-6 form-right" style="padding: 5px; height: 100%; margin-left: 5px; margin-top: 5px; background: #fff; height: 830px;">
				    <div class="form-detail">
				    	<div class="form-inner">
				    		<h3>Fill all the details here</h3>
				    		<form action="/Vendor/storeservice/con" method="POST" enctype="multipart/form-data">
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