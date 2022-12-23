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
    return view("welcome"); // blade php
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);
Route::get('/news/create', [\App\Http\Controllers\NewsController::class, 'create']); // trả về form.
Route::post('/news/create', [\App\Http\Controllers\NewsController::class, 'store']);
Route::get('/news/detail/{id}', [\App\Http\Controllers\NewsController::class, 'detail']);

Route::get('/investor', [\App\Http\Controllers\InvestorController::class, 'index']);
Route::get('/investor/detail', [\App\Http\Controllers\InvestorController::class, 'detail']);
