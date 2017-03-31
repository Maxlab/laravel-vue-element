const {mix} = require('laravel-mix');
var assets_root = 'resources/assets';
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

mix.js(assets_root + '/vue-element/js/app.js', 'public/js')
  .mix.copy('node_modules/theme-default-scss/dist', assets_root + '/vue-element/sass/el', false)
  .mix.copy('node_modules/theme-default-scss/dist/fonts', assets_root + '/vue-element/sass/fonts')
  .mix.sass(assets_root + '/vue-element/sass/app.scss', 'public/css');
