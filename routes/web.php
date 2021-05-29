<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/admin/dashboard', 'Admin\HomeController@index')->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', 'site\HomeController@index')->name('index');
Route::get('/servicesas/{id}', 'site\HomeController@service');


Route::get('/contactsus', 'site\HomeController@contacts');
Route::post('/contactsus', 'Admin\Contactscontroller@store');

Route::delete('/deleteallsliders' , 'Admin\SlidersController@deleteall');
Route::delete('/deleteallservices' , 'Admin\ServicesController@deleteall');
Route::delete('/deleteallgallaries' , 'Admin\GallariesController@deleteall');
Route::delete('/deletealldoctors' , 'Admin\DoctorsController@deleteall');
Route::delete('/deleteallcontacts' , 'Admin\Contactscontroller@deleteall');
Route::delete('/deleteallclients' , 'Admin\ClientsController@deleteall');
Route::delete('/deleteallappointments' , 'Admin\AppointmentsController@deleteall');




Route::group([
    'prefix' => 'admin',
    'namespace' =>'Admin',
    'as' => 'admin.'
],function(){

        Route::resource('/sliders','SlidersController');
        Route::resource('/contacts','Contactscontroller');
        Route::resource('/doctors','DoctorsController');
        Route::resource('/services','ServicesController');
        Route::resource('/clients','ClientsController');
        Route::resource('/appointments','AppointmentsController');
        Route::resource('/settings','SettingsController');
        Route::resource('/gallaries','GallariesController');
    });


