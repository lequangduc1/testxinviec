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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\home@trangchu'); 
Route::get('nextjoke/{ID_Product}','App\Http\Controllers\home@nextjoke'); 
Route::get('like/{ID_Product}','App\Http\Controllers\home@like'); 
Route::get('notlike/{ID_Product}','App\Http\Controllers\home@notlike'); 