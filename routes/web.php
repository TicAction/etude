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
    return view('original');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'StudyController@index')->name('admin_study_index')->middleware('auth');
Route::post('/admin/create', 'StudyController@create')->name('admin_study_create')->middleware('auth');
Route::get('/admin', 'StudyController@store')->name('admin_study_store')->middleware('auth');
Route::get('/admin/{study}', 'StudyController@show')->name('admin_study_show')->middleware('auth');
Route::get('/admin/{study}/edit', 'StudyController@edit')->name('admin_study_edit')->middleware('auth');
Route::put('/admin/{study}', 'StudyController@update')->name('admin_study_update')->middleware('auth');
Route::delete('/admin/{study}', 'StudyController@delete')->name('admin_study_delete')->middleware('auth');

Route::get('/etude/341', 'StudyController@firstgroup')->name('firstgroup');

Route::get('/etude/431', 'StudyController@secondgroup')->name('secondgroup');
