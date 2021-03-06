const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')

    .postCss('resources/css/app.css', 'public/css', [])
    .postCss('resources/css/bootstrap.min.css', 'public/css', [])
    .postCss('resources/css/font-awesome.min.css', 'public/css', [])
    .postCss('resources/css/animate.min.css', 'public/css', [])
    .postCss('resources/css/simple-line-icons.css', 'public/css', [])
    .postCss('resources/css/aero.css', 'public/css', [])
    .postCss('resources/css/datatables.bootstrap.min.css', 'public/css', [])
    .copyDirectory('resources/img', 'public/images')
    .copyDirectory('resources/fonts', 'public/fonts')
;
