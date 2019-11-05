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

Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');

// Password Reset
Route::post('forgot-password', 'API\AuthController@forgotPassword');
Route::get('reset-password-confirm/{token}', 'API\AuthController@resetPasswordConfirm');
Route::post('reset-password', 'API\AuthController@resetPassword');

// API Middleware
Route::middleware('auth:api')->group(function () {
    // Auth
    Route::get('profile', 'API\AuthController@profile');
    Route::get('logout', 'API\AuthController@logout');

    // Resources
    Route::resource('categories', 'API\CategoryController');
    Route::resource('items', 'API\ItemController');
    Route::resource('colors', 'API\ColorController');
    Route::resource('icons', 'API\IconController');
    Route::resource('images', 'API\ImageController');
});
