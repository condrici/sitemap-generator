/**
 * Import SCSS
 */
import '../sass/app.scss';

/**
 * Load jQuery and Bootstrap (js files)
 */
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}