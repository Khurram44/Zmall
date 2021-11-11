@extends('admin.users.vendor_dashboard.dash-layout.layout')
@section('content')

<style type="text/css">
	.a-top-right select{
		border: 1px solid #ddd;
		outline: none;
		padding: 2px 5px;
		background: rgb(0,0,0,0.05);

	}
  @media screen and (max-width:  800px){
	.col-res{
		width: 100% !important;
		margin-right: 0px !important;
		padding: 0px 5px !important;
		margin-left: 20px !important;
	}
	.a-top-left h4 {
	    font-size: 12px !important;
	    font-weight: 600 !important;
	    width: 150px !important;
	}
	.a-top-right{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		padding-right: 20px;
	}
	.a-top-right span{
		padding-right: 20px;
	}
	
}
</style>
	
	<div class="row">
				<div class="col-sm-10 col-res" style="padding: 5px; margin-left: 20px; width: 83%;">
					<div class="a-top-seller">
						<div class="a-top-bar">
							<div class="a-top-bar-inner">
								<div class="a-top-left">
									<h4>Top Selling Products</h4>
								</div>
								<div class="a-top-right">
									<span>1 April, 2021-7 April 2021</span>
									<select>
										<option>This Month</option>
										<option>This week</option>
										<option>Last Month</option>
										<option>Last Week</option>
									</select>
								</div>
							</div>
						</div>
						<div class="a-top-seller-inner">
							<b>No Products!</b>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-res" style="padding: 5px; margin-left: 20px; width: 83%;">
					<div class="a-stock-pro">
						<div class="a-top-bar">
							<div class="a-top-bar-inner">
								<div class="a-top-left">
									<h4 style="color: #fe9126;">Out Of Stock Products <br> (Sorted By Units Sold)</h4>
								</div>
								<div class="a-top-right">
									<span>1 April, 2021-7 April 2021</span>
									<select>
										<option>This Month</option>
										<option>This week</option>
										<option>Last Month</option>
										<option>Last Week</option>
									</select>
								</div>
							</div>
						</div>
						<div class="a-stock-pro-inner">
							<b>Failed to get data. <br>Please try again after some time!</b>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-res" style="padding: 5px; margin-left: 20px; width: 83%;">
					<div class="a-expstock">
						<div class="a-top-bar">
							<div class="a-top-bar-inner">
								<div class="a-top-left">
									<h4>Expected To Be Out Of Stock (In Next 10-15 Days)</h4>
								</div>
								<div class="a-top-right">
									<span>1 April, 2021-7 April 2021</span>
									<select>
										<option>This Month</option>
										<option>This week</option>
										<option>Last Month</option>
										<option>Last Week</option>
									</select>
								</div>
							</div>
						</div>
						<div class="a-expstock-inner">
							<b>No Products!</b>
						</div>
					</div>
				</div>
			</div>
			
@endsection