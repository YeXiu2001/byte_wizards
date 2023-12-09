const mix = require('laravel-mix');

mix.js('resources/js/forlogin.js', 'public/js')
   .postCss('resources/css/style.css', 'public/css', [
      //
   ]);
