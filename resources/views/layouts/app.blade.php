<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta name="user-id" content="{{ optional(Auth::user())->id }}">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/reality-icon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/owl.transitions.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/cubeportfolio.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/range-Slider.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">
@yield('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<link rel="icon" href="images/icon.png">
<script src="{{ asset('js/app.js') }}" defer></script>
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
<script src="{{asset('js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery-countTo.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/range-Slider.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/selectbox-0.2.min.js')}}"></script>
<script src="{{asset('js/zelect.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
@yield('scripts')
</body>
</html>
