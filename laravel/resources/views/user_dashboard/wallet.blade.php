@extends('user_dashboard.layout.profile')
@section('content2')

<style type="text/css">
	.Wallet-inner{
		display: flex;
		flex-direction: column;
		justify-content: center;

	}
	.Wallet-inner img{
		display: block;
	    margin: 0 auto;
	    width: 200px;
	}
	.Wallet-inner b{
		font-size: 18px;
    	color: #282c3f;
    	margin: 0;
    	text-align: center;
	}
	.Wallet-inner p{
		    font-size: 16px;
		    color: #a5a7ae;
		    margin: 8px 0 24px;
		    text-align: center;
	}
	.Wallet-inner a{
		
	    color: #fe9126;
	    text-transform: uppercase;
	    border: none;
	    padding: 0;
	    text-align: center;
	    justify-content: center;

	}
</style>
				<div class="col-sm-9">
					<div class="Wallet">
						<div class="Wallet-inner">
							<img src="{{ asset('/frontend/img/customer/voucher.png')}}" class="center">
							<b>No Wallet yet</b>
							<p>Your Wallet will be displayed here</p>
							<a href="{{ asset('/profile')}}">GO Home</a>
						</div>
					</div>
				</div>
			
@endsection