<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
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
Route::get('/news',[NewsController::class, 'index'])->name('news');
Route::post('/news',[NewsController::class, 'store'])->name('news');
Route::get('/',[MainController::class, 'index'])->name('main');
Route::post('/',[MainController::class, 'store'])->name('main');
// Route::get('/tasks/{id}',[TodosController::class, 'show'])->name('todos-edit');
// Route::patch('/tasks/{id}',[TodosController::class, 'update'])->name('todos-update');
// Route::delete('/tasks/{id}',[TodosController::class, 'destroy'])->name('todos-destroy');