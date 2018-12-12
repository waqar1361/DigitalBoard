<?php

Auth::routes();
Route::get('set/cookies', 'pageController@cookies');


/*
 *      BASIC ROUTES
 */

Route::get('/', 'PageController@index')->name('home');
Route::get('faqs', 'FAQController@index');
Route::get('faqs/{faq}', 'FAQController@show');


/*
 *      FAQ's ROUTES
 */

Route::get('support', 'FAQController@createQuestion');
Route::post('support', 'FAQController@storeQuestion');


/*
 *      DOCUMENTS
 */

Route::get('browse', 'DocumentController@browse');
Route::get('browse/{document}', 'DocumentController@show');
Route::get('download/{document}', 'DocumentController@download');
Route::redirect('documents', 'browse');

Route::post('documents', 'DocumentController@store')->name('store.doc');
Route::get('documents/{document}', 'DocumentController@open');


/*
 *      DEPARTMENT
 */

Route::get('departments', 'DepartmentController@index')->name('Departments');
Route::post('departments', 'DepartmentController@store')->name('store.dept');


/*
 *      ADMIN
 */

Route::prefix('admin')->group(function() {
    Route::redirect('home','dashboard');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('dashboard', 'AdminController@index')->name('admin.home');
    Route::get('publish', 'AdminController@publish')->name('create.publish');
    Route::get('department/create', 'AdminController@createDepartment')->name('admin.create.dept');
    Route::get('document/publish', 'AdminController@createDocument')->name('admin.create.doc');
    Route::get('faqs', 'FAQController@faqs')->name('admin.faqs');
    Route::get('faqs/{faq}', 'FAQController@createAnswer')->name('admin.show.faqs');
    Route::patch('faqs/{faq}/answer', 'FAQController@storeAnswer')->name('admin.store.answer');
});

//Route::view('test', 'test');