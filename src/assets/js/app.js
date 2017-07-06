/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('posts', require('./components/Posts.vue'));

const app = new Vue({
    el: '#app'
});

/**
 * We'll load UIKit base script and script for dealing with icons.
 * Should load UIkit after Vue.js - https://github.com/uikit/uikit/issues/2519
 */
import UIkit from 'uikit';
//import Icons from 'uikit/dist/js/uikit-icons';

// loads the Icon plugin
//UIkit.use(Icons);

// components can be called from the imported UIkit reference
//UIkit.notification('Hello world.');

let stickys = UIkit.sticky('#app > .uk-navbar-container', {
    showOnUp: true,
    animation: 'uk-animation-slide-top'
});
