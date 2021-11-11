<!DOCTYPE>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<form action="{{Config::get('constant.easypay.TRANSACTION_POST_URL1')}}" method="POST" target="_blank">
        <?php $post_data = Session::get('post_data'); 
        $sortedArray = $post_data;
ksort($sortedArray);
$sorted_string = '';
$i = 1;

foreach($sortedArray as $key => $value){
    if(!empty($value))
    {
        if($i == 1)
        {
            $sorted_string = $key. '=' .$value;
        }
        else
        {
            $sorted_string = $sorted_string . '&' . $key. '=' .$value;
        }
    }
    $i++;
}
// AES/ECB/PKCS5Padding algorithm
$cipher = "aes-128-ecb";
$crypttext = openssl_encrypt($sorted_string, $cipher, Config::get('constant.easypay.HASH_KEY'),OPENSSL_RAW_DATA);
$HashedRequest = Base64_encode($crypttext);
$post_data['encryptedHashRequest'] = $HashedRequest;
?>
	<input name="storeId" id="storeId" value="{{$post_data['storeId']}}" hidden = "true"/>
	<input name="amount" id="amount" value="{{$post_data['amount']}}" hidden = "true"/>
	<input name="orderId" id="orderId" value="{{$post_data['orderId']}}" hidden = "true"/>
	<input type ="hidden" name="email" id="email" value="faisalfaiz64@gmail.com">
	<input type ="hidden" name="cellNo" id="cellNo" value="03409157441">
	<input name="token" id="token" value="{{$post_data['token']}}" type="hidden" readOnly="true" />
	<input name="bankId" id="bankId" value="" type="hidden"/>
	<input type ="hidden" name="encryptedHashRequest" id="encryptedHashRequest" value="{{$post_data['encryptedHashRequest']}}">
	<input name="postBackURL" id="postBackURL" value="{{$post_data['postBackURL']}}" hidden = "true"/>
	<input name="signature" id="signature" value="" type="hidden" />
	<input type ="hidden" name="merchantPaymentMethod" id="merchantPaymentMethod" value="{{$post_data['paymentMethod']}}">
	<input type ="hidden" id="timeStamp" name="timeStamp" value="{{$post_data['timeStamp']}}">
	<button type="submit" name="pay" class="btn btn-primary" id="submitPaymentMethod" onClick="loadIframe();">Continue to Easypay Portal</button>
    <iframe id="easypay-iframe" name="easypay-iframe" src="about:blank" width="100%" height="500px"></iframe>
	</form>
    
<script>
 function getValues() {
 
 } 
 function loadIframe(iframeName, url) {

 var storeID = document.getElementById("storeId").value;
 var amount = document.getElementById("amount").value;
 var orderID = document.getElementById("orderId").value;
 var email = document.getElementById("email").value;
 var cellNo = document.getElementById("cellNo").value;
 var token = document.getElementById("token").value;
 var bankId = document.getElementById("bankId").value;
 var encryptedHashRequest = document.getElementById("encryptedHashRequest").value;
 var postBackURL = document.getElementById("postBackURL").value;
 var merchantPaymentMethod = 
document.getElementById("merchantPaymentMethod").value;
var signature = document.getElementById("signature").value;
var timeStamp = document.getElementById("timeStamp").value;
 var params = { storeId: storeID, orderId: orderID, transactionAmount: amount, mobileAccountNo: cellNo, emailAddress: email, transactionType: "InitialRequest", tokenExpiry: token, bankIdentificationNumber: bankId, encryptedHashRequest: encryptedHashRequest,merchantPaymentMethod : merchantPaymentMethod, postBackURL:postBackURL,signature:signature};

 var $iframe = $('#' + iframeName);
 
 if ( $iframe.length ) {
 if(params.storeId != "" && params.orderId !="") {
 var str = jQuery.param( params);
 $iframe.attr('src',url+'?'+str); // here you can change src
 } 
 return false;
 }
 
 return true;
 }
 $( "#submitPaymentMethod" ).click(function() {
 document.write('here'); 
 $("#iframe-class").addClass("show-iframe"); 

 return loadIframe('easypay-iframe','http://zmall.pk/chkpayment?delivery=easypaisa'); 
 });
 </script>
</body>
</html>
