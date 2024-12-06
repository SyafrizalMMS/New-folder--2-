<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {

  Route::middleware(['guest:admin','PreventBackHistory'])->group(function () {
    Route::view('/login', 'back.pages.admin.auth.login')->name('login');
    // tutor admin auth login and logout
    Route::post('/login_handler',[AdminController::class, 'loginHandler'])->name('login_handler');
    //tutor code: admin-forget password
    Route::view('/forgot-password','back.pages.admin.auth.forgot-password')->name('forgot-password');
    Route::post('/send-password-reset-link',[AdminController::class,'sendPasswordResetLink'])->name('send-password-reset-link');
    Route::get('/password/reset/{token}',[AdminController::class,'resetPassword'])->name('reset-password');
    //tutor admin reset password
    Route::post('/reset-password-handler',[AdminController::class,'resetPasswordHandler'])->name('reset-password-handler');
  });

  Route::middleware(['auth:admin','PreventBackHistory'])->group(function () {
    Route::view('/home','back.pages.admin.home')->name('home');
    // tutor admin auth login and logout
    // Route::post('/logout_handler',[AdminController::class, 'logoutHandler'])->name('logout_handler');
    Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');
    //tutor admin-setup profile page
    Route::get('/profile',[AdminController::class,'profileView'])->name('profile');
  });

});

// Route::get("/admin", function () {
//   return 'hello admin';
// });