<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Livewire\Admin\DashboardAdmin;
use App\Livewire\Admin\Pendaftaran\VerifikasiTransfer;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin::'], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', DashboardAdmin::class)->name('dashboard');
        Route::get('/verifikasi-transfer', VerifikasiTransfer::class)->name('verifikasi_transfer');
    });
});
