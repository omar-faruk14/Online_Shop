<?php

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




//Backend 
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/Logout','SuperAdminController@logout');





//Categories Route

Route::get('/add_categories','CategoriesController@index');
Route::get('/all_categories','CategoriesController@all_categories');
Route::post('/save_categories','CategoriesController@save_categories');
Route::get('/unactive_category','CategoriesController@unactive_category');

