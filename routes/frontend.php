<?php

Route::get('/login','Auth\AuthController@showFormlogin')->name('member.login');
Route::post('/login','Auth\AuthController@loginMember')->name('member.login.submit');
Route::post('/logout','Auth\AuthController@logoutMember')->name('member.logout');




Route::group(['middleware' => ['member']], function() {
    Route::get('/', 'Auth\AuthController@index')->name('home');
    //Attendance
    Route::get('/member/attendance/scan', 'Frontend\AttendanceController@scan')->name('member.attendcane.scan');
    Route::post('/member/attendance/store', 'Frontend\AttendanceController@attendance')->name('member.attendcane.store');
    //Setting
    Route::get('/member/account', 'Frontend\AccountController@index')->name('member.account');
});