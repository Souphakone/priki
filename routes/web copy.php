<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/role', function () {
    return view('home');
});*/

//HomeController
Route::get('/', [HomeController::class, 'index']);

Route::get('/{id}', [HomeController::class, 'show'])->name('test');

//Domain
Route::get('/domain/{id}', [DomainController::class, 'index'])->name('domain');
//$url = route(name('domain', ['id' => 1]));
