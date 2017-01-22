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

elixir(function(mix) {
    mix.sass('app.scss')
       .webpack('app.js')
       .scripts(['myModal.js','Modal1.js','Modal3.js','playclip.js','playclip1.js','playclip2.js','playclip3.js','playclip4.js','playclip5.js','playclip6.js','playclip7.js'])
       .styles(['ThunderLab.css']);
});