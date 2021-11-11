@extends('user_dashboard.layout.profile')
@section('content2')

<style type="text/css">
	.vouchers-inner{
		display: flex;
		flex-direction: column;
		justify-content: center;

	}
	.vouchers-inner img{
		display: block;
	    margin: 0 auto;
	    width: 200px;
	}
	.vouchers-inner b{
		font-size: 18px;
    	color: #282c3f;
    	margin: 0;
    	text-align: center;
	}
	.vouchers-inner p{
		    font-size: 16px;
		    color: #a5a7ae;
		    margin: 8px 0 24px;
		    text-align: center;
	}
	.vouchers-inner a{
		
	    color: #fe9126;
	    text-transform: uppercase;
	    border: none;
	    padding: 0;
	    text-align: center;
	    justify-content: center;

	}
</style>
				<div class="col-sm-9">
					<div class="vouchers">
						<div class="vouchers-inner">
							<img src="{{ asset('/frontend/img/customer/voucher.png')}}" class="center">
							<b>No vouchers yet</b>
							<p>Your vouchers will be displayed here</p>
							<a href="{{ asset('/')}}">GO HOME</a>
						</div>
					</div>
				</div>
			
@endsection