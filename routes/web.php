<?php

use App\Http\Controllers\AdminadminController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
route::post('admin/index',[loginController::class,'index'])->name('admin.index');
route::post('/admin/login',[loginController::class,'logined'])->name('logined');

route::get('/register',[HomepageController::class,'register']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [HomepageController::class, 'index'])->name('index');
Route::middleware('auth')->group(function () {
    Route::get('/admin/index', [AdminadminController::class, 'index'])->name('admin.index');
    Route::post('/admin/logout', [AdminadminController::class, 'logout'])->name('logout');

    

});

require __DIR__ . '/auth.php';
