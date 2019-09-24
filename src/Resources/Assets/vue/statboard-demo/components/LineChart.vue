

<script>
    import {Line, mixins} from 'vue-chartjs';
    const {reactiveData} = mixins;

    export default {
        name: "LineChart",

        mixins: [Line, reactiveData],
        data: () => ({
            options: {
                responsive: true,
                maintainAspectRatio: false,
                animation: {
                    duration: 3000,
                    easing: 'linear'
                }

            }
        }),
        methods: {

            initChartData(){
              return {
                  labels: this.updateLabels(),
                  datasets: [
                      {
                          label: 'Item One',
                          backgroundColor: '#c325f8',
                          fill: false,
                          showLine: true,
                          borderColor: '#c325f8',
                          borderWdith: 2,
                          data: this.updateData(0)
                      },
                      {
                          label: 'Item Two',
                          backgroundColor: '#671df8',
                          fill: false,
                          showLine: true,
                          borderColor: '#671df8',
                          borderWdith: 2,
                          data: this.updateData(1)
                      }
                  ]
              }
            },

            updateChartData(){
                setInterval(function () {
                    this.chartData = this.initChartData();
                }.bind(this), 10000)
            },

            updateLabels(){

                const months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

                if(this.chartData != null){
                    let labels = this.chartData.labels.slice(1,6);

                    console.log('here');

                    console.log(labels);


                    let num = months.indexOf(labels[4]);

                    console.log(num);

                    if(num == 11){
                        num = 0;
                    } else {
                        num = num + 1;
                    }

                    labels.push(months[num]);


                    return labels;
                }else{
                    return months.slice(0,6);
                }



            },

            updateData(dataIndex){

                if (this.chartData != null){
                    let data = this.chartData.datasets[dataIndex].data.slice(1,6);

                    data.push(Math.floor((Math.random() * 20)) + 1);

                    console.log(data);
                    return data;
                } else {
                    if(dataIndex == 0){
                        return [12,14,29,38,22,30];
                    } else {
                        return [9,14,35,46,15,17];
                    }
                }

            }
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