<?php
use Illuminate\Support\Facades\Route;
    Route::namespace('Customers')->group(function () {
        Route::get('/customer/register', 'Auth\RegisterController@index')->name('customer.get_register');
        Route::post('/customer/register/post', 'Auth\RegisterController@create')->name('customer.post_register');
        Route::get('customer/login', 'Auth\LoginController@login')->name('customer.login');
        Route::post('/customer/login', 'Auth\LoginController@postLogin')->name('customer.postlogin');
        Route::get('/customer/logout', 'Auth\LoginController@logoutCustomer')->name('customer.postLogout');
        Route::group(['middleware' => ['customer']], function () {
            Route::get('/customer', 'CustomerController@index')->name('customer.home');
         
        });
      });
