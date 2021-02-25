<?php

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
//Praktikum 1
//use App\Http\Controllers\HomeController;
//Route::get('/', class () {
//    return view('index');
//});

Auth::routes();
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/elements', [App\Http\Controllers\HomeController::class, 'elements']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);