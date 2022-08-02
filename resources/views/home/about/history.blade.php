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
</style>
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/brands.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>HISTORY</h1>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="container">
            <div class="text-center mb-4 pb-2">
                <img src="{{ asset('src/img/arrow.png') }}" class="width: 30px; height: 18px; background-size: 30px 18px;">
            </div>
            <div class="row mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="timeline timeline-four">
                        <div class="timeline-item">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-calendar"></i> <span class="year mt-1">1993</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Үүсгэн байгуулагдсан</h5>
                                <p>1993 онд “Баясах трейд” худалдааны компанийг 40 хүний бүрэлдэхүүнтэй анх үүсгэн байгуулсан. Тухайн үедээ Монгол Улсын гадаад худалдааны салбарын ууган аж ахуйн нэгжүүдийн нэг байсан бөгөөд Монголдоо дэлхийн брэндийг нэвтрүүлж, шинэ брэнд бүтээгдэхүүнүүдийг монголын хэрэглэгчдэд таниулах томоохон хувьсал болсон юм.</p>
                            </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-lightbulb"></i> <span class="year mt-1">2003</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Баясах Өргөө ХХК</h5>
                                <p>Баясах Өргөө ХХК үүсгэн байгуулагдав. 2003 оны  12  дугаар  сарын  03  нд  "HIT-1"  супермаркетыг,  2007  оны  2  сард  "HIT-2" супермаркетыг ашиглалтад оруулж 2010 оны 12-р сараас үйл ажиллагаагаа өргөжүүлэн Сүлжээ супермаркетын стандартад нийцүүлэн “Баясах супермаркет” нэртэйгээр 4 салбар дэлгүүрүүдээ нээсэн.</p>
                            </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2013</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Баясах Хульж ХХК</h5>
                                <p>2013 оноос компаний нэрээ Баясах Хульж ХХК хэмээн өөрчилж хүнс шингэн хүнс, ахуйн хэрэглээний бараа, хөлдөөсөн хүнс, банк бус санхүүгийн байгууллага, барилгын материал зэрэг салбарт охин компаниа нээж үйл ажиллагаагаа өргөтгөсөн.</p>
                            </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2017</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Трастфинанс ББСБ</h5>
                                <p>“Трастфинанс ББСБ” ХХК 2017 онд СЗХ-с зөвшөөрөлөө авч үйл ажиллагаагаа эхэлсэн. Бид одоогоор зөвхөн зээлийн үйлчилгээ үзүүлж байгаа бөгөөд цаашид Финтек чиглэлээр үйл ажиллагаагаа өргөтгөхөөр судлаж байна.</p>
                            </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2018</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Баясах Констракшн ХХК</h5>
                                <p>Баясах Констракшн ХХК үүсгэн байгуулагдав. Монгол улсын хөгжилд үнэтэй хувь нэмэр оруулж буй Барилгын компаниудад БНХАУ-ын барилгын материалын нийлүүлэлт хийж байна.</p>
                            </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2019</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Хульж Гоо ХХК</h5>
                                <p>Хульж Гоо ХХК үүсгэн байгуулагдав. хойд хөрш ОХУ-н "Невская Косметика" ХХК, Украйн улсын "Киевский картонно-бумажный комбинат" ХХК, Саянскхимпласт ХХК-тай хамтарч ажилладаг бөгөөд эдгээр компаний  нийт 240 гаруй нэр төрлийн гоо сайхан, ахуйн барааг импортоор оруулж ирж, хэрэглэгчдэд нийлүүлж байна.</p>
                            </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up">
                            <div class="icon"></div>
                            <div class="date-content">
                                <div class="date-outer"><span class="date"><i class="far fa-paper-plane"></i> <span class="year mt-1">2021</span></span></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="title">Ашиддарь ХХК</h5>
                                <p>Ашиддарь ХХК үүсгэн байгуулагдав. Дани улсаас төрөл бүрийн сүү сүүн бүтээгдэхүүнийг импортлон зах зээлд нэвтрүүлж, 60 гаруй нэр төрлийн өргөн хэрэглээний бүтээгдэхүүн Монголын зах зээлд нийлүүлж байна.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection