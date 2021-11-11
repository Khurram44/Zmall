
<div class="menu-nav" style="display:none; margin-bottom:-100px;">
          <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
          <ul class="menu-list">
            <!--<li><a href="index.php">Home</a></li>-->
            
            
            <!-- <li><a href="products.php">Shop</a></li> -->
          
            <li><a href="{{ asset('new-arivals') }}">New Arrivals</a></li>
            <li><a href="{{ asset('random-flash-deals') }}">Flash Deals</a></li>
            <li><a href="{{ asset('sale') }}">Sales</a></li>
            <li><a href="{{ asset('sell-on-zmall') }}" >Sell On Zmall</a></li>

            <li class="hidden-lg hidden-md"><a href="{{asset('/faqs')}}">FAQ's</a></li>
            <li class="hidden-lg hidden-md"><a href="{{asset('/contact')}}">Contact</a></li>
            <li class="hidden-lg hidden-md"><a href="{{asset('/news')}}">News</a></li>
            <li class="hidden-lg hidden-md"><a href="" data-toggle="modal" data-target="#TrackingOrder">Tracking Order</a></li>

            
            <!-- <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
              <ul class="custom-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="product-page.php">Product Details</a></li>
                <li><a href="checkout.php">Checkout</a></li>
              </ul>
            </li> -->
          
          <!-- Search -->
            <div class="header-search">
            
              <script>
              $(document).ready(function() {
                 var submitIcon = $('.searchbox-icon');
                 var inputBox = $('.searchbox-input');
                 var searchBox = $('.searchbox');
                 var isOpen = false;
                 submitIcon.click(function() {
                   if (isOpen == false) {
                     searchBox.addClass('searchbox-open');
                     inputBox.focus();
                     isOpen = true;
                   } else {
                     searchBox.removeClass('searchbox-open');
                     inputBox.focusout();
                     isOpen = false;
                   }
                 });
                 submitIcon.mouseup(function() {
                   return false;
                 });
                 searchBox.mouseup(function() {
                   return false;
                 });
                 $(document).mouseup(function() {
                   if (isOpen == true) {
                     $('.searchbox-icon').css('display', 'block');
                     submitIcon.click();
                   }
                 });
               });

              </script>
            <form method="get" action="{{ route('searchproducts') }}"  id="searchformkeyword" class="searchbox" enctype="multipart/form-data">
                    <input type="text" placeholder="Search......" name="search" class="searchbox-input" required>  
                     <!-- onkeyup="buttonUp();" -->
                    <input type="submit" class="searchbox-submit">
                    <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true" style="font-size: 22px;"></i></span>
                </form>
            </div></ul>
          <!-- /Search -->
        </div>