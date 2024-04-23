@extends('templates.basic.layouts.frontend')
@section('content')

    {{-- Banner --}}
    @include('templates.basic.support.partials.banner')

    {{-- Feature --}}
    @include('templates.basic.support.partials.feature-counter')

    @include('templates.basic.support.partials.feature-support')

    @include('templates.basic.support.partials.features-help')

    {{-- packages--}}
    @include('templates.basic.sections.packages')



     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
