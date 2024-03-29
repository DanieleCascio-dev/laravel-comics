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

Route::get('/', function () {
 

    return view('home');
})->name('home');

Route::get('comics', function () {
    $comics = config('db.comics');
    $dcComics = config('db.dcComics');
    $shop = config('db.shop');
    $dc = config('db.DC');
    $sites = config('db.sites');
    /* Debug */
    /* dd($comics); */
    // dd($dcComics);
    return view('comics',compact('comics','dcComics','shop','dc','sites'));
})->name('comics');

Route::get('movies', function () {
    return view('movies');
})->name('movies');

Route::get('tv', function () {
    return view('tv');
})->name('tv');

Route::get('games', function () {
    return view('games');
})->name('games');

Route::get('collectible', function () {
    return view('collectible');
})->name('collectible');

Route::get('videos', function () {
    return view('videos');
})->name('videos');
