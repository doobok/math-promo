require('./bootstrap');

// Vue
window.Vue = require('vue').default;

// store
import store from './store/index';

// валидатор форм
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

// плавная прокрутка
var VueScrollTo = require('vue-scrollto');
Vue.use(VueScrollTo)


// Components
// Vue.component('animate-select', require('./components/AnimateSelector.vue').default);


const app = new Vue({
    el: '#app',
    store
});
