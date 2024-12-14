<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendEmail\Testsend;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Redirect::to('login');
})->middleware('redirectRolePage');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/alumnihead.php';
require __DIR__.'/alumniofficer.php';
require __DIR__.'/alumni.php';
require __DIR__.'/registrar.php';

