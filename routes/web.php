<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\OperatorController;
use App\Http\Controllers\Admin\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [GuestHomeController::class, 'home'])->name('home');

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/home', [AdminHomeController::class, 'home'])->name('home');
    Route::resource('/tickets', TicketController::class );
});


Route::name('admin.')->prefix('admin')->group(function () {
    // Route::resource('/tickets', TicketController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
