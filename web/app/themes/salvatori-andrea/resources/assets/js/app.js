// Import IE polyfill for Vue
import "babel-polyfill";



// Require utils js


// Require Vue
window.axios = require('axios');
window.Vue = require('vue');

require('./globals')

Vue.component('posts-loop', require('./components/posts-loop.vue'));
Vue.component('pages-loop', require('./components/pages-loop.vue'));
Vue.component('list-product', require('./components/list-product.vue'));

const app = new Vue({
    el: '#app'
});

require('./utils')
require('./common')