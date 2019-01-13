window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('bootstrap/js/src/util');
} catch (e) {}