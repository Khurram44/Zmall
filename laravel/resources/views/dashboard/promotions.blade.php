@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
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
.marketing-desc{
    width:100%;
}
.promo-banner ul li{
    list-style: none;
}
.marketing-banner ul li span{
    font-size: 18px;
}

.img-right img{
    text-align:center;
}
</style>
    <div class="row">
		<div class="col-sm-10 col-res" style="padding: 5px; margin-left: 25px; margin-top:5px; width: 83%; background:#fff; height:827px;">
		   
		   	<div class="promo-banner">
				<div class="marketing-desc">
					<h3>Marketing Announcement</h3>
				
				<ul>
					<li><span style="font-size: 16px; font-weight: bold;">&#128293;# Post and win seller challange</span></li>
					
				</ul>
				</div>
				<div class="img-right">
					<img src="/frontend/img/vendor_dash/s-promotion-banner.svg">
				</div>
				
			</div>

		</div>
	</div>
@endsection