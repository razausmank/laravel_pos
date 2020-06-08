<?php

use Illuminate\Support\Facades\Route;


// Pade Module Routes
Route::get('admin/page/page-hierarchy', 'Admin\PageController@pageHierarchy')->name('page.page_hierarchy');
Route::post('admin/page/update-page-hierarchy','Admin\PageController@updatePageHierarchy')->name('page.update_page_hierarchy');
Route::resource('admin/page', 'Admin\PageController');


// User Module Routes
Route::resource('admin/user', 'Admin\UserController');
Route::get('admin/user/page-permissions/{user}', 'Admin\UserController@pagePermissions')->name('user.page_permissions');
Route::post('admin/user/update-page-permissions/{user}','Admin\UserController@updatePagePermissions')->name('user.update_page_permissions');

Route::resource('admin/usertype', 'Admin\UserTypeController');

//Product Category Routes
Route::resource('productcategory', 'ProductCategoryController');

//Product Category Routes
Route::resource('product', 'ProductController');

//Product Category Routes
Route::resource('productstock', 'ProductStockController');


//Main controller
Route::get('/home', 'MainController@home')->name('home');

// testing routes

Route::post('/testing_post_route','MainController@testing_post_route')->name('testing_post_route');
Route::get('/testing', 'MainController@testing')->name('testing');

Auth::routes();

