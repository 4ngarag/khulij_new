@extends('layouts.master')
@section('title')
DASIDA
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/home-2.css') }}">
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>DASIDA</h1>
        </div>
    </div>
    
    <div id="hero" class="pb-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-5 hero-info">
					<h1 class="h-6-hero-title mt-5">We build teams that build your future <span>software.</span></h1>
					<p class="h-6-hero-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
					<a href="#" class="button-primary button-lg hvr-sweep-to-right">GET STARTED</a>
					<p class="h-6-hero-topik">FREE TRIAL, MONEY BACK GUARANTEE</p>
				</div>
				<div class="col-sm-12 col-md-7 hero-image">
					<img src="img/slider/h-6-hero.png" alt="">
				</div>
			</div>
			<div class="col-sm-12">
				<div class="scroll">
					<img src="img/content/scroll-down.png" alt="arrowIcon">
					<p>scroll down</p>
				</div>
			</div>
		</div>
	</div>
@endsection