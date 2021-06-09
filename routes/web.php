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
    return view('reservation',['name' => 'DEV WEB']);
});
Route::post('/', function () {
    return view('reservation');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/professional-workplace', function () {
    return view('professional-workplace');
});
Route::get('/faq', function () {
    return view('faq');
});


