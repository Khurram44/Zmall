<head>
    <?php use App\Products;
    $product = Products::where('is_deleted','0')->where('permission','Approved')->get();
    ?>
    <?php $current_route_name = Route::getFacadeRoot()->current()->uri(); ?>

    <meta name="google-site-verification" content="jp_DFVgJHpqZCKja3D0PgaocakksT4QbN8dc0I22JGM" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="qi6vz6xgpu23sqbk63c85klml9qmwl" />
    <title>@yield('title','Welcome to Zmall Online Shopping Store!')</title>
    <meta name="keywords" content="@yield('meta_description','Women, Men, Beauty, Kids, Lifestyle, Electronics, Fashion, Health & Beauty')">
    <meta name="description" content="@yield('meta_description','Zmall is an Online B2C Market Place for Lifestyle Buyers and Sellers in Many Categories with Feature of Live Streaming for Customers. Stay Connected with Zmall.')">
    
    <link rel="canonical" href="{{url()->current()}}"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href ="/frontend/logo/zmalllogo-b.png" type="image/x-icon"> 

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="styleshezet">
    <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
  
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/main/css/bootstrap.min.css') }}" />
    
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/main/css/style.css?version=1') }}" />
    
    <!-- Vendore css file -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/main/css/vendorstyle.css?v=1.1') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/main/css/imageuploadify.min.css') }}" />
    <!-- <link rel="stylesheet" href="css/ads-style.css" type="text/css" media="screen"/> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/css/header-style.css?v=1234567') }}" /> 
    <link type="text/css" rel="stylesheet" href="{{ asset('/frontend/css/homepage-style.css') }}" /> 
    <script src="{{ asset('frontend/main/js/cufon-yui.js') }}" type="text/javascript"></script>
        <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('/frontend/main/css/font-awesome.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/frontend/store/css/store.css') }}">
    <script src="{{ asset('/frontend/store/js/store.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <!-- <script src="{{ asset('/js/confetti.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    


    <!-- ...FOR DATA TABLE -->
    <!-- Facebook Pixel Code -->
    <script type="text/javascript">
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '211920174101563');
        fbq('track', 'PageView');
       
    </script>
    @if ($current_route_name === 'view-cart')
    <script>
         fbq('track', 'Purchase', {currency: "PKR", value: {{$product_price}}});
    </script>
    @endif
    <noscript>
        <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=211920174101563&ev=PageView&noscript=1"
        />
    </noscript>
    <!-- End Facebook Pixel Code -->
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199013013-1">
    </script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-199013013-1');
    </script>
    <!-- ######################google add################### -->
    <script data-ad-client="ca-pub-2467103265943477" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
    <!-- Hotjar Tracking Code for https://zmall.pk/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2610556,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</head>

