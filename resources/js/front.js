require('./bootstrap');

import Vue from 'vue';
import App from './App.vue'; // importiamo il componente base App.vue e lo assegniamo alal variabile App

const app = new Vue({
    el: '#root',          // id del componente nel file HMTL dentro il quale operera Vue
    render: h => h(App),  // significato di render: monta il componente App nell'elemento root
});
