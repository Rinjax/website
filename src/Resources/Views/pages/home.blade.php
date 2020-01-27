@extends('website::layouts.master')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mb-3" style="max-width: 100%; width: 80%">
                    <div class="row no-gutters">
                        <div class="col-md-4" style="height: 250px; background-color: #aaa">
                            <div class="img-turn">
                                <div class="img-front">
                                </div>
                                <div class="img-back">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center h-100">
                                <h2 class="card-title">Steve <span class="text-purple-med">Temple</span></h2>
                                <p class="card-text">Full Stack Laravel Developer</p>
                                <div class="d-flex align-items-center mt-4" style="font-size: 1.2rem">
                                    <span class="icon-cv icon-mail" style="margin-top: 7px"></span>
                                    <a href="mailto:{!! config('website.contact.email') !!}"
                                        class="text-purple-med">
                                        {!! config('website.contact.email') !!}
                                    </a>
                                </div>
                                <p class="card-text" style="position: absolute; bottom: 10px; right: 20px; margin-top: 3rem"><small class="text-muted">if in doubt: sudo rm -rf /</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

