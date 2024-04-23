@extends('templates.basic.layouts.frontend')
@section('content')

    {{-- Banner --}}
    @include('templates.basic.reviews.partials.banner')

    {{-- Support --}}
    @include('templates.basic.reviews.partials.rating')

    @include('templates.basic.reviews.partials.ratings')


    {{-- packages--}}
    @include('templates.basic.sections.packages')

     @include('templates.basic.uptime.partials.cta')

     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
