<?php 

date_default_timezone_set('Asia/Karachi');
ini_set('max_execution_time', 60);
use App\Orders;
$temp_id = Session::get('temp_user_id');
$results = Orders::where('temp_user_id',$temp_id)->first();
$product_price = $results['grand_total'];


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//1.
$amount = $product_price;
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//2.
//makinging order id, usually it comes from database
$DateTime 	 = new DateTime();
$orderRefNum = $DateTime->format('YMDhms');
// 2020-07-15T18:03:00
// $time = $DateTime->format('Y-M-D' . 'T' . 'h:m:s');
$time = "2021-06-15T18:03:00";
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//3.
//to make expiry date and time add one hour to current date and time
//format: YYYYMMDD HHMMSS
$ExpiryDateTime = $DateTime;
$ExpiryDateTime->modify('+' . 1 . ' hours');
// $expiryDate = $ExpiryDateTime->format('YMDhms');
$expiryDate = "20210615180300";
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN



//--------------------------------------------------------------------------------
//$post_data

$post_data =  array(
	"storeId" 			=> Config::get('constant.easypay.store_id'),
	"amount" 			=> $amount,
	"orderRefNum" 		=> $orderRefNum,
	"paymentMethod" => 'InitialRequest',
	"postBackURL" => Config::get('constant.easypay.POST_BACK_URL1'),
	"orderId" => $results->order_no,
	"expiryDate" 		=> $expiryDate, 
	"token"        => $expiryDate, 	  	
	"encryptedHashRequest" => '',				  	//Optional
	"autoRedirect" 		=> "1",				  	//Optional
	"timeStamp"     => $time,


);

//OTC_PAYMENT_METHOD
//MA_PAYMENT_METHOD
//CC_PAYMENT_METHOD

//--------------------------------------------------------------------------------

$_SESSION['post_data'] = $post_data;

//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
//4.
//$sorted_string
//make an alphabetically ordered string using $post_data array above
//and skip the blank fields in $post_data array
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
$crypttext = openssl_encrypt($sorted_string, $cipher, Config::get('constant.easypay.HASH_KEY'), OPENSSL_RAW_DATA);
$HashedRequest = Base64_encode($crypttext);
//NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN


$post_data['encryptedHashRequest'] =  $HashedRequest;

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


//echo $sorted_string; 
//echo '<br>'; 
//echo $HashedRequest; 
//echo '<br>';
//exit;

//insert $post_data array into database for validating secure hash
?>

<!-- container --> 
  <section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2><?php echo 'zmall';?> - Checkout</h2>
      </div>      
      <span id="success-msg" class="payment-errors"></span>   
      
    <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5">
    <div class="row"></div>
        <!--Form with header-->
            <div class="card border-gray rounded-0">
                <div class="card-header p-0">
                    <div class="bg-gray text-left py-2">
                        <h6 class="pl-2"><strong>Product Price: </strong> <?php echo $product_price;?> PKR</h6>
                    </div>
                </div>

<!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->
<!-- Telenor EasyPay payment form -->
<!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->

<form method="POST" action="{{ Config::get('constant.easypay.TRANSACTION_POST_URL1') . '?' . $sorted_string }}" id="myCCForm">

<!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->

<div class="card-body p-3">   
	<h2>Pay With</h2>
	<div class="input-group-text"><img src="images/telenor-logo.png"></div>
	<br>
	<div class="text-right">
		<a href="index.php" id="payBtn" class="btn btn-primary py-2">Back</a> 
		<button type="submit" id="payBtn" class="btn btn-info py-2">Proceed to Checkhout</button>
	</div>
	
</div>
</form>



                
            </div> 
              <div>                
                </div>
          </div>
        </div>
    </div>
  </section>
<script type="text/javascript">
	x=document.getElementById('orderId').value;
	document.write(x);
</script>