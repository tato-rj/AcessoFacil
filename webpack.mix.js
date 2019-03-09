const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css')   
	.scripts([
   	'node_modules/swiper/dist/js/swiper.min.js',
   	'public/js/app.js',
   	], 'public/js/app.js')
   	.copyDirectory('resources/sass/vendor', 'public/css')
   	.copyDirectory('resources/images/', 'public/images')
   	.version();
