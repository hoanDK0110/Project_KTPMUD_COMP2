<?php


Route::get('/header', function(){
    return view('client_layout');
});
// Route::get('/choose-product', "WebCOntroller@choose_cpu");

//backend
//login,regestor


Route::get('/admin-login', 'AdminController@admin_login');
Route::post('/admin-loginned', 'AdminController@admin_loginned');
Route::get('/admin-logout', 'AdminController@admin_login');
Route::get('/admin-layout', 'AdminController@admin_layout');

//Add product
Route::get('/add-laptop', 'AdminController@add_laptop');
Route::get('/add-mainboard', 'AdminController@add_mainboard');
Route::get('/add-cpu', 'AdminController@add_cpu');
Route::get('/add-ram', 'AdminController@add_ram');
Route::get('/add-vga', 'AdminController@add_vga');
Route::get('/add-hd', 'AdminController@add_hd');
Route::get('/add-psu', 'AdminController@add_psu');
Route::get('/add-case', 'AdminController@add_case');
Route::get('/add-monitor', 'AdminController@add_monitor');
Route::get('/add-cooling', 'AdminController@add_cooling');
Route::get('/add-grear', 'AdminController@add_grear');

//Save product
Route::post('/save-laptop', 'AdminController@save_laptop');
Route::post('/save-mainboard', 'AdminController@save_mainboard');
Route::post('/save-cpu', 'AdminController@save_cpu');
Route::post('/save-ram', 'AdminController@save_ram');
Route::post('/save-vga', 'AdminController@save_vga');
Route::post('/save-hd', 'AdminController@save_hd');
Route::post('/save-psu', 'AdminController@save_psu');
Route::post('/save-case', 'AdminController@save_case');
Route::post('/save-monitor', 'AdminController@save_monitor');
Route::post('/save-cooling', 'AdminController@save_cooling');
Route::post('/save-grear', 'AdminController@save_grear');

//Show product
Route::get('/show-laptop', 'AdminController@show_laptop'); 
Route::get('/show-mainboard', 'AdminController@show_mainboard');
Route::get('/show-cpu', 'AdminController@show_cpu');
Route::get('/show-ram', 'AdminController@show_ram');
Route::get('/show-vga', 'AdminController@show_vga');
Route::get('/show-hd', 'AdminController@show_hd');
Route::get('/show-psu', 'AdminController@show_psu');
Route::get('/show-case', 'AdminController@show_case');
Route::get('/show-monitor', 'AdminController@show_monitor');
Route::get('/show-cooling', 'AdminController@show_cooling');
Route::get('/show-grear', 'AdminController@show_grear');

//Avctive
Route::get('/active-product/{product_id}','AdminController@active_product');
Route::get('/active-mainboard/{product_id}','AdminController@active_mainboard');
Route::get('/active-cpu/{product_id}','AdminController@active_cpu');
Route::get('/active-ram/{product_id}','AdminController@active_ram');
Route::get('/active-vga/{product_id}','AdminController@active_vga');
Route::get('/active-hd/{product_id}','AdminController@active_hd');
Route::get('/active-psu/{product_id}','AdminController@active_psu');
Route::get('/active-case/{product_id}','AdminController@active_case');
Route::get('/active-monitor/{product_id}','AdminController@active_monitor');
Route::get('/active-cooling/{product_id}','AdminController@active_cooling');
Route::get('/active-grear/{product_id}','AdminController@active_grear');

//Unactive
Route::get('/unactive-product/{product_id}','AdminController@unactive_product');
Route::get('/unactive-mainboard/{product_id}','AdminController@unactive_mainboard');
Route::get('/unactive-cpu/{product_id}','AdminController@unactive_cpu');
Route::get('/unactive-ram/{product_id}','AdminController@unactive_ram');
Route::get('/unactive-vga/{product_id}','AdminController@unactive_vga');
Route::get('/unactive-hd/{product_id}','AdminController@unactive_hd');
Route::get('/unactive-psu/{product_id}','AdminController@unactive_psu');
Route::get('/unactive-case/{product_id}','AdminController@unactive_case');
Route::get('/unactive-monitor/{product_id}','AdminController@unactive_monitor');
Route::get('/unactive-cooling/{product_id}','AdminController@unactive_cooling');
Route::get('/unactive-grear/{product_id}','AdminController@unactive_grear');

//Edit product
Route::get('/edit-laptop/{product_id}','AdminController@edit_laptop');
Route::get('/edit-mainboard/{product_id}','AdminController@edit_mainboard');
Route::get('/edit-cpu/{product_id}','AdminController@edit_cpu');
Route::get('/edit-ram/{product_id}','AdminController@edit_ram');
Route::get('/edit-vga/{product_id}','AdminController@edit_vga');
Route::get('/edit-hd/{product_id}','AdminController@edit_hd');
Route::get('/edit-psu/{product_id}','AdminController@edit_psu');
Route::get('/edit-case/{product_id}','AdminController@edit_case');
Route::get('/edit-monitor/{product_id}','AdminController@edit_monitor');
Route::get('/edit-cooling/{product_id}','AdminController@edit_cooling');
Route::get('/edit-grear/{product_id}','AdminController@edit_grear');


//Update
Route::post('/update-laptop/{product_id}','AdminController@update_laptop');
Route::post('/update-mainboard/{product_id}','AdminController@update_mainboard');
Route::post('/update-cpu/{product_id}','AdminController@update_cpu');
Route::post('/update-ram/{product_id}','AdminController@update_ram');
Route::post('/update-vga/{product_id}','AdminController@update_vga');
Route::post('/update-hd/{product_id}','AdminController@update_hd');
Route::post('/update-psu/{product_id}','AdminController@update_psu');
Route::post('/update-case/{product_id}','AdminController@update_case');
Route::post('/update-monitor/{product_id}','AdminController@update_monitor');
Route::post('/update-cooling/{product_id}','AdminController@update_cooling');
Route::post('/update-grear/{product_id}','AdminController@update_grear');

//Delete product
Route::get('/delete-product/{product_id}','AdminController@delete_product');

//user
Route::get('/show-user','AdminController@show_user');
Route::get('/edit-user/{user_id}','AdminController@edit_user');
Route::post('/update-user/{user_id}','AdminController@update_user');
Route::get('/delete-user/{user_id}','AdminController@delete_user');
//--Backend

//Fontend

//Login, registor
Route::get('/home','WebController@home');
Route::get('/client-login','WebController@client_login');
Route::post('/client-loginned', 'WebController@client_loginned');
Route::get('/client-logout','WebController@client_logout');


Route::get('/client-registor','WebController@client_registor');
Route::post('/client-registored', 'WebController@client_registored');

//User
Route::get('/user-infor/{user_id}','WebController@user_infor');
Route::post('/user-update/{user_id}','WebController@user_update');

//Search
Route::post('/search', 'WebController@search_product');

//Detail product
Route::get('/home/detail-product/{product_id}', 'WebController@detail_product');



//Built PC
Route::get('/home/built-PC', 'WebController@built_PC');
Route::post('/search-built', 'WebController@search_built');



//Cart
Route::get('/home/cart', 'WebController@cart');


//Add to cart
Route::get('/add-to-cart/{product_id}','WebController@addToCart')->name('addToCart');
Route::get('/home/cart/update-cart', 'WebController@update_cart');

//Delete Cart
Route::get('/home/cart/delete-cart', 'WebController@delete_cart');

//Category product
Route::get('/home/{category}', 'WebController@category');


//--Fontend
