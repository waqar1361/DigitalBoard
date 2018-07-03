<?php


Auth::routes();

/*
 *      BASE CONTROLLER ROUTES
 */
Route::get('/', 'PageController@index')->name('home');
Route::get('/about', 'PageController@aboutUs');
Route::get('/contact', 'PageController@contactUs');
Route::get('/search', 'PageController@search');
Route::get('/download/{path}', 'PageController@download');
Route::get('dept/{dept}','PageController@byDept');
/* NOTICES */
Route::get('/notices', 'PageController@notices');
Route::get('/notices/{dept}/{path}', 'PageController@pdf');
/* NOTIFICATIONS */
Route::get('/notifications', 'PageController@notifications');
Route::get('/notifications/{dept}/{path}', 'PageController@pdf');

/*
 *      HOME CONTROLLER ROUTES
 *      NEED AUTH USER
 */

Route::get('/admin', 'HomeController@index');
Route::get('/admin/publish', 'HomeController@create');
Route::post('/upload', 'HomeController@upload');


Route::get('/admin/depts', 'DeptController@list');
Route::get('/admin/dept/create', 'DeptController@create');
Route::post('/dept/store', 'DeptController@store');
