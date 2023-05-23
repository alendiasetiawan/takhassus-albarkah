<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'admin', 'as' => 'admin::'], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
    });
});
