<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AccountController,
    CastController
};

Route::get('/index',[AccountController::class,'index'])->name('form.index');

Route::get('/frm',[AccountController::class,'frm'])->name('form.frm');

Route::get('/akhir',[AccountController::class,'welcome'])->name('form.akhir');

//route casts
route::get('/cast', [CastController::class, 'index'])->name('cast.index');
route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
route::post('/cast', [CastController::class, 'store'])->name('cast.store');
route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
route::delete('/cast{id}', [CastController::class, 'destroy'])->name('cast.delete');

