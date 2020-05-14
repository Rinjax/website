<div class="conatiner-fluid bkg-dark" style="padding: 4rem; color: #fff">
    <h2 class="text-center mb-5">Demo Statboard Using VueJs</h2>
    <div id="vue-root">
        <div class="row mt-5">
            <div class="col-md-12 col-lg-6">
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6">
                        <stat-totalcount></stat-totalcount>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <stat-piechart  :height="175"></stat-piechart>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="card card-stats">
                            <div class="card-body">
                                <stat-linechart></stat-linechart>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <stat-leadertable></stat-leadertable>
            </div>
        </div>
    </div>


</div>

@push('scripts')
    <script src="{!! asset(mix('js/statboard.js', 'website')) !!}"></script>
@endpush