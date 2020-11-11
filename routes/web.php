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

Route::get('/', 'HomeController@getHome')->name('home');

//contact
Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
])->name('contact');

Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);

// Sản phẩm
Route::get('/sanpham', 'SanPhamController@getDanhSach')->name('sanpham');
Route::get('/sanpham/them', 'SanPhamController@getThem');
Route::post('/sanpham/them', 'SanPhamController@postThem');
Route::get('/sanpham/sua/{id}', 'SanPhamController@getSua');
Route::post('/sanpham/sua/{id}', 'SanPhamController@postSua');
Route::get('/sanpham/xoa/{id}', 'SanPhamController@getXoa');
Route::post('/sanpham/xoa/{id}', 'SanPhamController@postXoa');

// danh mục

Route::get('/danhmuc', 'DanhMucController@getDanhSach')->name('danhmuc');
Route::get('/danhmuc/them', 'DanhMucController@getThem');
Route::post('/danhmuc/them', 'DanhMucController@postThem');
Route::get('/danhmuc/sua/{id}', 'DanhMucController@getSua');
Route::post('/danhmuc/sua/{id}', 'DanhMucController@postSua');
Route::get('/danhmuc/xoa/{id}', 'DanhMucController@getXoa');
Route::post('/danhmuc/xoa/{id}', 'DanhMucController@postXoa');
Route::post('/danhmuc/nhap', 'DanhMucController@postNhap');
Route::get('/danhmuc/xuat', 'DanhMucController@getXuat');