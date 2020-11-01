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

// Sinh viên
Route::get('/sinhvien', 'SinhVienController@getDanhSach');
Route::get('/sinhvien/them', 'SinhVienController@getThem');
Route::post('/sinhvien/them', 'SinhVienController@postThem');
Route::get('/sinhvien/sua/{id}', 'SinhVienController@getSua');
Route::post('/sinhvien/sua/{id}', 'SinhVienController@postSua');
Route::get('/sinhvien/xoa/{id}', 'SinhVienController@getXoa');
Route::post('/sinhvien/xoa/{id}', 'SinhVienController@postXoa');
Route::post('/sinhvien/nhap', 'SinhVienController@postNhap');
Route::get('/sinhvien/xuat', 'SinhVienController@getXuat');