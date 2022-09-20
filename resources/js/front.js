require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';  // importiamo la libreria vue-router
import App from './App.vue'; // importiamo il componente base App.vue e lo assegniamo alal variabile App+

// importiamo tutti i componenti delle pagine
import PageHome from './pages/PageHome.vue';
import Page404 from './pages/Page404.vue';
import PageShow from './pages/PageShow.vue';
import AdvancedSearch from './pages/AdvancedSearch.vue';


const routes = [
    {
        path: '/',
        name: 'home',
        component: PageHome,
    },

    {
        path: '*',
        name: 'page404',
        component: Page404,
    },

    {
     path: '/page/:id',
     name: 'show',
     component: PageShow,
     props: true,
    },

    {
    path: '/search',
    name: 'AdvancedSearch',
    component: AdvancedSearch,
    props: true,
    },
];

const router = new VueRouter({
    routes,
    mode: 'history',
});

Vue.use(VueRouter);

const app = new Vue({
    el: '#root',          // id del componente nel file HMTL dentro il quale operera Vue
    render: h => h(App),  // significato di render: monta il componente App nell'elemento root
    router,
});


