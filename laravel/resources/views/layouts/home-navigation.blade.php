<?php
use App\Manage;
$Categories = Manage::where('module_id', 1)->where('is_deleted', 0)->limit(10)->get();

?>
<div id="navigation">
		<!-- container -->
		<div class="container">
			<div class="row">
			<div id="responsive-nav">


				<!-- menu nav -->
				
								@include('layouts.menu-nav')
				<!-- menu nav -->
			</div>
			</div>
		</div>
		<!-- /container -->
	</div>