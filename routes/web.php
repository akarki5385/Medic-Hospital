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

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/welcome', function () {
    return view('welcome');

});

Route::get('/anishtest', function () {
    return view('welcome1');

});
// Route::get('/anishtest', function () {
//     return view('updateprofile');

// });

Route::get('patient_dashboard/profile/', 'Patient\DashboardController@anishxyz')->name('profile.xyz');



Route::get('/temp', function () {
    return view('template');
});
// try for fornt templaate by friend
Route::get('/', function () {
    return view('front');
});


Route::get('/service', function () {
    return view('service');
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





// user profile
Route::get('patient_dashboard/profile/update/', 'Patient\DashboardController@updatepicture')->name('profile.update');
Route::post('profileupdate/store/', 'Patient\DashboardController@profilestore')->name('profileimage.update');





Route::post('pupdate/store/', 'Patient\DashboardController@pupdate')->name('profiles.update');









Route::get('/admin_dashboard', 'Admin\DashboardController@index');



Route::get('/doctor_dashboard', 'Doctor\DashboardController@index');
Route::get('/patient_dashboard', 'Patient\DashboardController@index');


// Route::get('/patient_dashboard/userappointment', 'Patient\DashboardController@showuserappointment');




Route::get('/patient_dashboard/userappointment/{id}', 'Patient\DashboardController@showuserappointment')->name('my.appointment');


// Route::get('/appointment/create', 'AppointmentController@create');
// Route::resource('appointments', 'AppointmentController');
Route::get('appointment/create', 'AppointmentController@create')->name('appointment.create');
Route::post('appointment/store', 'AppointmentController@store')->name('appointment.store');
// Route::post('/admin/appointment/all', 'AppointmentController@')->name('appointment.store');
Route::post('/admin/appointment/store', 'AppointmentController@store')->name('appointment.store');




//for user appointment



Route::get('appointment/create/user/appointments', 'Patient\DashboardController@appointmentcreate')->name('userappointment.create');
Route::post('appointment/store/user/', 'Patient\DashboardController@appointmentstore')->name('userappointment.store');


// Route::match(['get', 'post'], '/botman', 'BotManController@handle');

// route for sending email
Route::get('/send-mail', function(){
    $details=[

    'title'=> 'Confirmation email for  Medic+',
    'body'=> 'Be there on time, your appointment is booked for sure on '

    ];
    \Mail::to('medicplusgh@gmail.com')->send(new \App\Mail\TestMail($details));
    echo "Confirmation email sent.";

    });
//test route
Route::resource('products', 'ProductController');
