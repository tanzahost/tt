@extends('templates.basic.layouts.frontend')
@section('content')


    {{-- Banner --}}
    @include('templates.basic.panel.partials.banner')

    {{-- Feature --}}
    @include('templates.basic.panel.partials.feature-management')

    @include('templates.basic.panel.partials.feature-control')

    @include('templates.basic.panel.partials.feature-included')

     @include('templates.basic.panel.partials.cta')

     {{-- Footer banner --}}
     @include('templates.basic.partials.footer-banner')
@endsection
