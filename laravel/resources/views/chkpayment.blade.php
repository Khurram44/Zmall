<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/checkout-style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
    
    
    
  </head>
<style type="text/css">
  input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ddd;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid #ddd;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #666;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
    .hli p{
        color#fff !important;
    }
  .hli {

    background: #fe9126;
    color: #fff !important;
    
}
.hli:hover{

    background: #fe9126;;
    
}
        
       
    </style>
    

  <body>

  <!----------------- Container starts here ----------------->
<div class="container">
      <!----------------- Row1 starts here ----------------->
      <div class="row">
      

          <div class="col-sm-2">
             <a href="/home"> <img src="/frontend/logo/zmalllogo-b.png" style="width:120px;"> </a>
          </div>
          <!----------------- Progress starts here ----------------->
          <div class="col-sm-6">
              <div class="progress-bar">
                 <div class="step">
                  
                    <div class="bullet active">
                      <span>1</span>
                    </div>
                  <div class="check fas fa-check">
                  </div>
                   <p>ADDRESS</p>
                  </div>
                    <div class="step">
                      
                    <div class="bullet ">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>PAYMENT METHOD</p>
                    </div>
                    <div class="step">
                        
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>REVIEW & PAY</p>
                    </div>
              </div>
            </div>
            <!----------------- /Progress ----------------->
      </div>
      <!----------------- /Row1 ----------------->

      <!----------------- Row2 Ends here ----------------->
      <div class="row">
          <div class="form-outer">
              <form id="checkout-form" class="clearfix section-white p-sm"  action="{{ route('chkpayment') }}">
                    <!----------------- page3 starts here ----------------->
                      <div class="page">
                          
                          <div class="row">
                            <div class="title">
                                  Select Payment Method 
                                  <br>
                                    <small>
                                    You'll have a chance to review your order before it's placed
                                    </small>
                                  </div>
                            <div class="col-sm-8">      

                                  <div class="payment-opt" id="mod-show">
                                    <input type="radio" name="delivery" value="cash_on_delivery" id="cash_on_delivery"> <span>Cash On Delivery</span>
                                    <p>
                                      A cash payment will be collected at the time of delivery of your order.
                                    </p>
                                  </div>
                                  
                                  <div class="payment-opt" onclick="jz()" >
                                    <input type="radio" name="delivery" value="jazzcash"> <span>JazzCash</span>
                                    <p>
                                      Pay your amount through JazzCash.
                                    </p>
                                  </div>
                                  <div class="payment-opt" onclick="ep()">
                                    <input type="radio" name="delivery" value="easypaisa"> <span>EasyPaisa</span>
                                    <p>
                                      Pay your amount through Easypaisa.
                                    </p>
                                  </div>
                                  <div class="payment-opt" onclick="cardpay()">
                                    <input type="radio" name="delivery" value="card"> <span>Debit/Credit Card</span>
                                    <p>
                                      A cash payment will be collected by your debit/credit card.
                                    </p>
                                  
                                    <div class="cards">
                                      <small>SUPPORTED CARDS</small><br>
                                      <img src="/frontend/img/master.png" alt="IMG" style="height:50px;">
                                       <img src="/frontend/img/visa.png" alt="IMG" style="height:50px;">
                                       
                                    </div>
                                    </div> 
                              </div>
                              <div class="col-sm-4 charge">
                                  <div class="title-in">
                                    PRICE SUMMARY
                                  </div>
                                  <div class="charge-info">
                                    <table class="table table-borderless">
                                      <tr>
                                        <td>Items</td>
                                        <td>1</td>
                                      </tr>
                                      <tr>
                                        <td>Subtotal</td>
                                        <td>PKR {{$cart->sub_total}}</td>
                                      </tr>
                                      <tr>
                                        <td>Delivery</td>
                                        <td>PKR {{$cart->shipment}}</td>
                                      </tr>
                                     <tr>
                                        <td>Grand Total</td>
                                        <td>PKR {{$cart->grand_total}}</td>
                                      </tr>
                                    </table>
                                  </div>
                                    <hr>
                                    <div class="field btns btstyle">
                                      <!-- <button class="prev-1 prev">Back to Shipping Address</button> -->
                                      <button class="next-2 next">Continue</button>
                                    </div>
                              </div>
                          </div>
                      
                      </div>
                                      </form>
                                 
                              </div>
                          </div>
                      
                      </div>
                      <!----------------- /page3 ----------------->


          


          </div>
          <!----------------- Outerpage/  ----------------->
          
          </div>
          <!----------------- Row2/ ----------------->
          
</div>
<!----------------- /Container ----------------->
<!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<!-- <script src="script.js"></script> -->


<script type="text/javascript"> 
  $('.payment-opt').click(function() {
  $('.hli').removeClass('hli');
  $(this).addClass('hli').find('input').prop('checked', true)    
});

</script>

<script type="text/javascript">
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>


<script type="text/javascript">
  
    function cardpay() {
      var x = document.getElementById("cards");
      var y = document.getElementById("easypaisa");
      var z = document.getElementById("jazzcash");
      if (x.style.display == "block") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
      } else {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
      }
    }
    function ep() {
      var x = document.getElementById("cards");
      var y = document.getElementById("easypaisa");
      var z = document.getElementById("jazzcash");
      if (y.style.display == "block") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
      } else {
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
      }
    }
    function jz() {
      var x = document.getElementById("cards");
      var y = document.getElementById("easypaisa");
      var z = document.getElementById("jazzcash");
      if (z.style.display == "block") {
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
      } else {
        z.style.display = "block";

        y.style.display = "none";
        x.style.display = "none";
      }


    }





function otp() {
  var x = document.getElementById("cards");
  var y = document.getElementById("easypaisa");
  var z = document.getElementById("jazzcash");
  var a = document.getElementById("showotp");
  if (a.style.display == "block") {
    x.style.display = "none";
    y.style.display = "none";
    a.style.display = "none";
    z.style.display = "none";
  } else {
    a.style.display = "block";
    y.style.display = "none";
    x.style.display = "none";
    z.style.display = "none";
  }


}
</script>


  </body>
</html>
