<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\FrontController;

/*
|--------------------------------------------------------------------------
| FRONT (Пользовательская часть)
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/phone/{slug}', [FrontController::class, 'show'])->name('phone.show');

Route::get('/about', [RouteController::class, 'about']);
Route::get('/review', [RouteController::class, 'review']);
Route::post('/review/check', [RouteController::class, 'review_check']);

/*
|--------------------------------------------------------------------------
| ADMIN (Админ-панель)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('phones', PhoneController::class);
});
