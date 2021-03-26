<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/clear', function () {
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('config:cache');
//     Artisan::call('view:clear');
//     // Artisan::call('key:generate');

//     return 'Cleared...';
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('/');
// Route::get('/{room}/reservation', 'App\Http\Controllers\HomeController@reservation')->name('reservation');

// Route::get('/', function () {
//     return view('welcome');
// })->name('/');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
