let mix = require('laravel-mix');


mix
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/theme_dark.scss', 'public/css')
    .sass('resources/assets/sass/theme_light.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js');
    // .js('resources/assets/js/script.js', 'public/js');


// .js ('resources/assets/js/app.js', 'public/js');
// .sass ('resources/assets/sass/app.scss', 'public/css');
// .sass ('resources/assets/sass/theme.scss', 'public/css');

// .js ('resources/assets/js/script.js', 'public/js')
// .sass ('resources/assets/sass/style.scss', 'public/css');
