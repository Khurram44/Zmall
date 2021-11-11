<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Zmall</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/moreinfo.css')}}">
</head>
<body>
	<div class="container-fluid bg">
		<div class="row">
			<div class="topdesc">
			<center><h3>Store Profile</h3></center>
			<center>
				<b>This is how customers will see your store</b>
			</center>
				</div>
			<div class="log-form">
				
				<form method="POST" action="{{ route('financial_detail_store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-inner">
						
						<div class="inp-field">
							
							<textarea class="form-control" name="store_description" placeholder="Store Description (Max 350 characters recommended)" ></textarea>
						</div>
						<div class="inf-b">
							<h6>Add a high resolution image as your store banner</h6>
								<p>Recommended: 1080px X 540px (2:1 aspect ratio)</p>	
								<div class="inp-field fie">
									<p>Upload Banner Here</p>
									<input type="file" id="store_pic" name="store_pic" onchange="showimg(this);" placeholder="Upload Banner Here" required>
								</div>
						</div>

						<div class="preview">
							<img src="#" id="imgshow" alt="PLeae Select Image">
						</div>
					</div>
					

					<button type="submit">Done</button>
					</form>

					

					
				
				
			</div>
			
		</div>
	</div>

<script type="text/javascript">
	function showimg(input){
		if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgshow')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
	}
</script>

</body>
</html>