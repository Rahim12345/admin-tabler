<?php

use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('back.dashboard');

});

Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);
