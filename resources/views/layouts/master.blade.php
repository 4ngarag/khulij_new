<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>@yield('title') - @lang('nav_KhulijCompany')</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="{{ asset('src/img/favicon.ico') }}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/bootstrap.min.css') }}">
	<link href="{{ asset('src/assets/fontawesome/css/all.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/swiper.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/slider.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/navigation.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('src/css/styles.css') }}">
	<link rel='stylesheet' href="{{ asset('src/css/timeline.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('src/css/aos.css') }}" />
    @yield('styles')
</head>
<body>
<div id="preloader">
	<div class="row loader">
		<div class="loader-icon"></div>
	</div>
</div>
@include('partials.header')
<main>
	@yield('content')
    @include('partials.footer')
</main>
<script src="{{ asset('src/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('src/js/navigation.js') }}"></script>
<script src="{{ asset('src/js/navigation.fixed.js') }}"></script>
<script src="{{ asset('src/js/swiper.min.js') }}"></script>
<script src="{{ asset('src/js/popper.min.js') }}"></script>
<script src="{{ asset('src/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('src/js/main.js') }}"></script>
<script src="{{ asset('src/js/aos.js') }}"></script>
<script>
    AOS.init({
      offset: 200,
      duration: 1000,
      easing: 'ease-in-sine',
      delay: 100,
    });
  </script>
@yield('scripts')
</body>
</html>