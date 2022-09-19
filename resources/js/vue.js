window.Vue = require('vue');
import FindAddress from './components/FindAddress.vue';

const app = new Vue({
    el: '#back',
    render: h => h(FindAddress)
});
