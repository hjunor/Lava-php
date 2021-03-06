<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin');

Route::get('/product/new',[App\Http\Controllers\ProdutosController::class, 'create'])->name('product');

Route::get('/product/list',[App\Http\Controllers\ProdutosController::class, 'index'])->name('product');

Route::post('/product/create',[App\Http\Controllers\ProdutosController::class, 'store'])->name('create_product');

Route::delete('/product/{id}',[App\Http\Controllers\ProdutosController::class, 'destroy']);

Route::get('/product/edit/{id}',[App\Http\Controllers\ProdutosController::class, 'edit']);

Route::put('/product/update/{id}',[App\Http\Controllers\ProdutosController::class, 'update']);
