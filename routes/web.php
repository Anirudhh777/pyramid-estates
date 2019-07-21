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
    return view('home');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');

Route::post('/buyer/submit', 'FormsController@buyer_register');
Route::post('/seller/submit', 'FormsController@seller_register');

Route::get('/admin', function () {
    return view('backend.admin');
})->name('admin');

Route::get('/admin/register', function () {
    return view('backend.admin');
})->name('/admin/register');

Route::get('/admin/password/reset', function () {
    return view('backend.admin');
})->name('/admin/password/reset');

Route::post('/admin/login', 'AdminController@login');
Route::post('/admin/register', 'AdminController@register');