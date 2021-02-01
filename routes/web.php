<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/student', 'UsersController@studentIndex');
Route::get('/teacher', 'UsersController@teacherIndex');

Route::get('admin/login', 'admin\LoginController@loginForm');
Route::post('admin/login', 'admin\LoginController@login');
Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function() {	
	Route::get('/dashboard', 'admin\DashboardController@index');
	Route::get('logout', 'admin\loginController@logout');
});
