<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\RefundDetailController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleDetailController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\WayToPayController;
use App\Models\DocumentType;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('document-types',DocumentTypeController::class)->middleware('auth');
Route::resource('cities',CityController::class)->middleware('auth');
Route::resource('item-types',ItemTypeController::class)->middleware('auth');
Route::resource('way-to-pays',WayToPayController::class)->middleware('auth');
Route::resource('customers',CustomerController::class)->middleware('auth');
Route::resource('suppliers',SupplierController::class)->middleware('auth');
Route::resource('articles',ArticleController::class)->middleware('auth');
Route::resource('sales',SaleController::class)->middleware('auth');
Route::resource('sale-details',SaleDetailController::class)->middleware('auth');
Route::resource('refunds',RefundController::class)->middleware('auth');
Route::resource('refund-details',RefundDetailController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
