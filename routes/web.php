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
use App\Http\Controllers\ReportController;
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
Route::get('reportes/r1', [ReportController::class,'generar1'])->middleware('auth')->name('reportes.r1');
Route::get('reportes/r2', [ReportController::class,'generar2'])->middleware('auth')->name('reportes.r2');
Route::get('reportes/r3', [ReportController::class,'generar3'])->middleware('auth')->name('reportes.r3');
Route::get('reportes/r4', [ReportController::class,'generar4'])->middleware('auth')->name('reportes.r4');
Route::get('reportes/r5', [ReportController::class,'generar5'])->middleware('auth')->name('reportes.r5');
Route::get('reportes/r6', [ReportController::class,'generar6'])->middleware('auth')->name('reportes.r6');
Route::get('reportes/r7', [ReportController::class,'generar7'])->middleware('auth')->name('reportes.r7');
Route::get('reportes/r8', [ReportController::class,'generar8'])->middleware('auth')->name('reportes.r8');
Route::get('reportes/r9', [ReportController::class,'generar9'])->middleware('auth')->name('reportes.r9');
Route::get('reportes/r10', [ReportController::class,'generar10'])->middleware('auth')->name('reportes.r10');

Route::resource('document-types',DocumentTypeController::class)->middleware('auth');
Route::resource('cities',CityController::class)->middleware('auth');
Route::resource('item-types',ItemTypeController::class)->middleware('auth');
Route::resource('way-to-pays',WayToPayController::class)->middleware('auth');
Route::resource('customers',CustomerController::class)->middleware('auth');
Route::resource('suppliers',SupplierController::class)->middleware('auth');
Route::resource('articles',ArticleController::class)->middleware('auth');
Route::resource('sales',SaleController::class)->middleware('auth');
Route::resource('refunds',RefundController::class)->middleware('auth');

Route::get('sale/pdf/{sale}', [SaleController::class, 'pdf'])->middleware('auth')->name('sale.pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
