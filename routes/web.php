<?php

use App\Http\Controllers\CreateReservationController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfessionalWorkplaceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [ReservationController::class,"index"])->name('accueil');
Route::post('/', [ReservationController::class,"recherche"])->name('accueilPlusPost');

Route::get('/search', [SearchController::class,"rootSearch"])->name('search');

Route::get('/reservations/{id}',[CreateReservationController::class,"print"])->name('reservations');
Route::post('/reservations',[CreateReservationController::class,"add"])->name('reservations');

Route::get('/professional-workplace', [ProfessionalWorkplaceController::class,"rootPro"] )->name('professional-workplace');

Route::get('/faq', [FaqController::class,"rootFaq"])->name('faq');


