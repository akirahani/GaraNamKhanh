<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:api']], function() {
    //schedule
    Route::post('/schedule/update','Api\BookController@update')->name('book.update');
   //notification
   Route::get('/option/index/{id}','Api\OptionController@index')->name('option.index');
   Route::post('/option/update','Api\OptionController@update')->name('option.update');
 
});

// Route::middleware('auth:admin-api')->get('/admin', function (Request $request) {
//     return $request->user('admin-api');
// });
