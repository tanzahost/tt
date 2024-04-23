@extends('templates.basic.layouts.frontend')
@section('content')

    {{-- Banner --}}
    @include('templates.basic.pricing.partials.banner')

    {{-- Packages Compare--}}
    @include('templates.basic.pricing.partials.compare')

    {{-- Pontact us banner--}}
    @include('templates.basic.pricing.partials.contact')

    {{-- FAQ--}}
     @include('templates.basic.pricing.partials.faq')



     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
