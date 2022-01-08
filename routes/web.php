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

Route::get('/purchasehist','App\Http\Controllers\LoginController@purchase_history');

Route::get('/logout','App\Http\Controllers\LoginController@end');

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signuppage2');
});
Route::get('/order', function () {
    return view('orderpage');
});


Route::get('/ordermethods', function () {
    return view('ordermethods');
});
Route::get('/ordersummary', function(){
    return view('ordersummary');
});
Route::get('/orderconfirm', function(){
    return view('orderconfirm');
});


// Route::get('/home', function () {
//     return view('homepage');
// });

Route::get('/home','App\Http\Controllers\LoginController@profile');

Route::get('/account','App\Http\Controllers\LoginController@akun');

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/service', function () {
    return view('ourservice');
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
Route::get('/wishlist', function () {
    return view('wishlist');
});
// Route::get('/topup', function () {
//     return view('topup');
// });
Route::get('/topup','App\Http\Controllers\LoginController@cek_topup');
Route::get('/topuppay','App\Http\Controllers\LoginController@completeTopup');


Route::post('/signin', 'App\Http\Controllers\LoginController@cek_login');

Route::post('/insert','App\Http\Controllers\LoginController@regis');
Route::get('/order','App\Http\Controllers\ordercontroller@enter');

Route::get('/order/method','App\Http\Controllers\ordercontroller@holder');
Route::get('/ftopup', 'App\Http\Controllers\LoginController@cekCompleteTopup');

Route::post('/order/summary','App\Http\Controllers\ordercontroller@holdermethod');
Route::post('/order/success','App\Http\Controllers\ordercontroller@insert');

Route::post('/getPassword','App\Http\Controllers\LoginController@forgot_password');
Route::get('/resendPassword','App\Http\Controllers\LoginController@resend_password');
Route::get('/homee','App\Http\Controllers\LoginController@cek_home');
Route::post('/checknominal','App\Http\Controllers\LoginController@nominal_Check');


Route::post('/saveprofile','App\Http\Controllers\LoginController@updateProfile');


Route::post('/savepass','App\Http\Controllers\LoginController@passpage');
Route::get('/changepassword', function () {
    return view('changepass');
});

Route::get('/register', function () {
    return view('signuppage2');
});

Route::post('/sendHelp','App\Http\Controllers\LoginController@sendhelp');
