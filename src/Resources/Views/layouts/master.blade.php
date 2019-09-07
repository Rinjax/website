@extends('website::layouts.html')

@section('body')

    <div id="container">
        @include('website::components.common.header')

        @yield('content')

        @include('website::components.common.footer')
    </div>

@endsection