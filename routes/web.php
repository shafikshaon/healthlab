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

//Login, Register
Route::get('login', ['as' =>'login', 'uses' => 'AccountController@getMyLogin']);
Route::get('register', ['as' =>'register', 'uses' => 'AccountController@getMyRegister']);
Route::post('register', ['as' =>'registernewuser', 'uses' => 'AccountController@insertUser']);
Route::post('login', ['as' =>'login', 'uses' => 'AccountController@postMyLogin']);
Route::get('logout', ['as' =>'logout', 'uses' => 'AccountController@getLogout']);



//Profiles
Route::get('profile', ['as' =>'adminprofile', 'uses' => 'AccountController@getAdminProfile']);
Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

/*Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);

Route::get('single_profile/{id}', ['as' =>'single_profile', 'uses' => 'ProfileController@getSingleAdmin']);
*/






















Route::get('diagnosis', ['as' =>'diagnosis', 'uses' => 'DiagnosisController@getMyDiagnosis']);

Route::get('finddoctor', ['as' =>'finddoctor', 'uses' => 'DoctorController@getDoctorSearch']);
Route::get('search', ['as' =>'finddoctorsearch', 'uses' => 'DoctorController@getDoctorSearchResult']);

//
Route::get('admin', ['as' =>'admin', 'uses' => 'BackEndController@getMyDashboard']);
Route::get('admin', ['as' =>'dashboard', 'uses' => 'BackEndController@getMyDashboard']);

//Admins
Route::prefix('admin/admin')->group(function () {
  Route::get('viewall', ['as' =>'viewalladmin', 'uses' => 'AdminCrudController@getAllAdmins']);
});

//Doctors
Route::prefix('admin/doctor')->group(function () {
  Route::get('viewall', ['as' =>'viewalldoctor', 'uses' => 'DoctorCrudController@getAllDoctors']);
  Route::get('add', ['as' =>'adddoctor', 'uses' => 'DoctorCrudController@getAddDoctor']);
  Route::post('insert', ['as' =>'insertdoctor', 'uses' => 'DoctorCrudController@postInsertDoctor']);
  Route::get('edit/{id}', ['as' =>'editdoctor', 'uses' => 'DoctorCrudController@getSingleDoctor']);
  Route::post('update/{id}', ['as' =>'updatedoctor', 'uses' => 'DoctorCrudController@updateSingleDoctor']);
  Route::get('delete/{id}', ['as' =>'deletedoctor', 'uses' => 'DoctorCrudController@deleteSingleDoctor']);
  Route::get('read/{id}', ['as' =>'readdoctor', 'uses' => 'DoctorCrudController@readSingleDoctor']);
});

//Patients
Route::prefix('admin/patient')->group(function () {
  Route::get('viewall', ['as' =>'viewallpatient', 'uses' => 'PatientCrudController@getAllPatients']);
    Route::get('add', ['as' =>'addpatient', 'uses' => 'PatientCrudController@getAddPatient']);
    Route::post('insert', ['as' =>'insertpatient', 'uses' => 'PatientCrudController@postInsertPatient']);
    Route::get('edit/{id}', ['as' =>'editpatient', 'uses' => 'PatientCrudController@getSinglePatient']);
    Route::post('update/{id}', ['as' =>'updatepatient', 'uses' => 'PatientCrudController@updateSinglePatient']);
    Route::get('delete/{id}', ['as' =>'deletepatient', 'uses' => 'PatientCrudController@deleteSinglePatient']);
    Route::get('read/{id}', ['as' =>'readpatient', 'uses' => 'PatientCrudController@readSinglePatient']);
});

//Developers
Route::prefix('admin/developer')->group(function () {
  Route::get('viewall', ['as' =>'viewalldeveloper', 'uses' => 'DeveloperCrudController@getAllDevelopers']);













});

//Organs
Route::prefix('admin/organ')->group(function () {
  Route::get('viewall', ['as' =>'viewallorgan', 'uses' => 'OrgansCrudController@getAllOrgan']);
  Route::get('add', ['as' =>'addorgan', 'uses' => 'OrgansCrudController@getAddOrgan']);
  Route::post('insert', ['as' =>'insertorgan', 'uses' => 'OrgansCrudController@postAddOrgan']);
  Route::get('edit/{id}', ['as' =>'editorgan', 'uses' => 'OrgansCrudController@getEditOrgan']);
  Route::post('update/{id}', ['as' =>'updateorgan', 'uses' => 'OrgansCrudController@postUpdateOrgan']);
  Route::get('delete/{id}', ['as' =>'deleteorgan', 'uses' => 'OrgansCrudController@getDeleteOrgan']);
});

//Diseases
Route::prefix('admin/disease')->group(function () {
  Route::get('viewall', ['as' =>'viewalldisease', 'uses' => 'DiseaseCrudController@getAllDisease']);
  Route::get('add', ['as' =>'adddisease', 'uses' => 'DiseaseCrudController@getAddDisease']);
  Route::post('insert', ['as' =>'insertdisease', 'uses' => 'DiseaseCrudController@postAddDisease']);
  Route::get('edit/{id}', ['as' =>'editdisease', 'uses' => 'DiseaseCrudController@getEditDisease']);
  Route::post('update/{id}', ['as' =>'updatedisease', 'uses' => 'DiseaseCrudController@postUpdateDisease']);
  Route::get('delete/{id}', ['as' =>'deletedisease', 'uses' => 'DiseaseCrudController@getDeleteDisease']);
});

  //Symptoms
Route::prefix('admin/symptom')->group(function () {
  Route::get('viewall', ['as' =>'viewallsymptom', 'uses' => 'SymptomsCrudController@getAllSymptom']);
  Route::get('add', ['as' =>'addsymptom', 'uses' => 'SymptomsCrudController@getAddSymptom']);
  Route::post('insert', ['as' =>'insertsymptom', 'uses' => 'SymptomsCrudController@postAddSymptom']);
  Route::get('edit/{id}', ['as' =>'editsymptom', 'uses' => 'SymptomsCrudController@getEditSymptom']);
  Route::post('update/{id}', ['as' =>'updatesymptom', 'uses' => 'SymptomsCrudController@postUpdateSymptom']);
  Route::get('delete/{id}', ['as' =>'deletesymptom', 'uses' => 'SymptomsCrudController@getDeleteSymptom']);
});
