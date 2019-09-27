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
            <svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 1600">
                <style>
                    circle {
                        fill: none;
                        stroke-width: 3.5;
                        animation-name: preloader;
                        animation-duration: 3s;
                        animation-iteration-count: infinite;
                        animation-timing-function: ease-in-out;
                        transform-origin: 170px 170px;
                        will-change: transform;
                    }
                    circle:nth-of-type(1) {
                        stroke-dasharray: 137px;
                        animation-delay: 0.15s;
                    }

                    circle:nth-of-type(2) {
                        stroke-dasharray: 125px;
                        animation-delay: 0.3s;
                    }

                    circle:nth-of-type(3) {
                        stroke-dasharray: 112px;
                        animation-delay: 0.45s;
                    }

                    circle:nth-of-type(4) {
                        stroke-dasharray: 75px;
                        animation-delay: 0.7s;
                    }

                    @keyframes preloader {
                        50% {
                            transform: rotate(360deg);
                        }
                    }
                </style>
                <circle cx="170" cy="170" r="40" stroke="#E2007C"/>
                <circle cx="170" cy="170" r="33" stroke="#404041"/>
                <circle cx="170" cy="170" r="27" stroke="#E2007C"/>
                <circle cx="170" cy="170" r="21" stroke="#404041"/>
            </svg>
        </div>
    </div>


@endsection

