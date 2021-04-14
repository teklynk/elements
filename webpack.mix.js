let mix = require('laravel-mix');

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


mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/tmi.js', 'public/js')
    .js('resources/assets/js/chat.js', 'public/js')
    .js('resources/assets/js/chatpreview.js', 'public/js')
    .js('resources/assets/js/overlay.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/chat.scss', 'public/css')
    .sass('resources/assets/sass/overlay.scss', 'public/css')
    .sass('resources/assets/sass/templates/template1.scss', 'public/css/templates')
    .sass('resources/assets/sass/templates/template2.scss', 'public/css/templates')
    .sass('resources/assets/sass/templates/template3.scss', 'public/css/templates')
    .sass('resources/assets/sass/templates/template4.scss', 'public/css/templates')
    .copyDirectory('resources/assets/images/', 'public/images');
