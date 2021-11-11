<?php
$generalsettings =  \DB::table('generalsettings')->where('id', 1)->first();
?>
<footer id="footer" class="site-footer">
			<div class="footer-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-sm-12 col-12">
							<div class="footer-menu-item">
								<h3>About Us</h3>
								<p>{{ $generalsettings->short_description }}</p>
							</div>
						</div>
						
						<div class="col-lg-3 col-sm-4 col-4">
							<div class="footer-menu-item">
								<h3>Explore</h3>
								<ul>
									
									<li><a href="{{ asset('campaign') }}">Business Investments</a></li>
									<li><a href="{{ asset('realstate') }}">Real Estate Investment</a></li>
									<li><a href="{{ asset('blog') }}">Blog</a></li>
									<li><a href="{{ asset('communities') }}">Communities</a></li>
									<li><a href="{{ asset('about_us') }}">About Us</a></li>
									<li><a href="{{ asset('contact') }}">Contact Us</a></li>
									<li><a href="{{ asset('faq') }}">FAQs</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-sm-12 col-12">
							<div class="footer-menu-item newsletter">
								<h3>Newsletter</h3>
								<div class="newsletter-description">Private, secure, spam-free</div>
								<form action="" method="POST" id="newsletterForm">
							  		<input type="text" value="" name="s" placeholder="Enter your email..." />
							    	<button type="submit" value=""><span class="ion-android-drafts"></span></button>
							  	</form>
							  	<div class="follow">
							  		<h3>Follow us</h3>
							  		<ul>
							  			<li class="facebook">
							  				<a target="_Blank" href="{{ $generalsettings->facebook_link }}"><i class="fa fa-facebook" aria-hidden="true"></i>
							  				</a></li>
							  			<li class="twitter">
							  				<a target="_Blank" href="{{ $generalsettings->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i>
							  				</a></li>
							  			<li class="instagram">
							  				<a target="_Blank" href="{{ $generalsettings->instagram_link }}"><i class="fa fa-instagram" aria-hidden="true"></i>
							  				</a></li>
							  			<li class="google">
							  				<a target="_Blank" href="{{ $generalsettings->gplus_link }}"><i class="fa fa-google-plus" aria-hidden="true"></i>
							  				</a></li>
							  		</ul>
							  	</div>
							</div>
						</div>
					</div>
				
				</div>
			</div><!-- .footer-menu -->
			<div class="footer-copyright">
				<div class="container">
					<p class="copyright">2020 by PandoSeed. All Rights Reserved.</p>
					<a href="#" class="back-top">Back to top<span class="ion-android-arrow-up"></span></a>
				</div>
			</div>
		</footer>