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


//Routes

Route::middleware(['auth'])->group(function(){

    Route::get('/users', 'UserController@index')->name('users.index')->middleware('can:users.show');
    Route::resource('users', 'UserController')->middleware('can:users.show');

    //Citas
    Route::get('/appoinments', 'AppointmentController@index')->name('appoimenents.index')->middleware('can:citas');
    Route::resource('appoinments', 'AppointmentController')->middleware('can:citas');
    Route::get('/citas/fetch_establecimientos/', 'AppointmentController@fetchEstablecimientos')->middleware('can:citas');
    Route::get('/citas/fetch_establecimientos_precio/', 'AppointmentController@fetchEstablecimientos_precio')->middleware('can:citas');

    //Ruta para asignar empleados
    Route::get('/citas/empleados/{id}','AppointmentController@asignarEmpleado')->name('asignarEmpleado')->middleware('can:citas');
    Route::get('/citas/monto/{id}','AppointmentController@asignarMonto')->name('appoinments.monto')->middleware('can:citas');
    Route::get('/citas/guardarMonto/{id}', 'AppointmentController@guardarMonto')->name('appoinments.guardarMonto')->middleware('can:citas');

    //Rutas para los reportes
    Route::get('/reportes1', 'AppointmentController@reporte1_captura')->name('reporte1.captura')->middleware('can:reporteTactico');
    Route::get('/reporte_pdf1/{id}', 'AppointmentController@pdf1')->name('reporte1')->middleware('can:reporteTactico');
    Route::get('/reporte_pdf2', 'AppointmentController@pdf2')->name('reporte2')->middleware('can:reporteEstrategico');
    Route::get('/reporte_pdf3', 'AppointmentController@pdf3')->name('reporte3');
    Route::get('/reportes2', 'AppointmentController@reporte2_captura')->name('reporte2.captura')->middleware('can:reporteEstrategico');

    // Rutas para Clientes
    Route::get('/clients', 'ClientController@index')->name('clients.index')->middleware('can:client.show')->middleware('can:clientes');
    Route::resource('clients', 'ClientController')->middleware('can:clientes');

    //Routes for suppliers resource
    Route::get('/suppliers', 'SupplierController@index')->name('suppliers.index')->middleware('can:proveedores');
    Route::post('/suppliers', 'SupplierController@filterSuppliers')->name('suppliers.filter')->middleware('can:proveedores');
    Route::get('/suppliers/create','SupplierController@create')->name('suppliers.create')->middleware('can:proveedores');
    Route::post('/suppliers/create', 'SupplierController@store')->name('suppliers.store')->middleware('can:proveedores');
    Route::get('/suppliers/{supplier}','SupplierController@show')->name('suppliers.show')->middleware('can:proveedores');
    Route::get('/suppliers/{supplier}/edit', 'SupplierController@edit')->name('suppliers.edit')->middleware('can:proveedores');
    Route::put('/suppliers/{supplier}', 'SupplierController@update')->name('suppliers.update')->middleware('can:proveedores');
    Route::delete('/suppliers/{supplier}', 'SupplierController@destroy')->name('suppliers.destroy')->middleware('can:proveedores');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
