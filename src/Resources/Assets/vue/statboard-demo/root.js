
import TotalCount from './components/TotalCount';
import LeaderTable from './components/LeaderTable';
import LineChart from './components/LineChart';

Vue.component('stat-totalcount', TotalCount);
Vue.component('stat-leadertable', LeaderTable);
Vue.component('stat-linechart', LineChart);



let app = new Vue({
    el: '#vue-root',
    data: {}
})