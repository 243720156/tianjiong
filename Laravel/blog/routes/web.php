<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('/index');
// });
		
	//路径名可以自定义 , 后面跟要路由到的 控制器@方法

Route::prefix('Song')->namespace('Home')->group(function () {
    Route::get('index','SongController@index');
    Route::get('create','SongController@create');
});

//官网首页
Route::prefix('Zjtj')->namespace('Zjtj')->group(function () {
    Route::get('index','ZjtjController@index');
    Route::post('join','ZjtjController@join');
});

//后台管理
Route::prefix('Admin')->namespace('Admin')->group(function () {
    Route::get('index','AdminController@index');
    Route::get('create','AdminController@create');
    Route::get('delete/{id}','AdminController@delete');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
