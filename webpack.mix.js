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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.sass('resources/css/app2.scss', 'public/css/style.css');
mix.sass('resources/css/menu.scss', 'public/css/menu.css');
mix.sass('resources/css/skills.scss', 'public/css/skills.css');
mix.sass('resources/css/cloud.scss', 'public/css/cloud.css');
mix.sass('resources/css/about.scss', 'public/css/about.css');
mix.sass('resources/css/cursor_anim.scss', 'public/css/cursor_anim.css');
mix.sass('resources/css/contact.scss', 'public/css/contact.css');

