<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

    Auth::routes();

    Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::get('/admin', 'Auth\LoginController@logoutAdmin')->name('admin.logout');

    Route::group(['middleware' => ['auth']], function() {
   //home

    Route::get('/admin/home', 'Backend\DashboardController@index')->name('admin.home');

    //
     Route::get('/admin/calendar', 'Backend\CalendarController@calendar')->name('calendar'); 
    Route::post('/admin/calendar/action', 'Backend\CalendarController@post_calendar')->name('calendar.post'); 
   
    //user
    // Route::get('admin/table', 'AdminHomeController@table')->name('table'); 
    // Route::post('/user/insert','AdminHomeController@insert')->name('insert');
    // Route::get('/user/edit/{id}','AdminHomeController@edit')->name('user_update');
    // Route::post('/user/update','AdminHomeController@update')->name('user_update');
    // Route::get('/user/delete/{id}','AdminHomeController@delete')->name('delete');
 
  
   //timekeeping
    // Route::get('/admin/attendance','AdminHomeController@attendance')->name('attendance');
    // Route::post('/admin/attendance','AdminHomeController@post')->name('attendance.post');
    //report
    Route::get('/admin/report','Backend\ReportController@report_index')->name('report');
    Route::get('/admin/report/detail/{id}','Backend\ReportController@report_detail')->name('report.detail');

    //Member
    Route::get('/admin/member', 'Backend\MemberController@index')->name('backend.member.view');
    Route::get('/admin/member/create', 'Backend\MemberController@create')->name('backend.member.create');
    Route::post('/admin/member/store', 'Backend\MemberController@store')->name('backend.member.store');
    Route::get('/admin/member/edit/{id}', 'Backend\MemberController@edit')->name('backend.member.edit');
    Route::put('/admin/member/update/{id}','Backend\MemberController@update')->name('backend.member.update');
    Route::get('/admin/member/destroy/{id}','Backend\MemberController@destroy')->name('backend.member.destroy');
    
    //Shift
    Route::get('/admin/shift','Backend\ShiftController@index')->name('backend.shift.view');
    Route::get('/admin/shift/create','Backend\ShiftController@create')->name('backend.shift.create');
    Route::get('/admin/shift/edit/{id}','Backend\ShiftController@edit')->name('backend.shift.edit');
    Route::get('/admin/shift/update/{id}','Backend\ShiftController@update')->name('backend.shift.update');
    Route::post('/admin/shift/store','Backend\ShiftController@store')->name('backend.shift.store');
    Route::get('/admin/shift/destroy/{id}','Backend\ShiftController@destroy')->name('backend.shift.destroy');
    
    Route::post('/admin/assignment/store','Backend\ShiftController@assignment')->name('backend.shift.assignment');
    Route::get('/admin/assignment/destroy/{id}','Backend\ShiftController@destroyas')->name('backend.assignment.destroy');

    Route::post('/admin/groupshift/store','Backend\GroupShiftController@store')->name('backend.groupshift.store');

    });



