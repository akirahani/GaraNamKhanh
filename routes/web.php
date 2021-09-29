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
    Route::post('/admin/member/destroy/{id}','Backend\MemberController@destroy')->name('backend.member.destroy');
    
    //Shift
    Route::get('/admin/shift','Backend\ShiftController@index')->name('backend.shift.view');
    Route::get('/admin/shift','Backend\ShiftController@index')->name('backend.shift.view');
    Route::post('/admin/shift/update','Backend\ShiftController@update')->name('backend.shift.update');
    Route::post('/admin/shift/store','Backend\ShiftController@store')->name('backend.shift.store');
    Route::post('/admin/shift/destroy','Backend\ShiftController@delete')->name('backend.shift.destroy');
    
    Route::post('/admin/assignment/store','Backend\ShiftController@assignment')->name('backend.shift.assignment');
    Route::get('/admin/assignment/destroy/{id}','Backend\ShiftController@destroy_group')->name('backend.assignment.destroy');

    Route::post('/admin/groupshift/store','Backend\GroupShiftController@store')->name('backend.groupshift.store');

    // customer
       Route::get('/admin/customer','Backend\Customer\InfomationController@index')->name('backend.customer');
       Route::get('/admin/customer/insert','Backend\Customer\InfomationController@insert')->name('backend.customer.insert');
       Route::post('/admin/customer/store','Backend\Customer\InfomationController@store')->name('backend.customer.store');
       Route::get('/admin/customer/edit/{id}','Backend\Customer\InfomationController@edit')->name('backend.customer.edit');
       Route::post('/admin/customer/update','Backend\Customer\InfomationController@update')->name('backend.customer.update');
       Route::get('/admin/customer/delete/{id}' ,'Backend\Customer\InfomationController@delete')->name('backend.customer.delete');

    //Generate QRcode
    Route::get('/qrcode','Frontend\QrcodeController@index')->name('qrcode');
    Route::post('qrcode/update','Frontend\QrcodeController@update')->name('qrcode.update');

    Route::post('/customer/mantain/post', 'Backend\Customer\BookController@store')->name('customer.mantain.post');

    //Repair
    Route::get('/admin/repair','Backend\Customer\RepairController@index')->name('admin.repair');
    Route::get('/admin/repair/insert','Backend\Customer\RepairController@insert')->name('admin.repair.insert');
    Route::post('/admin/repair/store','Backend\Customer\RepairController@store')->name('admin.repair.store');
    Route::get('/admin/repair/detail/{id}','Backend\Customer\RepairController@detail')->name('admin.repair.detail');
    //Schedule
    Route::get('/admin/schedule','Backend\Customer\ScheduleController@index')->name('admin.schedule');
    Route::get('/admin/schedule/destroy/{id}','Backend\Customer\ScheduleController@delete');
   
       Route::get('/admin/spare/delete/{id}' ,'Backend\SparePart\SparePartController@delete')->name('backend.spare.delete');
      //supplier
      Route::get('/admin/supplier','Backend\Supplier\SupplierController@index')->name('backend.supplier.view');
      Route::get('/admin/supplier/create','Backend\Supplier\SupplierController@create')->name('backend.supplier.create');
      Route::post('/admin/supplier/store','Backend\Supplier\SupplierController@store')->name('backend.supplier.store');
      Route::get('/admin/supplier/edit/{id}','Backend\Supplier\SupplierController@edit')->name('backend.supplier.edit');
      Route::post('/admin/supplier/update','Backend\Supplier\SupplierController@update')->name('backend.supplier.update');
      Route::get('/admin/supplier/delete/{id}' ,'Backend\Supplier\SupplierController@delete')->name('backend.supplier.delete');
      //type_search 
      Route::get('/admin/spare/search/index','Backend\SparePart\SpareSearchController@index')->name('backend.spare.search.index');
      Route::get('/admin/spare/search/insert','Backend\SparePart\SpareSearchController@insert')->name('backend.spare.search.insert');
      Route::post('/admin/spare/search/store','Backend\SparePart\SpareSearchController@store')->name('backend.spare.search.store');
      Route::get('/admin/spare/search/delete/{id}','Backend\SparePart\SpareSearchController@delete')->name('backend.spare.search.delete');
      //work
      Route::get('/admin/work/index','Backend\Work\WorkSearchController@index')->name('backend.work.index');
      Route::post('/admin/work/insert','Backend\Work\WorkSearchController@insert_work')->name('backend.work.search.insert');
      Route::get('/admin/work/delete/{id}','Backend\Work\WorkSearchController@destroy')->name('backend.work.destroy');
      //result_search
      Route::get('/admin/response/index','Backend\Notification\HomeController@index')->name('admin.response.index');
      Route::post('/admin/response/store','Backend\Notification\HomeController@store')->name('admin.response.store');
      Route::get('/admin/response/detail/{id}','Backend\Notification\HomeController@detail')->name('admin.response.insert');
   //SparePart   
      //spare_in
      Route::get('/admin/spare/in','Backend\SparePart\SpareInController@index')->name('admin.sparein.index');
      Route::post('/admin/spare/in/insert','Backend\SparePart\SpareInController@insert')->name('admin.sparein.insert');
      //spare_exist
      Route::get('/admin/spare/exist','Backend\SparePart\SpareExistController@index')->name('admin.spare.exist');
      Route::post('/admin/spare/exist/insert','Backend\SparePart\SpareExistController@insert');
       //spare_out
       Route::get('/admin/spare/out','Backend\SparePart\SparePartController@out')->name('backend.spare.out');
      //spare_base
      Route::get('/admin/spare/base','Backend\SparePart\BaseController@index')->name('admin.spare.base');
      Route::get('/admin/spare/base/insert','Backend\SparePart\BaseController@insert')->name('admin.spare.base.insert');
      Route::post('/admin/spare/base/store','Backend\SparePart\BaseController@store')->name('admin.spare.base.store');
      Route::get('/admin/spare/base/edit/{id}','Backend\SparePart\BaseController@edit')->name('admin.spare.base.edit');
      Route::post('/admin/spare/base/update','Backend\SparePart\BaseController@update')->name('admin.spare.base.update');
      Route::get('/admin/spare/base/delete/{id}','Backend\SparePart\BaseController@delete')->name('admin.spare.base.delete');
   //   
      //detail_work_spare
      Route::get('/admin/detailws/index','Backend\DetailWS\DetailWSController@index')->name('admin.detailws.index');
      Route::post('/admin/spare/detail/insert','Backend\DetailWS\DetailWSController@insert');
      Route::get('/admin/spare/detail/delete/{id}','Backend\DetailWS\DetailWSController@delete');
   //Car
      //infomation
      Route::get('/admin/car/index','Backend\Car\CarController@index')->name('admin.car.index');
      Route::get('/admin/car/insert','Backend\Car\CarController@insert')->name('admin.car.insert');
      Route::post('/admin/car/store','Backend\Car\CarController@store')->name('admin.car.store');
      Route::get('/admin/car/edit/{id}','Backend\Car\CarController@edit')->name('admin.car.edit');
      Route::post('/admin/car/update','Backend\Car\CarController@update')->name('admin.car.update');
      Route::get('/admin/car/delete/{id}','Backend\Car\CarController@delete')->name('admin.car.delele');
      //company
      Route::get('/admin/car/company/index','Backend\Car\CompanyController@index')->name('admin.car.company.index');
      Route::get('/admin/car/company/insert','Backend\Car\CompanyController@insert')->name('admin.car.company.insert');
      Route::post('/admin/car/company/store','Backend\Car\CompanyController@store')->name('admin.car.company.store');
      Route::get('/admin/car/company/edit/{id}','Backend\Car\CompanyController@edit')->name('admin.car.company.edit');
      Route::post('/admin/car/company/update','Backend\Car\CompanyController@update')->name('admin.car.company.update');
      Route::get('/admin/car/company/delete/{id}','Backend\Car\CompanyController@delete')->name('admin.car.company.delele');
      //type_car
      Route::get('/admin/car/type/index','Backend\Car\TypeCarController@index')->name('admin.car.type.index');
      Route::get('/admin/car/type/insert','Backend\Car\TypeCarController@insert')->name('admin.car.type.insert');
      Route::post('/admin/car/type/store','Backend\Car\TypeCarController@store')->name('admin.car.type.store');
      Route::get('/admin/car/type/edit/{id}','Backend\Car\TypeCarController@edit')->name('admin.car.type.edit');
      Route::post('/admin/car/type/update','Backend\Car\TypeCarController@update')->name('admin.car.type.update');
      Route::get('/admin/car/type/delete/{id}','Backend\Car\TypeCarController@delete')->name('admin.car.type.delele');
      //search_in
      Route::get('/admin/in/search','Backend\SparePart\SpareInController@search')->name('admin.in.search');
      //file_in
      Route::get('/admin/file/in','Backend\File\FileInController@index')->name('admin.file.in');
      Route::get('/admin/file/in/detail/{id}','Backend\File\FileInController@detail')->name('admin.file.in.detail');
      Route::get('/admin/file/in/create','Backend\File\FileInController@create')->name('admin.file.in.create');
      Route::post('/admin/file/in/insert','Backend\File\FileInController@insert')->name('admin.file.in.insert');
      Route::get('/admin/file/in/delete/{id}','Backend\File\FileInController@delete')->name('admin.file.in.delete');
      Route::post('/admin/file/in/import','Backend\File\FileInController@import')->name('admin.file.in.import');
      //file_out
      Route::get('/admin/file/out','Backend\File\FileOutController@index')->name('admin.file.out');
      Route::get('/admin/file/out/detail/{id}','Backend\File\FileOutController@detail')->name('admin.file.out.detail');
      Route::get('/admin/file/out/create','Backend\File\FileOutController@create')->name('admin.file.out.create');
      Route::post('/admin/file/out/insert','Backend\File\FileOutController@insert')->name('admin.file.out.insert');
      Route::post('/admin/file/out/export','Backend\File\FileOutController@export')->name('admin.file.out.export');
      Route::get('/admin/file/out/delete/{id}','Backend\File\FileOutController@delete')->name('admin.file.out.delete');
    });