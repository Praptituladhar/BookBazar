<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentVerificationController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', [AuthController::class,'welcome']);
Route::get('/navbar', [AuthController::class,'signin']);
Route::get('/aboutus', [AuthController::class,'aboutus']);
Route::get('/products', [AuthController::class,'products']);
Route::get('/products2', [AuthController::class,'products2']);
Route::get('/products3', [AuthController::class,'products3']);
Route::get('/products4', [AuthController::class,'products4']);
Route::get('/services', [AuthController::class,'services']);
Route::get('/deliveryinfo', [AuthController::class,'deliveryinfo']);
Route::get('/warrenty', [AuthController::class,'warrenty']);
Route::get('/quality', [AuthController::class,'quality']);
Route::get('/gallery', [AuthController::class,'gallery']);
Route::get('/description/{id}', [AuthController::class,'descriptionFxn']);
Route::get('/admin', [AdminController::class,'admin']);
Route::post('/postadmin', [AdminController::class,'postadmin']);
Route::get('/productentry', [AdminController::class,'productentry']);
Route::post('/postproductentry', [AdminController::class,'postproductentry']);
Route::get('/addcategory', [AdminController::class,'addcategory']);
Route::post('/postaddcategory', [AdminController::class,'postaddcategory']);
Route::get('/contact', [ContactController::class,'contact']);
Route::post('/postcontact', [ContactController::class,'postcontact']);
Route::get('/cartlist', [CartController::class,'cartlist']);
Route::post('/add_to_cart', [CartController::class,'postcart']);
Route::get('/cartitem', [CartController::class,'cartitem']);
Route::get('/insert', [AuthController::class,'insertform']);
Route::post('/create', [AuthController::class,'create']);
Route::get('/checkout', [AuthController::class,'checkout']);
Route::get('/search', [AuthController::class,'search']);
Route::get('remove/{id}', [AuthController::class,'removefromCart']);
Route::post('/postcheckout', [AuthController::class,'postcheckout']);
Route::get('removecart/{id}', [CartController::class,'removeCart']);
Route::get('/policy', [AuthController::class,'privacy_policy']); 
Route::get('/terms', [AuthController::class,'terms']); 
Route::get('/help_support', [AuthController::class,'help_support']); 
Route::get('/payment-verify', [AuthController::class,'verify']);
Route::get('/success', [AuthController::class,'success']);
Route::get('/fail', [AuthController::class,'fail']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
