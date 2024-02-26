<?php

use App\Http\Controllers\admin\admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;

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
    // Route::get('/', [WebsiteController::class,'fof']);
Route::get('/', function () {
    print('welcome');
});

    Route::prefix('2718')->name('admin.')->group(function () {

    Route::middleware(['adminLogin'])->group(function () {

    Route::get('/2718', [HomeController::class,'index'])->name('index');
    Route::post('/login', [AuthController::class,'login'])->name('login');
   });

    Route::middleware(['adminNotLogin'])->group(function () {
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/user', [AdminController::class,'user'])->name('user');
    Route::get('/manage_users/{uid}', [AdminController::class,'manage_users'])->where(["uid"=>"[a-zA-Z0-9]+"])->name('manage_users');
    Route::post('/profile/{user}', [AdminController::class,'uprofile'])->name('profile');
    Route::post('/credit/{user}', [AdminController::class,'ucredit'])->name('creditUser');
    Route::get('/udelete/{user}', [AdminController::class,'deleteuprofile'])->name('deleteprofile');
    Route::get('/buser/{user}/{status}', [AdminController::class,'buser'])->name('blockUser');
    Route::get('/send_email/{user}', [AdminController::class,'sendEmail'])->name('sendEmail');
    Route::post('/send_email', [AdminController::class,'sendEmailNow'])->name('sendEmailNow');
    Route::get('/promotion_emails', [AdminController::class,'promotion_emails'])->name('promotion_emails');
    Route::post('/sendpemail', [AdminController::class,'sendpemail'])->name('sendpemail');

    Route::get('/transfer', [AdminController::class,'transfer'])->name('transfer');
    Route::get('/ticket', [AdminController::class,'ticket'])->name('ticket');
    Route::get('/messages', [AdminController::class,'messages'])->name('messages');
    Route::get('/reviews', [AdminController::class,'reviews'])->name('reviews');
    Route::get('/settings', [AdminController::class,'settings'])->name('settings');
    Route::get('/faq', [AdminController::class,'faq'])->name('faq');
    Route::get('/page', [AdminController::class,'page'])->name('page');
    Route::get('/auth', [AdminController::class,'auth'])->name('auth');
    Route::get('/product', [AdminController::class,'product'])->name('product');
    Route::get('/add_pins', [AdminController::class,'add_pins'])->name('add_pins');
    Route::get('/transaction', [AdminController::class,'transaction'])->name('transaction');


});


    });
