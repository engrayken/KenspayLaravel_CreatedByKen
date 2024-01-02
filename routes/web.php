<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NonUser\ProductController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/recharge_card', [ProductController::class,'pin'])->middleware('alreadyLogin')->name('pins');
Route::get('/airtime', [ProductController::class,'airtime'])->middleware('alreadyLogin')->name('airtimes');
Route::get('/data', [ProductController::class,'data'])->middleware('alreadyLogin')->name('datas');
Route::get('/tv', [ProductController::class,'tv'])->middleware('alreadyLogin')->name('tvs');
Route::get('/electricity', [ProductController::class,'electricity'])->middleware('alreadyLogin')->name('electricitys');
Route::get('/education', [ProductController::class,'education'])->middleware('alreadyLogin')->name('educations');
Route::post('/amounts', [ProductController::class,'amount'])->name('amounts');
Route::post('/variations', [ProductController::class,'variation'])->name('variations');



Route::get('/', [HomeController::class,'index']);
Route::get('/privacy-policy', [HomeController::class,'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [HomeController::class,'terms'])->name('terms');
Route::get('/documentation', [HomeController::class,'documentation'])->name('documentation');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/help', [HomeController::class,'contact'])->name('help');
Route::get('/partners', [HomeController::class,'partner'])->name('partner');
Route::get('/widget-ticket', [HomeController::class,'ticket'])->name('widget-ticket');
Route::get('/login', [HomeController::class,'login'])->middleware('alreadyLogin');
Route::get('/register', [HomeController::class,'signup'])->middleware('alreadyLogin');
Route::get('/forget-password', [HomeController::class,'forgot'])->middleware('alreadyLogin');

Route::get('/conVerEmail/{id}', [HomeController::class,'emconf'])->where(['id' => '[0-9a-zA-Z]+'])->name('conVerEmail');
Route::get('/confirmview', [HomeController::class,'confirmview'])->name('confirmview');


Route::post('/registeru', [SignupController::class,'signupu'])->name('Signup');
Route::post('/loginu', [LoginController::class,'loginu'])->name('Login');
Route::get('/logout', [LoginController::class,'logOut'])->name('logout');

// Route::get('/settings', [HomeController::class,'settings'])->name('settings');



Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    echo Artisan::output();
});
