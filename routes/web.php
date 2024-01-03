<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::get('/login',[AuthController::class,'loginIndex'])->name('login.index');
Route::get('/register',[AuthController::class,'registerIndex'])->name('register.index');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::prefix('admin')->middleware('admin.auth')->group(function(){
        Route::get('/',function(){
            return view('admin.home');
        });

        Route::resource("/categories",CategoryController::class,["as"=>"admin"]);
    });

    Route::prefix('user')->middleware('user.auth')->group(function(){
        Route::get('/',function(){
            return view('home');
        });
    });
});
