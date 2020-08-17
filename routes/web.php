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
Route::get('/home/logout', 'HomeController@UserLogout')->name('user.logout');

// Admin Routes
Route::get('/admin/home', 'AdminController@index')->name('admin.home');
Route::get('/admin/home/logout', 'AdminController@LogOut')->name('admin.logout');
Route::get('/admin/', 'Admin\LoginController@showLoginsForm')->name('admin.login');
Route::post('/admin/', 'Admin\LoginController@login');
