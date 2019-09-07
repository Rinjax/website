<template>
    <div class="card card-stats">
        <div class="card-body">
            <div class="row">
                <div class="col mb-1">
                    <h3 class="text-center">Total</h3>
                    <h1 id="total-count" class="text-center bounce">{{itemTotal}}</h1>
                    <div class="col-separator-hb w-100"></div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col col-separator-vr">
                    <h5 class="text-center">Item 1:</h5>
                    <h5 class="text-center">{{itemOne}}</h5>
                </div>
                <div class="col">
                    <h5 class="text-center">Item 2:</h5>
                    <h5 class="text-center">{{itemTwo}}</h5>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "TotalCount",
        data() {
            return {
                itemOne: 0,
                itemTwo: 0
            }
        },
        methods: {
            setItemOne(num) {

                const total = parseInt(this.itemOne);

                if ((total + num) > 99) {
                    this.itemOne = this.leadZero(num);
                    $('#total-count').toggleClass("bounce bounce-again");
                }else{
                    this.itemOne = this.leadZero((total + num));
                    $('#total-count').toggleClass("bounce bounce-again");
                }
            },

            setItemTwo(num) {

                const total = parseInt(this.itemTwo);

                if ((total + num) > 99) {
                    this.itemTwo = this.leadZero(num);
                    $('#total-count').toggleClass("bounce bounce-again");
                }else{
                    this.itemTwo = this.leadZero((total + num));
                    $('#total-count').toggleClass("bounce bounce-again");
                }
            },

            updateItemOne() {

                let randTimeout = (Math.floor((Math.random() * 10)) + 5) * 1000;
                let randTotalIncrease = Math.floor((Math.random() * 5)) + 1;

                setTimeout(function () {
                    this.setItemOne(randTotalIncrease);
                    this.updateItemOne();
                }.bind(this), randTimeout);

            },

            updateItemTwo() {

                let randTimeout = (Math.floor((Math.random() * 10)) + 5) * 1000;
                let randTotalIncrease = Math.floor((Math.random() * 5)) + 1;

                setTimeout(function () {
                    this.setItemTwo(randTotalIncrease);
                    this.updateItemTwo();
                }.bind(this), randTimeout);

            },

            leadZero(num) {
                return num > 9 ? "" + num: "0" + num;
            }
        },
        computed:{
            itemTotal() {
                return parseInt(this.itemOne) + parseInt(this.itemTwo);
            }
        },
        mounted() {
                this.updateItemOne();
                this.updateItemTwo();
        }
    }
</script>

<style scoped>
    .bounce, .bounce-again {
        -webkit-animation-name: bounce;
        animation-name: bounce;
        -webkit-transform-origin: center bottom;
        -ms-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    @-webkit-keyframes bounce {
        0%, 20%, 53%, 80%, 100% {
            -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }
        40%, 43% {
            -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }
        70% {
            -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }
        90% {
            -webkit-transform: translate3d(0,-4px,0);
            transform: translate3d(0,-4px,0);
        }
    }

    @keyframes bounce {
        0%, 20%, 53%, 80%, 100% {
            -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            -webkit-transform: translate3d(0,0,0);
            transform: translate3d(0,0,0);
        }
        40%, 43% {
            -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            -webkit-transform: translate3d(0, -30px, 0);
            transform: translate3d(0, -30px, 0);
        }
        70% {
            -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            -webkit-transform: translate3d(0, -15px, 0);
            transform: translate3d(0, -15px, 0);
        }
        90% { -webkit-transform: translate3d(0,-4px,0); transform: translate3d(0,-4px,0);
        }
    }

    .col-separator-hb {
        border-bottom: 1px #353535 solid;
    }
    .col-separator-vr {
        border-right: 1px #353535 solid;
    }
</style>