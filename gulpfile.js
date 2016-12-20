const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss', 'public/css/general.css')
       .sass('frontend.scss', 'public/css/frontend.css')
       .sass('backend.scss', 'public/css/backend.css')
       .webpack('app.js', 'public/js/general.js')
       .webpack('frontend.js', 'public/js/frontend.js')
       .webpack('backend.js', 'public/js/backend.js');
});
