@extends('website::layouts.html')

@section('body')

    <div id="" class="d-flex flex-column min-vh-100">
        @include('website::components.common.header')

        <div class="flex-grow-1 d-flex align-items-center">
            @yield('content')
        </div>

        @include('website::components.common.footer')
    </div>

@endsection