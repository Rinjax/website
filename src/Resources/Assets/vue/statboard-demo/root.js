
import TotalCount from './components/TotalCount';
import LeaderTable from './components/LeaderTable';
import LineChart from './components/LineChart';
import PieChart from './components/PieChart';

Vue.component('stat-totalcount', TotalCount);
Vue.component('stat-leadertable', LeaderTable);
Vue.component('stat-linechart', LineChart);
Vue.component('stat-piechart', PieChart);



let app = new Vue({
    el: '#vue-root',
    data: {}
})