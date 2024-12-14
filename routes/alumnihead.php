<?php

use App\Http\Controllers\AlumniHead\DashbasboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'alumniHead'],function(){
    Route::get('/alumnihead/dashboard', [DashbasboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
});