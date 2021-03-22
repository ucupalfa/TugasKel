<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Student;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home_user', [User::class, 'index']);
Route::get('/login', [User::class, 'login']);
Route::get('/loginPost', [User::class, 'loginPost']);
Route::get('/register', [User::class, 'register']);
Route::get('/registerPost', [User::class, 'registerPost']);
Route::get('/logout', [User::class, 'logout']);
// Route::post('/loginPost', 'User@loginPost');
// Route::get('/register', 'User@register');
// Route::post('/registerPost', 'User@registerPost');
// Route::get('/logout', 'User@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
