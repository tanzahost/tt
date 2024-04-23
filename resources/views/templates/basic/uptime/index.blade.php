@extends('templates.basic.layouts.frontend')
@section('content')

    {{-- Banner --}}
    @include('templates.basic.uptime.partials.banner')

    {{-- Feature --}}
    @include('templates.basic.uptime.partials.feature-uptime')

    @include('templates.basic.uptime.partials.feature-secure')


    {{-- packages--}}
    @include('templates.basic.sections.packages')

     @include('templates.basic.uptime.partials.cta')

     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
