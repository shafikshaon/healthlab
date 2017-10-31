<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('login', ['as' =>'login', 'uses' => 'CustomerController@getMyLogin']);


// Route::prefix('report')->group(function () {
//   Route::get('pdf', ['as' =>'pdf', 'uses' => 'ReportGenerateController@getMyReport']);
//   Route::get('alluser', ['as' =>'alluser', 'uses' => 'ReportGenerateController@viewAllUser']);
//   Route::get('details/{id}', ['as' =>'details', 'uses' => 'ReportGenerateController@viewDetails']);
//   Route::get('download/{id}', ['as' =>'download', 'uses' => 'ReportGenerateController@downloadSingleUserInfoPDF']);
//   Route::get('download', ['as' =>'download', 'uses' => 'ReportGenerateController@downloadAllUserInfoPDF']);
// });
