
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
import Multiselect from 'vue-multiselect';
Vue.component('multiselect',Multiselect);
Vue.component('loading', require('./components/loading.vue'));
Vue.component('s-select', require('./components/select.vue'));
Vue.component('m-select', require('./components/m-select.vue'));
Vue.component('v-select', require('./components/v-select.vue'));
//Vue.component('v-select-countries', require('./components/test.vue'));
//Vue.component('v-select', VueSelect.VueSelect);
