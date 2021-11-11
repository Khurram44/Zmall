<?php
$generalsettings =  \DB::table('generalsettings')->where('id', 1)->first();
?>
<footer id="footer" class="section section-gray">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <!-- footer logo -->
            <div class="footer-logo">
              <a class="logo" href="#">
                <img src="{{ asset('/frontend/logo/zmalllogo-w.png') }}" alt="">
              </a>
            </div>
            <!-- /footer logo -->

            <p class="color-white"><?php echo $generalsettings->short_description;?></p>

            <!-- footer social -->
            <ul class="footer-social">
              <li><a href="<?php echo $generalsettings->facebook_link;?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo $generalsettings->twitter_link;?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo $generalsettings->instagram_link;?>"><i class="fa fa-instagram"></i></a></li>
              <li><a href="<?php echo $generalsettings->youtube_link;?>"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <!-- /footer social -->
          </div>
        </div>
        <!-- /footer widget -->

        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header color-white">My Account</h3>
            <ul class="list-links">
              <li><a href="{{asset('/profile/wishlist')}}">My Wishlist</a></li>
            </ul>
          </div>
        </div>
        <!-- /footer widget -->

        <div class="clearfix visible-sm visible-xs"></div>

        <!-- footer widget -->
        <div class="col-md-3 col-sm-6  col-xs-6">
          <div class="footer">
            <h3 class="footer-header color-white">Customer Service</h3>
            <ul class="list-links">
              <li><a href="{{asset('/contact')}}">Contact Us</a></li>
              <li><a href="{{asset('/about-us')}}">About Us</a></li>
              <li><a href="{{asset('/return-and-refund')}}">Return & Refund</a></li>
              <li><a href="{{asset('/faqs')}}">FAQ</a></li>
              <li><a href="{{asset('/terms&condition')}}">Terms & Conditions</a></li> 
              <li><a href="{{asset('/uprivacy')}}">Privacy Policy</a></li>
            </ul>
          </div>
        </div>



<!--  FOLOM FOR MOBILE -->


