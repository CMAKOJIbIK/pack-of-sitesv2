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

mix.sass('resources/css/breakout.scss', 'public/css/breakout.css');

mix.sass('resources/css/work.scss', 'public/css/work.css');

mix.sass('resources/css/settings.scss', 'public/css/settings.css');

mix.sass('resources/css/theme_green.scss', 'public/css/theme_green.css');

mix.sass('resources/css/menu_theme_green.scss', 'public/css/menu_theme_green.css');

mix.sass('resources/css/menu_theme_red.scss', 'public/css/theme_red.css');

mix.sass('resources/css/about_theme_green.scss', 'public/css/about_theme_green.css');

mix.sass('resources/css/skills_theme_green.scss', 'public/css/skills_theme_green.css');

mix.sass('resources/css/work_theme_green.scss', 'public/css/work_theme_green.css');

mix.sass('resources/css/contact_theme_green.scss', 'public/css/contact_theme_green.css');

mix.sass('resources/css/theme_red.scss', 'public/css/theme_red.css');

mix.sass('resources/css/about_theme_red.scss', 'public/css/about_theme_red.css');

mix.sass('resources/css/skills_theme_red.scss', 'public/css/skills_theme_red.css');

mix.sass('resources/css/work_theme_red.scss', 'public/css/work_theme_red.css');
mix.sass('resources/css/contact_theme_red.scss', 'public/css/contact_theme_red.css');

