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
    Route::get('/ticket', [AdminController::class,'ticket'])->name('ticket');
    Route::get('/close_ticket/{ticket}', [AdminController::class,'cticket'])->name('close_ticket');
    Route::get('/delete_ticket/{ticket}', [AdminController::class,'dticket'])->name('delete_ticket');
    Route::get('/replay_ticket/{ticket}', [AdminController::class,'chticket'])->name('check_ticket');
    Route::post('/replay_ticket/{ticket}', [AdminController::class,'rticket'])->name('reply_ticket');
    Route::get('/notification', [AdminController::class,'notification'])->name('notification');
    Route::post('/notification', [AdminController::class,'pnotification'])->name('pnotification');
    Route::get('/dnotification/{delete}', [AdminController::class,'dnotification'])->name('deleteNoti');
    Route::get('/settings', [AdminController::class,'settings'])->name('settings');
    Route::post('/settings', [AdminController::class,'upsettings'])->name('upsettings');
    Route::get('/faq', [AdminController::class,'faq'])->name('faq');
    Route::get('/faq/{faq}', [AdminController::class,'checkfaq'])->name('check_faq');
    Route::post('/faq/{faq}', [AdminController::class,'editedfaq'])->name('edited_faq');
    Route::get('/dfaq/{faq}', [AdminController::class,'deletedfaq'])->name('delete_faq');
    Route::get('/cfaq', [AdminController::class,'cfaq'])->name('cfaq');
    Route::post('/faq', [AdminController::class,'addfaq'])->name('add_faq');

    Route::get('/page', [AdminController::class,'page'])->name('page');
    Route::post('/page', [AdminController::class,'add_page'])->name('add_page');
    Route::get('/cpage', [AdminController::class,'vadd_page'])->name('cpage');
    Route::get('/edit_page/{page}', [AdminController::class,'editepage'])->name('edit_page');
    Route::post('/edit_page/{page}', [AdminController::class,'edit_page'])->name('editpage');
    Route::get('/dedit_page/{page}', [AdminController::class,'delete_page'])->name('delete_page');
    Route::get('/page_status/{page}/{status}', [AdminController::class,'page_status'])->name('page_status');

    Route::get('/auth', [AdminController::class,'auth'])->name('auth');
    Route::post('/auth', [AdminController::class,'pauth'])->name('pauth');
    Route::get('/dauth/{delete}', [AdminController::class,'dauth'])->name('dauth');

    Route::get('/product_category', [AdminController::class,'category'])->name('category');
    Route::post('/category', [AdminController::class,'pcategory'])->name('pcategory');
    Route::get('/product_category/{delete}', [AdminController::class,'dcategory'])->name('dcategory');
    Route::get('/edite_product_category/{edited}', [AdminController::class,'ecategory'])->name('ecategory');
    Route::post('/edit_product_category/{edited}', [AdminController::class,'epcategory'])->name('epcategory');

    Route::get('/product/{product}', [AdminController::class,'product'])->name('product');
    Route::post('/product/{catid}/{catname}', [AdminController::class,'pproduct'])->name('pproduct');
    Route::get('/dproduct/{delete}', [AdminController::class,'dproduct'])->name('dproduct');
    Route::get('/edite_product/{product}/{prod}', [AdminController::class,'eproduct'])->name('eproduct');
    Route::post('/edit_product/{edited}', [AdminController::class,'epproduct'])->name('epproduct');

    Route::get('/sub_product/{product}', [AdminController::class,'subproduct'])->name('subproduct');
    Route::post('/sub_product/{product}/{category}', [AdminController::class,'psubproduct'])->name('psubproduct');
    Route::get('/dsub_product/{delete}', [AdminController::class,'dsubproduct'])->name('dsubproduct');
    Route::get('/edite_sub_product/{product}/{prod}', [AdminController::class,'esubproduct'])->name('esubproduct');
    Route::post('/editsub_product/{edited}', [AdminController::class,'epsubproduct'])->name('epsubproduct');

    Route::get('/add_pins', [AdminController::class,'add_pins'])->name('add_pins');
    Route::post('/add_pins', [AdminController::class,'padd_pins'])->name('padd_pins');
    Route::get('/dadd_pins/{delete}', [AdminController::class,'dadd_pins'])->name('dadd_pins');
    Route::get('/transaction', [AdminController::class,'transaction'])->name('transaction');
    Route::get('/api', [AdminController::class,'api'])->name('api');
    Route::post('/api', [AdminController::class,'apiP'])->name('apiP');
    Route::get('/api-edit/{apid}', [AdminController::class,'apiE'])->name('apiE');
    Route::post('/api-edit/{api}', [AdminController::class,'apiEP'])->name('apiEP');
    Route::get('/api-delete/{api}', [AdminController::class,'apiD'])->name('apiD');
    Route::get('/api-update/{api}/{status}', [AdminController::class,'apiU'])->name('apiU');

    Route::get('/epinLimit', [AdminController::class,'epinLimit'])->name('epinlimit');
    Route::post('/epinLimit', [AdminController::class,'epinP'])->name('epinP');
    Route::get('/epin-edit/{pinid}', [AdminController::class,'epinE'])->name('epinE');
    Route::post('/epin-edit/{pinid}', [AdminController::class,'epinEP'])->name('epinEP');
    Route::get('/epin-delete/{pinid}', [AdminController::class,'epinD'])->name('epinD');

    Route::get('/transfer', [AdminController::class,'transfer'])->name('transfer');
    Route::get('/messages', [AdminController::class,'messages'])->name('messages');


});


    });
