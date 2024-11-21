<?php

use App\Http\Controllers\accountsCLR;
use Illuminate\Support\Facades\Route;

Route::get('/',[accountsCLR::class,'index'])->name('accounts.index');
Route::get('/AddingItem',[accountsCLR::class,'create'])->name('accounts.create');
Route::post('/ItemAdded',[accountsCLR::class,'store'])->name('accounts.store');
