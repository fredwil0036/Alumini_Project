<?php 

use App\Http\Controllers\AlumniOfiicer\DashbasboardController;
use Illuminate\Support\Facades\Route;
Route::group(['middleware'=>'alumniOfficer'],function(){
    Route::get('/alumniofficer/dashboard', [DashbasboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

});