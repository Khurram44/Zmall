
@extends('layouts.app')

@section('content')
@include('layouts.home-navigation')

<style type="text/css">
  body{
    background:#fff;
  }
	section{
		font-family: circular, Arial, sans-serif;
		overflow:hidden;
	}
	.top-b-section{
		width: 100%;
		background-image: -webkit-gradient(linear,left top,left bottom,from(#f2f2f2),to(#fafafa));
		margin-top: 60px;

	}
	.sell-top-nav{
		justify-content: center;
		position: relative;
    padding: 4px 0;
    
    margin: 0 0 20px;
	}
	.sell-top-tit{
		font-size: 12px;
    color: #282c3f;
    vertical-align: middle;
    line-height: 26px;
    font-family: circular, Arial, sans-serif;
}
.soz-left{

padding: 80px 50px;
line-height: 26px;

}
.soz-left ul {
margin:50px 0px;

}
.soz-left ul li{
line-height: 35px;

}
.bnts-soz button{
	padding: 10px 20px;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f2f2f2),to(#fafafa));
    border: none;
     font-weight: 600;
  margin-left:10px;
	}
  .bnts-soz button:nth-child(1){
    background: linear-gradient(-180deg,#f53d2d,#f63);
    color: #fff;
  }
  .bnts-soz button:nth-child(2){
    border: 2px solid rgb(0,0,0,0.6);
    color: rgb(0,0,0,0.6);
  }
	.soz-left h1{
	color: rgb(40, 44, 63);
	
    letter-spacing: 0px;
    font-size: 34px;
    font-weight: 700;


    }
	.soz-list{
	color: rgb(82, 85, 100);
    letter-spacing: 0px;
    font-size: 16px;
	}
	.why-desc{
		margin-top: 50px;
	}
.soz-desc i{
	
	margin-bottom: 20px;
}
.nmrs{
	background:#fff;
	color: #000 !important;
	height: 70px !important;
	border-radius: 20px;
	padding: 5px;
	color: #fff;
	margin-right: 10px;
	font-size: 14px;	
}
.tool-desc b{
	    color: rgb(40, 44, 63);
    letter-spacing: 0px;
    font-size: 22px;

}
.tool-desc p{
	color: rgb(82, 85, 100);
    letter-spacing: 0px;
    font-size: 16px;
    margin-top: 20px;
}
.tool-left{
	padding: 50px;
}
.tool-p{
	margin-top: 50px;
}
  .faq-sec{
	margin: 20px 0px;
}
.faqs{

	color: #fff;
	font-family: circular, Arial, sans-serif;
}
.quest{
	font-size: 16px;
	margin-top: 10px;
}
.answers{
	margin-top: 5px;
	font-size: 14px;
}
.soz-c-right ul li{
	list-style: none;
	color: rgba(40, 44, 63, 1.0);
    letter-spacing: 0px;
    font-size: 12px;


}
.soz-c-left ul li{
	list-style: none;
	color: rgba(40, 44, 63, 1.0);
    letter-spacing: 0px;
    font-size: 12px;
}
.soz-contact-left{
	padding: 50px;

}
.soz-contact-left b{
	padding: 50px;

}
@media only screen and (max-width: 480px){
    .top-b-section{
        margin-top: 0px;
    }
    .soz-left{
        padding: 0px 10px;
        line-height: 26px;
    }
    .bnts-soz button {
    padding: 10px 5px;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#f2f2f2),to(#fafafa));
    font-weight: 600;
    border: 0px;
    margin-left: 0px;
    }
    .bnts-soz button:nth-child(2) {
    border: 0px;
    color: rgb(0,0,0,0.6);
    }
    .soz-contact-left {
    padding: 5px 25px;
    }
    .soz-contact-left b {
    padding: 0px;
    }
    .why-desc{
        margin-top:0px;
    }
    .mobo-b{
        font-size:24px !important;
    }
    .mobo-sec{
        padding:20px 0px !important;
    }
    .nmrs {
    background: #fff;
    color: #000 !important;
     height: auto !important;
    border-radius: 20px;
    padding: 2px 5px;
    color: #fff;
    margin-right: 10px;
    font-size: 14px;
    
}
</style>
<body>

	<section class="top-b-section">
		<div class="container">
			<div class="sell-top-nav">
				<div class="row">
					<div class="col-sm-3">
						<div class="sell-top-tit">
							<span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
							<span>Free Returns</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="sell-top-tit">
							<span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
							<span> 100% Authentic</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="sell-top-tit">
							<span><i class="fa fa-snowflake-o" aria-hidden="true"></i></span>
							<span> Secure Payments</span>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="sell-top-tit">
							<span><a href="" style="text-decoration: none;  color: #282c3f;">Return & Refund Policies</a> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container"> 
			<div class="row soz-des-tab">
				<div class="col-sm-6 soz-left" data-aos="fade-right" data-aos-duration="1500">
					<h1>Sell on Zmall</h1>
					<div class="soz-list">
					<ul>
						<li>List your products for free on Zmall</li>
						<li>Reach out to millions of customers</li>
						<li>Receive online orders and grow your business</li>
					</ul>
				</div>
					<div class="bnts-soz">
                      <form action="/login_register_vendor">
						<button class="btn-soz btn1" type="submit" href="/login_register_vendor">Open free store now!</button>
						<button class="btn-soz btn2" type="submit" href="/login_register_vendor">Login to Seller Center</button>
                        </form>
					</div>

				</div>
				<div class="col-sm-6" style="margin-top: 30px;">
					<img src="/frontend/img/soz1.jpg" class="img-fluid" data-aos="fade-left" data-aos-duration="1500">
				</div>
			</div>
		</div>
	</section>
	<hr>

	<section style="margin-bottom: 50px;">
		<div class="container">
			<center>
				<b style="color: rgb(40, 44, 63);letter-spacing: 0px;font-size: 34px;">Why sell on Zmall?</b>
			</center>
			<div class="row why-desc">
				<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 2@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: rgb(40, 44, 63);letter-spacing: 0px;font-size: 19px;"><b>Low Commissions</b></h4>
					<p style="margin-top: 35px; color: rgb(40, 44, 63); letter-spacing: 0px; font-size: 13px;">Open a Zmall Seller Centre account and list your products for free on Zmall. Sell to a vast customer base for a small commission on orders.
					</p>
					</div>
			
			</div>
			<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 3@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: rgb(40, 44, 63);letter-spacing: 0px;font-size: 19px;"><b>Business Growth</b></h4>
					<p style="margin-top: 35px; color: rgb(40, 44, 63); letter-spacing: 0px; font-size: 13px;">Open a Zmall Seller Centre account and list your products for free on Zmall Shopping. Sell to a vast customer base for a small commission on orders.
					</p>
					</div>
			
			</div>
			<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 4@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: rgb(40, 44, 63);letter-spacing: 0px;font-size: 19px;"><b>Large Assortments of Products</b></h4>
					<p style="margin-top: 35px; color: rgb(40, 44, 63); letter-spacing: 0px; font-size: 13px; margin-top: 0px;">Open a Zmall Seller Centre account and list your products for free on Zmall. Sell to a vast customer base for a small commission on orders.
					</p>
					</div>
				
			</div>
			<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 5@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: rgb(40, 44, 63);letter-spacing: 0px;font-size: 19px;"><b>Secure & Timely Payments</b></h4>
					<p style="margin-top: 35px; color: rgb(40, 44, 63); letter-spacing: 0px; font-size: 13px;">Open a Zmall Seller Centre account and list your products for free on Zmall. Sell to a vast customer base for a small commission on orders.
					</p>
					</div>
              
      <title>Sell On Zmall | Sell Online In Pakistan | Zmall.pk</title>
      <meta name="description" content="Zmall gives you the power to sell anything online in Pakistan. To sell, create a free account, login to the seller center, upload products & that's it!">
		
          </div>

		</div>
	</section>

	<section class="mobo-sec" style="background: #272c3f; margin-top: 20px; padding: 50px;">
		<div class="container">
			<center>
				<b class="mobo-b" style="color: #fff;letter-spacing: 0px;font-size: 34px;">How to start selling</b>
			</center>
			<div class="row why-desc">
				<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 6@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: #fff;letter-spacing: 0px;font-size: 19px;"><b><span class="nmrs"> '1 </span>Simple Registration</b></h4>
					<p style="margin-top: 25px; color: #fff; letter-spacing: 0px; font-size: 13px;">  Add contact and storefrontdetails to create a free account on Zmall Seller Centre. Provide basic business details to get verified. </p>
					
					</div>
			
			</div>
			<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 7@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: #fff;letter-spacing: 0px;font-size: 19px;"><b><span style="font-weight: bold; margin-right: 20px;">...</span><span class="nmrs"> 2 </span>Add Products</b></h4>
					<p style="margin-top: 25px; margin-left: 25px; color: #fff; letter-spacing: 0px; font-size: 13px;">Add products on Seller Centre one-by-one in our easy to use dashboard, or bulk upload with Excel.
					</p>
					</div>
			
			</div>
			<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 8@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: #fff; letter-spacing: 0px;font-size: 19px;"><b><span style="font-weight: bold; margin-right: 20px;">...</span><span class="nmrs"> 3 </span>Manage Orders</b></h4>
					<p style="margin-top: 25px; margin-left: 25px; color: #fff; letter-spacing: 0px; font-size: 13px;">Keep track of all your orders in one place. Enjoy easy and reliable delivery provided by our shipping partners. 
					</p>
					</div>
				
			</div>
			<div class="col-sm-3">
					<div class="soz-desc">
					<img src="/frontend/img/Asset 9@4x.png" style="height: 130px; text-align: center;"> <br>
					<h4 style="margin-top: 20px; color: #fff; letter-spacing: 0px;font-size: 19px;"><b><span style="font-weight: bold; margin-right: 20px;">...</span><span class="nmrs"> 4 </span>Receive Payments</b></h4>
					<p style="margin-top: 25px; margin-left: 25px; color: #fff; letter-spacing: 0px; font-size: 13px;">Receive payments directly to your account.
					</div>
		
              </div>
              </div>
	
	</section>

	<section style="margin-top: 50px;">
		<div class="container">
			<center>
				<b style="color: rgb(40, 44, 63);letter-spacing: 0px;font-size: 34px;">Powerful tools to grow your business</b>
			</center>
			<div class="row">
				<div class="col-sm-6 tool-p">
					<div class="tool-left">
						<div class="tool-desc" data-aos="fade-right" data-aos-duration="1500">
								<b>Easy Order and Inventory Management</b>
								<p>Add products on Seller Centre one-by-one in our easy to use dashboard, or bulk upload with Excel. Easily manage orders, add multiple warehouses, edit prices, stock and product details in your Seller Centre account.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 tool-p">
					<div class="tool-right" data-aos="fade-left" data-aos-duration="1500">
					<img src="/frontend/img/soz2.jpg" class="img-fluid">
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-6 tool-p">
					<div class="tool-right">
					<img src="/frontend/img/soz3.jpg" class="img-fluid" data-aos="fade-right" data-aos-duration="1500">
					</div>
				</div>
				<div class="col-sm-6 tool-p">
					<div class="tool-left">
						<div class="tool-desc" data-aos="fade-left" data-aos-duration="1500">
								<b>Easy Order and Inventory Management</b>
								<p>Add products on Seller Centre one-by-one in our easy to use dashboard, or bulk upload with Excel. Easily manage orders, add multiple warehouses, edit prices, stock and product details in your Seller Centre account.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
      <section class="mobo-sec" style="background: #272c3f; margin-top: 20px; padding: 50px;">
		<div class="container">
			<center>
				<b class="mobo-b" style="color: #fff;letter-spacing: 0px;font-size: 34px;">Frequently asked questions</b>
			</center>
			<div class="row faq-sec">
				<div class="col-sm-6">
					<div class="faq-left">
						<div class="faqs">
							<div class="quest">
								<b>How do I get paid?</b>
							</div>
							<div class="answers">
								<p>Order payments are deposited to the bank account of your</p>
							</div>
						</div>
						<div class="faqs">
							<div class="quest">
								<b>How do I maximise my earnings?</b>
							</div>
							<div class="answers">
								<p>Maximize your earnings and get a Top Seller badge by shipping orders on time, selling top quality products and avoiding cancellations.</p>
								<p>You can also:</p>
								<ul>
									<li>Join regular marketing campaigns to reach more buyers</li>
									<li>Create custom promotions for your store</li>
									<li>Use the analytics dashboard to monitor store performance</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="faq-right">
						<div class="faqs">
							<div class="quest">
								<b>What fees do I get charged?</b>
							</div>
							<div class="answers">
								<p>Listing your products on Zmall Trade is free. We charge a commission on each order. You will get more details on commission tiers from your Key Account Manager once you sign up.</p>
							</div>
						</div>
						<div class="faqs">
							<div class="quest">
								<b>How do I build a good catalogue?</b>
							</div>
							<div class="answers">
								<p>Create a good catalog by providing:</p>
								<ul>
									<li>High-quality product images</li>
									<li>Accurate product names and detailed descriptions</li>
									<li>Competitive pricing</li>
									<li>Accurate product dimensions and size guides</li>
								</ul>
								<p>Reach out to your local Key Account Manager if you need help in setting up or managing your product catalog.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	</section>

	<section>
		<div class="row">
			<div class="col-sm-5 soz-contact-left">
				<b style="font-size: 18px;">Create your free store in 4 easy steps</b>
				<div class="bnts-soz" style="margin-left: 25px; margin-top: 20px;">
						<form action="/login_register_vendor">
						<button class="btn-soz btn1" type="submit" href="/login_register_vendor">Open free store now!</button>
						<button class="btn-soz btn2" type="submit" href="/login_register_vendor">Login to Seller Center</button>
                        </form>
				</div>
			</div>
			<div class="col-sm-3 soz-contact-left">
				<div class="soz-contact">
					<div class="soz-c-left">
						
						<ul>
							<li style="font-size: 14px;"><strong>Contact us for any help</strong></li>
							<li>Mail: info@zmall.pk</li>
							<li>Call: +923160852499</li>
							<li>Monday- Friday: 10AM- 7PM</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-4 soz-contact-left">
				<div class="soz-contact">
						<div class="soz-c-right">
							<br>
							<ul>
							<li>ZMALL Office#218</li>
							<li>2nd floor, CIE Building, </li>
							<li>The National University of Sciences & Technology, Islamabad</li>
						</ul>
						</div>
				</div>
			</div>
		
	</section>


<script type="text/javascript">
	var lg=document.getElementById("loginn");
	var fg=document.getElementById("fogott");
    
	function showforgotmodal() {
		if(fg.style.display=="none")
		{
			fg.style.display="block";
			lg.style.display="none";
		}
	}
function showmodall(){
	fg.style.display="none";
			lg.style.display="block";
}

</script>

<script>  

        $(window).ready(function() { 
        $(".loginFormVendor").on("keypress", function (event) { 
            // console.log("aaya"); 
            var keyPressed = event.keyCode || event.which; 
            if (keyPressed === 13) { 
                // alert("You pressed the Enter key!!"); 
                event.preventDefault(); 
		        $(".check_login_form_vendor").trigger("click");
			

                // return false; 
            } 
        }); 
        }); 
  
    </script> 

    <script>

$(function() {


	$(".check_login_form_vendor").click(function(e) {
		e.preventDefault();
		var username = $("#username").val(); 
		var login_password = $("#login_password").val(); 
		if(username == ''){
			$("#username").css("border", "1px solid red");
		}else{
			$("#username").css("border", "1px solid green");
		}
		if(login_password == ''){
			$("#login_password").css("border", "1px solid red");
		}else{
			$("#login_password").css("border", "1px solid green");
		}

		if(username != '' && login_password != ''){
			   var _token = "{{ csrf_token() }}";
				$.post("{{ url('authlogin/vendor') }}", {username:username,password:login_password,_token:_token}, function(result){
			    	if(result.status == 'success'){
			    		window.location.href = "/dashboard";
			    	}else{
			    		$(".check_login_password").text(result.status);
			    	}
			  },"json");
		}
		
	});

});



</script>

	<script>
    AOS.init();
  	</script>



@endsection