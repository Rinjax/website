@extends('website::layouts.master')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-fluid rounded-circle d-xs-block d-sm-inline-block mx-xs-auto float-sm-right" src="{!! asset('website/img/profile.jpg') !!}" alt="profile picture">
                @include('website::components.about-me')
            </div>
        </div>
    </div>


@endsection

