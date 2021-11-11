@extends('dashboard.dash-layout.layout')
@section('content')
<?php $current_route_name = Route::getFacadeRoot()->current()->uri(); ?>
<style>
.promo-banner{
	position: relative;
	top: 0px;
	left: 120px;
	background-image: linear-gradient(to left, #E1ECFF , #FFDDE2);
	padding: 20px;
	display: flex;
	justify-content: space-between;
	width: 85%;

}
.promo-banner ol li{
	font-size: 18px;
}
.camp-set{
	border: 1px solid #ddd;
	padding: 20px;
	border-radius: 10px;

}
.camp-inp1 input{
	width: 100%;
	border: 1px solid #ddd;
	outline: none;
	padding: 10px;
	margin-bottom: 20px;
}
.camp-inp-inner{
	display: flex;
}
.camp-inp-inner input{
	margin-left: 10px;
	border: 1px solid #ddd;
	outline: none;
	padding: 10px;
}
.camp-inp-inner b{
	margin: 0px 20px 0px 25px;
	color: #666;
	padding: 10px;
}
.camp-set-bot{
	border: 1px solid #ddd;
	padding: 20px;
	border-radius: 10px;
	display: flex;
	justify-content: space-between;
}
.camp-set-bot button{
	vertical-align: middle;
	border: 1px solid #ddd;
	outline: none;
	padding: 10px;
}
.sel-but button{
	display: flex;
	float: right;
	margin-top: 10px;
	background: #fe9126;
	color: #fff;
	padding: 10px 15px;
	outline: none;
	font-weight: 500;
	border: none;
}
.manage-inner-rbig{
	background: #fff;
}
.p-details-title p{
	background: rgb(0,0,0,0.05);
	padding: 10px;
	font-size: 16px;
}
.p-details-version p{
	font-size: 16px;
	padding: 10px;

}
.p-details-version small{

	padding: 10px;

}
.p-details-version img{
	
}
.p-details-name{
	padding: 10px;
}
.p-details-name p{
	font-weight: 500px;
}
.p-details-version table tr td{
	border: none;
}
.manage-right{
	
}
.myaccounts-opt{
	display: flex;
}
.myaccounts-opt a{
	text-decoration: none;
	padding: 5px;
	color: #fff;
	font-size: 16px;
	font-weight: 500;
	background: #fe9126;
	width: 150px;
	text-align: center;
	margin-left: 5px;
} 
.mydet-account-inner table tr td label{
	font-weight: 500;
	font-size: 16px;
}
.mydet-account-inner table tr td input{
	width: 600px;
	padding:5px;
	font-size: 12px;
	outline: none;
	border: 1px solid #ddd;
}
.mydet-account-inner table tr td input:focus{
	border-color: #fe9126;
	outline: none;
}
.myaccounts-opt a.accactive{
	background: #666;
	color: #fff;
}
.menu-pro.menu-active{
	background: #666;
	color: #fff;
}
.menu-account ul li{
	list-style: none;
	display: flex;
	
}
.menu-account ul li a{
	text-decoration: none;
	font-size: 18px;
    line-height: 16px;
    padding: 8px 16px;
    margin-bottom: 12px;
    display: block;
    border-radius: 4px;
    color: #666;
    width: 100%;
}
.my-account h5{
	font-size: 20px;
	margin-left: 30px;
	margin-bottom: 30px;
}
.mydet-account-inner table tr td{
    border:none;
}
@media only screen and (max-width: 800px){
	.respons{
		height: auto !important;
	}
	.my-account h5{
		font-weight: 600;
		margin-bottom: 10px;
	}
	.mydet-account{
		margin-left: 20px;
	}
	.mydet-account-inner table tr td input{
		width: 230px;
	}
	.accounts-pro-btns button{
		   padding: 8px 180px;
	    outline: none;
	    border: none;
	    background: #fe9126;
	    color: #fff;
	    text-transform: capitalize;
	    font-weight: bold;
	     float: none !important; 
	     margin-right: 0px !important;
	}
}
</style>

	
        <div class="row" style="background: #fff;">
				<div class="col-sm-3 respons" style="padding: 5px; margin-left: 30px; border-right:1px solid #ddd; height:750px; overflow-y: scroll;">
					<div class="manage-left">
						<div class="my-account">
							<h5>Your Account</h5>
						</div>
						<div class="menu-account">
							<ul>
								<li><a href="{{asset('/Vendor/myaccount')}}" class="menu-pro {{ $current_route_name === 'Vendor/myaccount' ? 'active' : null }}">Profile</a></li>
								<li><a href="{{asset('/Vendor/sellerlogo')}}" class="menu-pro {{ $current_route_name === 'Vendor/sellerlogo' ? 'active' : null }}">Seller Logo</a></li>
								<li><a href="{{asset('/Vendor/commision')}}" class="menu-pro {{ $current_route_name === 'Vendor/commision' ? 'active' : null }}">Subscription</a></li>
								<li><a href="{{asset('/Vendor/delivery')}}" class="menu-pro {{ $current_route_name === 'Vendor/delivery' ? 'active' : null }}">Delivery Option</a></li>
							</ul>
						</div>
					</div>
				</div>
			
				<div class="col-sm-7" style="padding: 15px;">
				
					@yield('content3')
				</div>
        </div>

        <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
    $('.menu-account a').click(function() {
        $(this).siblings('.menu-pro').removeClass('active');
        $(this).addClass('active');
    });
});
        </script>

@endsection