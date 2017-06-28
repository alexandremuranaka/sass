
var elixir = require('laravel-elixir');


elixir(function(mix){

  mix.sass([
    '../../../node_modules/bootstrap/dist/css/bootstrap.css',
    '../../../node_modules/font-awesome/css/font-awesome.css',
    'bootstrap3-wysihtml5.css',
    'gulp.scss'
    ],'public/css/gulp.css');

  mix.scripts([
    '../../../node_modules/jquery/dist/jquery.js',
    'jquery-migrate-1.4.1.js',
    '../../../node_modules/bootstrap/dist/js/bootstrap.js',
    'jquery.mask.js',
    'bootstrap3-wysihtml5.js',
    'gulp.js',
    ],'public/js/gulp.js');

    mix.copy([
      'node_modules/font-awesome/fonts',
      'node_modules/bootstrap/dist/fonts'
    ],'public/fonts');

});
