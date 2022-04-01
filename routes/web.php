<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
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

Route::redirect('/', '/en');

Route::group(['prefix' => '{locale}'], function () {
    
    Route::get('/', [Controller::class, 'index'])->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/about-us/contacts', function () {
        return view('contacts');
    })->name('contacts');
});