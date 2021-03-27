<?php

use Illuminate\Support\Facades\Route;

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

    Route::resource('users', 'UsersController');
    Route::get('users/{user}/approve', 'UsersController@approve')->name('users.approve');
    Route::resource('floors', 'FloorsController')->middleware('role:admin');
    Route::resource('receptionists', 'ReceptionistsController')->middleware('role:admin');
    Route::resource('reservations', 'ReservationsController')->middleware('role:admin');
    Route::resource('rooms', 'RoomsController');
});

