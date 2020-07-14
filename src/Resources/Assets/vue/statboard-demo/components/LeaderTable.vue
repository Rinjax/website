<template>
    <div class="card card-stats">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th class="text-purple-light">Name</th>
                        <th class="text-center text-purple-light">Item One</th>
                        <th class="text-center text-purple-light">Item Two</th>
                        <th class="text-center text-purple-light">Total</th>
                    </tr>
                    </thead>
                    <transition-group name="flip-list" tag="tbody">
                        <tr v-for="user in usersOrderedByTotal" :key="user.id">
                            <td class=""><img class="rounded-circle" :src="'/website/img/demo/users/' + user.id + '.jpg'" alt=""></td>
                            <td>{{user.name}}</td>
                            <td class="text-center">{{user.stat.item1}}</td>
                            <td class="text-center">{{user.stat.item2}}</td>
                            <td class="text-center"><strong>{{user.stat.total}}</strong></td>
                        </tr>
                    </transition-group>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LeaderTable",
        data(){
            return {
                tableData: [],
                sortBy: 'total'
            }
        },

        methods:{
            getTableData(){
                axios.get('/demo/stat/table-data').then(response => {
                    this.tableData = response.data;
                }).catch(error => {
                    console.log(error);
                });
            },

            pollData(){
                let randTimeout = (Math.floor((Math.random() * 10)) + 5) * 1000;

                setTimeout(function () {
                    this.getTableData();
                    this.pollData();
                }.bind(this), randTimeout);
            }
        },

        computed: {
            usersOrderedByTotal(){

                return this.tableData.sort((a, b) => {
                    if(a.stat.total < b.stat.total){
                        return 1;
                    }
                    return -1;
                })
            }
        },

        mounted(){
            this.getTableData();
            this.pollData();
        }
    }
</script>

<style scoped>
    table{
        color: #fff;
    }

    table > tbody > tr > td {
        vertical-align: middle;
    }

    .flip-list-move{
        transition: transform 1s;
    }
</style>