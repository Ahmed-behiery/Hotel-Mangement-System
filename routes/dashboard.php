<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\ReceptionistsController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', 'LoginController@viewLogin')->name('viewLogin');
    Route::post('login', 'LoginController@login')->name('login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});


Route::middleware(['auth:admin'])->prefix('dashboard')->as('dashboard.')->group(function () {

    Route::get('/', 'DashboardController@index')->name('home');

    Route::get('export', 'UsersController@export')->name('export');

    Route::resource('admins', 'AdminsController')->middleware('role:admin');

    Route::resource('users', 'UsersController')->middleware('role:admin|manager|receptionist');
    Route::get('users/{user}/approve', 'UsersController@approve')->name('users.approve');
    Route::resource('floors', 'FloorsController')->middleware('role:admin|manager');
    Route::resource('receptionists', 'ReceptionistsController')->middleware('role:admin|manager');
    Route::resource('reservations', 'ReservationsController')->middleware('role:admin|manager|receptionist');
    Route::resource('rooms', 'RoomsController');
    Route::get('ban/{receptionist}', [ ReceptionistsController::class, 'ban_receptionist'])->middleware('role:admin,manager')->name('ban_receptionist');
    Route::get('unban/{receptionist}', [ ReceptionistsController::class, 'unban_receptionist'])->middleware('role:admin,manager')->name('unban_receptionist');
});



