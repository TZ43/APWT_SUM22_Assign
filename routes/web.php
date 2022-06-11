<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/',[UserController::class,'welcome'])->name('welcome');
// Route::get('/register',function(){
//     return view('user.registration');
// })->name('registration');

Route::get('/register',[UserController::class,'register'])->name('user.register');
Route::post('/register',[UserController::class,'registerAction'])->name('user.register.submit');
Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/login',[UserController::class,'loginAction'])->name('user.login.action');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
Route::get('/user/details/{id}',[UserController::class,'details'])->name('user.details');