<!-- FOLOM FOR MOBILE  -->

        <!-- /footer widget -->

        <!-- footer subscribe -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header color-white">Stay Connected</h3>
            <p >If you have any query regarding to our services and terms of policy, feel free to contact with us !</p>
            <form action="{{route('newsletter')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                
            <input  type="email" placeholder="Enter Email Address" name="email" class= " form-control @error('email') is-invalid @enderror input">
                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
              </div>
              <input type="submit" class="primary-btn" name="newsletter" value="Join Newsletter">
            </form>
          </div>
        </div>
        <!-- /footer subscribe -->
      </div>
      <!-- /row -->
      <hr>
      <!-- row -->
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <!-- footer copyright -->
          <div class="footer-copyright color-white">
            
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | zmall.pk by <a class="color-white" href="http://zmall.pk/" target="_blank">Faisal & Hasham</a>
            
          </div>
          <!-- /footer copyright -->
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </footer>
  <!-- jQuery Plugins -->

  <script type="text/javascript">
    $(".searchbox-icon").click(function(){
        $(".searchbox-submit").trigger("click");
      });

    $("li").delegate(".call_to_open_cart", "click", function(){
          $(".add_to_cart_header_section").addClass("open");            
      });
  $(".product_size_selected").click(function(){
      $(".product_size_selected").removeClass("active-size");
      $(this).addClass("active-size");
      var attributevalue = $(this).attr("id");
      $("#product_size_selected").val(attributevalue);
    });

    $(".product_color_selected").click(function(){
      $(".product_color_selected").removeClass("active-color");
      $(this).addClass("active-color");
      var attributevalue = $(this).attr("id");
      $("#product_color_selected").val(attributevalue);   
    });

  $(".add_product_to_cart").click(function(){
    
         var _token = "{{ csrf_token() }}";
         var product = $(this).attr("id");
         var that = this;

         if ($(".product_cart_quantity")[0]){
          var quantity = $(".product_cart_quantity").val();
      } else {
          var quantity = 1;
      }

      if ($(".product_size_selected")[0]){
          var product_size_selected = $("#product_size_selected").val();
      } else {
          var product_size_selected = "";
      }

      if ($(".product_color_selected")[0]){
          var product_color_selected = $(".product_color_selected").val();
      } else {
          var product_color_selected = "";
      }

        $.post("{{ url('add_to_cart/')}}", {_token:_token,product_size_selected:product_size_selected,product_color_selected:product_color_selected,add_to_cart:product,quantity:quantity}, function(result){
          $.post("{{ url('cartheadersection/')}}", {_token:_token}, function(result){
              $(".header-cart").html(result);
              $(that).text("Added");
                }); 
            });
    });
       // -------------------------add to card buy now------------------------------------
  $(".add_product_to_cart_buy_now").click(function(){
   
         var _token = "{{ csrf_token() }}";
         var product = $(this).attr("id");
         var that = this;

         if ($(".product_cart_quantity")[0]){
          var quantity = $(".product_cart_quantity").val();
      } else {
          var quantity = 1;
      }

      if ($(".product_size_selected")[0]){
          var product_size_selected = $("#product_size_selected").val();
      } else {
          var product_size_selected = "";
      }

      if ($(".product_color_selected")[0]){
          var product_color_selected = $(".product_color_selected").val();
      } else {
          var product_color_selected = "";
      }

       
        $.post("{{ url('add_to_cart/')}}", {_token:_token,product_size_selected:product_size_selected,product_color_selected:product_color_selected,add_to_cart:product,quantity:quantity}, function(result){
          $.post("{{ url('cartheadersection/')}}", {_token:_token}, function(result){
              $(".header-cart").html(result);
              window.location.href = "/view-cart";
                }); 
            });
    });
    $(".add_product_to_wishlist").click(function(){
         var _token = "{{ csrf_token() }}";
         var product_id = $(this).attr("id");
         var that = this;
        $.post("{{ url('add_to_wishlist/')}}", {_token:_token,product_id:product_id}, function(result){
            if(result.status == "added"){
              $(that).css("color","red");
            }else if(result.status == "removed"){
              $(that).css("color","green");
            }
            },"json");
    });
    $(".attribute_id").change(function(){
         var _token = "{{ csrf_token() }}";
         var product_id = $(this).attr("id");
         var id = $(this).val();
         var product_price = $("#product_price_"+product_id).val();
    $.post("{{ url('attributeprice/')}}", {_token:_token,product_id:product_id,product_price:product_price,id:id}, function(result){
          $("#product_price_"+product_id).val(result.price);
          $("#product_formated_price_"+product_id).text(result.formated_price);
          if(result.type === 'color'){
            $("#color_price_"+product_id).val(result.attr_price);
          }else if(result.type === 'size'){
            $("#size_price_"+product_id).val(result.attr_price);
          }
          $(".product_quantity").trigger("click");
            },"json");
    });
$(window).load(function() {
      var _token = "{{ csrf_token() }}";
$.post("{{ url('cartheadersection/')}}", {_token:_token}, function(result){
          if(result != 0){
            $(".header-cart").html(result);
          }   
        });
});
$(window).load(function() {
 $(".product_quantity").trigger("click");
});
</script>
<script>
  $(".searchTrackBtn").click(function(e) {
    var value = $(".searchTrackNo").val(); 
    var _token = "{{ csrf_token() }}";
    if(value == ''){
      $(".searchTrackNo").css("border", "1px solid red");
    }else{
      $.post("{{ url('loadordertracking')}}", {value:value,_token:_token}, function(result){
              $("#trackingDetail").html(result);
          });
    }
  });
$(function() {

  $(".load_sub_types").change(function(e) {
    var value = $(this).val(); 
    var section = $(this).attr("id"); 
    var _token = "{{ csrf_token() }}";
    $.post("{{ url('loadsubtypes')}}", {value:value,_token:_token}, function(result){
            $("."+section).html(result);
        });
    
  });
$(".load_province_cities").change(function(e) {
    var value = $(this).val(); 
    var _token = "{{ csrf_token() }}";
    $.post("{{ url('loadprovincebasecities')}}", {value:value,_token:_token}, function(result){
            $(".citiesdropdownfield").html(result);
        }); 
  });
});
</script>

  <script src="{{ asset('frontend/main/js/bootstrap.min.js') }}"></script>


