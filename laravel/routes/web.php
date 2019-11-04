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
    return view('layout');
})->name('dashboard');



Route::prefix('linh_vuc')->group(function(){
    //gôm theo name
    //Gọi . {{ route('linh_vuc.danh_sach') }}
    Route::name('linh_vuc.')->group(function(){
        Route::get('/','LinhVucController@index')->name('danh_sach');
        Route::get('/them_moi','LinhVucController@create')->name('them_moi');
        Route::post('/them_moi','LinhVucController@store')->name('xu_li_them_moi');
        Route::get('/cap_nhat/{id}','LinhVucController@edit')->name('cap_nhat');
        Route::post('/cap_nhat/{id}','LinhVucController@update')->name('xu_ly_cap_nhat');
        Route::get('/xoa/{id}','LinhVucController@destroy')->name('xoa');
    
    });
});

Route::prefix('cau_hoi')->group(function(){
    //gôm theo name
    //Gọi . {{ route('cau_hoi.danh_sach') }}
    Route::name('cau_hoi.')->group(function(){
        Route::get('/','CauHoiController@index')->name('danh_sach');
        Route::get('/them_moi','CauHoiController@create')->name('them_moi');
        Route::post('/them_moi','CauHoiController@store')->name('xu_li_them_moi');
        Route::get('/cap_nhat/{id}','CauHoiController@edit')->name('cap_nhat');
        Route::post('/cap_nhat/{id}','CauHoiController@update')->name('xu_ly_cap_nhat');
        Route::get('/xoa/{id}','CauHoiController@destroy')->name('xoa');
    
    });
});

Route::prefix('nguoi_choi')->group(function(){
    //gôm theo name
    //Gọi . {{ route('nguoi_choi.danh_sach') }}
    Route::name('nguoi_choi.')->group(function(){
        Route::get('/','NguoiChoiController@index')->name('danh_sach');
        Route::get('/them_moi','NguoiChoiController@create')->name('them_moi');
        Route::post('/them_moi','NguoiChoiController@store')->name('xu_li_them_moi');
        Route::get('/cap_nhat/{id}','NguoiChoiController@edit')->name('cap_nhat');
        Route::post('/cap_nhat/{id}','NguoiChoiController@update')->name('xu_ly_cap_nhat');
        Route::get('/xoa/{id}','NguoiChoiController@destroy')->name('xoa');
    
    });
});
