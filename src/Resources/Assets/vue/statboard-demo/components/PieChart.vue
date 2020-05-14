

<script>
    import {Pie, mixins} from 'vue-chartjs';
    const {reactiveData} = mixins;

    export default {
        name: "PieChart",
        mixins: [Pie, reactiveData],
        data: () => ({
            itemOne: 25,
            itemTwo: 75,
            options: {
                height: '100px',
                width: '100px',
                responsive: true,
                maintainAspectRatio: false,
                aspectRatio: 1,
                animation: {
                    duration: 1500,
                    easing: 'linear'
                }

            }
        }),
        methods: {
            initChartData(){
                return {
                    labels: ['Item One','Item Two'],
                    datasets: [
                        {
                            fill: true,
                            backgroundColor: ['#c325f8','#671df8'],
                            data: [this.itemOne, this.itemTwo],
                            borderColor:	['black', 'black'],
                            borderWidth: [2,2]
                        },
                    ]
                }
            },

            updateData(){
                this.itemOne = Math.floor((Math.random() * 20)) + 1;
                this.itemTwo = Math.floor((Math.random() * 20)) + 1;
            },

            updateChartData(){
                setInterval(function () {
                    this.updateData();
                    this.chartData = this.initChartData();
                }.bind(this), 10000)
            },
        },
        computed:{

        },
        mounted() {
            this.chartData = this.initChartData();
            this.renderChart(this.chartData, this.options);
            this.updateChartData();
        }
    }
</script>

<style scoped>

</style>