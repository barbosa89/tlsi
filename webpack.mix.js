const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
    	'public/theme/css/agency.css'
    ], 'public/css/tlsi.css')
    .scripts([
    	'node_modules/jquery.easing/jquery.easing.js',
    	'public/theme/js/jqBootstrapValidation.js',
    	'public/theme/js/contact_me.js',
    	'public/theme/js/agency.js'
    ], 'public/js/tlsi.js')
    .sourceMaps();
