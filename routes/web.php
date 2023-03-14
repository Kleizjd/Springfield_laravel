<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\VehiclesController;
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

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/vehicles',[VehiclesController::class, 'index'])->name('vehicles');
Route::post('/vehicles',[VehiclesController::class, 'store'])->name('vehicles');
Route::get('/config',[ConfigController::class, 'index'])->name('config');
Route::post('/config',[ConfigController::class, 'store'])->name('config');
Route::get('/notices',[NoticesController::class, 'index'])->name('notices');
Route::post('/notices',[NoticesController::class, 'store'])->name('notices');
Route::get('/',[MainController::class, 'index'])->name('main');
Route::post('/',[MainController::class, 'store'])->name('main');
// Route::get('/tasks/{id}',[TodosController::class, 'show'])->name('todos-edit');
// Route::patch('/tasks/{id}',[TodosController::class, 'update'])->name('todos-update');
// Route::delete('/tasks/{id}',[TodosController::class, 'destroy'])->name('todos-destroy');