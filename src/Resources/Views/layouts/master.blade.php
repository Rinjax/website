@extends('website::layouts.html')

@section('body')

    <div id="container">
        @include('website::components.header')

        @yield('content')

        @include('website::components.footer')
    </div>

@endsection