<?php

use App\Http\Controllers\ProductController;
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



Route::controller(ProductController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('create','create')->name('ceate');
    Route::get('show','show')->name('show');
    Route::post('store','store')->name('store');
});
