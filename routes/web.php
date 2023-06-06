<?php

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

// header
Route::get('/characters', function () {
  return view('characters');
})->name('characters');

Route::get('/', function () {
    return view('comics');
})->name('comics');


Route::get('/movies', function () {
  return view('movies');
})->name('movies');

Route::get('/tv', function () {
  return view('tv');
})->name('tv');

Route::get('/games', function () {
  return view('games');
})->name('games');

Route::get('/collectibles', function () {
  return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
  return view('videos');
})->name('videos');

Route::get('/fans', function () {
  return view('fans');
})->name('fans');

Route::get('/news', function () {
  return view('news');
})->name('news');

Route::get('/shop', function () {
  return view('shop');
})->name('shop');

// footer-top
Route::get('/digital comics', function () {
  return view('digital comics');
})->name('digital comics');

Route::get('/dc merchandise', function () {
  return view('dc merchandise');
})->name('dc merchandise');

Route::get('/subscription', function () {
  return view('subscription');
})->name('subscription');

Route::get('/comic shop locator', function () {
  return view('comic shop locator');
})->name('comic shop locator');

Route::get('/dc power visa', function () {
  return view('dc power visa');
})->name('dc power visa');

// footer-middle

Route::get('/DC COMICS', function () {
  return view('DC COMICS');
})->name('DC COMICS');

Route::get('/SHOP', function () {
  return view('SHOP');
})->name('SHOP');

Route::get('/DC', function () {
  return view('DC');
})->name('DC');

Route::get('/SITES', function () {
  return view('SITES');
})->name('SITES');


// Route::get('/cards', function () {
//   return view('cards');
// })->name('cards');