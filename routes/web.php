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
Route::get('login','FrontendController@login')->name('loginpage');
Route::get('register','FrontendController@register')->name('registerpage');
Route::get('about','FrontendController@about')->name('aboutpage');
Route::get('contact','FrontendController@contact')->name('contactpage');
Route::get('life','FrontendController@life')->name('lifepage');
Route::get('health','FrontendController@health')->name('healthpage');
Route::get('fire','FrontendController@fire')->name('firepage');
Route::get('bike','FrontendController@bike')->name('bikepage');
Route::get('car','FrontendController@car')->name('carpage');

Route::get('commercial','FrontendController@commercial')->name('commercialpage');
Route::get('vehicle','FrontendController@vehicle')->name('vehiclepage');
Route::get('firec','FrontendController@firec')->name('firecpage');
Route::get('crime','FrontendController@crime')->name('crimepage');
Route::get('building','FrontendController@building')->name('buildingpage');








// Backend

Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');


Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');

Route::resource('policies','PolicyController');

Route::resource('claims','ClaimController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
