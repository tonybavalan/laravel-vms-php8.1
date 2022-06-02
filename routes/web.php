<?php

use Illuminate\Support\Facades\Route;
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

    Route::get('settings/departments', [SettingController::class, 'indexDepartment'])->name('department');
    Route::post('settings/departments', [SettingController::class, 'storeDepartment']);
    Route::get('settings/roles', [SettingController::class, 'indexRole'])->name('role');
    Route::post('settings/roles', [SettingController::class, 'storeRole']);

    Route::get('employees/index', [EmployeeController::class, 'indexEmployees'])->name('employees.list');
    Route::get('employees/create', [EmployeeController::class, 'indexAddEmployees'])->name('employees.add');    
    Route::post('employees/create', [EmployeeController::class, 'store']);
    Route::get('employees/index/{id}', [EmployeeController::class, 'show'])->name('employees.show');

    Route::post('logout', [SessionController::class, 'destroy'])->name('logout');
    
});