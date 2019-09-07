<template>
    <div>
        <table>
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Item One</th>
                <th>Item Two</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in usersOrderedByTotal">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
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

        computed: {
            usersOrderedByTotal(){

                return this.tableData.sort((a, b) => {
                    if(a[this.sortBy] < b[this.sortBy]){
                        return 1;
                    }
                    return -1;
                })
            }
        }
    }
</script>

<style scoped>

</style>