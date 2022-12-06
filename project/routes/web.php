<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',[UserController::class,'index'])->name('home');
Route::get('home/{user}/edit',[UserController::class,'edit'])->name('home.edit');
Route::put('home/{user}/update',[UserController::class,'update'])->name('home.update');
Route::delete('home/{user}/delete',[UserController::class,'delete'])->name('home.delete');
Route::get('home/{user}/ShowAdd',[UserController::class,'show'])->name('home.ShowAdd');
Route::post('home/{user}/ShowAdd',[UserController::class,'create']);

