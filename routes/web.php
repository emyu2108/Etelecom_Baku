<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\FrontController;

//FRONT (Пользовательская часть)

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/phone/{slug}', [FrontController::class, 'show'])->name('phone.show');
Route::get('/category/{slug}', [FrontController::class, 'category'])
    ->name('category.show');



//ADMIN (Админ-панель)
Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('phones', PhoneController::class);
});

//переключение языков
Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['ru', 'az', 'en'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    return redirect()->back();
})->name('lang.switch');

