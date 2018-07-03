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


Route::resource('tasks', 'TasksController');
Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('events', 'EventController@addEvent')->name('events.add');

Route::get('/consultarTurno','EventController@index')->name('consultarTurno');

Route::get('/reservarTurno', function () {
    return view('reservarTurno');
})->name('reservarTurno');;

Route::get('/modificarTurno', function () {
    return view('modificarTurno');
})->name('modificarTurno');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('events', 'EventController@index');

