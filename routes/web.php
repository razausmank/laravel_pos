<?php

use Illuminate\Support\Facades\Route;


// Pade Module Routes
Route::resource('page', 'PageController');
Route::get('page-hierarchy', 'PageController@pageHierarchy')->name('page.page_hierarchy');
Route::post('/update-page-hierarchy','PageController@updatePageHierarchy')->name('page.update_page_hierarchy');

// User Module Routes
Route::resource('user', 'UserController');
Route::get('user/page-permissions/{user}', 'UserController@pagePermissions')->name('user.page_permissions');
Route::post('/update-page-permissions/{user}','UserController@updatePagePermissions')->name('user.update_page_permissions');



Route::resource('usertype', 'UserTypeController');



Route::get('/', function () {


    return view('index');
});


// testing routes

Route::post('/testing_post_route','MainController@testing_post_route')->name('testing_post_route');
