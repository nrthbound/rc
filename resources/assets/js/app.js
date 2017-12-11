require('./bootstrap');

import Vue from "vue";
import VeeValidate from 'vee-validate';


Vue.use(VeeValidate);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('rc-builds', require('./components/Builds.vue'));
Vue.component('create-build', require('./components/CreateBuild.vue'));
Vue.component('build-list', require('./components/BuildList.vue'));

Vue.component('bike-build', require('./components/BMXBuild.vue'));
Vue.component('skate-build', require('./components/SkateBuild.vue'));

Vue.component('test-form', require('./components/Global/Test.vue'));

Vue.filter('humanTime', value =>{
  return moment(value).format('MMM Do YYYY');
});

const app = new Vue({
    el: '#app'
});
