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

Route::get('/', function () {
    return redirect('/consume/view');
});


Route::get('/consume/view','App\Http\Controllers\consumeapi@index')->name('consume.index');
Route::post('/consume/search', 'App\Http\Controllers\consumeapi@getbykey')->name('consume.search');
Route::get('/consume/category/{category}','App\Http\Controllers\consumeapi@getbycategory')->name('consume.category');