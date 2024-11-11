<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'role:admin',
], function () {
    Route::resource('rooms', App\Http\Controllers\Admin\RoomController::class);
    Route::resource('bookings', App\Http\Controllers\Admin\BookingController::class);
});
