@extends('website::layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img class="img-thumbnail img-fluid rounded-circle float-md-right" src="{!! asset('website/img/profile.jpg') !!}" alt="profile picture">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                @include('website::components.about-me')
            </div>
        </div>
    </div>


@endsection

