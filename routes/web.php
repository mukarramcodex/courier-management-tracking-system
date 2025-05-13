<?php

use App\Http\Controllers\CourierStatusController;

Route::post('/couriers/{courier}/status', [CourierStatusController::class, 'store'])->name('couriers.status.store');

Route::get('/', function () {
    return view('welcome');
});
