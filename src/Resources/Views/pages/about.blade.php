@extends('website::layouts.master')

@section('content')



    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-5">Steve <span class="text-purple-med">Temple</span></h2>

                <img class="
                img-fluid
                rounded
                d-xs-block
                d-sm-inline-block
                mx-xs-auto
                float-sm-right
                img-profile"
                src="{!! asset('website/img/profile.jpg') !!}"
                alt="profile picture">

                <div>
                    @include('website::components.about.about-text')
                </div>
            </div>
        </div>
    </div>


@endsection

