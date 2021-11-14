<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SnappypdfController;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ApiController;

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



//snappy
Route::get('/welcome', [SnappypdfController::class, 'welcome']);
Route::get('/id_design', [SnappypdfController::class, 'iddesign']); 
Route::get('/radiantid', [SnappypdfController::class, 'radiantid']);
Route::get('/hzsdegriclg', [SnappypdfController::class, 'hzsdegriclg']);
Route::get('/hzsdegriclgback', [SnappypdfController::class, 'hzsdegriclgback']);
Route::get('/frii', [SnappypdfController::class, 'frii']);
Route::get('/friiback', [SnappypdfController::class, 'friiback']);

Route::get('/api', [ApiController::class, 'api']); 

//array
Route::get('/csvtoarray', [ArrayController::class, 'csvtoarray']);
Route::get('/array', [ArrayController::class, 'array']);
Route::get('/associatve_array', [ArrayController::class, 'associatve_array']);
Route::get('/associatve_array1', [ArrayController::class, 'associatve_array1']);
Route::get('/associatve_array2', [ArrayController::class, 'associatve_array2']);
Route::get('/associatve_array3', [ArrayController::class, 'associatve_array3']);


//crud
Route::resource('products', ProductController::class);
Route::get('/view', [ProductController::class, 'view']);
Route::get('/viewpdf', [ProductController::class, 'viewpdf']);
