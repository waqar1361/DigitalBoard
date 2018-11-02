<?php

Auth::routes();

/*
 *      BASIC ROUTES
 */

Route::get('/', 'PageController@index')->name('home');
Route::get('faqs', 'FAQController@index');
Route::get('faqs/{faq}', 'FAQController@show');
Route::get('admin', 'PageController@admin');


/*
 *      FAQ's ROUTES
 */

Route::get('admin/faqs', 'PageController@faqs');
Route::get('support', 'FAQController@createQuestion');
Route::post('support', 'FAQController@storeQuestion');
Route::get('admin/faqs/{faq}', 'FAQController@createAnswer');
Route::post('faqs/{faq}/answer', 'FAQController@storeAnswer');


/*
 *      DOCUMENTS
 */

Route::get('browse', 'DocumentController@browse');
Route::get('browse/{document}', 'DocumentController@show');
Route::get('download/{document}', 'DocumentController@download');
Route::redirect('documents', 'browse');
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