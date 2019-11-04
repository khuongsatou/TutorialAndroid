<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('linh_vuc','API\LinhVucController@layDanhSach');

Route::prefix('cau_hoi')->group(function(){
    Route::get('/','API\CauHoiController@layDanhSach');
    Route::get('/id','API\CauHoiController@layCauHoi');
});

Route::prefix('nguoi_choi')->group(function(){
    Route::get('/','API\NguoiChoiController@layDanhSach');
    Route::get('/id','API\NguoiChoiController@layNguoiChoi');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
