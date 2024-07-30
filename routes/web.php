<?php

use App\Http\Controllers\FormatTextController;
use App\Http\Controllers\salamDariBinjaiController;
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


Route::get('/text-format', [FormatTextController::class, 'show']);
Route::get('/salam-dari-binjai', [salamDariBinjaiController::class, 'logGreetings']);

Route::get('/', function () {
    return view('welcome');
});
