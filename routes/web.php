<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>'web'],function(){
    Route::group(['middleware' => 'auth'],function(){
        Route::get('/home', [FoodController::class, 'home'])->name('food.home');
        Route::post('/home', [FoodController::class, 'include'])->name('food.include');

    });

    Route::group(['middleware' => 'guest'],function(){
        Route::get('/', [FoodController::class, 'login'])->name('food.login');
        Route::post('/', [FoodController::class, 'logstore'])->name('food.logstore');
        Route::get('/register', [FoodController::class, 'register'])->name('food.register');
        Route::post('/register', [FoodController::class, 'regstore'])->name('food.regstore');
    });

});






