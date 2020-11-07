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

mix.postCss('resources/css/main.css', 'public/css', [
    require('tailwindcss'),
])

mix.copy('node_modules/@fortawesome/fontawesome-free/css/all.css', 'public/css/all.css')
mix.copy('node_modules/@fortawesome/fontawesome-free/js/all.js', 'public/js/all.js')
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/less', 'public/less')
