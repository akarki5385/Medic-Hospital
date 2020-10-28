<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('admin');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/temp', function () {
    return view('template');
});

Route::get('/1', function () {
    return view('test');
});
Route::get('/profile_update', function () {
    return view('test');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('contacts', 'ContactController');
Route::resource('appointment', 'AppointmentController');
Route::get('profileupdate', 'ProfileUpdateController@update')->name('profileupdate');

Route::get('profileedit', 'ProfileUpdateController@edit')->name('profileedit');

Route::get('/admin_dashboard', 'Admin\DashboardController@index');



Route::get('/doctor_dashboard', 'Doctor\DashboardController@index');
Route::get('/patient_dashboard', 'Patient\DashboardController@index');
// Route::get('/appointment/create', 'AppointmentController@create');
// Route::resource('appointments', 'AppointmentController');
Route::get('appointment/create', 'AppointmentController@create')->name('appointment.create');
Route::post('appointment/store', 'AppointmentController@store')->name('appointment.store');
// Route::post('/admin/appointment/all', 'AppointmentController@')->name('appointment.store');
Route::post('/admin/appointment/store', 'AppointmentController@store')->name('appointment.store');




//for user appointment



Route::get('appointment/create/user/{ id }', 'Patient\DashboardController@appointmentcreate')->name('userappointment.create');
Route::post('appointment/store/user/{id}', 'AppointmentController@store')->name('userappointment.store');
