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
    .webpackConfig(require('./webpack.config'));


// Fonts
    // ->fonts in .css files @font face
    // mix.copy(from, to); in js/app.js

// Images
    // mix.copy(from, to); in js/app.js
    // copy static images for blade functionaliy to image maps
    // mix.copyDirectory{'../images/logo', 'public/images'};
    // copy custom images map

if (mix.inProduction()) {
    mix.version();
}
