@extends('website::layouts.master')

@section('content')

    <div class="tt tt-success" style="">
        <ul>
            <li>this is a message</li>
        </ul>
    </div>


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Some Spinner Fun</h3>
                <div class="card">
                    <div class="card-body d-flex flex-column flex-md-row justify-content-around align-items-center">
                        <div class="spinner spinner-1"></div>
                        <div class="spinner spinner-2"></div>
                        <div class="spinner spinner-3"></div>
                        <div class="spinner spinner-4"></div>
                        <div class="spinner spinner-5"></div>
                        <div class="dotter dotter-1"><span></span><span></span><span></span></div>
                        <div class="dotter dotter-2"><span></span><span></span><span></span></div>
                        <div class="dotter dotter-3"><span></span><span></span><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="conatiner-fluid bkg-dark" style="padding: 4rem">
        <div id="vue-root">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <stat-totalcount></stat-totalcount>
                        </div>
                        <div class="col">
                            <h1>other tile stats</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h1>Fancy line graph</h1>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <stat-leadertable></stat-leadertable>
                </div>
            </div>
        </div>


    </div>

@endsection

@push('scripts')
    <script src="{!! asset(mix('js/statboard.js', 'website')) !!}"></script>
@endpush
