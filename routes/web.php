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
Route::get('register', ['as' =>'register', 'uses' => 'CustomerController@getMyRegister']);


Route::get('diagnosis', ['as' =>'diagnosis', 'uses' => 'FrontController@getMyDiagnosis']);
Route::get('finddoctor', ['as' =>'finddoctor', 'uses' => 'CustomerController@getMyLogin']);

// Route::prefix('report')->group(function () {
//   Route::get('pdf', ['as' =>'pdf', 'uses' => 'ReportGenerateController@getMyReport']);
//   Route::get('alluser', ['as' =>'alluser', 'uses' => 'ReportGenerateController@viewAllUser']);
//   Route::get('details/{id}', ['as' =>'details', 'uses' => 'ReportGenerateController@viewDetails']);
//   Route::get('download/{id}', ['as' =>'download', 'uses' => 'ReportGenerateController@downloadSingleUserInfoPDF']);
//   Route::get('download', ['as' =>'download', 'uses' => 'ReportGenerateController@downloadAllUserInfoPDF']);
// });

Route::get('admin', ['as' =>'admin', 'uses' => 'DashboardController@getMyDashboard']);
Route::get('dashboard', ['as' =>'dashboard', 'uses' => 'DashboardController@getMyDashboard']);

//Admins
Route::prefix('admin/admin')->group(function () {
  Route::get('viewall', ['as' =>'viewalladmin', 'uses' => 'AdminCrudController@getAllAdmins']);
});

//Doctors
Route::prefix('admin/doctor')->group(function () {
  Route::get('viewall', ['as' =>'viewalldoctor', 'uses' => 'DoctorCrudController@getAllDoctors']);
});

//Patients
Route::prefix('admin/patient')->group(function () {
  Route::get('viewall', ['as' =>'viewallpatient', 'uses' => 'PatientCrudController@getAllPatients']);
});

//Developers
Route::prefix('admin/developer')->group(function () {
  Route::get('viewall', ['as' =>'viewalldeveloper', 'uses' => 'DeveloperCrudController@getAllDevelopers']);
});








Route::prefix('report')->group(function () {
  Route::get('pdf', ['as' =>'pdf', 'uses' => 'ReportGenerateController@getMyReport']);
  Route::get('alluser', ['as' =>'alluser', 'uses' => 'ReportGenerateController@viewAllUser']);
  Route::get('details/{id}', ['as' =>'details', 'uses' => 'ReportGenerateController@viewDetails']);
  Route::get('download/{id}', ['as' =>'download', 'uses' => 'ReportGenerateController@downloadSingleUserInfoPDF']);
  Route::get('download', ['as' =>'download', 'uses' => 'ReportGenerateController@downloadAllUserInfoPDF']);
});

Route::prefix('user')->group(function () {
  Route::get('add', ['as' =>'add', 'uses' => 'UserCrudController@addUser']);
  Route::post('insert', ['as' =>'insert', 'uses' => 'UserCrudController@insertUser']);
  Route::get('viewall', ['as' =>'viewall', 'uses' => 'UserCrudController@viewAllUser']);
});

Route::prefix('payment')->group(function () {
  Route::get('add', ['as' =>'add', 'uses' => 'ProductCrudController@addProduct']);
  Route::post('insert', ['as' =>'insert', 'uses' => 'ProductCrudController@insertProduct']);
  Route::get('viewall', ['as' =>'viewall', 'uses' => 'ProductCrudController@viewAllProduct']);

  Route::get('buyproduct/{id}', ['as' =>'buyproduct', 'uses' => 'PaypalPaymentController@buyProduct']);
  Route::get('paywithpaypal/{id}', ['as' =>'paywithpaypal', 'uses' => 'PaypalPaymentController@payWithPaypal']);
});
