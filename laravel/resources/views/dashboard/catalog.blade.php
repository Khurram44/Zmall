@extends('dashboard.dash-layout.layout')
@section('content')
<style>
@media screen and (max-width: 800px){
    .cataloog-banner{
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
	.cataloog-banner ol li {
    font-size: 14px;
    }
    .catalog-desc h3{
        font-size: 16px;
    }
    .pro-add-catlog{
        position: relative;
        top: 10px;
        left:0;
        width: 100%;
    }
    .pro-cat-ha {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    padding: 0px 40px;
    }
    .pro-cat-ha b{
        font-size: 18px;
    }
    
    .tbl-catl{
        width:100%;
    }
    .tbl-catl table {
    width: 83% !important;
    margin: 0px;
    margin-left: 40px;
    margin-bottom: 20px;
    }

    .table tr td{
        padding:4px !important;
    }
}
</style>
<div class="row" style="background-color: #fff;">
				
				<div class="col-sm-10">
					

					<div class="row col-res" style="margin-top: 10px;">
						
						<div class="cataloog-banner">
							<div class="catalog-desc">
								<h3>Create and share product catalogs with buyers!</h3>
							
							<ol>
								<li>Create custom private / public product catalogs</li>
								<li>Add products to the catalog using bulk upload sheet</li>
								<li>Share the catalog links with buyers</li>
							</ol>
							</div>
							<div class="img-right">
								<img src="/frontend/img/vendor_dash/catalogue_mini.svg">
							</div>
							
						</div>
						<div class="pro-add-catlog">
							<div class="pro-cat-ha">
							<b>Product Catalogs</b>
							<button>Create new catalog</button>
							</div>
						<div class="tbl-catl">
							<table class="table table-borderless">
								<tr>
									<td>Catalog Name</td>
									<td>Status</td>
									<td>Availability</td>
									<td>No. of Products</td>
									<td>Last Updated</td>
									
								</tr>
								<tr>
									<td>Testing</td>
									<td>Testing</td>
									<td>Testing</td>
									<td>Testing</td>
									<td>Testing</td>
									<td><a href="" style="text-decoration: none; color: #fe9126; text-transform: uppercase;">Edit</a></td>
								</tr>
							</table>
						</div>
						</div>
						
					</div>			
				</div>
				
			</div>

@endsection