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
Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::get('/sign_in', function () {
    return view('index');
});
Route::get('/landing_page', function () {
    return view('landing_page');
});
Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/discover', function () {
    return view('discover');
});
Route::get('/user_profile', function () {
    return view('user_profile');
});
Route::get('/admin_users', function () {
    return view('admin_users');
});