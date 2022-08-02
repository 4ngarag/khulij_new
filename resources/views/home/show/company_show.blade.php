@extends('layouts.master')
@section('title')
{{ $company->{'name_'.app()->getLocale()} }}
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/background.jpg') }}');">
        <div class="black-overlay-30"></div>
        <div class="container">
            <h1>{{ Str::upper($company->{'name_'.app()->getLocale()}) }}</h1>
        </div>
    </div>
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="blog-post pr-lg-4 pr-0">
                        <p>{!! $company->{'intro_'.app()->getLocale()} !!}</p>
                    </div>
                    <div class="section-wrapper py-0">
                        <div class="container">
                            <div class="row">
                                <div class="owl-brands owl-carousel owl-theme s-mrb-70 s-mrt-70">
                                    @php $brands = App\Models\Brand::inRandomOrder()->select('id','name','logo')->where('company_id',$company->id)->get() @endphp
                                    @foreach($brands as $brand)
                                    <div class="item brands-item">
                                        <a href="/brands/{{ $brand->id }}">
                                            <img src="{{ Storage::url($brand->logo) }}" alt="" style="width: 74px; height: 38px; float: left;">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-post-right">
                        <h4>@lang('n_Company_Show_CompanyInfo')</h4>
                        <div class="blog-post-follow mt-20">
                            <ul>
                                <li>
                                    <i class="fas fa-industry"></i>
                                    <b>@lang('n_Company_Show_PrimaryIndustry'):</b>
                                    <span>{{ $company->{'direction_'.app()->getLocale()} }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <b>@lang('n_Company_Show_CompanySize'):</b>
                                    <span>{{ $company->company_size }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-calendar"></i>
                                    <b>@lang('n_Company_Show_FoundedIn'):</b>
                                    <span>{{ $company->start_year }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <b>@lang('n_Company_Show_Phone'):</b>
                                    <span>(+976) {{ $company->phone }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-at"></i>
                                    <b>@lang('n_Company_Show_Email'):</b>
                                    <span><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></span>
                                </li>
                                <li>
                                    <i class="fas fa-location-arrow"></i>
                                    <b>@lang('n_Company_Show_Location'):</b>
                                    <span>Ulaanbaatar, MN</span>
                                </li>
                            </ul>
                        </div>
                        <h4>@lang('n_Company_Show_SocialMedia')</h4>
                        <div class="blog-post-follow mt-20">
                            <ul>
                                <li><a href="{{ $company->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/bayasakh.khulij"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCmAIiojWph9rDZ29HnBikvg"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection