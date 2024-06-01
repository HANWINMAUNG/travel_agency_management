<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\CategoryController;


//user
// Auth::routes();
Route::post('logout' , [LoginController::class,'logout'])->name('user.logout');
//admin
Route::get('admin/login',[AdminLoginController::class, 'showLoginForm'])->name('get.admin.login');
Route::post('admin/login',[AdminLoginController::class, 'Login'])->name('post.admin.login');
Route::post('admin/logout',[AdminLoginController::class, 'Logout'])->name('admin.logout');
Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('/', [PageController::class, 'home'])->name('admin.home');
    Route::resource('admin-account', AdminController::class);
    Route::resource('user-account', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('package', PackageController::class);
    Route::resource('city', CityController::class);

});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/packages', [HomeController::class, 'package'])->name('package');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/destinations', [HomeController::class, 'destination'])->name('destinations');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

