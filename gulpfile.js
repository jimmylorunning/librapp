var elixir = require('laravel-elixir');

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
    mix.sass('app.scss', 'resources/css');

    mix.styles([
      'libs/bootstrap.min.css',
      'app.css',
    ], null, 'resources/css');

    mix.scripts([
      'libs/jquery-2.1.4.min.js',
      'libs/bootstrap.min.js'
    ], null, 'resources/js');
});
