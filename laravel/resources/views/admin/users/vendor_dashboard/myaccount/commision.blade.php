@extends('admin.users.vendor_dashboard.dash-layout.account')
@section('content3')
<style type="text/css">
	.commision-top{
		display: flex;
		justify-content: space-between;
		padding: 20px 0px;
	}
</style>
<div class="seller-logo">
			<h3>Commision Fee</h3>
			<div class="Commision">
				<div class="commssion-inner">
					<div class="commision-top">
						<b>Commission Fee</b>
						<input type="text" name="" placeholder="Search by Category">
					</div>
					<div class="com-cat">
						<table class="table table-borderless">
							<tr>
								<td><b> Category </b></td>
								<td><b> Commision </b></td>
							</tr>
							<tr>
								<td> Women Fashion </td>
								<td> 15% </td>
							</tr>
							<tr>
								<td> Men Fashion </td>
								<td> 15% </td>
							</tr>
							<tr>
								<td> Kids </td>
								<td> 15% </td>
							</tr>
							<tr>
								<td> Lifestyle </td>
								<td> 15% </td>
							</tr>
							<tr>
								<td> Beauty </td>
								<td> 15% </td>
							</tr>
							<tr>
								<td> Electric Accessories </td>
								<td> 15% </td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
</div>


@endsection