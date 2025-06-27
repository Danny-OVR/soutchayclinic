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
// api routes that need auth

Route::middleware(['auth:api'])->group(function () {


});

Route::get('home', 'HomeController@index');


/* routes for Appointments Controller  */	
	Route::get('appointments/', 'AppointmentsController@index');
	Route::get('appointments/index', 'AppointmentsController@index');
	Route::get('appointments/index/{filter?}/{filtervalue?}', 'AppointmentsController@index');	
	Route::post('appointments/importdata', 'AppointmentsController@importdata');	
	Route::get('appointments/view/{rec_id}', 'AppointmentsController@view');	
	Route::post('appointments/add', 'AppointmentsController@add');	
	Route::any('appointments/edit/{rec_id}', 'AppointmentsController@edit');	
	Route::any('appointments/delete/{rec_id}', 'AppointmentsController@delete');

/* routes for Patients Controller  */	
	Route::get('patients/view/{rec_id}', 'PatientsController@view');	
	Route::post('patients/add', 'PatientsController@add');	
	Route::any('patients/edit/{rec_id}', 'PatientsController@edit');	
	Route::any('patients/delete/{rec_id}', 'PatientsController@delete');

/* routes for Payments Controller  */	
	Route::get('payments/', 'PaymentsController@index');
	Route::get('payments/index', 'PaymentsController@index');
	Route::get('payments/index/{filter?}/{filtervalue?}', 'PaymentsController@index');	
	Route::post('payments/importdata', 'PaymentsController@importdata');	
	Route::get('payments/view/{rec_id}', 'PaymentsController@view');	
	Route::post('payments/add', 'PaymentsController@add');	
	Route::any('payments/edit/{rec_id}', 'PaymentsController@edit');	
	Route::any('payments/delete/{rec_id}', 'PaymentsController@delete');

/* routes for Permissions Controller  */	
	Route::get('permissions/', 'PermissionsController@index');
	Route::get('permissions/index', 'PermissionsController@index');
	Route::get('permissions/index/{filter?}/{filtervalue?}', 'PermissionsController@index');	
	Route::post('permissions/importdata', 'PermissionsController@importdata');	
	Route::get('permissions/view/{rec_id}', 'PermissionsController@view');	
	Route::post('permissions/add', 'PermissionsController@add');	
	Route::any('permissions/edit/{rec_id}', 'PermissionsController@edit');	
	Route::any('permissions/delete/{rec_id}', 'PermissionsController@delete');

/* routes for Products Controller  */	
	Route::get('products/', 'ProductsController@index');
	Route::get('products/index', 'ProductsController@index');
	Route::get('products/index/{filter?}/{filtervalue?}', 'ProductsController@index');	
	Route::post('products/importdata', 'ProductsController@importdata');	
	Route::get('products/view/{rec_id}', 'ProductsController@view');	
	Route::post('products/add', 'ProductsController@add');	
	Route::any('products/edit/{rec_id}', 'ProductsController@edit');	
	Route::any('products/delete/{rec_id}', 'ProductsController@delete');

/* routes for Roles Controller  */	
	Route::get('roles/', 'RolesController@index');
	Route::get('roles/index', 'RolesController@index');
	Route::get('roles/index/{filter?}/{filtervalue?}', 'RolesController@index');	
	Route::post('roles/importdata', 'RolesController@importdata');	
	Route::get('roles/view/{rec_id}', 'RolesController@view');	
	Route::post('roles/add', 'RolesController@add');	
	Route::any('roles/edit/{rec_id}', 'RolesController@edit');	
	Route::any('roles/delete/{rec_id}', 'RolesController@delete');

/* routes for Services Controller  */	
	Route::get('services/', 'ServicesController@index');
	Route::get('services/index', 'ServicesController@index');
	Route::get('services/index/{filter?}/{filtervalue?}', 'ServicesController@index');	
	Route::post('services/importdata', 'ServicesController@importdata');	
	Route::get('services/view/{rec_id}', 'ServicesController@view');	
	Route::post('services/add', 'ServicesController@add');	
	Route::any('services/edit/{rec_id}', 'ServicesController@edit');	
	Route::any('services/delete/{rec_id}', 'ServicesController@delete');

/* routes for Staff Controller  */	
	Route::get('staff/', 'StaffController@index');
	Route::get('staff/index', 'StaffController@index');
	Route::get('staff/index/{filter?}/{filtervalue?}', 'StaffController@index');	
	Route::post('staff/importdata', 'StaffController@importdata');	
	Route::get('staff/view/{rec_id}', 'StaffController@view');	
	Route::post('staff/add', 'StaffController@add');	
	Route::any('staff/edit/{rec_id}', 'StaffController@edit');	
	Route::any('staff/delete/{rec_id}', 'StaffController@delete');

/* routes for TreatmentRecords Controller  */	
	Route::get('treatmentrecords/', 'TreatmentRecordsController@index');
	Route::get('treatmentrecords/index', 'TreatmentRecordsController@index');
	Route::get('treatmentrecords/index/{filter?}/{filtervalue?}', 'TreatmentRecordsController@index');	
	Route::post('treatmentrecords/importdata', 'TreatmentRecordsController@importdata');	
	Route::get('treatmentrecords/view/{rec_id}', 'TreatmentRecordsController@view');	
	Route::post('treatmentrecords/add', 'TreatmentRecordsController@add');	
	Route::any('treatmentrecords/edit/{rec_id}', 'TreatmentRecordsController@edit');	
	Route::any('treatmentrecords/delete/{rec_id}', 'TreatmentRecordsController@delete');

/* routes for User Controller  */	
	Route::get('user/', 'UserController@index');
	Route::get('user/index', 'UserController@index');
	Route::get('user/index/{filter?}/{filtervalue?}', 'UserController@index');	
	Route::post('user/importdata', 'UserController@importdata');	
	Route::get('user/view/{rec_id}', 'UserController@view');	
	Route::post('user/add', 'UserController@add');	
	Route::any('user/edit/{rec_id}', 'UserController@edit');	
	Route::any('user/delete/{rec_id}', 'UserController@delete');
	
	Route::get('components_data/patient_id_option_list/{arg1?}', 'Components_dataController@patient_id_option_list');	
	Route::get('components_data/service_id_option_list/{arg1?}', 'Components_dataController@service_id_option_list');	
	Route::get('components_data/staff_id_option_list/{arg1?}', 'Components_dataController@staff_id_option_list');	
	Route::get('components_data/appointment_id_option_list/{arg1?}', 'Components_dataController@appointment_id_option_list');	
	Route::get('components_data/role_id_option_list/{arg1?}', 'Components_dataController@role_id_option_list');	
	Route::get('components_data/getcount_appointments/{arg1?}', 'Components_dataController@getcount_appointments');


/* routes for FileUpload Controller  */	
Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');