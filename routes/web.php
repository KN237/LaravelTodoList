<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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
    return view('home');
});


Route::get('/todos/index',[TodosController::class,'index']);
Route::get('/todos/create',[TodosController::class,'showCreateForm']);
Route::post('/todos/create',[TodosController::class,'store']);
Route::get('/todos/delete/{id}',[TodosController::class,'destroy']);
Route::get('/todos/show/{id}',[TodosController::class,'show']);
Route::get('/todos/edit/{id}',[TodosController::class,'edit']);
Route::post('/todos/update/{id}',[TodosController::class,'update']);
Route::post('/todos/do/{id}',[TodosController::class,'do']);
