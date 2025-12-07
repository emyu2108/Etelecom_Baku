<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| FRONT (Пользовательская часть)
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/phone/{slug}', [FrontController::class, 'show'])->name('phone.show');
Route::get('/category/{slug}', [FrontController::class, 'category'])->name('category.show');
Route::get('/products', [FrontController::class, 'products'])->name('products.index');


/*
|--------------------------------------------------------------------------
| Переключение языков
|--------------------------------------------------------------------------
*/
Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['ru', 'az', 'en'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');

/*
|--------------------------------------------------------------------------
| Профиль (Breeze стандарт)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin.categories.index', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Breeze Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
