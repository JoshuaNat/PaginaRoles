<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonajeController;

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

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('personaje/{personaje}/AgregaHistoria', [PersonajeController::class, 'agregaHistoria'])->name('personaje.agregaHistoria');
Route::resource('personaje', PersonajeController::class)->middleware('auth');