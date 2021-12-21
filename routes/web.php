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
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');


});

Route::get('/signup', function () {
    return view('signuppage');
});
Route::get('/order', function () {
    return view('orderpage');
});

Route::get('/orderm', function () {
    return view('ordermethods');
});

Route::get('/home', function () {
    return view('homepage');
    // return view('homepage', ['username' => $uname]);
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/contact', function () {
    return view('contactpage');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/topup', function () {
    return view('topup');
});


Route::post('/signin', 'App\Http\Controllers\LoginController@cek_login');
Route::get('/insertdata','App\Http\Contollers\RegController@insert');
Route::post('/create','App\Http\Contollers\RegController@create');
Route::get('/home/{uname}', 'App\Http\Controllers\LoginController@cek_login');
Route::get('/order','App\Http\Controllers\ordercontroller@holder');

