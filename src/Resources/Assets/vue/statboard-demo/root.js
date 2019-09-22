
import TotalCount from './components/TotalCount';
import LeaderTable from './components/LeaderTable';

Vue.component('stat-totalcount', TotalCount);
Vue.component('stat-leadertable', LeaderTable);


let app = new Vue({
    el: '#vue-root',
    data: {}
})