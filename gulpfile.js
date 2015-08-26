var elixir = require('laravel-elixir');

var path = {
    'bootstrapsass': './bower_components/bootstrap-sass/assets/',
    'bootstrapjs': '../../../bower_components/bootstrap-sass/assets/',
    'jquery': '../../../bower_components/jquery/'
};

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


elixir(function (mix) {
    mix.sass(
        ['app.scss'],
        'public/css/app.css',
        {includePaths: [path.bootstrapsass + 'stylesheets/']})
        .scripts([
            path.jquery + 'dist/jquery.js',
            path.bootstrapjs + 'javascripts/bootstrap.js',
            'jquery.easing.min.js',
            'jquery.fittext.js',
            'wow.min.js',
            //'cbpAnimatedHeader.js',
            'owl.carousel.js',
            'app.js'
        ],
        'public/js/app.js')
        .version([
            'public/css/app.css',
            'public/js/app.js'
        ]);
});
