<section class="section section--compare-web-hosting-packages section--compare-pricing">
    <div class="container">
        <div class="section__content">
            <div class="section__header-sticky plan" data-js-plan-container>
                <div id="plan-header-sticky" data-js-plan>
                    <div class="container">
                        <div class="swiper-inner-wrapper">
                            <div class="swiper-container" data-js-plan-slider>
                                <div class="plan__wrapper swiper-wrapper plan-wrapper"
                                    data-slide-width='[353,353,353,200,200]'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabs tabs--plans" data-content-slider data-options="goToClickedSlide: true;">
                <ul
                    class="nav nav--tabs nav--h nav--lg content-slider__wrapper justify-content-center justify-content-initial-sm-down">
                    <li class="content-slider__item nav__item is-active">
                        <a class="nav__link p-3" href="#tab-shared-hosting" data-toggle="lu-tab"
                            data-animation-init>Shared Hosting</a>
                    </li>
                    <li class="content-slider__item nav__item ">
                        <a class="nav__link p-3" href="#tab-wordpress-hosting" data-toggle="lu-tab"
                            data-animation-init>WordPress Hosting</a>
                    </li>
                    <li class="content-slider__item nav__item ">
                        <a class="nav__link p-3" href="#tab-reseller-hosting" data-toggle="lu-tab"
                            data-animation-init>Reseller Hosting</a>
                    </li>
                    {{-- <li class="content-slider__item nav__item ">
                        <a class="nav__link p-3" href="#tab-cloud-vps-hosting" data-toggle="lu-tab"
                            data-animation-init>Cloud VPS Hosting</a>
                    </li> --}}
                </ul>
            </div>
            <div class="plan-sticky" data-plan-sticky></div>
            <div class="hidden" data-sticky-header>
                <span data-sticky-header-top>Choose your plan</span>
                <span data-sticky-header-bottom><a style="cursor: pointer;" onclick="tidioChatApi.open()">Or chat
                        with an expert</a></span>
            </div>
            <div class="tab-content">
                <div class="tab-pane is-active" id="tab-shared-hosting" data-plan-tab>
                    @include('templates.basic.pricing.partials.compare.shared')

                </div>
                <div class="tab-pane " id="tab-wordpress-hosting" data-plan-tab>
                    @include('templates.basic.pricing.partials.compare.wp')

                </div>
                 <div class="tab-pane " id="tab-reseller-hosting" data-plan-tab>
                    @include('templates.basic.pricing.partials.compare.reseller')

                </div>
              {{--  <div class="tab-pane " id="tab-cloud-vps-hosting" data-plan-tab>
                    @include('home.pricing.partials.compare.vps')

                </div> --}}
                <div id="plan-sticky-bottom"></div>
            </div>
        </div>
    </div>
</section>
