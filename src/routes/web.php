<?php

use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', ['middleware' => ['locale']]], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('back.dashboard');

});