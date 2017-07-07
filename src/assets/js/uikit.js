// Import UIkit main scripts.
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// Load the Icon plugin.
UIkit.use(Icons);

// components can be called from the imported UIkit reference.
//UIkit.notification('Hello world.');

// Sticky navbar.
let stickys = UIkit.sticky('#app > .uk-navbar-container', {
    showOnUp: true,
    animation: 'uk-animation-slide-top',
    clsActive: 'uk-navbar-sticky-active'
});
