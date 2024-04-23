@extends($activeTemplate . 'layouts.frontend')

@php
    $products = $serviceCategory->products($filter = true)->paginate(getPaginate());
@endphp

@section('content')

@foreach ($serviceCategory->banners as $banner)
    <div class="site-banner banner banner--sides banner-m-w-lg has-shapes banner-m-w-lg overlap-lg">
        <div class="container">
            <div class="banner__content">
                <h1 class="banner__title">{{ $banner->title }}</h1>
                <p class="banner__desc p-1">
                    {!! $banner->short_description !!}
                </p>
                <div class="banner__actions">
                    <div class="banner__actions-btn">
                        <a href="{{ $banner->url }}" class="btn btn--secondary btn--lg has-arrow btn--min-width-lg">
                            <div class="btn__text">
                                Choose Your Plan
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </a>
                        <p class="money-back m-b-0">
                            Worry-free - <strong>45 Days Money Back</strong>
                        </p>
                    </div>
                    <div class="banner__actions-pricing pricing">
                        <span class="pricing__title">
                            Starts at only
                        </span>
                        <div class="pricing__price">
                            <span class="pricing__amount h3">${{ $banner->serviceCategory->price }}</span>
                            <div class="pricing__period p-4">/mo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__background">
            <div class="banner__background--right">
                {!! $banner->svg_code !!}
            </div>
        </div>
        <div class="banner__shape-background">
            <div class="banner__shape banner__shape--bottom"></div>
        </div>
    </div>
@endforeach


<div class="section section--packages" id="products">
    <span class="anchor-target" id="shared-hosting-for-every-website"></span>
    <div class="container">
        <div class="section__content">
            <span class="anchor-target" id="products"></span>
            <div class="tabs" data-content-slider data-options="goToClickedSlide: true;">
                <ul class="nav nav--tabs nav--h content-slider__wrapper justify-content-center">
                    <li class="content-slider__item nav__item is-active">
                        <a class="nav__link p-1" href="#" data-toggle="lu-tab" data-animation-init
                            data-change-pricing="4">
                            Triennially
                        </a>
                    </li>
                    <li class="content-slider__item nav__item ">
                        <a class="nav__link p-1" href="#" data-toggle="lu-tab" data-animation-init
                            data-change-pricing="3">
                            Biennially
                        </a>
                    </li>
                    <li class="content-slider__item nav__item ">
                        <a class="nav__link p-1" href="#" data-toggle="lu-tab" data-animation-init
                            data-change-pricing="2">
                            Annually
                        </a>
                    </li>
                    <li class="content-slider__item nav__item ">
                        <a class="nav__link p-1" href="#" data-toggle="lu-tab" data-animation-init
                            data-change-pricing="1">
                            Monthly
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row row--features">

                @foreach($products as $product)
                <div class="col-lg-4 col-sm-12">
                    <div class="package package--main">
                        <a href="{{ route('product.configure', ['categorySlug' => $serviceCategory->slug, 'productSlug' => $product->slug, 'id' => $product->id]) }}"
                            data-href="{{ route('product.configure', ['categorySlug' => $serviceCategory->slug, 'productSlug' => $product->slug, 'id' => $product->id]) }}"
                            class="package__header package_header-link"

                            onchange="autoSelectBillingCycle()">



                            <div class="package__body">
                                <h2 class="package__title h5">
                                    {{ __($product->name) }}
                                </h2>
                                <div class="package__available">
                                    <div class="package__price pricing" data-pricing-container>
                                        <div class="pricing__price">
                                            <span class="pricing__amount h3">
                                                <span class="currency">$</span>
                                                @php
                                                    $monthlyAnnually = $product->price->annually / 12;
                                                    $monthlyBiennially = $product->price->biennially / 24; // Biennially is for 2 years
                                                    $monthlyTriennially = $product->price->triennially / 36; // Triennially is for 3 years
                                                @endphp
                                                <span class="price" data-price='["{{ number_format($product->price->monthly, 2) }}","{{ number_format($monthlyAnnually, 2) }}","{{ number_format($monthlyBiennially, 2) }}","{{ number_format($monthlyTriennially, 2) }}"]'>
                                                    6.98
                                                </span>
                                            </span>
                                            <div class="pricing__period p-4"
                                                data-pricing-period='["/mo","/mo","/mo","/mo"]'>/mo</div>
                                        </div>
                                        <div class="pricing__discount" data-toggle='lu-modal'
                                            data-target=#modal-discount>
                                            {{-- <div class="pricing__old p-4 d-flex">
                                                <span class="currency">$</span>
                                                <span
                                                    data-price-old='["10.99","10.99","10.99","10.99"]'>10.99</span>
                                            </div> --}}
                                            <div class="pricing__save p-4">
                                                Now
                                                <span data-price-discount='["0","55","55","65"]'>65</span>% Off!
                                            </div>
                                            <div class="pricing__help-icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_helpicon123)">
                                                        <path
                                                            d="M12.5 20C17.1944 20 21 16.1944 21 11.5C21 6.80558 17.1944 3 12.5 3C7.80558 3 4 6.80558 4 11.5C4 16.1944 7.80558 20 12.5 20Z"
                                                            stroke="#B6B6B6" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M10 8.66915C10.2016 8.11262 10.5996 7.64334 11.1235 7.34442C11.6473 7.0455 12.2632 6.93623 12.8621 7.03596C13.4609 7.1357 14.0041 7.43801 14.3954 7.88934C14.7867 8.34067 15.0009 8.91191 15 9.50186C15 11.1673 12.4271 12 12.4271 12"
                                                            stroke="#B6B6B6" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M13 15C13 15.5523 12.5523 16 12 16C11.4477 16 11 15.5523 11 15C11 14.4477 11.4477 14 12 14C12.5523 14 13 14.4477 13 15Z"
                                                            fill="#B6B6B6" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_helpicon123">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg> </div>
                                        </div>
                                    </div>
                                    <div class="package__actions">
                                        <button class="btn btn--secondary btn--min-width-md has-arrow">
                                            <span class="btn__text">Order Now <svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12H19" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg> </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="package__not-available">
                                    <div class="package__price pricing">
                                        <h3> Not Available</h3>
                                    </div>
                                    <div class="package__actions">
                                        <span class="p-3">
                                            This package is not available in selected timeframe. Please choose
                                            different billing cycle.
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <div class="package__features">
                            @if ($product->features)
                            <div class="package__features-group">
                                <div class="package__title p-4">Essential features</div>
                                {!! $product->features !!}
                            </div>
                            @endif
                            @if ($product->pro)
                            <div class="package__features-group">
                                <div class="package__title p-4">Pro</div>
                                {!! $product->pro !!}
                            </div>
                            @endif
                            @if ($product->turbo)
                            <div class="package__features-group">
                                <div class="package__title p-4">Turbo</div>
                               {!! $product->turbo !!}
                            </div>

                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <a href="#compare-our-web-hosting-packages" class="btn btn--link btn---link text-secondary">
                <div class="btn__text">
                    Compare Packages
                </div>
            </a> --}}
        </div>
    </div>
