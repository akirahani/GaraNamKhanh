<?php

Route::get('/','Auth\AuthController@showFormlogin')->name('member.login');
Route::post('/member/login','Auth\AuthController@loginMember')->name('member.login.submit');
Route::post('/member/logout','Auth\AuthController@logoutMember')->name('member.logout');


//Generate QRcode
Route::get('/qrcode','Frontend\QrcodeController@index')->name('qrcode');
Route::post('qrcode/update','Frontend\QrcodeController@update')->name('qrcode.update');


Route::group(['middleware' => ['member']], function() {
    
    Route::get('/member', 'Auth\AuthController@index')->name('member.home');
    //Attendance
    Route::get('/member/attendance/scan', 'Frontend\AttendanceController@scan')->name('member.attendcane.scan');
    Route::post('/member/attendance/store', 'Frontend\AttendanceController@attendance')->name('member.attendcane.store');

    //Setting
    Route::get('/member/account', 'Frontend\AccountController@index')->name('member.account');
});