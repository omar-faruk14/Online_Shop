<?php





//Frontend Online_shop...............
Route::get('/','HomeController@index');


/*show specific categorywise View Route*/
Route::get('/show_product_category/{Categories_id}','HomeController@show_product_category');
Route::get('/show_product_manufacture/{Categories_id}','HomeController@show_product_manufacture');
Route::get('/view_product/{product_id}','HomeController@view_product');




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



/*Cart Controller Route*/

Route::post('/add_to_cart','CartController@add_to_cart');
Route::post('/update_plus','CartController@update_plus');
Route::get('/show_cart','CartController@show_cart');
Route::get('/delete_from_cart/{id}','CartController@delete_from_cart');




/*checkout Controller*/
Route::get('/login_check','CheckoutController@login_check');
Route::post('/customer_registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save_shipping_Details','CheckoutController@save_shipping_Details');
Route::get('/payment','CheckoutController@payment');
Route::get('/customer_logout','CheckoutController@customer_logout');
Route::post('/customer_login','checkoutController@customer_login');
Route::post('/order_place','checkoutController@order_place');



/*Manage Order Controller All web route*/

Route::get('/manage_order','ManageOrderController@manage_order');
Route::get('/active_order/{order_id}','ManageOrderController@active_order');
Route::get('/unactive_order/{order_id}','ManageOrderController@unactive_order');
Route::get('/delete_order/{order_id}','ManageOrderController@delete_order');












