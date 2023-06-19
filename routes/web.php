<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;


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



Route::get('/about-us', function () {
return view('about-us');
})->name('about-us');

Route::get('/Menu', function () {
return view('Menu');
})->name('Menu');

Route::get('/gallery', function () {
return view('gallery');
})->name('gallery');

Route::get('/contact-us', function () {
return view('contact-us');
})->name('contact-us');


Route::get('/welcome', function () {
  return view('welcome');
})->name('welcome');

Route::get('/signin', function () {
  return view('signin');
})->name('signin');

Route::get('/signin', function () {
  return view('signup');
})->name('signup');

Route::get('signin', [UserController::class, 'signin'])->name('signin');
Route::post('signin', [UserController::class, 'customLogin'])->name('signin.action');
Route::get('signup', [UserController::class, 'signup'])->name('signup');
Route::post('signup', [UserController::class, 'customRegistration'])->name('signup.action');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');
Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('cart', [CartController::class, 'getCart'])->name('cart');
Route::post('addToCart', [CartController::class, 'addToCart'])->name('addToCart.action');
Route::post('deleteFromCart', [CartController::class, 'deleteFromCart'])->name('deleteFromCart.action');


