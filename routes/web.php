<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HphealthController;

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
Route::prefix('admin')
    ->middleware(['web', 'admin.sidebar'])  
    //執行'admin.sidebar' => \App\Http\Middleware\Admin\ShareSidebar::class,
    
    ->group(function () {

    // 登入頁
    Route::get('/', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/login', [AdminController::class, 'login']);

    // 登入送出
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');

    // 登出
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Dashboard
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');


    // table_lists
    Route::get('/table-lists', [AdminController::class, 'table_lists'])->name('admin.table_lists');

     // event_details
    Route::get('/event-details', [AdminController::class, 'event_details'])->name('admin.event_details');

     // event_details_readonly
    Route::get('/event-details-readonly', [AdminController::class, 'event_details_readonly'])->name('admin.event_details_readonly');

     // tables-editable
    Route::get('/tables-editable', [AdminController::class, 'tables_editable'])->name('admin.tables_editable');

    Route::fallback(function () {
        $data ['page'] = '404';
        $data ['title'] = '404'; 
    return response()->view('admin.errors.page404', $data, 404);    
    // abort(404);
    });

    Route::post('/update-date', [AdminController::class, 'updateDate'])->name('admin.updateDate');

});

// HomeProHealth
Route::prefix('hphealth')->group(function () {

    Route::get('/{id?}', [HphealthController::class, 'index'])->name('hphealth.index');

    Route::fallback(function () {
        $data ['page'] = '404';
        $data ['title'] = '404'; 
    return response()->view('hphealth.page404', $data, 404);    
    // abort(404);
    });

});