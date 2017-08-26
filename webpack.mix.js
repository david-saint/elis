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
   .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/assets/styles/fonts/font.css',
        'resources/assets/styles/animate.css',
        'resources/assets/styles/style.css'
    ],'public/css/all.css')
    .scripts('resources/assets/js/scripts/script.js', 'public/js/script.js');
