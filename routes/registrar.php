<?php

use App\Http\Controllers\Reigistar\DashbasboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'registrar'], function(){
Route::get('/registrar/dashboard',[DashbasboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
});