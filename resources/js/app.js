require('./bootstrap');

window.Vue = require('vue');
Vue.prototype.$userId = document.querySelector("meta[name='user-id']").getAttribute('content')

Vue.component('type-component', require('./components/propertyTypeComponent.vue').default);
Vue.component('status-component', require('./components/PropertyStatusComponent.vue').default);

const app = new Vue({
    el: '#app'
});
