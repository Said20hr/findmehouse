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

Route::get('/', [App\Http\Controllers\LandingPageController::class,'index'])->name('home');
Route::get('/services', [App\Http\Controllers\LandingPageController::class,'services'])->name('services');
Route::get('/api', [App\Http\Controllers\LandingPageController::class,'create']);
Route::get('/contact', [App\Http\Controllers\ContactPageController::class,'index'])->name('contact');
Route::get('/faq', [App\Http\Controllers\ContactPageController::class,'faq'])->name('faq');
Route::get('/search-application', [App\Http\Controllers\ContactPageController::class,'form'])->name('form');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
