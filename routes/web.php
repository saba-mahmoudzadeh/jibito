<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('home.index');
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store');
Route::delete('categories/delete/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::put('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');

Route::get('/entries/create',[EntryController::class,'create'])->middleware('auth')->name('entries.create');
Route::get('/entries/index',[EntryController::class,'index'])->middleware('auth')->name('entries.index');
Route::post('entries/store',[EntryController::class,'store'])->middleware('auth')->name('entries.store');
Route::get('entries/edit/{id}',[EntryController::class,'edit'])->middleware('auth')->name('entries.edit');
Route::put('entries/update/{id}',[EntryController::class,'update'])->middleware('auth')->name('entries.update');
Route::delete('entries/delete/{id}',[EntryController::class,'destroy'])->middleware('auth')->name('entries.destroy');

Route::get('users/index',[UserController::class,'index'])->name('users.index');
Route::get('users/create',[UserController::class,'create'])->name('users.create');
Route::post('users/store',[UserController::class,'store'])->name('users.store');
Route::get('users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::put('users/update/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('users/delete/{id}',[UserController::class,'destroy'])->name('users.destroy');

Route::get("/register", [RegisterController::class, 'create'])->name('register');
Route::post("/register", [RegisterController::class, 'store'])->name('register.store');

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::post('logout', LogoutController::class)->name('logout');
