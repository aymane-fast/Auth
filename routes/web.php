<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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
//register 
Route::get('/register',function() {
    return view('register');
});
Route::post('/RegisterAction', [UsersController::class, 'Register']);

//login
Route::get('/login', function(){
    return view('login');
});
Route::post('/loginAction', [UsersController::class, 'Login']);

Route::get('/dashboard', [UsersController::class, 'Dashboard']);