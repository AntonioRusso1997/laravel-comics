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
    $array_comics = config('comics');
    $array_banners = config('banners');
    $data = [
        'fumetti' => $array_comics,
        'banners' => $array_banners
    ];
    return view('home', $data);
})->name('home');

Route::get('/contacts', function () {
    $array_banners = config('banners');
    $data = [
        'banners' => $array_banners
    ];
    return view('contacts', $data);
})->name('contatti');

Route::get('/about', function () {
    $array_banners = config('banners');
    $data = [
        'banners' => $array_banners
    ];
    return view('about', $data);
})->name('noi');
