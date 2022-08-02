@extends('layouts.master')
@section('title')
SPAM
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
</style>
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/brands/spam/brands_spam.jpg') }}');">
        <div class="black-overlay-30"></div>
        <div class="container">
            {{-- <h1>SPAM</h1>
            <p>The undisputed No.1</p> --}}
            <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_logo.png') }}" style="width: 30%">
        </div>
    </div>

    <div class="py-0" data-aos="fade-down" data-aos-once="true">
		<div style="background-color: burlywood">
                {{-- <div class="row">
                    <div class="col-sm-3">
                        Level 1: .col-sm-3
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-8 col-sm-6">
                                Level 2: .col-8 .col-sm-6
                            </div>
                            <div class="col-4 col-sm-6">
                                Level 2: .col-4 .col-sm-6
                            </div>
                      </div>
                    </div>
                </div> --}}
                <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_a_1.png') }}" width="100%">
                {{-- <img draggable="false" (dragstart)="false;" class="unselectable" style="position: absolute; text-align: center;" src="{{ asset('src/img/brands/spam/spam_a_2.png') }}"> --}}
		</div>
	</div>

    <div class="section-wrapper pb-0" style="margin-bottom: 80px;" data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 col-centered">
                    <div class="col-md-10 col-lg-10 m-auto">
                        <h1 class="s-title text-center"><b>The undisputed No.1<br>Enjoy the unique taste of SPAM®<br>anytime, anywhere</b></h1>
                    </div>
                    <div class="col-md-12 col-lg-12 col-centered">
                        <p class="s-subtitle">SPAM® is the best side dish that everyone loves.
                            SPAM® has won over Korea with iconic taste over 30 years.
                            CJ CheilJedang’s SPAM® is a canned ham brand representing Korea.
                            SPAM® has been providing the best in taste for more than 30 years.<br>
                            
                            Everyone’s favorite canned ham brand in Korea, SPAM®.
                            Enjoy the iconic the of SPAM® anytime, anywhere.</p>
                    </div>
                    <div class="containerdiv">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_b_1.png') }}" width="100%">
                        <img draggable="false" (dragstart)="false;" class="unselectable" style="position: absolute; top: 185px; right: -100px;" src="{{ asset('src/img/brands/spam/spam_b_2.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 80px;" data-aos="fade-down" data-aos-once="true">
		<div style="background-color: #171e47; color:white; border-top-style: solid; border-top-color: #ffde00;">
			<div class="row justify-content-md-center">
                <div class="col-sm-12 col-xl-12 text-center">
                    <h5 style="color:rgb(214, 173, 6)"><br><b>BRAND SYMBOL</b></h5>
                    <hr style="width:50%;text-align:center;margin: auto">
                    <p class="">Through the red color and font of the steadfast DASIDA brand, we deliver the warmth and trust of the family.</p>
                </div>
                <div class="col col-lg-2 containerdiv">
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_c_1.png') }}">
                    <img draggable="false" (dragstart)="false;" class="unselectable" style="position: absolute; top: 15px; right: 80px;" src="{{ asset('src/img/brands/spam/spam_c_4.png') }}">
                </div>
                <div class="col col-lg-2">
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_c_2.png') }}">
                </div>
                <div class="col col-lg-2">
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_c_3.png') }}">
                </div>
                <div class="col-sm-12 col-xl-12 text-center">
                    <p style="color: #171e47">SPAM</p>
                </div>
			</div>
		</div>
	</div>

    <div class="section-wrapper section-wrapper--gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4">
                    <h3 class="s-title-md text-center">Everyone’s favorite, SPAM®</h3>
                </div>
            </div>
            <div class="row row-reverse-sm">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_d_1.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <p style="margin-top: 100px;">SPAM® is the best food ingredient that fits in various recipes. It presents you with a joyful flavor at all times even as a snack or food for outdoor activities.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <p style="margin-top: 120px;">SPAM® is the best gift that everyone loves.<br>
                            Share all of the happy moments with your loved ones together.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/spam_d_2.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="container">
            <div>
                <h1 class="s-title line"><b style="margin-left:10px">PRODUCTS</b></h1>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="product-item">
                        <a href="#productModal1" data-toggle="modal" data-target="#productModal1"><img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/product1.png') }}"></a>
                        <div class="modal fade bd-example-modal-lg" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModal1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <h1>Spam classic</h1>
                                </div>
                            </div>
                        </div>
                        <h6>Spam classic</h6>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <div class="product-item">
                        <a href="#productModal2" data-toggle="modal" data-target="#productModal2"><img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/brands/spam/product2.png') }}"></a>
                        <div class="modal fade bd-example-modal-lg" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModal2" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <h1>Spam mild</h1>
                                </div>
                            </div>
                        </div>
                        <h6>Spam mild</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection