<?php


Auth::routes();

/*
 *      BASE CONTROLLER ROUTES
 */
Route::get('/', 'PageController@index')->name('home');
//Route::get('about', 'PageController@aboutUs');
//Route::get('contact', 'PageController@contactUs');
Route::get('admin', 'PageController@admin');

/*
 *      DOCUMENTS
 */

Route::get('browse', 'DocumentController@browse');
Route::get('browse/{document}', 'DocumentController@show');
Route::get('download/{document}', 'DocumentController@download');

Route::get('documents', 'DocumentController@index');
Route::get('documents/create', 'DocumentController@create');
Route::post('documents', 'DocumentController@store');
Route::get('documents/{document}', 'DocumentController@open');


/*
 *      DEPARTMENT
 */

Route::get('departments', 'DepartmentController@index');
Route::get('departments/create', 'DepartmentController@create');
Route::post('departments', 'DepartmentController@store');


Route::view('test', 'test');