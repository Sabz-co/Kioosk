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

Route::get('/home', 'PagesController@home');

Route::get('/publisher', function () {
    return view('publisher.show');
});

Route::get('/author', function () {
    return view('author.show');
});

Route::get('/book/preview', function () {
    return view('book.show');
});


Route::get('/review', function () {
    return view('review.show');
});

Route::get('/profiles/{user}', 'ProfilesController@show');
Route::get('/test', 'PagesController@test');


// POST requests

Route::post('/reviews/{review}/favorites', 'FavoritesController@store');




// Resources 

Route::resource('/book', 'BookController');

Route::resource('review', 'ReviewController');

Route::resource('comment', 'CommentController');

// Other Pages

Route::get('/terms', 'PagesController@terms');

Route::get('/about-us', 'PagesController@about');

Route::get('/contact-us', 'PagesController@contact');


Route::get('/team', 'PagesController@team');

// Authentication
Auth::routes();

Route::get('/gauth/invoke', 'SocialAuth@redirectToProvider');
Route::get('/gauth/callback', 'SocialAuth@handleProviderCallback');



// Scripts

Route::get('/crawler', 'ScriptController@crawler');