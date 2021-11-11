@extends('dashboard.dash-layout.account')
@section('content3')
<style type="text/css">
	.img-change{
		display: flex;
		justify-content: space-around;
		align-items: center;
		vertical-align: middle;
		padding: 20px;
		border: 1px solid #ddd;
		margin-bottom: 20px;
	}
	..img-change-inner{
		margin-top: 30px;
	}
	.img-change-inner label{
		background: rgb(0,0,0,0.05);
		padding: 10px 20px;
		color: #000;
		border: 1px solid #ddd;
		font-weight: 400;
		cursor: pointer;
		margin-left: auto;
		margin-right: auto;
		display: block;
		vertical-align: middle;
		margin-top: 10px;
	}
	.img-change-inner b{
		font-size: 16px;
		color: #666;
		font-weight: 400;
	}
	#upload{
		display: none;
	}
	.img-change-inner-b label{
		font-size: 16px;
		color: #666;
		font-weight: 400;

	}
	.img-change-inner input label i{
		margin-right: auto;
		margin-left: auto;
		color: #666;
	}
	.seller-img-in{
		width: 100px;
		height: auto;
		padding: 5px;
		border: 1px solid #fe9126;
		cursor: pointer;
	}
	.seller-img-in img{
		width: 100%;
		margin-left: auto;
		margin-right: auto;
		display: block;
	}
	.seller-desc{
		display: flex;
		flex-direction: column;
		
		margin-bottom: 20px;
	}
	.seller-desc label{
	font-size: 18px;
    line-height: 20px;
    color: #7c7e8a;
    font-size: 16px;
	}
	.seller-desc textarea{
	height: 300px;
	border: 1px solid #ddd;
	outline: none;
	}
	.seller-desc textarea:focus{
		border: 1px solid #fe9126;
	}
	.seller-banner label{
		font-size: 18px;
    line-height: 20px;
    color: #7c7e8a;
	}
	.seller-banner{
		margin-bottom: 20px;
		display: flex;
		flex-direction: column;
		padding: 20px 30px;

	}
	.seller-banner img{
		width: 50%;
		border: 1px solid #ddd;
	}
	.btn-save{
		background: #fe9126;
		color: #fff;
		padding: 10px 50px;
		outline: none;
		border: none;
		font-size: 16px;
		float: right;
		margin-left: 50px;
	}
@media only screen and (max-width: 600px){
	   .seller-logo{
	       margin-left:20px;
	       width:90%;
	   }
	}
</style>
<div class="seller-logo">
	<form method="POST" action="{{ asset('/Vendor/edit-Seller-logo') }}" enctype="multipart/form-data">
              @csrf
		<h3>
			<h3>Seller Logo</h3>
		</h3>
		<div class="img-change">
			<div class="img-change-inner">
				<input type="file" name="new_logo" id="new_logo" hidden="hidden"><label for="new_logo" class="dummy-upload"><i class="fa fa-upload fa-2x" aria-hidden="true" ></i><br> Upload New LOGO</label>
			</div>
			<div class="img-change-inner-b">
				<label>Previous Logo</label>
				<div class="seller-img-in">
					<img src="{{asset('public/frontend/storage/uploads/'.$storeDetail->logo)}}" alt="img">
				</div>
			</div>
		</div>	
		<div class="seller-desc">
			<label>Description</label>
			<textarea placeholder="You Description Here" name="editor1">
				{{$storeDetail->description}}
			</textarea>
		</div>
		<div class="seller-banner">
			<label>Store Banner</label>
			<img src="{{asset('public/frontend/storage/uploads/'.$storeDetail->img)}}" alt="banner" alt="img">
			<div class="img-change-inner">
				<input type="file" name="new_banner" id="new_banner" hidden="hidden"><label for="new_banner" class="dummy-upload"><i class="fa fa-upload fa-2x" aria-hidden="true" ></i><br> Upload New Banner</label>
			</div>
		</div>
		<button class="btn-save" type="submit" name="sellerlogo">
			Save
		</button>
	</form>
</div>
<script>
   CKEDITOR.replace( 'editor1' );
</script>

@endsection