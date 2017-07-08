// Import UIkit main scripts.
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

// Load the Icon plugin.
UIkit.use(Icons);

// components can be called from the imported UIkit reference.
//UIkit.notification('Hello world.');

// Sticky navbar.
let stickyNavbar = UIkit.sticky('#app > .uk-navbar-container', {
    showOnUp: true,
    animation: 'uk-animation-slide-top',
    clsActive: 'uk-navbar-sticky-active'
});

// Search modal is shown.
// Should use components 'shown' event, but it is not firing.
// Cannot figure how to deal with it right now.
var $searchInput = $('#search-modal form input[type="search"]');

function focusOnSearchInputField() {
    $searchInput.focus();
}

$(document).on('click', '#show-search-modal', function(e) {
    e.preventDefault();
    setTimeout( focusOnSearchInputField, 100 );
});
