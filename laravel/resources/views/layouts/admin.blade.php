<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/listing-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 10:19:02 GMT -->
<head>
    <title>Admin panel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo.png') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/libraries/css/font-awesome.min.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{ asset('frontend/libraries/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libraries/css/mob.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libraries/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libraries/css/materialize.css') }}" />
    
    
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
    
    <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
</script>
<script src = "https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
</script>
  
    <style type="text/css">
        .content_menu_custom{min-height: 700px;}
        .ad-hom-view-com{padding: 7px !important;}
    </style>
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    @include('layouts.adminheader')
@include('layouts.sidebar')
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
   @yield('content')
</div>
</div>
    <!--== BOTTOM FLOAT ICON ==-->
    @include('layouts.adminfooter')

    <!--======== SCRIPT FILES =========-->
    <script src="{{ asset('frontend/libraries/js/jquery.min.js') }}" async></script>
    <script src="{{ asset('frontend/libraries/js/bootstrap.min.js') }}" async></script>
    <script src="{{ asset('frontend/libraries/js/materialize.min.js') }}" async></script>
    <script src="{{ asset('frontend/libraries/js/custom.js') }}" async></script>
    
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" async></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable();
        } );
    </script>
    <script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>

    <script type="text/javascript">
         $(".alert-success").fadeOut(3000);
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        CKEDITOR.editorConfig = function (config) {
            config.language = 'es';
            config.uiColor = '#F7B42C';
            config.height = 300;
            config.toolbarCanCollapse = true;

        };
        CKEDITOR.replace('editor1');
    </script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/listing-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Mar 2020 10:19:03 GMT -->
</html>