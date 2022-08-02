@extends('layouts.master')
@section('title')
DASIDA
@endsection
@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('src/css/home-2.css') }}">
<style>
    .containerdiv { float: left; position: relative; } 
    .cornerimage { position: absolute; top: 75px; right: -100px; }
    .line { color: #171796; margin: 0 0 15px; border-left: 5px solid #f25900; }
    .unselectable {
        user-drag: none; 
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    /* img { pointer-events: none } */
</style>
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/brands/dasida/brands_dasida.jpg') }}');">
        <div class="black-overlay-30"></div>
        <div class="container">
            <h1>The taste of home, DASIDA</h1>
            <p>Since 1975,<br>
                DASIDA has carefully preserved the Korean taste.</p>
            {{-- <img src="{{ asset('src/img/brands/dasida/dasida_b_obj_1.png') }}" alt=""> --}}
        </div>
    </div>

    <div data-aos="fade-up" data-aos-once="true" style="position: relative; text-align: center; background-color: #faf7f2;">
        <div class="row justify-content-center">
            <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/dasida_a_bg_1.jpg') }}" width="100%">
            <div style="position: absolute; bottom: auto; margin: auto;">
            <div class="col-md-12 col-lg-12 col-centered text-center">
                <h1 class="s-title text-center"><br>DASIDA has carefully preserved the Korean taste</h1><br>
            </div>
            <div class="col col-lg-12 col-xl-14" style="color: black;">
                <h6 style="text-align: center">In 1975, CheilJedang launched ‘Beef DASIDA,’ a new composite seasoning, and the 'DASIDA' brand.</h6>
                <h6 style="text-align: center">The DASIDA brand, which stems from ‘lip smackingly delicious (dasida in Korean),’ quickly conquered the seasoning market<br>and became No. 1 immediately after launching. It has since grown into a brand that is still loved by many in the seasoning market.</h6>
                <h6 style="text-align: center">DASIDA even now continues to think about the cooking of delicious foods<br>and the happiness felt when sharing food with your family.</h6>
            </div>
            </div>
        </div>
    </div>

    <div class="py-0" data-aos="fade-zoom-in" data-aos-once="true">
		<div style="background-color: burlywood">
			<div class="row align-items-center">
                <div class="col-sm-12 col-md-4">
					<img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/dasida_b_bg_1.jpg') }}" style="float:right">
				</div>
				<div class="col-sm-12 col-md-4 text-center">
					<h5>BRAND SYMBOL</h5>
                    <hr style="width:50%;text-align:center;margin: auto">
					<p class="">Through the red color and font of the steadfast DASIDA brand, we deliver the warmth and trust of the family.</p>
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/dasida_b_obj_1.png') }}">
				</div>
				<div class="col-sm-12 col-md-4">
					<img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/dasida_b_bg_2.jpg') }}">
				</div>
			</div>
		</div>
	</div>

    <div id="hero" class="py-0" data-aos="fade-zoom-out" data-aos-once="true">
		<div>
			<div class="row align-items-center" style="background-color: #f0d3a6">
				<div class="col-sm-12 col-md-4 hero-info" style="margin-left: 20%;">
					<h1 class="h-6-hero-title mt-5">Yes, this is <span>it</span></h1>
					<p class="h-6-hero-info">Korea’s first composite seasoning, DASIDA, It was made based on researching the eating habits of Koreans who typically enjoy soup-type meals. This reliable seasoning product, based on beef and anchovies, flavored with vegetables like green onions, garlic and onions and spices, can be used to complement any food.</p>
					{{-- <a href="#" class="button-primary button-lg hvr-sweep-to-right">GET STARTED</a> --}}
					{{-- <p class="h-6-hero-topik">FREE TRIAL, MONEY BACK GUARANTEE</p> --}}
				</div>
				{{-- <div class="col-sm-12 col-md-4 hero-image">
					<img src="{{ asset('src/img/brands/dasida/dasida_c_obj_1.png') }}" alt="" style="width: 60%">
				</div> --}}
                <div class="containerdiv">
                    <br>
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/dasida_c_obj_1.png') }}" data-aos="fade-right" data-aos-once="true">
                    <img draggable="false" (dragstart)="false;" class="unselectable cornerimage" src="{{ asset('src/img/brands/dasida/dasida_c_obj_2.png') }}" data-aos="fade-left" data-aos-once="true">
                <div>
			</div>
		</div>
	</div>

    <div class="section-wrapper py-0">
        <div class="row justify-content-center" style="position: relative; text-align: center; color: black; background-color: #f0d3a6;">
			<img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/dasida_c_bg_4.png') }}" width="100%" data-aos="fade-zoom-in" data-aos-once="true">
            <div style="position: absolute; bottom: 180px; left: 190px;"><h5>From 1975 till now, DASIDA has been preserving the ‘taste’ of<br> Korean cuisine as a product that can supplement the taste of<br> any food</h5></div>
		</div>
	</div>

    <div class="section-wrapper" data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div>
                <h1 class="s-title line"><b style="margin-left:10px">PRODUCTS</b></h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="product-item">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/product1.png') }}">
                        <h6>Soup stock beef flavor</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="product-item">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/product2.png') }}">
                        <h6>Soup stock anchovy flavor</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="product-item">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/product3.png') }}">
                        <h6>Soup stock clam flavor</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="product-item">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/dasida/product4.png') }}">
                        <h6>Soup stock premium gold beef flavor</h6>
                    </div>
                </div>
                {{-- <div class="col-sm-12 col-md-6 col-lg-2">
                    <div class="product-item">
                        <img src="{{ asset('src/img/brands/dasida/dasida_c_obj_1.png') }}" style="width: auto; height: 150px">
                        <h5>Dasida</h5>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-2">
                    <div class="product-item">
                        <img src="{{ asset('src/img/brands/dasida/dasida_c_obj_2.png') }}" style="width: auto; height: 150px">
                        <h5>Dasida Gold</h5>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection