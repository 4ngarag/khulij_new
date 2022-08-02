@extends('layouts.master')
@section('title')
@lang('nav_HumanResource')
@endsection
@section('styles')
<style>
    .career-form {
    background-color: #4e63d7;
    border-radius: 5px;
    padding: 0 16px;
    }
    .career-form .form-control {
    background-color: rgba(255, 255, 255, 0.2);
    border: 0;
    padding: 12px 15px;
    color: #fff;
    }
    .career-form .form-control::-webkit-input-placeholder {
    color: #fff;
    }
    .career-form .form-control::-moz-placeholder {
    color: #fff;
    }
    .career-form .form-control:-ms-input-placeholder {
    color: #fff;
    }
    .career-form .form-control:-moz-placeholder {
    color: #fff;
    }
    .career-form .custom-select {
    background-color: rgba(255, 255, 255, 0.2);
    border: 0;
    padding: 12px 15px;
    color: #fff;
    width: 100%;
    border-radius: 5px;
    text-align: left;
    height: auto;
    background-image: none;
    }
    .career-form .custom-select:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
    }
    .career-form .select-container {
    position: relative;
    }
    .career-form .select-container:before {
    position: absolute;
    right: 15px;
    top: calc(50% - 14px);
    font-size: 18px;
    color: #ffffff;
    content: '\F2F9';
    font-family: "Material-Design-Iconic-Font";
    }
    .filter-result .job-box {
    -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
    border-radius: 10px;
    padding: 10px 35px;
    }
    ul {
    list-style: none; 
    }
    .list-disk li {
    list-style: none;
    margin-bottom: 12px;
    }
    .list-disk li:last-child {
    margin-bottom: 0;
    }
    .job-box .img-holder {
    height: 65px;
    width: 65px;
    background-color: #4e63d7;
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
    background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
    font-family: "Open Sans", sans-serif;
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    border-radius: 65px;
    }
    .career-title {
    background-color: #4e63d7;
    color: #fff;
    padding: 15px;
    text-align: center;
    border-radius: 10px 10px 0 0;
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
    background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
    }
    .job-overview {
    -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
            box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
    border-radius: 10px;
    }
    @media (min-width: 992px) {
    .job-overview {
        position: -webkit-sticky;
        position: sticky;
        top: 70px;
    }
    }
    .job-overview .job-detail ul {
    margin-bottom: 28px;
    }
    .job-overview .job-detail ul li {
    opacity: 0.75;
    font-weight: 600;
    margin-bottom: 15px;
    }
    .job-overview .job-detail ul li i {
    font-size: 20px;
    position: relative;
    top: 1px;
    }
    .job-overview .overview-bottom,
    .job-overview .overview-top {
    padding: 35px;
    }
    .job-content ul li {
    font-weight: 600;
    opacity: 0.75;
    border-bottom: 1px solid #ccc;
    padding: 10px 5px;
    }
    @media (min-width: 768px) {
    .job-content ul li {
        border-bottom: 0;
        padding: 0;
    }
    }
    .job-content ul li i {
    font-size: 20px;
    position: relative;
    top: 1px;
    }
    .mb-30 {
        margin-bottom: 30px;
    }
    .feature-box-1 {
    padding: 32px;
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    margin: 15px 0;
    position: relative;
    z-index: 1;
    border-radius: 10px;
    overflow: hidden;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    top: 0;
    }
    .feature-box-1 * {
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    }
    .feature-box-1 .icon {
    width: 70px;
    height: 70px;
    line-height: 70px;
    background: #f25900;
    color: #ffffff;
    text-align: center;
    border-radius: 50%;
    margin-bottom: 22px;
    font-size: 27px;
    }
    .feature-box-1 .icon i {
    line-height: 70px;
    }
    .feature-box-1 h5 {
    color: #171796;
    font-weight: 600;
    }
    .feature-box-1 p {
    margin: 0;
    }
    .feature-box-1:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: auto;
    right: 0;
    border-radius: 10px;
    width: 0;
    background: #171796;
    z-index: -1;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    }
    .feature-box-1:hover {
    top: -5px;
    }
    .feature-box-1:hover h5 {
    color: #ffffff;
    }
    .feature-box-1:hover p {
    color: rgba(255, 255, 255, 0.8);
    }
    .feature-box-1:hover:after {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    left: 0;
    right: auto;
    }
    .section {
        padding: 100px 0;
        position: relative;
    }
    .section-title {
        padding-bottom: 45px;
    }
    .section-title h2 {
        font-weight: 700;
        color: #171796;
        font-size: 45px;
        margin: 0 0 15px;
        border-left: 5px solid #f25900;
        padding-left: 15px;
    }
    .iframeContainer{
        position: relative;
        width: 700px;
        height: 600px;
        overflow: hidden;
    }
    .iframeContent{
        position: absolute;
        top: -700px;
        left: -280px;
        width: 1500px;
        height: 2000px;
    }
