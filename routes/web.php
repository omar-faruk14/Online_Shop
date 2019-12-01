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



//Frontend Online_shop...............
Route::get('/','HomeController@index');


/*shoe categorywise View Route*/
Route::get('/show_product_category/{Categories_id}','HomeController@show_product_category');




//Backend 
Route::get('/admin','AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/Logout','SuperAdminController@logout');



//Categories Route
Route::get('/add_categories','CategoriesController@index');
Route::get('/all_categories','CategoriesController@all_categories');
Route::post('/save_categories','CategoriesController@save_categories');
Route::get('/unactive_category/{Categories_id}','CategoriesController@unactive_category');
Route::get('/active_category/{Categories_id}','CategoriesController@active_category');
Route::get('/edit_category/{Categories_id}','CategoriesController@edit_category');
Route::post('/update_category/{Categories_id}','CategoriesController@update_category');
Route::get('/delete_category/{Categories_id}','CategoriesController@delete_category');




//Manufacture or Brand Route
Route::get('/add_manufacture','ManufactureController@index');
Route::post('/save_manufacture','ManufactureController@save_manufacture');
Route::get('/all_manufacture','ManufactureController@all_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');
Route::get('/edit_manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update_manufacture/{manufacture_id}','ManufactureController@update_manufacture');
Route::get('/delete_manufacture/{manufacture_id}','ManufactureController@delete_manufacture');


// Product route
Route::get('/add_product','productController@index');
Route::get('/all_product','productController@all_product');
Route::post('/save_product','productController@save_product');
Route::get('/unactive_product/{product_id}','productController@unactive_product');
Route::get('/active_product/{product_id}','productController@active_product');
Route::get('/delete_product/{product_id}','productController@delete_product');








