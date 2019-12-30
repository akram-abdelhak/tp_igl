import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
window.axios = axios;
window.token= localStorage.getItem('token');

axios.defaults.baseURL='http://127.0.0.1:8000/api';
axios.defaults.headers.common['Authorization'] = "Bearer " + window.token;
axios.defaults.headers.post['Content-Type'] = 'application/json';


Vue.use(VueRouter);

let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});
