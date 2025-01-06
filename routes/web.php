<?php

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

// Main domain route
Route::domain(env('APP_URL'))->group(function () {
    Route::get('/', function () {
        abort(404);
    });
});

// Sub-domain route
Route::domain('{subdomain}.' . env('APP_URL'))->group(function () {
    Route::get('/', function ($subdomain) {
        return "Halo $subdomain, xxxx";
    });
});
