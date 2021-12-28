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

Route::get('/logout','App\Http\Controllers\LoginController@end');

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

// Route::get('/home', function () {
//     return view('homepage');
// });

Route::get('/home','App\Http\Controllers\LoginController@profile');

Route::get('/account','App\Http\Controllers\LoginController@akun');

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/contact', function () {
    return view('contactpage');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/ctopup', function () {
    return view('confirmtopup');
});
// Route::get('/topup', function () {
//     return view('topup');
// });
Route::get('/topup','App\Http\Controllers\LoginController@cek_topup');

Route::post('/signin', 'App\Http\Controllers\LoginController@cek_login');

Route::post('/insert','App\Http\Controllers\LoginController@regis');
Route::get('/order','App\Http\Controllers\ordercontroller@holder');

Route::get('/homee','App\Http\Controllers\LoginController@cek_home');
Route::post('/checknominal','App\Http\Controllers\LoginController@nominal_Check');

Route::get('/topuppay','App\Http\Controllers\LoginController@completeTopup');

Route::get('/ftopup', function () {
    return view('topupcomplete');
});
