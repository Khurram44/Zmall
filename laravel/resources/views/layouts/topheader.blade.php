<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  #top-header{
    background-color: transparent;
    position:relative;
    right:0px;
    padding: 10px 0px;
  	justify-content:space-around;
    margin:auto;
    border-bottom: 0px solid #333e48 !important;

}
.header-top-links li a{
  color: #fff !important;
  font-size:12px;
  font-family: 'Poppins', sans-serif;
  font-weight: 410;
  text-transform:capitalize;
align-items
  }
  .header-top-links li a:hover{
    color: #fff !important;
    opacity: 0.8 !important;
  }
</style>
<div class="row" style="background: transparent;">
<div id="top-header">
				<div class="pull-right" style="padding: 0px 10px;">
					<ul class="header-top-links">
                      <li><a href="{{ asset('sell-on-zmall') }}">Sell on Zmall</a></li>
                      <li><a href="" data-toggle="modal" data-target="#TrackingOrder">Tracking Order</a></li>
					<li><a href="{{asset('/blogs')}}">Blogs</a></li>
                      <li><a href="{{asset('/customercare')}}">Customer Care</a></li>
                      <li><a href="{{asset('/faqs')}}">FAQ's</a></li>
					</ul>
				</div>
			
  </div>
</div>

