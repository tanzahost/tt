@extends('templates.basic.layouts.frontend')
@section('content')

    {{-- Banner --}}
    @include('templates.basic.partners.partials.banner')

    {{-- Support --}}
    @include('templates.basic.partners.partials.tech')

    @include('templates.basic.partners.partials.more')


    {{-- packages--}}
    @include('templates.basic.sections.packages')

     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
