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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/home/admin', 'HomeController@admin')->name('home.admin');
Route::get('/home/employer', 'HomeController@employer')->name('home.employer');

Route::get('/employer/list', 'EmployerController@index')->name('employer.index');
Route::get('/employer/add', 'EmployerController@add')->name('employer.add');
Route::post('/employer/add', 'EmployerController@store');
Route::get('/employer/edit/{id}', 'EmployerController@edit')->name('employer.edit');
Route::post('/employer/edit/{id}', 'EmployerController@update');
Route::get('/employer/delete/{id}', 'EmployerController@delete')->name('employer.delete');