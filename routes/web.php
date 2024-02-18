<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
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
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});


Route::get('/list-karyawan', [EmployeeController::class, 'viewAll']);
Route::get('/karyawan/{employee:id}', [EmployeeController::class, 'view']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/karyawan/{employee:id}', [DashboardController::class, 'show']);
Route::get('/add-karyawan', [DashboardController::class, 'create']);
Route::post('/store-karyawan', [DashboardController::class, 'store']);
Route::get('/edit-karyawan/{employee:id}', [DashboardController::class, 'edit']);
Route::patch('/update-karyawan/{employee:id}', [DashboardController::class, 'update']);
Route::delete('/delete-karyawan/{employee:id}', [DashboardController::class, 'delete']);