<?php

use App\Base\Http\Controllers\LoginController;
use App\Job\Http\Controllers\JobController;
use App\Profile\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'landing'])->name('landing');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth',[LoginController::class,'auth'])->name('auth.user');
Route::post('/store',[LoginController::class,'store'])->name('store.user');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/forgotPass', [LoginController::class, 'forgotPass'])->name('forgotPass');
Route::get('/newPass/{token}', [LoginController::class, 'newPass'])->name('password.reset');

Route::post('/requestNewPass',[LoginController::class,'password'])->name('requestNewPass');
Route::post('/resetPass',[LoginController::class,'passwordReset'])->name('resetPass');

Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function ( ) {
        Route::get('/',[ProfileController::class,'index'])->name('profile');
        Route::post('/store',[ProfileController::class,'store'])->name('profile.store');
        Route::post('/update',[ProfileController::class,'update'])->name('profile.update');
    });

    Route::prefix('job')->group(function ( ) {
        Route::get('/',[JobController::class,'index'])->name('jobs');
        Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
        Route::get('/search', [JobController::class, 'search'])->name('jobs.search');
        Route::get('/my',[JobController::class,'my'])->name('jobs.my');
        Route::get('/showMore/{id}',[JobController::class,'show'])->name('jobs.show');
        Route::post('/store',[JobController::class,'store'])->name('jobs.store');
        Route::get('/edit/{id}',[JobController::class,'edit'])->name('jobs.edit');
        Route::post('/update/{id}',[JobController::class,'update'])->name('jobs.update');
        Route::get('/delete/{id}',[JobController::class,'destroy'])->name('jobs.delete');
    });
});


