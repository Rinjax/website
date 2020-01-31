@extends('website::layouts.master')

@section('content')



    <div class="container my-5">
        <div class="row">
            <div class="col">
                <img class="
                d-block
                d-sm-inline-block
                mx-auto
                float-sm-right
                img-profile
                rounded"
                     src="{!! asset('website/img/profile_2.jpg') !!}"
                     alt="profile picture">

                <h2 class="mb-4 mb-sm-3 mb-lg-4 text-center text-sm-left">Steve <span class="text-purple-med">Temple</span></h2>



                <div class="text-center text-sm-left">
                    @include('website::components.about.about-text')
                </div>
            </div>
        </div>
    </div>


@endsection

