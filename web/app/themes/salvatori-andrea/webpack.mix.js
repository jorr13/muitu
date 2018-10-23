let mix = require('laravel-mix');
require('laravel-mix-purgecss');
require('purgecss-with-wordpress');

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

mix.setPublicPath('dist')
   .js('resources/assets/js/app.js', 'js/')
   .extract([
     'babel-polyfill',
     'vue'
   ])
   .sass('resources/assets/styles/app.scss', 'css/')
   .options({
     processCssUrls: false,
     postCss: [ require('tailwindcss')('./tailwind.js') ],
   })


if (mix.inProduction()) {
  mix.version()
}

// Browser Sync

const app       = 'app';
const resources = 'resources';
const assets    = `${resources}/assets`;
const dist      = 'dist';

mix.browserSync({
  proxy: 'http://muitu.test',
  port: 3000,

  files: [
    `${app}/**/*.php`,
    `${resources}/**/*.php`,
    `${dist}/**/*.css`,
    `${dist}/**/*.js`
  ]
});