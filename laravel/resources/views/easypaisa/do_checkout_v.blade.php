<!DOCTYPE>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
	<script type="text/javascript">
		function Closethisasap(){
		document.forms["redirectpost"].submit();
	}
	</script>
</head>
<body onload="Closethisasap();">
<h1>Please wait you will be redireceted soon to <br>EasyPay payment Page</h1>
<form action="{{Config::get('constant.easypay.TRANSACTION_POST_URL1')}}" name='redirectpost' method="POST">
	<?php
	$post_data = Session::get('post_data');
	echo '<pre>';
	print_r($post_data);
	echo '</pre>';
	?>
	@foreach($post_data as $key => $value)
	<input type="hidden" name="{{$key}}" value="{{$value}}">
	@endforeach
</form>
</body>
</html>