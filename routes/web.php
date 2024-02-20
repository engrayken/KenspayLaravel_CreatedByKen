<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\Website\ProductController;
use Illuminate\Support\Facades\Artisan;
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



Route::get('/', [WebsiteController::class,'index']);
Route::get('/privacy-policy', [WebsiteController::class,'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [WebsiteController::class,'terms'])->name('terms');
Route::get('/documentation', [WebsiteController::class,'documentation'])->name('documentation');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');
Route::get('/help', [WebsiteController::class,'contact'])->name('help');
Route::get('/partners', [WebsiteController::class,'partner'])->name('partner');
Route::get('/widget-ticket', [WebsiteController::class,'ticket'])->name('widget-ticket');
Route::get('/login', [WebsiteController::class,'login'])->middleware('alreadyLogin');
Route::get('/register', [WebsiteController::class,'signup'])->middleware('alreadyLogin');
Route::get('/forget-password', [WebsiteController::class,'forgot'])->middleware('alreadyLogin');

Route::get('/confirm-email/{id}', [WebsiteController::class,'confirmEmail'])->where(['id' => '[0-9a-zA-Z]+'])->name('conVerEmail');
Route::get('/confirm-account', [WebsiteController::class,'confirmview'])->name('confirmview');


Route::post('/registeru', [AuthController::class,'signupu'])->name('Signup');
Route::post('/loginu', [AuthController::class,'loginu'])->name('Login');
Route::get('/logout', [AuthController::class,'logOut'])->name('logout');

// Route::get('/settings', [WebsiteController::class,'settings'])->name('settings');



Route::get('/clear-cache', function() {
    Artisan::call('optimize:clear');
    echo Artisan::output();
});
