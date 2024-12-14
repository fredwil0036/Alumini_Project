<?php

use App\Http\Controllers\Alumni\DashbasboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'alumni'], function(){
    Route::get('/alumni/dashboard', [DashbasboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

});