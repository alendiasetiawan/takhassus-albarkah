<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Livewire\Admin\DashboardAdmin;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin::'], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', DashboardAdmin::class)->name('dashboard');
    });
});
