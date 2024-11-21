<?php

use App\Http\Controllers\accountsCLR;
use Illuminate\Support\Facades\Route;

Route::get('/',[accountsCLR::class,'index'])->name('accounts.index');
Route::get('/AddingItem',[accountsCLR::class,'create'])->name('accounts.create');
Route::post('/ItemAdded',[accountsCLR::class,'store'])->name('accounts.store');
Route::get('/viewlist',[accountsCLR::class,'view'])->name('accounts.view');
Route::get('/{id}/show',[accountsCLR::class,'show'])->name('accounts.show');
Route::get('/{id}/edit',[accountsCLR::class,'edit'])->name('accounts.edit');
Route::put('/aptapt/{id}',[accountsCLR::class,'update'])->name('accounts.update');
Route::delete('/accounts/{id}', [accountsCLR::class, 'destroy'])->name('accounts.destroy');
