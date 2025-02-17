const mix = require('laravel-mix');
const path = require('path');

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
mix.alias({
    '@': path.join(__dirname, 'resources/js'),
});

mix
    .js('resources/js/App.js', 'public/js/App.js')
    .css('resources/js/assets/App.css', 'public/css/App.css')
    .vue()
    .version()
    .override((config) => {
        delete config.watchOptions;
    })
    .disableNotifications();
