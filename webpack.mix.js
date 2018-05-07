let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   // .less('resources/assets/less/mixins.less', 'public/css')
   // .less('resources/assets/less/sb-admin-2.less', 'public/css')
   // .less('resources/assets/less/variables.less', 'public/css')
   .styles([
   		'resources/assets/css/base.css',
   		'resources/assets/css/vendor.css',
   		'resources/assets/css/main.css',
   		// 'resources/assets/css/font-awesome.min.css'
	], 'public/css/all.css')
  	//admin dashboard css
   .styles([
   		'resources/assets/css/bootstrap.min.css',
   		'resources/assets/css/metisMenu.min.css',
   		'resources/assets/css/sb-admin-2.css',
   		'resources/assets/css/morris.css',
   		'resources/assets/css/font-awesome.min.css'
	], 'public/css/alladminindex.css')
  	//admin tables css
   .styles([
   		'resources/assets/css/bootstrap.min.css',
   		'resources/assets/css/metisMenu.min.css',
   		'resources/assets/css/sb-admin-2.css',
   		'resources/assets/css/dataTables.bootstrap.css',
   		'resources/assets/css/dataTables.responsive.css',
	], 'public/css/tables.css')
   //commuter css
   .styles([
         // 'resources/assets/css/bootstrap.min.css',
         // 'resources/assets/css/bootstrap.css',
         'resources/assets/css/commuter/vendor.css',
         'resources/assets/css/commuter/base.css'
   ], 'public/css/commuter.css')
   //js files
   .scripts([
   		'resources/assets/js/modernizr.js',
   		'resources/assets/js/pace.min.js',
   		'resources/assets/js/jquery-3.2.1.min.js',
   		'resources/assets/js/plugins.js',
   		'resources/assets/js/main.js',
   	], 'public/js/all.js')
   //admin dashboard js
    .scripts([
      	'resources/assets/js/jquery.min.js',
      	'resources/assets/js/bootstrap.min.js',
   		'resources/assets/js/metisMenu.min.js',
   		'resources/assets/js/sb-admin-2.js',
   		'resources/assets/js/raphael.min.js',
   		'resources/assets/js/morris.min.js',
   		'resources/assets/js/morris-data.js',
   	], 'public/js/alladminindex.js')
   	//js for tables
   	.scripts([
      	'resources/assets/js/jquery.min.js',
      	'resources/assets/js/bootstrap.min.js',
   		'resources/assets/js/metisMenu.min.js',
   		'resources/assets/js/jquery.dataTables.min.js',
   		'resources/assets/js/jquery.dataTables.min.js',
   		'resources/assets/js/dataTables.bootstrap.min.js',
   		'resources/assets/js/dataTables.responsive.js',
   		'resources/assets/js/sb-admin-2.js'
   	], 'public/js/tables.js');
