<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\SessionController;

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

Route::middleware('guest')->group(function () {

    Route::get('login', [SessionController::class, 'index'])->name('login');
    Route::post('login', [SessionController::class, 'store']);

});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('employees')->name('employees.')->group(function () {
        Route::get('index', [EmployeeController::class, 'indexEmployees'])->name('index');
        Route::get('create', [EmployeeController::class, 'indexAddEmployees'])->name('create');    
        Route::post('store', [EmployeeController::class, 'store']);
        Route::get('employees/index/{id}', [EmployeeController::class, 'show'])->name('show');
    });

    Route::prefix('settings')->group(function () {
        Route::get('departments', [SettingController::class, 'indexDepartment'])->name('department');
        Route::post('departments', [SettingController::class, 'storeDepartment']);
        Route::get('roles', [SettingController::class, 'indexRole'])->name('role');
        Route::post('roles', [SettingController::class, 'storeRole']);
    });

    Route::prefix('sites')->name('sites.')->group(function () {
        Route::get('index', [SiteController::class, 'index'])->name('index');
        Route::get('create', [SiteController::class, 'create'])->name('create');    
        Route::post('store', [SiteController::class, 'store']);
    });

    Route::post('logout', [SessionController::class, 'destroy'])->name('logout');
    
});