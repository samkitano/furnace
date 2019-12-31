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
   .js('resources/js/base.js', 'public/js')
   .copy('resources/js/vendor/datatables.min.js', 'public/js/dt.js')
   .copy('resources/js/vendor/pdfmake.min.js', 'public/js/pdfmake.js')
   .copy('resources/js/vendor/vfs_fonts.js', 'public/js/vf_fonts.js')
   .copy('resources/js/vendor/popper.min.js', 'public/js/popper.js')
   .copy('resources/js/vendor/bootstrap.min.js', 'public/js/bs.js')
   .copy('resources/css/vendor/datatables.min.css', 'public/css/dt.css')
   .sass('resources/sass/app.scss', 'public/css');
