@extends('website::layouts.master')

@section('content')

    <div class="w-100">
        <div class="tt tt-success" style="">
            <ul>
                <li>this is a message</li>
            </ul>
        </div>


        @include('website::components.demo.spinners')

        @include('website::components.demo.stat-board')
    </div>

@endsection


