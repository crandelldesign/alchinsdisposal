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
    'resources/assets/vendor/js/jquery-3.1.0.min.js',
    'resources/assets/vendor/js/bootstrap/bootstrap.js'
], 'public/js/default.js');

// Version in Prod
if (mix.inProduction()) {
    mix.version();
}
