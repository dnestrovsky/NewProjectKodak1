const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("autoprefixer"),
    ])
    .version();

mix.postCss("resources/css/admin.css", "public/css", [
    require("postcss-import"),
    require("autoprefixer"),
]).version();

mix.postCss("resources/css/test.css", "public/css", [
    require("postcss-import"),
    require("autoprefixer"),
]).version();

mix.js("resources/js/admin.js", "public/js").version();

mix.js("resources/js/gallery.js", "public/js").version();
