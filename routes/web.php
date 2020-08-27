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
Route::get('checkout','FrontendController@checkout')->name('checkoutpage');

Route::get('plans','FrontendController@plans')->name('planspage');


// Backend
Route::middleware('role:admin')->group(function(){
Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');


Route::resource('categories','CategoryController');

});
Route::resource('subcategories','SubcategoryController');

Route::resource('claims','ClaimController');



Route::resource('policies','PolicyController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
