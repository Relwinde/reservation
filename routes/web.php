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

Route::get('/', 'UserExistsController@checkUsers');

Route::post('/','UserRegisterController@registController')->name('register-control');

Route::get('/sign up', function (){
    return view('pages.register');
})->name('register-page');

Route::get('/sign in', function (){
    return view('connect');
})->name('connect-page');

Route::get('/verify', 'MailVerifyer@codeVerify');

Route::post('/login', 'UserLoginController@loginControl')->name('login-control');

Route::get('/home', function (){
    return view('pages.home');
})->name('home-page');