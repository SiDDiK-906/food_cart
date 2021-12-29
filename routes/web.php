<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,FrontendController,BookingController};

Auth::routes();
// FrontendController
Route::get('/', [FrontendController::class, 'index_method'])->name('index');

// HomeController
Route::get('/home', [HomeController::class, 'home'])->name('home');

// BookingController
Route::resource('booking', BookingController::class);
Route::get('/home/booking/edit/{id}', [BookingController::class, 'show_hide_edit_method'])->name('show_hide_edit');
Route::get('/home/booking/edit/trash/{id}', [BookingController::class, 'show_hide_trash_method'])->name('show_hide_trash');
Route::get('/home/booking/trash', [BookingController::class, 'trash_method'])->name('trash');
Route::get('/home/booking/force_delete/{id}', [BookingController::class, 'force_delete_method'])->name('force_delete');
Route::get('/home/booking/restore/{id}', [BookingController::class, 'restore_method'])->name('restore');
