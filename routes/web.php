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
Route::get('/edit', function () {
return view('edit'); 
});
Route::get('/forgot', function () {
    return view('forgot'); 
    });

    Route::get('/login', function () {
        return view('login'); 
        });

Route::controller(AuthController::class)->group(function () {
Route::post('/users', 'showUsers')->name('users');
Route::get('/users', 'getdata')->name('users');
Route::get('edit/{id}', [AuthController::class, 'editData']);
Route::post('edit/', [AuthController::class, 'update']);
Route::get('delete/{id}', [AuthController::class, 'deleteData']);
Route::delete('/delete.multiple', 'deleteAll')->name('delete.multiple');
// Route ::get('login','login')->name('login');
Route::post('sign-in','loginAction')->name('login');
});