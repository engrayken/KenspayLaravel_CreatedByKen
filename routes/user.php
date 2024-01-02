<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\MailController;

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

    Route::middleware(['islogedin'])->group(function () {
    Route::get('/', [UserController::class,'index'])->name('dashboard');
    Route::get('/recharge_card', [ProductController::class,'pin'])->name('pin');
    Route::get('/airtime', [ProductController::class,'airtime'])->name('airtime');
    Route::get('/data', [ProductController::class,'data'])->name('data');
    Route::get('/tv', [ProductController::class,'tv'])->name('tv');
    Route::get('/electricity', [ProductController::class,'electricity'])->name('electricity');
    Route::get('/education', [ProductController::class,'education'])->name('education');


    Route::post('/amount', [ProductController::class,'amount'])->name('amount');
    Route::post('/variation', [ProductController::class,'variation'])->name('variation');
    Route::post('/pay', [ProductController::class,'pay'])->name('pay');

    Route::get('/AccountVerify', [UserController::class,'SendVerify'])->name('SendVerify');
    Route::get('/account', [UserController::class,'account'])->name('account');
    Route::post('/updateAccount', [UserController::class,'updateAccount'])->name('updateAccount');
    Route::post('/setPin', [UserController::class,'setPin'])->name('setPin');
    Route::post('/phonebook', [UserController::class,'phonebook'])->name('phonebook');
    Route::get('/wallet', [UserController::class,'wallet'])->name('wallet');
    Route::get('/instant', [UserController::class,'instant'])->name('instant');
    Route::post('/recoPayStack', [UserController::class,'paysInit'])->name('paysinit');
    Route::get('/fundv/{kpcdmvsg}/{check}', [UserController::class,'fundv'])->where(['kpcdmvsg' => '[0-9]+','check' => '[0-9a-zA-Z]+'])->name('fundv');
    Route::get('/transaction', [UserController::class,'transaction'])->name('transaction');
    Route::post('/transactionv', [UserController::class,'transactionv'])->name('transactionv');
    Route::get('/transaction_view/{id}', [UserController::class,'transactionview'])->where(['id' => '[0-9a-zA-Z]+'])->name('transaction_view');
    Route::post('/download', [UserController::class,'print'])->name('print');
    // Route::get('/AccountVerify', [MailController::class,'verify'])->name('verify');
});
