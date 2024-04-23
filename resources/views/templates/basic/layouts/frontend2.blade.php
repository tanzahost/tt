@extends('templates.basic.layouts.app')

@section('app')

    @include('templates.basic.partials.header2')


    @yield('content')

    @include('templates.basic.partials.footer')

@endsection
