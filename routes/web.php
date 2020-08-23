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

//frontend
Route::get('/','FrontendController@home')->name('homepage');

// Backend

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');


Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');

Route::resource('policies','PolicyController');

Route::resource('claims','ClaimController');



