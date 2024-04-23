@extends('templates.basic.layouts.frontend')
@section('content')

    {{-- Banner --}}
    @include('templates.basic.security.partials.banner')

    {{-- Packages --}}
    @include('templates.basic.security.partials.tech-overview')



    {{-- Features --}}
    @include('templates.basic.security.partials.features')

    @include('templates.basic.security.partials.features-security')

    @include('templates.basic.security.partials.features-reliability')

    @include('templates.basic.security.partials.features-email')

    @include('templates.basic.security.partials.features-dev')

    {{-- packages--}}
    @include('templates.basic.sections.packages')



     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
