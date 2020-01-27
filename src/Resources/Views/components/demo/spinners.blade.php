<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Some Spinner Fun</h3>
            <p  class="text-center">Some simple spinners made with pure CSS</p>
            <div class="card">
                <div class="card-body d-flex flex-column flex-md-row justify-content-around align-items-center">
                    <div class="spinner spinner-1"></div>
                    <div class="spinner spinner-2"></div>
                    <div class="spinner spinner-3"></div>
                    <div class="spinner spinner-4"></div>
                    <div class="dotter dotter-1"><span></span><span></span><span></span></div>
                    <div class="dotter dotter-2"><span></span><span></span><span></span></div>
                    <div class="dotter dotter-3"><span></span><span></span><span></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Some Fancier Spinners</h3>
            <p class="text-center">These spinners are made with SVG and CSS together</p>
            <div class="card">
                <div class="card-body d-flex flex-column flex-md-row justify-content-around align-items-center">
                    <svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="120 120 100 100" height="100" width="100">
                        <style>
                            circle {
                                fill: none;
                                stroke-width: 3.5;
                                animation-name: see-saw;
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

                            @keyframes see-saw {
                                50% {
                                    transform: rotate(360deg);
                                }
                            }
                        </style>
                        <circle cx="170" cy="170" r="40" stroke="#E14E13"/>
                        <circle cx="170" cy="170" r="33" stroke="#404041"/>
                        <circle cx="170" cy="170" r="27" stroke="#E14E13"/>
                        <circle cx="170" cy="170" r="21" stroke="#404041"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>