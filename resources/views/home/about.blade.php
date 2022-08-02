@extends('layouts.master')
@section('title')
@lang('nav_AboutUs')
@endsection
@section('styles')
<style>
    .line {
        color: #171796;
        margin: 0 0 15px;
        border-left: 5px solid #f25900;
    }
    .withoutLine {
        color: #171796;
        margin: 0 0 15px;
    }
    .unselectable {
        user-drag: none; 
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
</style>
{{-- <link rel="stylesheet" href="{{ asset('src/assets/jvectormap/jquery-jvectormap-2.0.5.css') }}" type="text/css" media="screen"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> --}}
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/brands.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_AboutUs')) }}</h1>
        </div>
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

    <div class="section-wrapper section-wrapper--gray">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                <div class="serv-box-text">
                    <h3>АГУУЛАХ</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                <div class="serv-box-img">
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/nophoto.jpg') }}" alt="">
                    <div class="overlay-img"></div>
                </div>
            </div>
        </div>
        <div class="row row-reverse-sm">
            <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                <div class="serv-box-img">
                    <img draggable="false" (dragstart)="false;" class="unselectable" src="{{ asset('src/img/nophoto.jpg') }}" alt="">
                    <div class="overlay-img"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                <div class="serv-box-text">
                    <h3>ДЭЛГҮҮР</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section-wrapper">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 col-lg-8 col-centered text-center">
                    <h4 class="text-center withoutLine">{{ Str::upper(__('n_About_Mission')) }}</h4>
                </div>
                <div class="col col-lg-12 col-xl-10" data-aos="fade-zoom-in">
                    <h2 style="color: black; text-align: center">Чанар бүтээгдэхүүнээр дамжуулан нийлүүлж хэрэглээний шинэ соёлыг түгээнэ</h2>
                </div>

                <div class="col-md-12 col-lg-8 col-centered text-center">
                    <div class="text-center mb-4 pb-2">
                        <img draggable="false" (dragstart)="false;" src="{{ asset('src/img/arrow.png') }}" class="unselectable; width: 30px; height: 18px; background-size: 30px 18px;">
                    </div>
                    <h4 class="text-center withoutLine">{{ Str::upper(__('n_About_Vision')) }}</h4>
                </div>
                <div class="col col-lg-12 col-xl-10" data-aos="fade-zoom-in">
                    <h2 style="color: black; text-align: center">Бид Монголын хэрэглэгчдээ ирээдүйд эрүүл амьдрахад нь туслах жинхэнэ чанартай, гарал үүсэл тодорхой бүтээгдэхүүнийг хангахыг эрмэлздэг</h2>
                </div>

                <div class="col-md-12 col-lg-8 col-centered text-center">
                    <div class="text-center mb-4 pb-2">
                        <img draggable="false" (dragstart)="false;" src="{{ asset('src/img/arrow.png') }}" class="unselectable; width: 30px; height: 18px; background-size: 30px 18px;">
                    </div>
                    <h4 class="text-center withoutLine">{{ Str::upper(__('n_About_Value')) }}</h4>
                </div>

                <div class="col col-lg-9 col-xl-7">
                    <div class="process-steps-xs process-steps-background">
                        <ul class="center-holder row" data-aos="fade-zoom-in">
                            <li class="col">
                                <div class="process-step-xs center-holder">
                                    <div class="process-step-icon">
                                        <span>1</span>
                                    </div>
                                    <h3 class="text-center">@lang('n_About_Value_Cooperation')</h3>
                                </div>
                            </li>
                            <li class="col">
                                <div class="process-step-xs center-holder">
                                    <div class="process-step-icon">
                                        <span>2</span>
                                    </div>
                                    <h3 class="text-center">@lang('n_About_Value_Partners')</h3>
                                </div>
                            </li>
                            <li class="col">
                                <div class="process-step-xs center-holder">
                                    <div class="process-step-icon">
                                        <span>3</span>
                                    </div>
                                    <h3 class="text-center">@lang('n_About_Value_Culture')</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div id="world-map-markers" style="height: 420px"></div>
            </div>
        </div>
    </div> --}}
@endsection
@section('scripts')
{{-- <script src="{{ asset('src/assets/jvectormap/jquery-jvectormap-2.0.5.min.js') }}"></script>
<script src="{{ asset('src/assets/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script>
    var plants = [
        // {name: "Mongolia", coords: [46.8206, 103.8025], status: 'closed'},
        {name: "Denmark", coords: [56, 8.9], status: 'ashiddari', offsets: [0, 2]},
        {name: "Poland", coords: [52, 20], status: 'khulij'},
        {name: "Korea", coords: [36.235, 127.9253], status: 'khulij'},
        {name: "Russia", coords: [61, 100], status: 'khulijgoo', offsets: [0, 20]},
        {name: "Russia", coords: [61, 110], status: 'khulij', offsets: [0, -2]},
        {name: "Ukraine", coords: [49.379433, 32.16558], status: 'khulij'},
        {name: "Moldova", coords: [47, 28.8], status: 'khulij'},
        {name: "Vietnam", coords: [21.5, 105.8], status: 'khulij'},
    ];
    $(function(){
        $('#world-map-markers').vectorMap({
            map: 'world_mill',
            backgroundColor: "tranparent",
            zoomOnScroll: !0,
	        zoomButtons: !0,
            markers: plants.map(function(h){ return {name: h.name, latLng: h.coords} }),
            regionStyle: {
                initial: {
                    stroke: "#9599ad",
                    strokeWidth: .25,
                    fill: "#9599ad",
                    fillOpacity: 1
                }
            },
            series: {
                markers: [{
                    attribute: 'image',
                    scale: {
                        'khulij': 'http://khulij.gomars.biz/src/img/map/khulij.png',
                        'ashiddari': 'http://khulij.gomars.biz/src/img/map/ashiddari.png',
                        'khulijgoo': 'http://khulij.gomars.biz/src/img/map/khulijgoo.png'
                    },
                    values: plants.reduce(function(p, c, i){ p[i] = c.status; return p }, {}),
                    legend: {
                        horizontal: true,
                        title: 'Branch companies',
                        labelRender: function(v){
                            return {
                                khulij: 'Bayasakh Khulij LLC',
                                ashiddari: 'Ashiddari LLC',
                                khulijgoo: 'Khulij Goo LLC'
                            }[v];
                        }
                    }
                }]
            }
        });
    });
</script> --}}
@endsection