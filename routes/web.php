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
use App\Http\Controllers\LocationController;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [LocationController::class, 'index'])->name('locations.index');


use App\Http\Controllers\VoitureController;

Route::get('/voitures', [VoitureController::class, 'index'])->name('voitures.index');
Route::get('/voitures/create', [VoitureController::class, 'create'])->name('voitures.create');
Route::post('/voitures', [VoitureController::class, 'store'])->name('voitures.store');
Route::get('/voitures/{id}', [VoitureController::class, 'show'])->name('voitures.show');
Route::get('/voitures/{id}/edit', [VoitureController::class, 'edit'])->name('voitures.edit');
Route::put('/voitures/{id}', [VoitureController::class, 'update'])->name('voitures.update');
Route::delete('/voitures/{id}', [VoitureController::class, 'destroy'])->name('voitures.destroy');


 
use App\Http\Controllers\ClientController;
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
// Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

use App\Http\Controllers\ReservationController;

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
