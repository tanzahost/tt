<!doctype html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tanzahost - {{ $pageTitle }}</title>
    @include('partials.seo')

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,500&family=Maven+Pro:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/global/css/all.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/global/css/line-awesome.min.css') }}" />

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/custom.css') }}" />

    @stack('style-lib')
    @stack('style')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W7DHW6CCT6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-W7DHW6CCT6');
    </script>


    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/color.php') }}?color={{ $general->base_color }}" />
</head>

<body>

    <!-- Overlay -->
    <div class="overlay"></div>

    <div class="preloader">
        <div class="spinner"></div>
    </div>

    @yield('app')

    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}" ></script>
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset($activeTemplateTrue . 'js/jquery.validate.js') }}" ></script>
    <script src="{{ asset($activeTemplateTrue . 'js/main.js') }}" ></script>

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
    <script src="//code.tidio.co/jye9fnyegizqgbwgrekeder1kmred9vb.js" defer></script>

</body>

</html>
