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


mix.copyDirectory('resources/assets/backend', 'public/backend');

mix.copyDirectory('resources/assets/frontend', 'public/frontend');

mix.copyDirectory('resources/assets/guestend', 'public/guestend');
// mix.js('resources/assets/guestend/js/app.js', 'public/js')
//    .sass('resources/assets/guestend/sass/app.scss', 'public/css');
