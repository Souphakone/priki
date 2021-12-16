<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\DomainController;

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

//HomeController
Route::get('/', [HomeController::class, 'index']);

//Domain
Route::get('/domain/{id}', [DomainController::class, 'index'])->name('domain');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/{id}', [HomeController::class, 'show'])->name('test');

//Domain
Route::get('/domain/', [DomainController::class, 'index']);
Route::get('/domain/{id}', [DomainController::class, 'showById'])->name('domain');


Route::get('/{id}', [HomeController::class, 'show']);
