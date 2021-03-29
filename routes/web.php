<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PagesController;
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

Route::view('/', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::get('/contact', [ContactsController::class, 'create'])->name('contact');

Route::post('/contact', [ContactsController::class, 'store'])->name('contact_store');
