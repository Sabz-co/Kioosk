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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
});

Auth::routes();

// Temporary solution since an in-app solution is not available yet.
// Only works in non-production envs.
if(App::environment('local')){ 
    Route::get('/logout', 'Auth\LoginController@logout');
}

Route::get('/gauth/invoke', 'SocialAuth@redirectToProvider');
Route::get('/gauth/callback', 'SocialAuth@handleProviderCallback');
