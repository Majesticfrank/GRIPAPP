<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\PasswordResetController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/signupview',[SignupController::class,'Signup'])->name('signup');
Route::get('/viewDashboard',[DashboardController::class,'UserDashboard'])->name('Dashboard');
Route::get('/AdminDashboard',[DashboardController::class,'Admin_Dashboard'])->name('Adminboard');

Route::post('/SignupUser',[SignupController::class,'SignupUser'])->name('Signupuser');
Route::get('/loginview',[LoginController::class,'Login'])->name('login');
Route::post('/loginUser',[LoginController::class,'LoginUser'])->name('Signin');

Route::post('/logout',[DashboardController::class,'LogOut'])->name('Logout');
Route::get('/emailView',[PasswordResetController::class,'SendEmailview'])->name('SendEmail');
Route::post('/Resetlink',[PasswordResetController::class,'SendResetLink'])->name('resetlink');
Route::get('/Resetview',[PasswordResetController::class,'ResetPassword'])->name('PasswordReset');


Route::get('/GiftcardCreateview',[GiftcardController::class,'CreateGiftcardview'])->name('Creategiftcard');
Route::post('/CreateGiftcard',[GiftcardController::class,'storegiftcard'])->name('StoreGiftcard');



