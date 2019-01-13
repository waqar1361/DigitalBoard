<?php

Auth::routes();
Route::get('set/cookies', 'pageController@cookies');
Route::get('/', 'PageController@index')->name('home');
Route::get('faqs', 'FAQController@index');
Route::get('faqs/{faq}', 'FAQController@show');
Route::get('support', 'FAQController@createQuestion');
Route::post('support', 'FAQController@storeQuestion');
Route::get('browse', 'DocumentController@browse');
Route::get('browse/{document}', 'DocumentController@show');
Route::get('download/{document}', 'DocumentController@download');
Route::redirect('documents', 'browse');
Route::post('documents', 'DocumentController@store')->name('store.doc');
Route::get('documents/{document}', 'DocumentController@open');
Route::get('departments', 'DepartmentController@index')->name('Departments');
Route::post('departments', 'DepartmentController@store')->name('store.dept');

Route::prefix('admin')->group(function() {
    Route::redirect('home','dashboard');
    Route::get('dashboard', 'AdminController@index')->name('admin.home');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('department/create', 'DepartmentController@create')->name('admin.create.dept');
    Route::get('document/publish', 'DocumentController@create')->name('admin.create.doc');
    Route::get('documents', 'AdminController@show')->name('admin.show.docs');
    Route::get('document/pending', 'AdminController@pending')->name('admin.pending');
    Route::get('document/blocked', 'AdminController@blocked')->name('admin.blocked.doc');
    Route::patch('document/{document}/publish', 'AdminController@publish')->name('admin.allow.doc');
    Route::patch('document/{document}/block', 'AdminController@block')->name('admin.block.doc');
    Route::patch('document/{document}/unblock', 'AdminController@unblock')->name('admin.unblock.doc');
    Route::delete('document/{document}', 'AdminController@destroy')->name('destroy.doc');
    Route::get('faqs', 'FAQController@faqs')->name('admin.faqs');
    Route::get('faqs/{faq}', 'FAQController@createAnswer')->name('admin.show.faqs');
    Route::patch('faqs/{faq}/answer', 'FAQController@storeAnswer')->name('admin.store.answer');
});

Route::prefix('users')->group(function() {
    Route::get('home', 'UserController@home')->name('users.home');
    Route::get('departments', 'UserController@departments')->name('users.departments');
    Route::get('bookmarks', 'UserController@bookmarks')->name('users.bookmarks');
    Route::get('follow/department/{department}', 'UserController@followDepartment')->name('dept.follow');
    Route::get('unfollow/department/{department}', 'UserController@unfollowDepartment')->name('dept.unfollow');
    Route::post('settings', 'UserController@updateSettings')->name('store.users.settings');
    Route::get('bookmark/document/{document}','UserController@bookmarkAttach')->name('bookmark.document');
    Route::get('unmark/document/{document}','UserController@bookmarkDetach')->name('unmark.document');
});
