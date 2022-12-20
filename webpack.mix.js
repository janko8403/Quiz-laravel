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

mix.js('resources/frontend/js/app.js', 'public/frontend/js')
    .sass('resources/sass/app.scss', 'public/css');

    // mix.js('resources/frontend/js/app.js', 'public/frontend/js');


// mix.js('resources/frontend/js/app.js', 'public/frontend/js')
//     .js('resources/js/app.js', 'public/js')
//     // .sass('resources/frontend/sass/app.scss', 'public/frontend/css')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sass('resources/backend/sass/app.scss', 'public/backend/css');
