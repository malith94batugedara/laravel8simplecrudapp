<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/add-employees', [EmployeeController::class, 'create'])->name('employee.create');

Route::post('/store-employees', [EmployeeController::class, 'store'])->name('employee.store');

Route::get('/all-employees', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('/edit-employee/{empid}', [EmployeeController::class, 'edit'])->name('employee.edit');

Route::post('/update-employee/{empid}', [EmployeeController::class, 'update'])->name('employee.update');

Route::get('/delete-employee/{empid}', [EmployeeController::class, 'destroy'])->name('employee.delete');



