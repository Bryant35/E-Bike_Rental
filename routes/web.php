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
