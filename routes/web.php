<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RekamController;
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


Route::get('/formulir', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/medics', [RekamController::class, 'index']);
Route::get('/medics/{medic:slug}', [RekamController::class, 'contents']);

Route::get('doctors/', [CategoryController::class, 'index']);
Route::get('doctors/{doctor:username}', [CategoryController::class, 'contents']);

Route::get('patients/', [UserController::class, 'index']);
Route::get('patients/{patient:username}', [UserController::class, 'contents']);