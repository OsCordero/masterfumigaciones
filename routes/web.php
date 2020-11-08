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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/suppliers', 'SupplierController@index')->name('suppliers.index');
Route::get('/suppliers/create','SupplierController@create')->name('suppliers.create');
Route::post('/suppliers/create', 'SupplierController@store')->name('suppliers.store');
//Routes

Route::middleware(['auth'])->group(function(){

    Route::get('/users', 'UserController@index')->name('users.index')->middleware('can:user.show');
    Route::resource('users', 'UserController')->middleware('can:user.show');

    Route::get('/appoinments', 'AppointmentController@index')->name('appoimenents.index');
    Route::resource('appoinments', 'AppointmentController');
    Route::get('/citas/fetch_establecimientos/', 'AppointmentController@fetchEstablecimientos');
    Route::get('/citas/fetch_establecimientos_precio/', 'AppointmentController@fetchEstablecimientos_precio');

    //Ruta para asignar empleados
    Route::get('/citas/empleados/{id}','AppointmentController@asignarEmpleado')->name('asignarEmpleado');
    Route::get('/reportes1', 'AppointmentController@reporte1_captura')->name('reporte1.captura');

    Route::get('/reportes2', 'AppointmentController@reporte2_captura')->name('reporte2.captura');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
