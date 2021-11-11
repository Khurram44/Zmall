<!DOCTYPE html>
<html lang="en">


<!-- _____________________________________________________ -->


<!-- head here  -->
@include('layouts.head')

<!-- head here end -->
 
<body class="mobileHead">
  <!-- HEADER -->
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9VLMJ3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('layouts.header')
  <!-- /HEADER -->

  <!-- NAVIGATION -->




  <!-- /NAVIGATION -->
<!-- _____________________________________________________ -->

@yield('content')

<!-- FOOTER -->

@include('layouts.footer')
<!-- /FOOTER -->
</body>

</html>
