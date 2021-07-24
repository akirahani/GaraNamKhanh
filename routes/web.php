<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

   

    Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/admin/login', 'Auth\LoginController@postLogin')->name('login');

    Route::group(['middleware' => ['auth']], function() {


    Route::get('/admin', 'Backend\DashboardController@index')->name('admin.home');
    Route::get('/admin/logout', 'Auth\LoginController@logoutAdmin')->name('admin.logout');
    //
    Route::get('/admin/calendar', 'Backend\CalendarController@calendar')->name('calendar'); 
    Route::post('/admin/calendar/action', 'Backend\CalendarController@post_calendar')->name('calendar.post'); 
   

    Route::get('/admin/report','Backend\ReportController@report_index')->name('report');
    Route::get('/admin/report/detail/{id}','Backend\ReportController@report_detail')->name('report.detail');

    //Member
    Route::get('/admin/member', 'Backend\MemberController@index')->name('backend.member.view');
    Route::get('/admin/member/create', 'Backend\MemberController@create')->name('backend.member.create');
    Route::post('/admin/member/store', 'Backend\MemberController@store')->name('backend.member.store');
    Route::get('/admin/member/edit/{id}', 'Backend\MemberController@edit')->name('backend.member.edit');
    Route::post('/admin/member/update','Backend\MemberController@update')->name('backend.member.update');
    Route::post('/admin/member/destroy/{id}','Backend\MemberController@destroy')->name('backend.member.destroy');
    
    //Shift
    Route::get('/admin/shift','Backend\ShiftController@index')->name('backend.shift.view');

    Route::post('/admin/shift/update','Backend\ShiftController@update')->name('backend.shift.update');
    Route::post('/admin/shift/store','Backend\ShiftController@store')->name('backend.shift.store');
    Route::post('/admin/shift/destroy','Backend\ShiftController@delete')->name('backend.shift.destroy');
    
    Route::post('/admin/assignment/store','Backend\ShiftController@assignment')->name('backend.shift.assignment');
    Route::get('/admin/assignment/destroy/{id}','Backend\ShiftController@destroy_group')->name('backend.assignment.destroy');

    Route::post('/admin/groupshift/store','Backend\GroupShiftController@store')->name('backend.groupshift.store');

    //Generate QRcode
    Route::get('/qrcode','Frontend\QrcodeController@index')->name('qrcode');
    Route::post('qrcode/update','Frontend\QrcodeController@update')->name('qrcode.update');

    });




