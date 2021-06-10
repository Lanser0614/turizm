<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteDetailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TourCategoryController;
use App\Http\Controllers\TourController;
use App\Models\SiteDetail;
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
Route::get('tour_single_list_two', [TourCategoryController::class, 'tour_single_list_two']);

Route::get('tour/{id}', [TourCategoryController::class, 'tour']);

Route::get('about', [TourCategoryController::class, 'about']);
Route::get('contact', [TourCategoryController::class, 'contact']);

Route::post('storeContact', [ContactController::class, 'storeContact'])->name('storeContact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addCotegory', [App\Http\Controllers\HomeController::class, 'addCategory']);
Route::get('/addTour', [App\Http\Controllers\HomeController::class, 'addTour']);
Route::post('storeTourCategory', [TourCategoryController::class, 'storeTourCategory'])->name('storeTourCategory');
Route::post('storeTour', [TourController::class, 'storeTour'])->name('storeTour');
Route::get('showCategory/{id}', [TourCategoryController::class, 'showCategory']);
Route::post('updateCategory', [TourCategoryController::class, 'updateCategory'])->name('updateCategory');
Route::get('delete/{id}', [TourCategoryController::class, 'destroy']);

Route::get('updateTour/{id}', [TourController::class, 'updateTour']);
Route::post('updateTour', [TourController::class, 'update'])->name('update');
Route::get('deleteTour/{id}', [TourController::class, 'destroy']);

Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback');


Route::get('siteDetail', [HomeController::class, 'siteDetail']);

Route::post('storeDSetail', [SiteDetailController::class, 'storeDSetail'])->name('storeDSetail');
Route::get('showDetail/{id}', [SiteDetailController::class, 'showDetail']);
Route::post('update', [SiteDetailController::class, 'updateDSetail'])->name('updateDSetail');

Route::get('test', [SiteDetailController::class, 'putDetail']);









//test
Route::get('test', [TestController::class, 'test']);
Route::post('testStore', [TestController::class, 'testStore'])->name('testStore');
Route::get('total', [TestController::class, 'total']);