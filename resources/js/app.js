// const Mix = require('laravel-mix/src/Mix');

require('./bootstrap');

require('./alpinejs');

require('./animate-btn');

require('./admin-tabel');

mix.copyDirectory('resources/images/', 'public/images/logo', false);

