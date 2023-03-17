<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;
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
//     return view('welcome');
// });
// SETTINGS
Route::get('/settings',[SettingsController::class, 'index'])->name('settings');
Route::post('/settings',[SettingsController::class, 'store'])->name('settings');
Route::post('/settings',[SettingsController::class, 'show'])->name('settings-edit');
Route::post('/settings',[SettingsController::class, 'update'])->name('settings-update');
// NEWS
Route::get('/news',[NewsController::class, 'index'])->name('news');
Route::post('/news',[NewsController::class, 'store'])->name('news');
Route::get('/main',[NewsController::class, 'showMain'])->name('main');
// MAIN
// Route::get('/',[MainController::class, 'index'])->name('main');
// Route::post('/',[MainController::class, 'store'])->name('main');
// CATEGORY
Route::get('/categories',[CategoriesController::class, 'index'])->name('categories');
Route::post('/categories',[CategoriesController::class, 'store'])->name('categories');
Route::post('/categories/{id}',[CategoriesController::class, 'show'])->name('categories-edit');
Route::patch('/categories/{id}',[CategoriesController::class, 'update'])->name('categories-update');
Route::delete('/categories/{id}',[CategoriesController::class, 'destroy'])->name('categories-destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
