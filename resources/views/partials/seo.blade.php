@if($seo)
    <meta name="title" Content="{{ $general->siteName(__($pageTitle)) }}">
    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ implode(',',$seo->keywords) }}">
    <meta name="author" content="Tanzahost - Fast & Secure">
    <link rel="shortcut icon" href="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}" type="image/x-icon">
    <!-- Standard favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-TileImage" content="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">

    <!-- Android / Chrome, Manifest -->
    {{-- <link rel="manifest" href="{{ asset('assets/manifest.json') }}"> --}}
    <link rel="icon" type="image/png" sizes="192x192" href="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ getImage(getFilePath('logoIcon') .'/favicon.png') }}">

    {{--<!-- Apple Stuff -->--}}
    <link rel="apple-touch-icon" href="{{ getImage(getFilePath('logoIcon') .'/logo.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{ $general->siteName($pageTitle) }}">
    {{--<!-- Google / Search Engine Tags -->--}}
    <meta itemprop="name" content="{{ $general->siteName($pageTitle) }}">
    <meta itemprop="description" content="{{ $general->seo_description }}">
    <meta itemprop="image" content="{{ getImage(getFilePath('seo') .'/'. $seo->image) }}">
    {{--<!-- Facebook Meta Tags -->--}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seo->social_title }}">
    <meta property="og:description" content="{{ $seo->social_description }}">
    <meta property="og:image" content="{{ getImage(getFilePath('seo') .'/'. $seo->image) }}"/>
    <meta property="og:image:type" content="image/{{ pathinfo(getImage(getFilePath('seo')) .'/'. $seo->image)['extension'] }}" />
    @php $socialImageSize = explode('x', getFileSize('seo')) @endphp
    <meta property="og:image:width" content="{{ $socialImageSize[0] }}" />
    <meta property="og:image:height" content="{{ $socialImageSize[1] }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    {{--<!-- Twitter Meta Tags -->--}}
    <meta name="twitter:card" content="summary_large_image">
@endif
