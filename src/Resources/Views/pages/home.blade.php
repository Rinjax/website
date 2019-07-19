@extends('website::layouts.master')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 100%; width: 100%">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{!! asset('website/img/profile.jpg') !!}" class="card-img" alt="Profile Picture">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">Steve <span class="text-purple-med">Temple</span></h2>
                                <p class="card-text">Full stack Laravel Developer</p>
                                <div class="d-flex align-items-center" style="font-size: 1.2rem">
                                    <span class="icon-cv icon-mail"></span>
                                    <a href="mailto:{!! config('website.contact.email') !!}"
                                        class="text-purple-med">
                                        {!! config('website.contact.email') !!}
                                    </a>
                                </div>
                                <p class="card-text"><small class="text-muted">if in doubt: sudo rm -rf /</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

