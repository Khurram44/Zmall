@extends('admin.users.vendor_dashboard.dash-layout.account')
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
</style>
<div class="delivery-opt">
	<h3>Delivery option</h3>

	<div class="del-opt">
		<h5>STANDARD</h5>
		<input type="radio" name="delivery-opt" id="blueex"><label for="blueex">BlueEx</label>
		<input type="radio" name="delivery-opt" id="leopard"><label for="leopard">Leopard</label>
	</div>
					
</div>


@endsection