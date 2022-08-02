@extends('layouts.master')
@section('title')
@lang('nav_HomePage')
@endsection
@section('styles')
<style>
    video {
        width: 100%;
    object-fit: cover;
    position: absolute;
    height: 960px;
    }
    .video-wrapper {
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .line {
        color: #171796;
        margin: 0 0 15px;
        border-left: 5px solid #f25900;
    }
</style>
@endsection
@section('content')
    <div class="swiper-main-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-swiper-autoplay="500000">
                <div class="container">
                    <div class="video-wrapper">
                        <video playsinline autoplay muted loop>
                            <source src="{{ asset('src/img/media/orion.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="slider-content text-center">
                        <h2 class="animated fadeInDown mb-0">
                            Choco∙Pie
                        </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12 offset-md-3">
                                <p class="white-color animated fadeInDown">
                                    Шинэ төрөл нэмэгдлээ
                                </p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-30">
                            <a href="news/3" class="button-white-bordered button-lg hvr-sweep-to-right">@lang('n_ReadMore')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="background-image:url('{{ asset('src/img/slider/slide.jpg') }}');">
                <div class="black-overlay-60"></div>
                <div class="container">
                    <div class="slider-content text-center">
                        <h2 class="animated fadeInDown mb-0">
                            Appetita нь байгалийн цэвэр <br>орц найрлагатай органик амтлагч.
                        </h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-12 offset-md-3">
                                <p class="white-color animated fadeInDown">
                                    Органик амтлагч нь уураар жигнэж ариутгал хийгдсэн генийн өөрлчлөлтгүй бүтээгдэхүүн бөгөөд өнгө оруулагч хадгалах бодисгүй.
                                </p>
                            </div>
                        </div>
                        <div class="animated fadeInUp mt-30">
                            <a href="#" class="button-white-bordered button-lg hvr-sweep-to-right">@lang('n_ReadMore')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="section-wrapper pb-0" data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 col-centered">
                    <div class="col-md-10 @if(session()->missing('language') || session()->get('language') == 'en') col-lg-4 @else col-lg-6 @endif m-auto">
                        <h1 class="s-title text-center line"><b>{{ Str::upper(__('n_About')) }}</b></h1>
                    </div>
                    <div class="col-md-12 col-lg-12 col-centered">
                        <p class="s-subtitle">1993 онд “Баясах трейд” худалдааны компанийг 40 хүний бүрэлдэхүүнтэй анх үүсгэн байгуулсан.
                        Харин 2013 оноос компаний нэрээ Баясах Хульж ХХК хэмээн өөрчилж хүнс шингэн хүнс, ахуйн хэрэглээний бараа, хөлдөөсөн хүнс, банк бус санхүүгийн байгууллага, барилгын материал зэрэг салбарт охин компаниа нээж үйл ажиллагаагаа өргөтгөсөөр байна.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="section-wrapper pb-0" data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 col-centered">
                    <div class="col-md-10 @if(session()->missing('language') || session()->get('language') == 'en') col-lg-4 @else col-lg-6 @endif m-auto">
                        <h1 class="s-title text-center line"><b>{{ Str::upper(__('n_Brands')) }}</b></h1>
                    </div>
                    <div class="col-md-12 col-lg-12 col-centered">
                        <p class="s-subtitle">Бид Монголын хэрэглэгчдээ ирээдүйд эрүүл амьдрахад нь туслах жинхэнэ чанартай, 
                        гарал үүсэл тодорхой бүтээгдэхүүнийг хангахыг эрмэлздэг.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <ul class="nav justify-content-center" role="tablist" id="customersCats">
                        <li class="nav-item">
                            <a class="nav-link port-link active" href="#khulij" id="khulij-itme" data-toggle="tab" role="tab"
                                aria-controls="khulij" aria-selected="true">@lang('n_FoodAndBeverges')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#ashiddari" id="ashiddari-itme" data-toggle="tab" role="tab"
                                aria-controls="ashiddari" aria-selected="false">@lang('n_ColdChain')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#khulijgoo" id="khulijgoo-itme" data-toggle="tab" role="tab"
                                aria-controls="khulijgoo" aria-selected="false">@lang('n_NonFood')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row tabs-boxs">
            <div class="col-sm-12">
                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="khulij" role="tabpanel" aria-labelledby="khulij-itme">
                        <div class="row owl-carousel owl-theme">
                            @php $brand_khulij = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','1')->get() @endphp
                            @foreach($brand_khulij as $brand)
                            <div class="col-md-4 col-lg-12 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashiddari" role="tabpanel" aria-labelledby="ashiddari-itme">
                        <div class="row owl-carousel owl-theme">
                            @php $brand_ashiddari = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','2')->limit(3)->get() @endphp
                            @foreach($brand_ashiddari as $brand)
                            <div class="col-md-4 col-lg-12 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="khulijgoo" role="tabpanel" aria-labelledby="khulijgoo-itme">
                        <div class="row owl-carousel owl-theme">
                            @php $brand_goo = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','3')->limit(3)->get() @endphp
                            @foreach($brand_goo as $brand)
                            <div class="col-md-4 col-lg-12 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrapper" data-aos="fade-up" data-aos-once="true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 col-centered s-mrb-60">
                    <div class="col-md-10 @if(session()->missing('language') || session()->get('language') == 'en') col-lg-4 @else col-lg-6 @endif m-auto">
                        <h1 class="s-title text-center line"><b>{{ Str::upper(__('n_Mission')) }}</b></h1>
                    </div>
                    <div class="col-md-12 col-lg-12 col-centered">
                        <p class="s-subtitle s-subtitle--simetric">Чанар бүтээгдэхүүнээр дамжуулан /нийлүүлж/ хэрэглээний шинэ соёлыг түгээнэ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-4 text-center">
                    <div class="servicesboxs">
                        <img src="{{ asset('src/img/services/sh-1.png') }}" class="mb-4" alt="">
                        <p class="service-link"><a href="#" class="services-title">@lang('n_SocialResponsibility')</a></p>
                        <p class="services-subtitle">Бид нийгмийн хариуцлагын хүрээнд дараах ажлуудыг хийж байна.</p>
                        <a href="#" class="textcolor">@lang('n_ReadMore')</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 text-center">
                    <div class="servicesboxs">
                        <img src="{{ asset('src/img/services/sh-2.png') }}" class="mb-4" alt="">
                        <p class="service-link"><a href="#" class="services-title">@lang('n_ProductIntroduction')</a></p>
                        <p class="services-subtitle">Бүтээгдэхүүний дэлгэрэнгүй танилцуулга мэдээллийг авах</p>
                        <a href="#" class="textcolor">@lang('n_ReadMore')</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 text-center">
                    <div class="servicesboxs">
                        <img src="{{ asset('src/img/services/sh-3.png') }}" class="mb-4" alt="">
                        <p class="service-link"><a href="#" class="services-title">@lang('n_Advice')</a></p>
                        <p class="services-subtitle">Хамтдаа туршия</p>
                        <a href="#" class="textcolor">@lang('n_ReadMore')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrapper" data-aos="fade-up" data-aos-once="true">
		<div class="container">
			<div class="row align-items-top">
				<div class="col-sm-12 col-md-4 col-lg-3 blog-info">
					<h4 class="h-6-subtitle line">&nbsp;&nbsp;<b>{{ Str::upper(__('n_news_RecentNews')) }}</b></h4>
					<h2 class="h-6-title s-mrt-15">Our latest articles and insights </h2>
					<img src="{{ asset('src/img/content/h-6-news.png') }}" alt="">
				</div>
                @foreach($posts as $count => $post)
				<div class="col-sm-12 col-md-4 col-lg-3 @if($count == 0) offset-lg-3 @endif blog-mr">
					<div class="blog-item">
						<img src="{{ Storage::url($post->image) }}" class="post-img" alt="">
						<div class="blog-item-info">
							<p class="blog-category s-mrt-15">{{ $post->created_at->format('Y.m.d') }}</p>
							<h3 class="blog-title"><a href="/news/{{ $post->id }}">{{ $post->{'title_'.app()->getLocale()} }}</a></h3>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<div class="section-wrapper section-wrapper--sm" data-aos="zoom-in" data-aos-once="true">
		<div class="container">
			<div class="row box-shad">
				<div class="col-sm-5 col-md-2 count-item">
					<h3>{{ App\Models\Brand::all()->count() }} <i class="fas fa-flag"></i></h3>
					<p><b>@lang('n_count_Brands')</b></p>
				</div>
				<div class="col-sm-5 col-md-2 count-item">
					<h3>{{ App\Models\Company::all()->count() }} <i class="fas fa-building"></i></h3>
					<p><b>@lang('n_count_BranchCompanies')</b></p>
				</div>
				<div class="col-sm-5 col-md-2 count-item">
					<h3>3 <i class="fa-solid fa-warehouse"></i></h3>
					<p><b>@lang('n_count_Warehouse')</b></p>
				</div>
                <div class="col-sm-4 col-md-2 count-item">
					<h3>5 <i class="fas fa-store"></i></h3>
					<p><b>@lang('n_count_Supermarket')</b></p>
				</div>
                <div class="col-sm-5 col-md-2 count-item">
					<h3>29 <i class="fas fa-stopwatch"></i></h3>
					<p><b>@lang('n_count_Experience')</b></p>
				</div>
                <div class="col-sm-5 col-md-2 count-item">
					<h3>200+ <i class="fas fa-users"></i></h3>
					<p><b>@lang('n_count_HumanResource')</b></p>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('scripts')
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:false
            }
        }
    })
</script>
@endsection