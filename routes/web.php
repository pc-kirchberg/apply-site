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

Route::get('/process', function () {
    return view('process');
})->name('process');

Route::get('/positions', function () {
    return view('positions');
})->name('positions');

Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/form')->uses('ApplyController@create')->name('submit');


