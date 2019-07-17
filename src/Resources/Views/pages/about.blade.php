@extends('website::layouts.master')

@section('content')



    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <img class="
                img-fluid
                rounded-circle
                d-xs-block
                d-sm-inline-block
                mx-xs-auto
                float-sm-right
                img-profile"
                src="{!! asset('website/img/profile.jpg') !!}"
                alt="profile picture">

                <div>
                    @include('website::components.about-text')
                </div>
            </div>
        </div>
    </div>


@endsection

