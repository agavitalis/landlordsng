<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="../css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="../css/cubeportfolio.min.css">
<link rel="stylesheet" type="text/css" href="../css/settings.css">
<link rel="stylesheet" type="text/css" href="../css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="../css/search.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="icon" href="images/icon.png">
@yield('styles')
</head>
<body>


<!--Loader-->
<!-- <div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div> -->
 <!--Loader-->               
                
<!--Slider-->
@yield('indexSlider')
<!--Slider ends-->

<!--Header-->
@yield('header')
<!--Header Ends-->

<!--IndexAdvancedSearch-->
@yield('indexAdvancedSearch')
<!--IndexAdvancedSearch Ends-->

<!--Content-->
@yield('content')
<!--Content Ends-->

<!--Partners-->
@yield('partners')
<!--Partners Ends-->

<!--Footer-->
@yield('footer')
<!--Footer Ends-->
<script src="../js/jquery-2.1.4.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.appear.js"></script>
<script src="../js/jquery-countTo.js"></script>
<script src="../js/bootsnav.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/jquery.parallax-1.1.3.js"></script>
<script src="../js/jquery.cubeportfolio.min.js"></script>
<script src="../js/range-Slider.min.js"></script>
<script src="../js/owl.carousel.min.js"></script> 
<script src="../js/selectbox-0.2.min.js"></script>
<script src="../js/zelect.js"></script>
<script src="../js/jquery.fancybox.js"></script>
<script src="../js/jquery.themepunch.tools.min.js"></script>
<script src="../js/jquery.themepunch.revolution.min.js"></script>
<script src="../js/revolution.extension.actions.min.js"></script>
<script src="../js/revolution.extension.layeranimation.min.js"></script>
<script src="../js/revolution.extension.navigation.min.js"></script>
<script src="../js/revolution.extension.parallax.min.js"></script>
<script src="../js/revolution.extension.slideanims.min.js"></script>
<script src="../js/revolution.extension.video.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/functions.js"></script>
@yield('scripts')
</body>
</html>

