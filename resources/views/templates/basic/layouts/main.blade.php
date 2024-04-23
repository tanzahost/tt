<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->


    <title>Tanzahost - {{ $pageTitle }}</title>
    @include('partials.seo')

        <!-- Defer Loading Non-Critical CSS -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">
    <noscript><link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}"></noscript>

    <!-- Additional CSS files -->
    <link rel="stylesheet" href="{{ asset('home/core/extensions/ClientNotifications/assets/css/client-notifications.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/fontawesome-all.min.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W7DHW6CCT6" defer></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-W7DHW6CCT6');
    </script>
    <style>
            .banner__content-scores {
 display:flex;
 width:100%;
 margin:72px 0 0;
 align-items:flex-start!important;
 flex-wrap:wrap;
 gap:40px
}
@media(max-width:1397px) and (min-width:1012px) {
 .banner__content-scores {
  gap:20px
 }
}
.banner__content-scores .banner-score-box {
 display:flex;
 flex-direction:column;
 gap:8px;
 width:calc(25% - 30px);
 text-align:left
}
@media(max-width:1397px) and (min-width:1012px) {
 .banner__content-scores .banner-score-box {
  width:calc(25% - 15px)
 }
}
@media(max-width:559px) {
 .banner__content-scores .banner-score-box {
  width:calc(50% - 30px)
 }
 .banner__content-scores .banner-score-box__logo,
 .banner__content-scores .banner-score-box__stars {
  justify-content:center
 }
 .banner__content-scores .banner-score-box__score {
  text-align:center
 }
}
.banner__content-scores .banner-score-box__logo {
 display:flex;
 align-items:center;
 height:35px
}
.banner__content-scores .banner-score-box__logo img {
 max-height:40px
}
.banner__content-scores .banner-score-box__stars {
 display:flex;
 gap:2px
}
.banner__content-scores .banner-score-box__stars svg {
 width:30px;
 height:30px
}
.banner__content-scores .banner-score-box__score {
 color:#fff;
 font-size:13px;
 line-height:16px
}
    </style>

</head>

<body class="site ">

    <script type="text/javascript" src="{{ asset('home/assets/js/tp.widget.bootstrap.min.js') }}" defer>
    </script>
    <!--@include('templates.basic.partials.offer')-->

    @yield('main')


    <script src="{{ asset('home/assets/js/main.js') }}" type="text/javascript" defer></script>

    <script src="{{ asset('home/core/extensions/ClientNotifications/assets/js/client-notifications.js') }}" defer></script>

    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')

    <script>
        (function($) {
            "use strict";

            var currentUrl = '{{ url()->full() }}';

            $('.menu a[href="' + currentUrl + '"]').addClass('active');
            $('.menu .sub-menu a[href="' + currentUrl + '"]').closest('a').addClass('active');
            $('.menu .sub-menu a[href="' + currentUrl + '"]').parents('.has-sub-menu').find('a').eq(0).addClass('active')

            if ($('.navbar-nav .dropdown-menu a[href="' + currentUrl + '"]').length || "{{ @request()->routeIs('service.category') }}") {
                $('#navbarDropdown').addClass('active');
            }
        })(jQuery);
    </script>

    <div class="modal modal--lg fade" id=modal-discount tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal__dialog" role="document">
            <div class="modal__content">
                <div class="modal__header">
                    <h6 class="modal__title">Pricing Reflects A Discount On The First Invoice Only</h6>
                    <button class="btn btn--link" data-dismiss="lu-modal" aria-label="Close" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="modal__body">
                    <p class="p-4">Tanzahost often offers promotions, coupons, and special offers to customers during
                        their initial term. Please note that special offers are limited-time promotional prices
                        available to new customers and are valid for the Initial Term only and not for recurring or
                        renewal periods.</p>
                    <p class="p-4">Promotional rates apply to Shared Hosting, WordPress Hosting, Reseller Hosting, and
                        VPS Hosting hosting plans and will automatically renew after the initial term at the regular
                        rate found in your control panel. Note: If you register a free domain through us and wish to
                        cancel your account within the money-back guarantee period, there is a fee to retain your
                        domain.</p>
                    <p class="p-4">Suppose your hosting plan includes a free domain, and you cancel your hosting within
                        the money-back guarantee period. In that case, you will be refunded 100% of your payment minus
                        the regular rate of the domain name registration. </p>
                    <p class="p-4">The money-back guarantee does not apply to nor are refunds available for additional
                        services. </p>
                    <p class="p-4">You expressly acknowledge, agree, and authorize us to automatically bill the
                        applicable fee and charge your credit card or other payment methods on file for each Renewal
                        Term, unless you cancel the Services before such charge.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="modal modal--lg fade" id="modal-discount-domain" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal__dialog" role="document">
            <div class="modal__content">
                <div class="modal__header">
                    <h6 class="modal__title">Free Domain Registration</h6>
                    <button class="btn btn--link" data-dismiss="lu-modal" aria-label="Close" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="#B7B7B7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="modal__body">
                    <p class="p-4">To qualify for a free domain name registration, you must sign up for any of our
                        annual hosting plans. The free domain name must be ordered during the initial sign-up. Unless
                        otherwise specified, this offer is only valid for the first year. After the first year, your
                        domain will renew at the regular rate.</p>
                    <p class="p-4">Suppose your hosting plan includes a free domain, and you cancel your hosting within
                        the money-back guarantee period. In that case, you will be refunded 100% of your payment minus
                        the regular rate of the domain name registration.</p>
                    <p class="p-4">Discount will be automatically applied to your cart at checkout.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.tidio.co/jye9fnyegizqgbwgrekeder1kmred9vb.js" defer></script>
</body>

</html>
