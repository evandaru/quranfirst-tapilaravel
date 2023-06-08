<?php

use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/daftar', function () {
    return view('form');
});

Route::get('/tampilform', [MuridController::class, 'tampil']);
Route::post('/tampilform', [MuridController::class, 'store']);
