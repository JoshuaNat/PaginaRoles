<?php

use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\HistoriaController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('personaje/todos', [PersonajeController::class, 'mostrarTodos'])->name('personaje.mostrarTodos');
Route::post('personaje/{personaje}/AgregaHistoria', [PersonajeController::class, 'agregaHistoria'])->name('personaje.agregaHistoria');
Route::resource('personaje', PersonajeController::class)->middleware('verified');

Route::resource('historia', HistoriaController::class)->middleware('auth');