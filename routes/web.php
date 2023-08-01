<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdvancedsearchController;
use App\Http\Controllers\CategorytitleController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UserreviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MypageController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('advanced_search', [AdvancedsearchController::class, 'index'])->name('advanced_search');
    Route::post('get_brand', [AdvancedsearchController::class, 'get_brand'])->name('get_brand');
    Route::post('search', [AdvancedsearchController::class, 'search'])->name('search');
    Route::post('order', [AdvancedsearchController::class, 'order'])->name('order');

Route::get('category_title', [CategorytitleController::class, 'index'])->name('category_title');

Route::get('item', [ItemController::class, 'index'])->name('item');

Route::get('series', [SeriesController::class, 'index'])->name('series');

Route::get('user_review', [UserreviewController::class, 'index'])->name('user_review');

Route::get('product', [ProductController::class, 'index'])->name('product');

Route::prefix('mypage')->group(function () {
    Route::get('/index', [MypageController::class,'index']);

    Route::get('/items/new', [MypageController::class,'item_new']);
    Route::post('/item/getBrand', [MypageController::class,'getBrand']);
    Route::post('/item/newProduct', [MypageController::class,'create_item']);

    Route::get('/news', [MypageController::class,'news']);
    Route::get('/notices', [MypageController::class,'notices']);
    Route::get('/check_items', [MypageController::class,'check_items']);
    Route::get('/todos', [MypageController::class,'todos']);
    Route::get('/presenteds', [MypageController::class,'presenteds']);
    Route::get('/item_drafts', [MypageController::class,'item_drafts']);
    Route::get('/user_keepings', [MypageController::class,'user_keepings']);
    Route::get('/trades', [MypageController::class,'trades']);
    Route::get('/tradings', [MypageController::class,'tradings']);
    Route::get('/sales', [MypageController::class,'sales']);
    Route::get('/points', [MypageController::class,'points']);
    Route::get('/applied_points', [MypageController::class,'applied_points']);
    //setting
    Route::get('/address/edit/', [MypageController::class,'address']);
    Route::post('/address/create', [MypageController::class,'create']);
    Route::get('/profile/edit', [MypageController::class,'profile']);
    Route::get('/credit_card/edit', [MypageController::class,'credit_card']);
    Route::get('/authentication/edit', [MypageController::class,'authenticationEdit']);
    Route::get('/telephone', [MypageController::class,'telephone']);
});

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
