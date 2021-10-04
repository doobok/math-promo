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
Vue.component('smpl-button', require('./components/SimpleButton.vue').default);
Vue.component('lead-form', require('./components/LeadForm.vue').default);
Vue.component('smpl-form', require('./components/SimpleForm.vue').default);


const app = new Vue({
    el: '#app',
    store
});
