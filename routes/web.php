<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GradeController;
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



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UsersController::class, 'Dashboard']);
    Route::get('/logout', [UsersController::class, 'logout']);
    Route::middleware('admin')->group(function(){
        Route::get('/listUsers', [UsersController::class, 'listUsers']);
        Route::get('/delete/{id}', [UsersController::class, 'delete']);
        Route::get('/Refuse/{id}', [UsersController::class, 'Refuse']);
        Route::get('/Accept/{id}', [UsersController::class, 'Accept']);
        Route::get('/Attent/{id}', [UsersController::class, 'Attent']);
        Route::post('/gradeStore', [GradeController::class, 'store'])->name('grades.store');
        Route::get('/grades', [GradeController::class, 'storeView'])->name('storeView');
    });
});