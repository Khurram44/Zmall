@extends('dashboard.dash-layout.layout')
@section('content')
<style>
    .img-banner-services-inner img{
    	width: 100%;
    	height: auto;
    	object-fit: cover;
    }
    .services{
    	display: flex;
    	justify-content: space-around;
    }
    .services-inner{
    	background: #fe9126;
    	height: 180px;
    	width: 346px;
    	margin: 5px;
    	margin-top:25px;
    	overflow: hidden;
    }
    .services-inner:hover{
    	cursor: pointer;
    }
    .services-inner h2{
    	position: relative;
    	top: 35%;
    	left: 0;
    	color: #fff;
    	font-size: 24px;
    	margin-left: auto;
    	margin-right: auto;
    	vertical-align: middle;
    	text-align: center;
    	font-weight: 600;
    }
    .comingsoon{
    	background: #fff;
    	position: relative;
    	top: -20%;
    	left: -23%;
    	transform: rotate(-45deg);
    }
     .comingsoon p{
     	color: #fe9126;
     	font-size: 16px;
     	padding: 10px 50px;
     	font-weight: 600;
     	text-transform: capitalize;
     }
     .services-inner a{
     	text-decoration: none;
     }
     .services-inner img{
        
         width:100%;
         height:100%;
         object-fit: cover;
     }
</style>
<div class="row">
	<div class="col-sm-10" style="padding: 5px; margin-left: 25px; margin-top:5px; background: #fff; height: 830px;">
	    <div class="img-banner-services">
	        <div class="img-banner-services-inner">
	            <img src="/frontend/img/vendor_dash/services/Services-Banner.webp">

	        </div>
	    </div>
	    <div class="services">
				<div class="services-inner">
					<a href="/Vendor/Services/LogoDesign">
					    <img src="/frontend/img/vendor_dash/services/Logo Des.webp">
						
					</a>
				</div>
				<div class="services-inner">
					<a href="/Vendor/Services/SEO">
						<img src="/frontend/img/vendor_dash/services/SEO.webp">
					</a>
				</div>
				<div class="services-inner">
					<a href="/Vendor/Services/ContentWriting">
						<img src="/frontend/img/vendor_dash/services/Content WR.webp">
					</a>
				</div>
			</div>
	

			<div class="services">
				<div class="services-inner">
					<a style="cursor: no-drop;"> 
					<!--<div class="comingsoon">-->
					<!--	<p>COMING SOON</p>-->
					<!--</div>-->
					<img src="/frontend/img/vendor_dash/services/Live.webp">
					</a>
				</div>
				<div class="services-inner">
					<a style="cursor: no-drop;"> 
					<!--<div class="comingsoon">-->
					<!--	<p>COMING SOON</p>-->
					<!--</div>-->
					<img src="/frontend/img/vendor_dash/services/Z-Story.webp">
					</a>
				</div>
				<div class="services-inner">
					<a href="/Vendor/Services/PhotoEdit">
					<img src="/frontend/img/vendor_dash/services/Photo E.webp">
					</a>
				</div>
			</div>
	</div>
	
</div>

@endsection