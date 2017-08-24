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

// Compile Sass
mix.sass('resources/assets/sass/theme.scss', 'public/css');

// Combine JS
mix.scripts([
    'node_modules/jquery-slim/dist/jquery.slim.js',
    'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
], 'public/js/default.js');

// Version in Prod
if (mix.inProduction()) {
    mix.version();
}
