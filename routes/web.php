<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('home.index');
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store');
Route::delete('categories/delete/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
Route::get('categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::put('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');
