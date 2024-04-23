@extends('templates.basic.layouts.main')

@section('main')

    @include('templates.basic.partials.header')


    @yield('content')

    @include('templates.basic.partials.footer2')

@endsection
