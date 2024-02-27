<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodSearchController;
use App\Http\Controllers\FoodDetailController;

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



Route::get('/', function(){
    return view('viewNutrient.search');
});


Route::get('/food-detail/{id}', [FoodDetailController::class, 'show']);

Route::get('/food-search', [FoodSearchController::class, 'search'])->name('food.search');

