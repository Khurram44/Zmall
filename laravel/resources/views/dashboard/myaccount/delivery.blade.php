@extends('dashboard.dash-layout.account')
@section('content3')
<style type="text/css">
	.del-opt{
		border: 1px solid #ddd;
		padding: 10px;
	}
	.del-opt h5{
		font-size: 18px;
		
		color: #666;
	}
	.del-opt input{
		margin-left: 20px;
	}
	.del-opt label{
		margin-left: 5px;
	}
	@media only screen and (max-width: 600px){
	   .seller-logo{
	       margin-left:20px;
	       width:90%;
	   }
	}
</style>
<div class="delivery-opt seller-logo">
	<h3>Delivery option</h3>
    <form action="/Vendor/delivery-save" method="POST">
	<div class="del-opt">
		<h5>STANDARD</h5>
		<input type="radio" name="delivery" id="trax" value="Trax" checked><label for="trax">Trax</label>
	</div>
	<div class="accounts-pro-btns">
        <button type="submit" name="serviceselect" style="background:#fe9126; color:#fff; outline:none; border:none; padding: 5px 30px; float:right; margin-top:10px;">Save</button>
    </div>
		</form>			
</div>


@endsection