<?php

use App\Http\Controllers\VehiclesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/vehicles', [VehiclesController::class, 'index'])->name('vehicles');
Route::post('/vehicles', [VehiclesController::class, 'store'])->name('vehicles');
Route::get('/vehicles/{id}', [TodosController::class, 'show'])->name('vehicles-edit');
Route::patch('/vehicles/{id}', [TodosController::class, 'update'])->name('vehicles-update');
Route::delete('/vehicles/{id}', [TodosController::class, 'destroy'])->name('vehicles-destroy');
