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
    return view('users.login');
})->name('login');
Route::post('/loginAction', [UsersController::class, 'Login']);



Route::middleware('auth')->group(function () {
    Route::get('/logout', [UsersController::class, 'logout']);
    Route::get('/dashboard', [UsersController::class, 'Dashboard']);
    Route::get('/grades', [GradeController::class, 'showGrades'])->name('grades.show');
    Route::middleware('admin')->group(function () {
        // action proformed on users
        Route::controller(UsersController::class)->group(function(){
            Route::get('/listUsers', 'listUsers');
            Route::get('/delete/{id}', 'delete');
            Route::get('/Refuse/{id}', 'Refuse');
            Route::get('/Accept/{id}', 'Accept');
            Route::get('/Attent/{id}', 'Attent');
        });

        // action proformed on grades
        //this route is used to show the form to add the grades to stu dents from the selected fillier and shoos the module
        Route::match(['get', 'post'], '/selectFillier', [GradeController::class, 'selectFillier'])->name('grades.select');
        Route::controller(GradeController::class)->group(function(){
            //this route is the old route  used to store the grades
            Route::post('/gradeStore', 'store')->name('grades.store');
            //this route is used to show the form to shoos the fillier
            Route::get('grades/select', 'selectFillierView')->name('grades.selectView');

        });
        // action proformed on filliers
        Route::controller(FillierController::class)->group(function(){
            Route::POST('/AddFilliers/store', 'store')->name('filliers.store');
            Route::get('/AddFilliers', 'addView')->name('filliers.add');
            Route::get('/filiers/{id}/modules', 'showModules')->name('filiers.modules');
            Route::get('/filliers', 'index')->name('fillier.index');
        });

        // action performed on modules
        Route::controller(ModuleController::class)->group(function(){
            Route::post('/modules', 'store')->name('modules.store');
            Route::get('/modules/add', 'add')->name('modules.add');
        });
    });
});