</style>
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/khulij.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_HumanResource')) }}</h1>
        </div>
    </div>
    <div class="section-wrapper section-wrapper--gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4">
                    <h3 class="s-title-md text-center">Таныг найрсаг чадварлаг хамт олон, өсөн дэвших боломж, өрсөлдөхүйц цалин хөлс, нэмэлт урамшууллууд, ажлын тухтай орчин хүлээж байна.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <i class="icon-handshake"></i>
                        <h3>Ур чадвараа нэмэгдүүлэх боломж</h3>
                        <p>Таныг найрсаг чадварлаг хамт олон, өсөн дэвших боломж, өрсөлдөхүйц цалин хөлс, нэмэлт урамшууллууд, ажлын тухтай орчин хүлээж байна.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img src="{{ asset('src/img/services/ssquare1.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
            </div>
            <div class="row row-reverse-sm">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img src="{{ asset('src/img/services/ssquare2.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <i class="icon-user-3"></i>
                        <h3>Өсөн дэвших боломж</h3>
                        <p>Таныг найрсаг чадварлаг хамт олон, өсөн дэвших боломж, өрсөлдөхүйц цалин хөлс, нэмэлт урамшууллууд, ажлын тухтай орчин хүлээж байна.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-text">
                        <i class="icon-user-5"></i>
                        <h3>Дадлага</h3>
                        <p>Таныг найрсаг чадварлаг хамт олон, өсөн дэвших боломж, өрсөлдөхүйц цалин хөлс, нэмэлт урамшууллууд, ажлын тухтай орчин хүлээж байна.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 s-mrt-30">
                    <div class="serv-box-img">
                        <img src="{{ asset('src/img/services/ssquare3.png') }}" alt="">
                        <div class="overlay-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="section-wrapper">
		<div class="container overflow-hidden">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="start-title">Ажилд орох <span>процесс</span></h3>
					<p class="start-sub">It is fast, easy and profitable</p>
				</div>
			</div>
			<div class="row s-mrt-80">
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-paper-plane"></i>
						</div>
						<h3 style="text-align: center;">Анкет хүлээн<br> авах</h3>
						<div class="bar"></div>
						<p> Тайлбар текст</p>
					</div>
				</div>
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-options-sharp"></i>
						</div>
						<h3 style="text-align: center;">Анкет сонгон шалгаруулах</h3>
						<div class="bar"></div>
						<p> Тайлбар текст</p>
					</div>
				</div>
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-receipt"></i>
						</div>
						<h3 style="text-align: center;">Эхний шатны ярилцлага</h3>
						<div class="bar"></div>
						<p> Тайлбар текст</p>
					</div>
				</div>
                <div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-receipt"></i>
						</div>
						<h3 style="text-align: center;">Ур чадварын<br> шалгалт</h3>
						<div class="bar"></div>
						<p> Тайлбар текст</p>
					</div>
				</div>
                <div class="col-sm-8 col-md-2 tabs-box active-tab-box">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-receipt"></i>
						</div>
						<h3 style="text-align: center;">Хоёрдугаар шатны ярилцлага</h3>
						<div class="bar"></div>
						<p> Тайлбар текст</p>
					</div>
				</div>
				<div class="col-sm-8 col-md-2 tabs-box active-tab-box tabs-box-first">
					<div class="tabs-item">
						<div class="tab-icon">
							<i class="icon-notifications"></i>
						</div>
						<h3 style="text-align: center;">Ажилд авах<br> санал</h3>
						<div class="bar"></div>
						<p> Тайлбар текст</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <section class="section services-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Манайд ажилласанаар</h2>
                        <p>Та манай байгууллагад ажилласанаар доорх хөнгөлөлтүүдийг эдлэх боломжтой</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Бэлэг</h5>
                            <p>Хурим, хүүхдийн баяр, шинэ төрсөн хүүхэдийн бэлэг</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Эрүүл мэнд</h5>
                            <p>Эрүүл мэндийн урьдчилан сэргийлэх үзлэг</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fas fa-umbrella"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Даатгал</h5>
                            <p>Компанийн үйл ажиллагааны онцлогоос шалтгаалсан ажилтанд зориулсан даатгалууд</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fas fa-percentage"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Хөнгөлөлт</h5>
                            <p>Ажлын байрны онцлогоос шалтгаалсан үүрэн утас, унааны хөнгөлөлтүүд</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Тэтгэмж, тусламж</h5>
                            <p>Тэтгэмж, тусламжууд</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box-1">
                        <div class="icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Зээл</h5>
                            <p>Хамтран ажиллагч банкуудаас хөнгөлөлттэй нөхцөлөөр зээл авах боломжууд</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-lg-10 mx-auto mb-4">
                    <div class="section-title text-center ">
                        <h3 class="top-c-sep">Нээлттэй ажлын байр</h3>
                        <p>Манайд зарлагдсан нээлттэй ажлын байрууд доор байрлаж байна</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60">
                        <div class="filter-result">
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">НБ</div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Нягтлан бодогч</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4"><i class="zmdi zmdi-pin mr-2"></i>СОНГИНОХАЙРХАН ДҮҮРЭГ</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-money mr-2"></i>1,200,000-1,500,000</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-time mr-2"></i>БҮТЭН ЦАГЫН</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="/careers" target="_blank" class="btn d-block w-100 d-sm-inline-block btn-light">Анкет бөглөх</a>
                                </div>
                            </div>
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">ХТ</div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Худалдааны төлөөлөгч</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4"><i class="zmdi zmdi-pin mr-2"></i> Баянзүрх дүүрэг</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-money mr-2"></i>1,000,000-1,500,000</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-time mr-2"></i>Бүтэн цагын</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="/careers" target="_blank" class="btn d-block w-100 d-sm-inline-block btn-light">Анкет бөглөх</a>
                                </div>
                            </div>
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">ХА</div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Хяналтын ажилтан</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4"><i class="zmdi zmdi-pin mr-2"></i>Баянзүрх дүүрэг</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-money mr-2"></i>800,000-1,000,000</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-time mr-2"></i>Ээлжээр</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="/careers" target="_blank" class="btn d-block w-100 d-sm-inline-block btn-light">Анкет бөглөх</a>
                                </div>
                            </div>
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">КА</div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">Касс</h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                            <li class="mr-md-4"><i class="zmdi zmdi-pin mr-2"></i>Сүхбаатар дүүрэг</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-money mr-2"></i>800,000-1,000,000</li>
                                            <li class="mr-md-4"><i class="zmdi zmdi-time mr-2"></i>Ээлжээр</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="/careers" target="_blank" class="btn d-block w-100 d-sm-inline-block btn-light">Анкет бөглөх</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection