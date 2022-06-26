<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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

Route::get('/', [CustomAuthController::class,'login'])->middleware('AlreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class,'registration'])->middleware('AlreadyLoggedIn');

Route::post('/register-user', [CustomAuthController::class, 'registeruser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginuser'])->name('login-user');

Route::get('/dashboard', [CustomAuthController::class, 'dash'])->middleware('isLoggedIn');
Route::get('/logout', [CustomAuthController::class, 'logout']);

Route::get('/userstable', [CustomAuthController::class, 'show'])->middleware('isLoggedIn');
Route::get('/edit/{id}', [CustomAuthController::class, 'edit'])->name('edit');
Route::put('/update-data/{id}', [CustomAuthController::class, 'update'])->name('update-data');
Route::get('/delete-data/{id}', [CustomAuthController::class, 'delete'])->name('delete-data');
