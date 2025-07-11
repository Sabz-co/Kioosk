<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\GiveawayController;
use App\Http\Controllers\AutoCompleteController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ShelfController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SocialAuth;
use App\Http\Controllers\ScriptController;
use Illuminate\Support\Facades\Route;

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
    $books = \App\Book::take(6)->get();
    return view('welcome', compact('books'));
});

// Search authors
Route::get('author/search/{query}', [AutoCompleteController::class, 'authors']);

Route::get('/home', [PagesController::class, 'home'])->name('homepage');
Route::get('/test', [PagesController::class, 'test']);
Route::get('/genres', [PagesController::class, 'genres']);

// Giveaways
Route::resource('/giveaways', GiveawayController::class);
Route::post('/giveaways/{id}/participate', [GiveawayController::class, 'manageParticipations'])->middleware('auth');
Route::delete('/giveaways/{id}/participate', [GiveawayController::class, 'destroyParticipations'])->middleware('auth');

// Genre
Route::resource('/genre', GenreController::class);

// Publisher
Route::get('/publisher', function () {
    return view('publisher.show');
});

// Author
Route::get('/author', function () {
    return view('author.show');
});

// Book Preview
Route::get('/book/preview', function () {
    return view('book.show');
});

// Review
Route::get('/review', function () {
    return view('review.show');
})->name('review');

// Search
Route::get('/search', [PagesController::class, 'search'])->name('search');

// Profiles
Route::get('/profiles/{user}', [ProfilesController::class, 'show']);
Route::get('/profiles/{user}/my-books', [ProfilesController::class, 'showMyBooks'])->name('my-books');

// Notifications
Route::get('/profiles/{user}/notifications', [NotificationController::class, 'index']);
Route::delete('/profiles/{user}/notifications/{notification}', [NotificationController::class, 'destroy']);

// Subscriptions
Route::post('/profiles/{user}/subscribe', [SubscriptionController::class, 'store'])->middleware('auth');
Route::delete('/profiles/{user}/subscribe', [SubscriptionController::class, 'destroy'])->middleware('auth');

// POST Requests
Route::post('/activity/{activity}/like', [FavoritesController::class, 'storeActivity']);
Route::post('/review/{review}/like', [FavoritesController::class, 'storeReview']);
Route::post('/comment/{comment}/like', [FavoritesController::class, 'storeComment']);

// Resources
Route::resource('/book', BookController::class);
Route::resource('/author', AuthorController::class);
Route::resource('review', ReviewController::class, ['except' => 'create']);
Route::get('review/create/{book}', [ReviewController::class, 'create'])->name('review.create');
Route::resource('comment', CommentController::class);
Route::resource('shelf', ShelfController::class);

// Other Pages
Route::get('/terms', [PagesController::class, 'terms']);
Route::get('/about-us', [PagesController::class, 'about']);
Route::get('/contact-us', [PagesController::class, 'contact']);
Route::get('/team', [PagesController::class, 'team']);

// Authentication
Auth::routes();

// Social Auth
Route::get('/gauth/invoke', [SocialAuth::class, 'redirectToProvider']);
Route::get('/gauth/callback', [SocialAuth::class, 'handleProviderCallback']);

// Scripts
Route::get('/crawler', [ScriptController::class, 'crawler']);

// Ajax Calls
Route::post('book/{book}/rate', [BookController::class, 'storeRating']);