<?php

use \App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use \App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/users/login/store', [LoginController::class, 'store']);

// Route::get('admin/main', [MainController::class, 'index'])->name('admin')->middleware('auth');


Route::middleware(['auth'])->group(function () {
      Route::prefix('admin')->group(function () {
            Route::get('/', [MainController::class, 'index'])->name('admin');
            Route::get('main', [MainController::class, 'index']);

            Route::prefix('menus')->group(function () {
                  Route::get('add', [MenuController::class, 'create']);
            });
      });
});