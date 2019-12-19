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

    // sectores industriales
    Route::resource('/sector','SectorController');

    // regimenes regulatorios
    Route::resource('/regimen','RegimenController');

    // area de estudio
    Route::resource('/area-estudio','AreaEstudioController');

    // situacion de empleo
    Route::resource('/situacion-empleo','SituacionEmpleoController');
});
