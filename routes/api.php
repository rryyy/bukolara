<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/signup', 'UserController@Register');
Route::post('/signin', 'UserController@Login');
Route::post('/profilephoto', 'UserController@ProfilePhoto');
Route::post('/post', 'PostController@index');
Route::post('/posts', 'PostController@AllPosts');
Route::post('/like', 'LikeController@Like');
Route::post('/addcomment', 'CommentController@index');
Route::post('/viewcomment', 'CommentController@view');
Route::post('/userpost', 'PostController@UserPost');
Route::post('/analytics', 'PostController@Analytics');
Route::post('/boostpost', 'BoostController@BoostPost');
Route::post('/similar', 'PostController@SimilarPost');
Route::post('/donate', 'DonateController@Donate');
Route::get('/test', 'PostController@test');
