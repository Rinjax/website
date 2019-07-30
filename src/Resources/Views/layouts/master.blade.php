@extends('website::layouts.html')

@section('body')

    <div class="tt tt-success" style="">
        <ul>
            <li>this is a message</li>
        </ul>
    </div>

    <div id="container">
        @include('website::components.header')

        @yield('content')

        @include('website::components.footer')
    </div>

@endsection