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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();


Route::get('/donvi', [App\Http\Controllers\DonviController::class, 'index']);
Route::post('/themdonvi', [App\Http\Controllers\DonviController::class, 'them']);
Route::get('/suadonvi/{id}', [App\Http\Controllers\DonviController::class, 'sua']);
Route::post('/capnhatdonvi/{id}', [App\Http\Controllers\DonviController::class, 'capnhat']);
Route::get('/xoadonvi/{id}', [App\Http\Controllers\DonviController::class, 'xoa']);

Route::get('/phongban', [App\Http\Controllers\PhongbanController::class, 'index']);
Route::post('/themphongban', [App\Http\Controllers\PhongbanController::class, 'them']);
Route::get('/suaphongban/{id}', [App\Http\Controllers\PhongbanController::class, 'sua']);
Route::post('/capnhatphongban/{id}', [App\Http\Controllers\PhongbanController::class, 'capnhat']);
Route::get('/xoaphongban/{id}', [App\Http\Controllers\PhongbanController::class, 'xoa']);

Route::get('/congvan', [App\Http\Controllers\CongvanController::class, 'index']);
Route::post('/themcongvan', [App\Http\Controllers\CongvanController::class, 'them']);
Route::get('/suacongvan/{id}', [App\Http\Controllers\CongvanController::class, 'sua']);
Route::post('/capnhatcongvan/{id}', [App\Http\Controllers\CongvanController::class, 'capnhat']);
Route::get('/xoacongvan/{id}', [App\Http\Controllers\CongvanController::class, 'xoa']);
Route::get('/xemcongvan/{id}', [App\Http\Controllers\CongvanController::class, 'xem']);
Route::get('/taicongvan/{id}', [App\Http\Controllers\CongvanController::class, 'tai']);
Route::get('/congvanlienquan/{id}', [App\Http\Controllers\CongvanController::class, 'congvanlienquan']);

Route::get('/chitieu', [App\Http\Controllers\ChitieuController::class, 'index']);
Route::post('/themchitieu', [App\Http\Controllers\ChitieuController::class, 'them']);
Route::get('/suachitieu/{id}', [App\Http\Controllers\ChitieuController::class, 'sua']);
Route::post('/capnhatchitieu/{id}', [App\Http\Controllers\ChitieuController::class, 'capnhat']);
Route::get('/xoachitieu/{id}', [App\Http\Controllers\ChitieuController::class, 'xoa']);

Route::get('/chitieucongvan', [App\Http\Controllers\ChitieucongvanController::class, 'index']);
Route::post('/themchitieucongvan', [App\Http\Controllers\ChitieucongvanController::class, 'them']);
Route::get('/suachitieucongvan/{id}', [App\Http\Controllers\ChitieucongvanController::class, 'sua']);
Route::post('/capnhatchitieucongvan/{id}', [App\Http\Controllers\ChitieucongvanController::class, 'capnhat']);
Route::get('/xoachitieucongvan/{id}', [App\Http\Controllers\ChitieucongvanController::class, 'xoa']);
Route::get('/lietkechitieucongvan', [App\Http\Controllers\ChitieucongvanController::class, 'lietke']);