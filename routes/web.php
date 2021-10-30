<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index'])->name('menus');
Route::post('/', [MenuController::class, 'store'])->name('menus.store');
