require('./bootstrap');

window.Vue = require('vue');



Vue.component('type-component', require('./components/propertyTypeComponent.vue').default);

const app = new Vue({
    el: '#app'
});
