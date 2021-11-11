@extends('layouts.app')
<style type="text/css">
	.page-title.background-page {
    background-image: url('{{ asset('images/banner-img.jpg') }}');
    
}
</style>
@section('content')
<main id="main" class="site-main">
			<div class="page-title background-page">
				<div class="container">
					<h1>My Agents</h1>
					<div class="breadcrumbs">
						<ul>
							<li><a href="{{ route('home') }}">Home</a><span>/</span></li>
							<li>My Agents</li>
						</ul>
					</div><!-- .breadcrumbs -->
				</div>
			</div><!-- .page-title -->
			<div class="account-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3">
							@include('nav_bar')
						</div>
						<div class="col-lg-9">
							<div class="account-content backed-campaigns account-table">
								
								<div class="row" style="    background-color: #ededed;">
									<div class="col-lg-9">
										<h3 class="account-title">My Agents</h3>
									</div>
									<div class="col-lg-3 text-right">
										<a href="{{ route('addagents') }}" class="btn btn-primary">Add New </a>
									</div>
								</div>
								<div class="account-main">
									@if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
									<table>
										<thead>
											<tr>
												<th>Name</th>
												<th>Email</th>
												<th>Contact</th>
												<th>Status</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php if(!empty($MyAgents)){
														foreach($MyAgents as $a){?>
											<tr>
												<td><?php echo $a->full_name;?></td>
												<td><?php echo $a->email;?></td>
												<td><?php echo $a->contact_number;?></td>
												<td><?php echo ucfirst($a->status);?></td>
												<td>
													<a href="{{ url('editagents/'.$a->id)}}" title="Update"><i class="fa fa-edit"></i></a>
													<!-- <a href="#" title="Delete"><i class="fa fa-trash"></i></a> -->
												</td>
											</tr>
										<?php }
									}?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .account-content -->
		</main>
		<div class="row" style="height: 70px;"></div>
		@endsection