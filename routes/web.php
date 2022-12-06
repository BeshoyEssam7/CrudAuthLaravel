<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

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
// Route::get('/',[AuthController::class,'loginForm'])->middleware('guest');



//show
Route::get('/categories',[CategoryController::class,'show'])->middleware('auth');
Route::get('/category/{id}',[CategoryController::class,'showDetails'])->middleware('auth');

//add

Route::get('/add/category',[CategoryController::class,'add']) ->middleware('auth') ;
Route::post('/store',[CategoryController::class,'store']) ->middleware('auth');

//update
Route::get('/edit/{id}',[CategoryController::class,'edit'])->middleware('auth');
Route::put('/update/category/{id}',[CategoryController::class,'update'])->middleware('auth');

//delete
Route::delete('/delete/category/{id}',[CategoryController::class,'delete'])->middleware('auth');

//register
Route::get('/register',[AuthController::class,'registerForm'])->middleware('guest');
Route::post('/register',[AuthController::class,'register'])->middleware('guest');

//login
Route::get('/login',[AuthController::class,'loginForm'])->middleware('guest');
Route::post('/login',[AuthController::class,'login'])->middleware('guest');

//logout
Route::post('/logout',[AuthController::class,'logout'])->middleware("auth");




