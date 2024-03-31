<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\FillierController;
use App\Http\Controllers\ModuleController;
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
Route::get('/register', [UsersController::class, 'RegisterView']);
Route::post('/RegisterAction', [UsersController::class, 'Register']);

//login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/loginAction', [UsersController::class, 'Login']);



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UsersController::class, 'Dashboard']);
    Route::get('/logout', [UsersController::class, 'logout']);
    Route::middleware('admin')->group(function () {
        Route::get('/listUsers', [UsersController::class, 'listUsers']);
        Route::get('/delete/{id}', [UsersController::class, 'delete']);
        Route::get('/Refuse/{id}', [UsersController::class, 'Refuse']);
        Route::get('/Accept/{id}', [UsersController::class, 'Accept']);
        Route::get('/Attent/{id}', [UsersController::class, 'Attent']);
        Route::post('/gradeStore', [GradeController::class, 'store'])->name('grades.store');
        Route::get('/grades/add', [GradeController::class, 'storeView'])->name('storeView');
        Route::post('/AddFilliers/store', [FillierController::class, 'store'])->name('filliers.store');
        Route::get('/AddFilliers', function () {
            return view('AddFillier');
        });
        Route::get('/filiers/{id}/modules', [FillierController::class, 'showModules'])->name('filiers.modules');
        Route::get('/filliers', [FillierController::class, 'index'])->name('fillier.index');
        Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
        Route::get('/modules/add', [ModuleController::class, 'add'])->name('modules.add');

    });
});
