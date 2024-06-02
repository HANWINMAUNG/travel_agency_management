<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\CategoryController;

//user
// Auth::routes();
Route::get('logout' , [LoginController::class,'logout'])->name('user.logout');
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

Route::get('/login', [LoginController::class, 'index'])->name('frontend.auth.index');
Route::post('/login', [LoginController::class, 'auth'])->name('frontend.auth');
Route::get('/register', [RegisterController::class, 'index'])->name('frontend.register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('frontend.register');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/packages', [HomeController::class, 'package'])->name('package');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/destinations', [HomeController::class, 'destination'])->name('destinations');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/booking/{package:slug}/create', [BookingController::class, 'create'])->name('booking.frontend.create')->middleware('auth');
Route::post('/booking/{package:slug}/create', [BookingController::class, 'store'])->name('booking.frontend.store')->middleware('auth');
Route::get('/booking/{package:slug}/edit/{id}', [BookingController::class, 'edit'])->name('booking.frontend.edit')->middleware('auth');
Route::put('/booking/{package:slug}/edit/{id}', [BookingController::class, 'update'])->name('booking.frontend.update')->middleware('auth');
Route::get('/booking/{package:slug}/payment/{id}', [BookingController::class, 'payment'])->name('booking.frontend.payment');
Route::post('/booking/{package:slug}/payment/{id}', [BookingController::class, 'paymentStore'])->name('booking.frontend.payment.store');
