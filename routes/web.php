<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/test', 'TestController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testpositive', 'PostController@testpositive');
Route::get('/testnegative', 'PostController@testnegative');
Route::get('/testneutral', 'PostController@testneutral');
Route::get('/testboosted', 'PostController@testboosted');
Route::get('/testallpost', 'PostController@testallpost');
Route::get('/testallusers', 'UserController@testalluser');
Route::get('/counts', 'PostController@Count');
Route::get('/admin', function () {
    return view('adminindex');
});
Route::get('/tables', function () {
    return view('table');
});
Route::get('/posts', function () {
    return view('post');
});
Route::get('/positive', function () {
    return view('positive');
});
Route::get('/negative', function () {
    return view('negative');
});
Route::get('/neutral', function () {
    return view('neutral');
});
Route::get('/boost', function () {
    return view('boosted');
});
Route::get('/profile', function () {
    return view('profile');
});
