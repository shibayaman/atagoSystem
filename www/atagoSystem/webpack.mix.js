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

mix.react('resources/js/accountapp.js', 'public/js')
   .react('resources/js/purchasehistory.js', 'public/js')
   .react('resources/js/cart.js', 'public/js')
   .react('resources/js/itemDetail.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/purchasehistory.scss', 'public/css')
   .sass('resources/sass/cart.scss', 'public/css')
   .sass('resources/sass/itemDetail.scss', 'public/css');
