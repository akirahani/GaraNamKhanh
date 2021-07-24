<?php

use Illuminate\Support\Facades\Route;

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
    // customer
       Route::get('/admin/customer','Backend\Customer\InfomationController@index')->name('backend.customer');
       Route::get('/admin/customer/insert','Backend\Customer\InfomationController@insert')->name('backend.customer.insert');
       Route::post('/admin/customer/store','Backend\Customer\InfomationController@store')->name('backend.customer.store');
       Route::get('/admin/customer/edit/{id}','Backend\Customer\InfomationController@edit')->name('backend.customer.edit');
       Route::post('/admin/customer/update','Backend\Customer\InfomationController@update')->name('backend.customer.update');
       Route::get('/admin/customer/delete/{id}' ,'Backend\Customer\InfomationController@delete')->name('backend.customer.delete');
    });




