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
                                stroke-width: 1.5;
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

                    <svg class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 340" height="100" width="100">
                        <style>
                            path {
                                fill: none;
                                stroke-width: 4.5;
                                animation-duration: 2s;
                                animation-iteration-count: infinite;
                                animation-timing-function: linear;

                            }

                            path:nth-of-type(1) {
                                stroke-dasharray: 550px;
                                stroke-dashoffset: 600;
                                animation-name: triangle1;
                                animation-delay: 0.15s;
                            }

                            path:nth-of-type(2) {
                                stroke-dasharray: 500px;
                                animation-name: triangle2;
                                animation-delay: 0.3s;
                            }

                            path:nth-of-type(3) {
                                stroke-dasharray: 450px;
                                stroke-dashoffset: 600;
                                animation-name: triangle3;
                                animation-delay: 0.45s;
                            }

                            path:nth-of-type(4) {
                                stroke-dasharray: 300px;
                                animation-name: triangle4;
                                animation-delay: 0.60s;
                            }

                            @keyframes triangle1 {
                                to {
                                    stroke-dashoffset: -500;
                                }
                            }

                            @keyframes triangle2 {
                                to {
                                    stroke-dashoffset: 999;
                                }
                            }

                            @keyframes triangle3 {
                                to {
                                    stroke-dashoffset: -300;
                                }
                            }

                            @keyframes triangle4 {
                                to {
                                    stroke-dashoffset: 600;
                                }
                            }



                        </style>
                        <path d="M170,5 L5,335 L335,335 Z" stroke="#E14E13"/>
                        <path d="M170,40 L35,315 L300,315 Z" stroke="#404041"/>
                        <path d="M170,75 L65,295 L270,295 Z" stroke="#E14E13"/>
                        <path d="M170,110 L95,275 L240,275 Z" stroke="#404041"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>