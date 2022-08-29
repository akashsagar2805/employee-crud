<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('employees/create', [EmployeesController::class, 'create']);
// Route::get('employees', [EmployeesController::class, 'index']);
// Route::post('employees', [EmployeesController::class, 'store']);
// Route::get('employees/{id}', [EmployeesController::class, 'show']);
// Route::get('employees/{id}/edit', [EmployeesController::class, 'edit']);
// Route::put('employees/{id}', [EmployeesController::class, 'update']);
// Route::delete('employees/{id}', [EmployeesController::class, 'destroy']);

Route::resource('employees', EmployeesController::class);
