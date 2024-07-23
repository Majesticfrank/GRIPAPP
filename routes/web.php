<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GiftcardController;
use App\Http\Controllers\PasswordResetController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/signupview',[SignupController::class,'Signup'])->name('signup');
Route::post('/SignupUser',[SignupController::class,'SignupUser'])->name('Signupuser');

Route::get('/loginview',[LoginController::class,'Login'])->name('login');
Route::post('/loginUser',[LoginController::class,'LoginUser'])->name('Signin');


Route::get('/emailView',[PasswordResetController::class,'SendEmailview'])->name('SendEmail');
Route::post('/Resetlink',[PasswordResetController::class,'SendResetLink'])->name('resetlink');
Route::get('/Resetview',[PasswordResetController::class,'ResetPassword'])->name('PasswordReset');


Route::get('/GiftcardCreateview',[GiftcardController::class,'CreateGiftcardview'])->name('Creategiftcard');
Route::post('/CreateGiftcard',[GiftcardController::class,'Storegiftcard'])->name('StoreGiftcard');
// Route::get('/displayGiftcard',[GiftcardController::class,'DisplayGiftcard'])->name('Display.Giftcard');

Route::get('/viewDashboard',[DashboardController::class,'UserDashboard'])->name('Dashboard');
Route::get('/AdminDashboard',[DashboardController::class,'Admin_Dashboard'])->name('Adminboard');

Route::get('/admin/user-management', [DashboardController::class, 'userManagement'])->name('admin.user-management');
Route::get('/admin/transaction-management', [DashboardController::class, 'transactionManagement'])->name('admin.transaction-management');
Route::get('/admin/giftcard-management', [GiftcardController::class,'DisplayGiftcard'])->name('admin.giftcard-management');







Route::post('/logout',[DashboardController::class,'LogOut'])->name('Logout');

