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

//
Route::get('admin', ['as' =>'admin', 'uses' => 'DashboardController@getMyDashboard']);
Route::get('dashboard', ['as' =>'dashboard', 'uses' => 'DashboardController@getMyDashboard']);

//Admins
Route::prefix('admin/admin')->group(function () {
  Route::get('viewall', ['as' =>'viewalladmin', 'uses' => 'AdminCrudController@getAllAdmins']);
});

//Doctors
Route::prefix('admin/doctor')->group(function () {

  Route::get('viewall', ['as' =>'viewalldoctor', 'uses' => 'DoctorCrudController@getAllDoctors']);

  Route::get('add', ['as' =>'adddoctor', 'uses' => 'DoctorCrudController@getAddDoctor']);

  Route::post('insert', ['as' =>'insertdocotr', 'uses' => 'DoctorCrudController@postInsertDoctor']);

  Route::get('edit/{id}', ['as' =>'editdoctor', 'uses' => 'DoctorCrudController@getSingleDoctor']);

 Route::post('update/{id}', ['as' =>'updatedoctor', 'uses' => 'DoctorCrudController@updateSingleDoctor']);
 Route::get('delete/{id}', ['as' =>'deletedoctor', 'uses' => 'DoctorCrudController@deleteSingleDoctor']);

    Route::get('read/{id}', ['as' =>'readdoctor', 'uses' => 'DoctorCrudController@readSingleDoctor']);


});

//Patients
Route::prefix('admin/patient')->group(function () {
  Route::get('viewall', ['as' =>'viewallpatient', 'uses' => 'PatientCrudController@getAllPatients']);
});

//Developers
Route::prefix('admin/developer')->group(function () {
  Route::get('viewall', ['as' =>'viewalldeveloper', 'uses' => 'DeveloperCrudController@getAllDevelopers']);
});
