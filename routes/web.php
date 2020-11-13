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

//Routes for suppliers resource
Route::get('/suppliers', 'SupplierController@index')->name('suppliers.index');
Route::post('/suppliers', 'SupplierController@filterSuppliers')->name('suppliers.filter');
Route::get('/suppliers/create','SupplierController@create')->name('suppliers.create');
Route::post('/suppliers/create', 'SupplierController@store')->name('suppliers.store');
Route::get('/suppliers/{supplier}','SupplierController@show')->name('suppliers.show');
Route::get('/suppliers/{supplier}/edit', 'SupplierController@edit')->name('suppliers.edit');
Route::put('/suppliers/{supplier}', 'SupplierController@update')->name('suppliers.update');
Route::delete('/suppliers/{supplier}', 'SupplierController@destroy')->name('suppliers.destroy');
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
    Route::get('/citas/monto/{id}','AppointmentController@asignarMonto')->name('appoinments.monto');
    Route::get('/citas/guardarMonto/{id}', 'AppointmentController@guardarMonto')->name('appoinments.guardarMonto');

    //Rutas para los reportes
    Route::get('/reportes1', 'AppointmentController@reporte1_captura')->name('reporte1.captura');
    Route::get('/reporte_pdf1/{id}', 'AppointmentController@pdf1')->name('reporte1');
    Route::get('/reporte_pdf2', 'AppointmentController@pdf2')->name('reporte2');

    Route::get('/reportes2', 'AppointmentController@reporte2_captura')->name('reporte2.captura');

    // Rutas para Clientes
    Route::get('/clients', 'ClientController@index')->name('clients.index')->middleware('can:client.show');
    Route::resource('clients', 'ClientController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
