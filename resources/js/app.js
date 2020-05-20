window.$ = window.jQuery = require('jquery')
window._ = require('lodash');

require('./components/index');
require('owl.carousel');
require('foundation-sites');

try {
    // window.Popper = require('popper.js').default;
    $(function () {
        $(document).foundation();
    });

    $(document).ready(function () {
        $('.gnc-calendar-data').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            autoWidth: true,
            responsiveClass:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    });
} catch (e) {
    console.warn(e);
}

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });

