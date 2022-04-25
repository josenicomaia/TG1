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
    .sass('resources/sass/login.scss', 'public/css');

mix.js('resources/js/chart.js', 'public/js')
    .sass('resources/sass/chart.scss', 'public/css');

mix.copyDirectory('node_modules/bootstrap-icons/icons', 'public/icons');

mix.browserSync({
    open: true,
    proxy: 'localhost:8000'
});
