<header id="nav-transparent">
	<nav id="navigation4" class="container navigation">
		<div class="nav-header">
			<a class="nav-brand" href="/">
				<img src="{{ asset('src/img/logo/khulij-light-'.app()->getLocale().'.png') }}" alt="logo" class="main-logo" id="light_logo">
				<img src="{{ asset('src/img/logo/khulij-'.app()->getLocale().'.png') }}" alt="logo" class="main-logo" id="main_logo">
			</a>
			<div class="nav-toggle"></div>
		</div>
		<div class="nav-menus-wrapper">
			<ul class="nav-menu align-to-right">
				<!-- <li><a href="/">@lang('nav_HomePage')</a></li> -->
				<li><a href="/about">@lang('nav_AboutUs')</a>
					<ul class="nav-dropdown">
						<li><a href="/about">@lang('footer_Introduction')</a></li>
						<!-- <li><a href="/about/greeting">Greeting</a></li> -->
						<li><a href="/about/history">@lang('footer_History')</a></li>
					</ul>
				</li>
				<li><a href="/branch-companies">@lang('nav_BranchCompanies')</a>
					<ul class="nav-dropdown">
						<li><a href="#!">FOOD</a>
							<ul class="nav-dropdown">
								<li><a href="/branch-companies/1">@lang('n_Company_Khulij')</a></li>
							</ul>
						</li>
						<li><a href="#!">COLD CHAIN</a>
							<ul class="nav-dropdown">
								<li><a href="/branch-companies/2">@lang('n_Company_Ashiddari')</a></li>
							</ul>
						</li>
						<li><a href="#!">NON-FOOD</a>
							<ul class="nav-dropdown">
								<li><a href="/branch-companies/3">@lang('n_Company_KhulijGoo')</a></li>
							</ul>
						</li>
						<li><a href="#!">MARKET</a>
							<ul class="nav-dropdown">
								<li><a href="/branch-companies/4">@lang('n_Company_Urguu')</a></li>
							</ul>
						</li>
						<li><a href="#!">FINANCE</a>
							<ul class="nav-dropdown">
								<li><a href="/branch-companies/5">@lang('n_Company_TrustFinance')</a></li>
							</ul>
						</li>
						<li><a href="#!">PROPERTY</a>
							<ul class="nav-dropdown">
								<li><a href="/branch-companies/6">@lang('n_Company_Construction')</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="/brands">@lang('nav_Brands')</a>
					<ul class="nav-dropdown">
						<li><a href="#!">FOOD</a>
							<ul class="nav-dropdown">
							@php $brands = App\Models\Brand::select('id','name')->where('company_id','1')->get() @endphp
							@foreach($brands as $brand)
								<li><a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a></li>
							@endforeach
							</ul>
						</li>
						<li><a href="#!">COLD CHAIN</a>
							<ul class="nav-dropdown">
							@php $brands = App\Models\Brand::select('id','name')->where('company_id','2')->get() @endphp
							@foreach($brands as $brand)
								<li><a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a></li>
							@endforeach
							</ul>
						</li>
						<li><a href="#!">NON-FOOD</a>
							<ul class="nav-dropdown">
							@php $brands = App\Models\Brand::select('id','name')->where('company_id','3')->get() @endphp
							@foreach($brands as $brand)
								<li><a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a></li>
							@endforeach
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="/social-responsibility">@lang('nav_SocialResponsibility')</a></li>
				<li><a href="/career">@lang('nav_HumanResource')</a></li>
				<li><a href="/contact">@lang('nav_ContactUs')</a></li>
			</ul>
			<ul class="nav-menu align-to right">
				@php if(session()->missing('language')) session()->put('language', config('app.locale')) @endphp
				<li><a>{{ Session::get('language') }}</a>
					<ul class="nav-dropdown" style="min-width: 10px">
						@foreach(config('app.available_locales') as $locale)
						<li style="@if(session()->get('language') == $locale) display:none; @endif"><a href="{{ request()->url() }}?language={{ $locale }}">{{ strtoupper($locale) }}</a></li>
						@endforeach
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>