<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\Gift_typeController;
use App\Http\Controllers\UserController;
use App\Models\Gift;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/gift_types', [Gift_typeController::class, 'index'])->name('gift_type.index');
Route::get('/new-gift-type', [Gift_typeController::class, 'create'])->name('gift_type.create');
Route::post('/new-gift-type', [Gift_typeController::class, 'store'])->name('gift_type.store');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/new-user', [UserController::class, 'create'])->name('user.create');
Route::post('/new-user', [UserController::class, 'store'])->name('user.store');

Route::get('/gifts', [GiftController::class, 'index'])->name('gift.index');
Route::get('/new-gift',[GiftController::class,'create'])->name('gift.create');
Route::post('/new-gift',[GiftController::class, 'store'])->name('gift.store');

require __DIR__.'/auth.php';
