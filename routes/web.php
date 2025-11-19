<?php
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'home']);
Route::get('/about', [RouteController::class, 'about']);
Route::get('/review', [RouteController::class, 'review']);
Route::post('/review/check', [RouteController::class, 'review_check']);
