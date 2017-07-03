/**
 * We'll load jQuery for our application, this can be modified.
 */

//window.$ = window.jQuery = require('jquery');
// We already have jQuery and jQuery Migrate scripts included with WordPress.
window.$ = window.jQuery;

/**
 * We'll load UIKit base script and script for dealing with icons.
 */
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// loads the Icon plugin
//UIkit.use(Icons);

// components can be called from the imported UIkit reference
//UIkit.notification('Hello world.');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

if (App.nonce) {
    window.axios.defaults.headers.common['X-WP-Nonce'] = App.nonce;
} else {
    console.error('REST nonce not found.');
}
