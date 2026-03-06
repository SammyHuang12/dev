<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
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
Route::get('admin', [AdminController::class, 'index']);