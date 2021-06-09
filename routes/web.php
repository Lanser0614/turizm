<?php

use App\Http\Controllers\TourCategoryController;
use App\Http\Controllers\TourController;
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

Route::get('/', [TourCategoryController::class, 'index']);

Route::get('tour-list', [TourCategoryController::class, 'tour_list']);

Route::get('tour-single-list', [TourCategoryController::class, 'tour_single_list']);

Route::get('tour/{id}', [TourCategoryController::class, 'tour']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addCotegory', [App\Http\Controllers\HomeController::class, 'addCategory']);
Route::get('/addTour', [App\Http\Controllers\HomeController::class, 'addTour']);
Route::post('storeTourCategory', [TourCategoryController::class, 'storeTourCategory'])->name('storeTourCategory');
Route::post('storeTour', [TourController::class, 'storeTour'])->name('storeTour');
Route::get('showCategory/{id}', [TourCategoryController::class, 'showCategory']);
Route::post('updateCategory', [TourCategoryController::class, 'updateCategory'])->name('updateCategory');