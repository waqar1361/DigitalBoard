<?php


Auth::routes();
Route::get('/', 'BaseController@index');
Route::get('/admin/create','HomeController@create');