</div>

@include('templates.basic.partials.brands')

@if ($serviceCategory->reasons->isNotEmpty())

@else
<div class="section section--website-builder-empowers">
    <span class="anchor-target" id="website-success-is-as-easy-as-1-2-3"></span>
    <div class="container">
        <h2 class="section__title">
            Website Success is as Easy as 1-2-3
        </h2>
        <p class="section__subtitle">
            It only takes three steps to get started building your site. If you dream it, you can build it. Create
            an online store, blog, or redesign your existing website. Our online builder is available with any of
            our shared plans and comes with a free domain for life.
        </p>
        <div class="section__content">
            <div class="row row--eq-height row--lg features features--centered features--reseller">
                <div class="col-lg-4 col-sm-12">
                    <div class="feature__number">
                        01 </div>
                    <div class="feature feature--bordered">
                        <div class="feature__body">
                            <h3 class="feature__title h6">
                                Choose a Template
                            </h3>
                            <p class="feature__desc">
                                Choose from over 350+ ready to use website templates.
                            </p>
                        </div>
                        <div class="feature__arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="feature__number">
                        02 </div>
                    <div class="feature feature--bordered">
                        <div class="feature__body">
                            <h3 class="feature__title h6">
                                Drag and Drop
                            </h3>
                            <p class="feature__desc">
                                Customize your site with our simple drag and drop tools.
                            </p>
                        </div>
                        <div class="feature__arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M12 5L19 12L12 19" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="feature__number">
                        03 </div>
                    <div class="feature feature--bordered">
                        <div class="feature__body">
                            <h3 class="feature__title h6">
                                Publish
                            </h3>
                            <p class="feature__desc">
                                Take your site live with just one click.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if ($serviceCategory->features->isNotEmpty())
<section class="section">
    <span class="anchor-target" id="shared-hosting-features"></span>
    <div class="container">
        <h2 class="section__title">
            {{ __($serviceCategory->name) }} Features
        </h2>

        <p class="section__subtitle p-1">
            Behind every hosting plan we offer, you can expect exceptional customer service, an unconditional Money
            Back Guarantee, and our 99.99% Uptime Guarantee.
        </p>
        <div class="section__content">
            <div class="row row--eq-height features features--centered">

                @foreach ($serviceCategory->features as $feature)
                <div class="col-lg-4 col-sm-12">
                    <div class="feature">
                        <div class="feature__body ">
                            <div class="feature__icon">
                                {!! $feature->svg !!}
                            </div>
                            <h4 class="feature__title h6">
                                {{ $feature->title }}
                            </h4>
                            <p class="feature__desc">
                                {{ $feature->description }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@else
@include('templates.basic.reseller.features')
@endif

@if ($serviceCategory->reasons->isEmpty())

@else
@include('templates.basic.partials.why')

@endif
@include('templates.basic.partials.migrate')

{{-- @include('templates.basic.partials.compare') --}}
@if ($serviceCategory->features->isEmpty())
@include('templates.basic.reseller.start-selling')

@else
@endif
@if ($serviceCategory->features->isEmpty())
@include('templates.basic.reseller.automate')

@else
@endif

@if ($serviceCategory->faqs->isEmpty())
@include('templates.basic.reseller.faq')

@else
@include('templates.basic.partials.faq')

@endif

@include('templates.basic.partials.footer-banner')



@endsection
