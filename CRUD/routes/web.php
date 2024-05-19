<?php

use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;


Route::get('/',[crudController::class,'read'])->name('read');
Route::post('/save',[crudController::class,'save'])->name('save');
Route::post('/delete',[crudController::class,'delete'])->name('delete');
Route::post('/edit',[crudController::class,'edit']);
Route::post('/update',[crudController::class,'update'])->name('update');
Route::post('/view',[crudController::class,'view'])->name('view');
Route::post('/search',[crudController::class,'search'])->name('search');