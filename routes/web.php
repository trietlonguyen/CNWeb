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
Auth::routes(['register' => true, 'reset' => true]);

Route::get('/home', 'HomeController@getHome')->name('home');

//contact
Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
])->name('/contact');

Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);

// Lớp
Route::get('/lop', 'LopController@getDanhSach');
Route::get('/lop/them', 'LopController@getThem');
Route::post('/lop/them', 'LopController@postThem');
Route::get('/lop/sua/{id}', 'LopController@getSua');
Route::post('/lop/sua/{id}', 'LopController@postSua');
Route::get('/lop/xoa/{id}', 'LopController@getXoa');
Route::post('/lop/xoa/{id}', 'LopController@postXoa');

// danh mục

Route::get('/danhmuc', 'DanhMucController@getDanhSach');
Route::get('/danhmuc/them', 'DanhMucController@getThem');
Route::post('/danhmuc/them', 'DanhMucController@postThem');
Route::get('/danhmuc/sua/{id}', 'DanhMucController@getSua');
Route::post('/danhmuc/sua/{id}', 'DanhMucController@postSua');
Route::get('/danhmuc/xoa/{id}', 'DanhMucController@getXoa');
Route::post('/danhmuc/xoa/{id}', 'DanhMucController@postXoa');
Route::post('/danhmuc/nhap', 'DanhMucController@postNhap');
Route::get('/danhmuc/xuat', 'DanhMucController@getXuat');