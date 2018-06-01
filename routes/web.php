<?php


Auth::routes();
Route::get('/', 'BaseController@index');
Route::get('/list', 'HomeController@list');
Route::get('/search', 'BaseController@search');
Route::post('/upload','HomeController@upload');
Route::get('/{dept}/notices', 'BaseController@notice');
Route::get('/{dept}/notifications', 'BaseController@notification');



Route::get('/home', function (){return redirect('/admin');});
Route::get('/admin', 'HomeController@index');
Route::get('/admin/publish','HomeController@create');



Route::get('/admin/dept/list','DeptController@list');
Route::get('/admin/dept/new','DeptController@create');
Route::post('/dept/store','DeptController@store');



Route::get('/test',function (){
    dd(date('YmdHis'));
    return view('test');
});
