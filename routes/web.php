<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Neutral routes
Route::get('/', function () {
    return view('index');
});
Route::get('/home',[HomeController::class,'home'])->name('homepage');

// Admin routes
Route::get('/Pop Admin Panel',[AdminController::class,'admin_dashboard'])->name('Admin_Dashboard');
Route::post('/Pop Admin Panel/Team',[AdminController::class,'AddTeam'])->name('Team');

// Auth routes
Route::post('/home',[AuthManager::class,'LoginPost'])->name('login');