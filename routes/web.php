<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

//User interface
Route::get('/', function () {
    return view('welcome');
});

Route::get('/info/index', [InfoController::class, 'index'])->name('info.index');
Route::post('/info/store', [InfoController::class, 'store'])->name('info.store');
Route::get('/info/index/{id}', [InfoController::class, 'read'])->name('info.read');
Route::post('/info/index/{id}/update', [InfoController::class, 'update'])->name('info.update');
Route::post('/info/index/{id}/delete', [InfoController::class, 'delete'])->name('info.delete');