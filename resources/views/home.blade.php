@extends('layouts.master')

@section('content')
    @include('layouts.partials.header')

    @include('home.blog')

    @include('home.projects')
    @include('home.zoom')

    {{--    @yield('content')--}}

    @include('home.about')

    @include('home.contact')

    @include('layouts.partials.footer')
@endsection