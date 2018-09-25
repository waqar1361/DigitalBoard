<?php


Auth::routes();

/*
 *      BASE CONTROLLER ROUTES
 */
Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@aboutUs');
//Route::get('contact', 'PageController@contactUs');
Route::get('browse', 'PageController@search');
Route::get('browse/{document}', 'DocumentController@browse');
Route::get('download/{document}', 'DocumentController@download');
Route::get('admin','AdminController@index');

/*
 *      DOCUMENTS
 */

Route::get('documents','DocumentController@index');
Route::get('documents/create','DocumentController@create');
Route::post('documents','DocumentController@store');
Route::get('documents/{document}','DocumentController@show');

/*
 *      DEPARTMENT
 */

Route::get('departments','DepartmentController@index');
Route::get('departments/create','DepartmentController@create');
Route::post('departments','DepartmentController@store');


Route::view('test','test');