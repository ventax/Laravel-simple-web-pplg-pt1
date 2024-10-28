<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view(view: 'admin.dashboard');
})->middleware('auth');

Route::get('admin/categories', function () {
    return view(view: 'admin.categories.index');
})->middleware('auth');

Route::post('admin/category', [App\Http\Controllers\CategoryController::class, 'create']);

Route::get('login', function () {
    return view('admin.login');
})->name('login');

Route::post('login', [AuthController::class, 'login']);
