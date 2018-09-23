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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'Admin\UsersController')->except(['destroy']);
Route::get('users/{id}', 'Admin\UsersController@destroy')->name('users.destroy');

Route::get('verify/{id}', 'Admin\UsersController@verify')->name('verify');
Route::get('unverify/{id}', 'Admin\UsersController@unverify')->name('unverify');

Route::get('active/{id}', 'Admin\UsersController@active')->name('active');
Route::get('deactive/{id}', 'Admin\UsersController@deactive')->name('deactive');

Route::get('admin/{id}', 'Admin\UsersController@admin')->name('admin');
Route::get('regular/{id}', 'Admin\UsersController@regular')->name('regular');

Route::get('setting/change-pass', 'Admin\UsersController@setting')->name('setting');
Route::put('change-pass', 'Admin\UsersController@changePass')->name('changePass');
