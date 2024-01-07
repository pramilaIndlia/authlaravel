<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/users', function () {
    return view('users');
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/users', 'showUsers')->name('users');
    Route::get('/users', 'getdata')->name('users');

});
