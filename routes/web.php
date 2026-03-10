<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.login');
});

// 客戶 CRUD
Route::resource('customers', CustomerController::class);

// 電腦規格 CRUD（不使用 resource 因為 index/show 不用）
Route::get('computers/create/{customer_id}', [ComputerController::class, 'create'])->name('computers.create');
Route::post('computers', [ComputerController::class, 'store'])->name('computers.store');
Route::get('computers/{id}/edit', [ComputerController::class, 'edit'])->name('computers.edit');
Route::put('computers/{id}', [ComputerController::class, 'update'])->name('computers.update');
Route::delete('computers/{id}', [ComputerController::class, 'destroy'])->name('computers.destroy');

// login
Route::get('login', [loginController::class, 'index']);

// resume
Route::get('resume', [ResumeController::class, 'index']);

// admin
Route::prefix('admin')->group(function () {

    // 登入頁
    Route::get('/', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/login', [AdminController::class, 'login']);

    // 登入送出
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

    // 登出
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Table-lists
    Route::get('/table-lists', [AdminController::class, 'tableLists'])->name('admin.tableLists');

     // EventDetails
    Route::get('/event-details', [AdminController::class, 'eventDetails'])->name('admin.eventDetails');

});