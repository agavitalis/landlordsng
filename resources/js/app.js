require('./bootstrap');

window.Vue = require('vue');
Vue.component('type-component', require('./components/propertyTypeComponent.vue').default);
Vue.component('status-component', require('./components/PropertyStatusComponent.vue').default);

const app = new Vue({
    el: '#app'
});
