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

Route::get('/user', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();
Route::get('/multiguard_login', 'Auth\LoginController@showLoginForm')->name('show.multiguard_login');
// Route::get('/login/user', 'Auth\LoginController@showUserLoginForm')->name('user_login');
 
//RegisterController
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('admin_register');
Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm')->name('user_register');
 
//UserController
Route::get('/user', 'UserController@userDashboard')->name('user_dashboard');
 
//AdminController
Route::get('/admin', 'AdminController@adminDashboard')->name('admin_dashboard');
 
//HomeController
Route::get('/home', 'HomeController@index')->name('home');
 
//********************************POST********************************
//LoginController
Route::post('/multiguard_login', 'Auth\LoginController@multiguardLogin')->name('multiguard_login');
// Route::post('/login/user', 'Auth\LoginController@userLogin')->name('multiguardLogin');
 
//RegisterController
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin_register');
Route::post('/register/user', 'Auth\RegisterController@createUser')->name('user_register');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
