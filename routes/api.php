<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Show author login and signup page
Route::get('/signup', 'AuthorController@index');
Route::get('/login', 'AuthorController@show');

// Create/login author
Route::post('/signup/create', 'AuthorController@store');
Route::post('/login', 'AuthorController@login');

// contents
Route::post('/content/create', 'ContentController@create');
Route::get('/contents', 'ContentController@getContents');
Route::get('/post/{id}', 'ContentController@deletePost');
Route::get('/post/{id}', 'ContentController@showEdit')->name('post');
