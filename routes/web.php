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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/user','UserController');
    Route::get('/user/create/estudiante','UserController@estudiante');
    Route::get('/user/create/docente','UserController@docente');
    Route::get('/user/create/externo','UserController@externo');
    Route::resource('/adm','RolCuController');
    Route::resource('/rol','RolController');
    Route::resource('/cu','CaseUseController');
    Route::get('/home', 'HomeController@index')->name('home');

    // rutas sobre grados académicos
    Route::resource('/grado-academico','GradoAcademicoController');

    Route::resource('/modalidad','ModalidadController');
    Route::get('/modalidad/create/trabajo','ModalidadController@trabajo');
    Route::get('/modalidad/create/examen','ModalidadController@examen');
    Route::get('/modalidad/create/directo','ModalidadController@directo');
    Route::get('/modalidad/create/externo','ModalidadController@externo');    
    
    // rutas de Luis Alejandro :v
    Route::resource('/sector','SectorController'); // sectores industriales
    Route::resource('/regimen','RegimenController'); // regimenes regulatorios
    Route::resource('/area-estudio','AreaEstudioController'); // area de estudio
    Route::resource('/situacion-empleo','SituacionEmpleoController'); // situacion de empleo
    Route::resource('/area-cargo','AreaCargoController'); // area del cargo laboral
    Route::resource('/nivel-cargo','NivelCargoController'); // nivel del cargo laboral
});
