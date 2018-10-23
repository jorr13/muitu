// import external dependencies
import 'jquery';
import 'bulma-carousel/carousel.min';


// Import IE polyfill for Vue
import "babel-polyfill";




// Require Vue

import Vue from 'vue';
window.axios = require('axios');

Vue.component('listar-producto', require('./vue/listar-producto.vue'));


// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
