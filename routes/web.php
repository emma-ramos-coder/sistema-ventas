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
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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
Route::get('reportes/r1', [ReportController::class,'generar1'])->middleware('auth')->middleware('can:reportes.r1')->name('reportes.r1');
Route::get('reportes/r2', [ReportController::class,'generar2'])->middleware('auth')->middleware('can:reportes.r2')->name('reportes.r2');
Route::get('reportes/r3', [ReportController::class,'generar3'])->middleware('auth')->middleware('can:reportes.r3')->name('reportes.r3');
Route::get('reportes/r4', [ReportController::class,'generar4'])->middleware('auth')->middleware('can:reportes.r4')->name('reportes.r4');
Route::get('reportes/r5', [ReportController::class,'generar5'])->middleware('auth')->middleware('can:reportes.r5')->name('reportes.r5');
Route::get('reportes/r6', [ReportController::class,'generar6'])->middleware('auth')->middleware('can:reportes.r6')->name('reportes.r6');
Route::get('reportes/r7', [ReportController::class,'generar7'])->middleware('auth')->middleware('can:reportes.r7')->name('reportes.r7');
Route::get('reportes/r8', [ReportController::class,'generar8'])->middleware('auth')->middleware('can:reportes.r8')->name('reportes.r8');
Route::get('reportes/r9', [ReportController::class,'generar9'])->middleware('auth')->middleware('can:reportes.r9')->name('reportes.r9');
Route::get('reportes/r10', [ReportController::class,'generar10'])->middleware('auth')->middleware('can:reportes.r10')->name('reportes.r10');

Route::resource('document-types',DocumentTypeController::class)->middleware('auth');
Route::resource('cities',CityController::class)->middleware('auth');
Route::resource('item-types',ItemTypeController::class)->middleware('auth');
Route::resource('way-to-pays',WayToPayController::class)->middleware('auth');
Route::resource('customers',CustomerController::class)->middleware('auth');
Route::resource('suppliers',SupplierController::class)->middleware('auth');
Route::resource('articles',ArticleController::class)->middleware('auth');
Route::resource('sales',SaleController::class)->only('index','create','store','show')->middleware('auth');
//Route::resource('refunds',RefundController::class)->middleware('auth');
Route::resource('users',UserController::class)->only('index','edit','update')->middleware('auth')->names('users');

Route::get('sale/pdf/{sale}', [SaleController::class, 'pdf'])->middleware('auth')->middleware('can:sale.pdf')->name('sale.pdf');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');

Route::resource('roles',RoleController::class)->names('roles');
