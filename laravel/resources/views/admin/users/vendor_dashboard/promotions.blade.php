@extends('admin.users.vendor_dashboard.dash-layout.layout')
@section('content')
<style>
@media screen and (max-width: 800px){
    .promo-banner{
        position: relative;
        top: 0px;
        left: 0px;
		width: 100% !important;
		margin-right: 0px !important;
		padding: 0px 20px !important;
		margin-left: 20px !important;
		display:flex;
		flex-direction: column;
	}
	.catalog-desc{
	    width:100%;
	}
	.promo-banner ol li{
	    font-size: 14px !important;
	}
    .catalog-desc h3{
        font-size: 15px !important;
    }
    .pro-add-catlog{
        position: relative;
        top: 10px;
        left:0;
        width: 100%;
    }
    .img-right img{
        text-align:center;
    }
    .pro-cat-ha {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    padding: 0px 40px;
    }
    .pro-cat-ha b{
        font-size: 16px;
    }
    .camp-form {
    width: 83% !important;
    margin: 0px;
    margin-left: 30px;
    margin-bottom: 20px;
    }
    .sel-but button {
    display: flex;
    float: right;
    margin-top: 10px;
    background: #fe9126;
    color: #fff;
    padding: 10px 15px;
    outline: none;
    font-weight: 500;
    border: none;
    margin-bottom: 20px;
    margin-right: 60px;
}
}
</style>
<div class="row" style="background-color: #fff;">
				
				<div class="col-sm-10">
					

					<div class="row" style="margin-top: 10px;">
						
						<div class="promo-banner">
							<div class="catalog-desc">
								<h3>Create promotions and boost your sales in 3 easy steps!</h3>
							
							<ol>
								<li>Provide the name and duration of the campaign</li>
								<li>Download the bulk upload template</li>
								<li>Fill the discount information and upload the file</li>
							</ol>
							</div>
							<div class="img-right">
								<img src="/frontend/img/vendor_dash/s-promotion-banner.svg">
							</div>
							
						</div>
						<div class="pro-add-catlog">
							<div class="pro-cat-ha">
							<b>Create Seller Discount</b>
							
							</div>
						<div class="camp-set">
							<div class="camp-form">
								<div class="camp-inp1">
									<p>Campaign Name</p>
									<input type="text" name="">
								</div>
								<div class="camp-inp">
									<p>Campaign Duration</p>
									<div class="camp-inp-inner">
										<input type="date" name="">
										<input type="time" name="">
										<b>to</b>
										<input type="date" name="">
										<input type="time" name="">
									</div>
									
								</div>
							</div>
						</div>
						<div class="sel-but">
							<button>Create Seller Discount</button>
						</div>
						
						<!-- <div class="camp-set-bot" style="margin-top: 20px;">
							<div class="camp-l-left">
								<b>Upload discount details using our bulk template</b>
							<p>Download the template, fill in the discount details against the products and upload the sheet to create the campaign</p>
							</div>
							<div class="camp-l-right">
								<button><i class="fa fa-download" aria-hidden="true"></i> Download Template</button>
							</div>
							
						</div> -->
						</div>
						
					</div>			
				</div>
				
			</div>

@endsection