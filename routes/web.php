<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/connection', function () {
    return view('connection');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'MahasiswaController@tampilanhome');
    
    Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');

    Route::get('/mahasiswa/search', 'MahasiswaController@pencarian');

    Route::get('/mahasiswa/formulirmahasiswa', 'MahasiswaController@formulirmahasiswa');

    Route::post('/mahasiswa/save', 'MahasiswaController@save');

    Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');

    Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');

    Route::get('/mahasiswa/hapusmahasiswa/{id}', 'MahasiswaController@hapusmahasiswa');
    

    Route::get('/user', 'AuthController@user');

    Route::get('/user/formuliruser', 'AuthController@formuliruser');

    Route::post('/user/saveuser', 'AuthController@saveuser');

    Route::get('/user/edituser/{id}', 'AuthController@edituser');

    Route::put('/user/updateuser/{id}', 'AuthController@updateuser');
    
    Route::get('/user/search', 'AuthController@pencarian_user');

    Route::get('/logout', 'AuthController@logout');

    Route::get('/user/hapususer/{id}', 'AuthController@hapususer');
});



Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');



