<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditemController;
use App\Http\Controllers\HomepageController;
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
//filemanager
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

// backend starts
// Add Items
Route::get('/add_item',[AdditemController::class, 'add_item_form']);
Route::post('/postaddbook',[AdditemController::class, 'postaddbook']);
// add category
Route::get('/add_category',[AdditemController::class, 'add_category_form']);
Route::post('/postaddcategory',[AdditemController::class, 'postaddcategory']);
// backend ends

// frontend
Route::get('/homepage',[HomepageController::class, 'display']);
Route::post('/search', [HomepageController::class, 'search'])->name('search');
Route::post('/playcard', [HomepageController::Class, 'playcard']);
Route::post('/policy', [HomepageController::class, 'policy']);