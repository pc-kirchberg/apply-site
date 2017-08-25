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

use Carbon\Carbon;

$BYPASS_KEY_HASH = '90d94eb53c27a8fb24b7ed476ba6d0ce3e8bff90';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/process', function () {
    return view('process');
})->name('process');

Route::get('/positions', function () {
    return view('positions');
})->name('positions');

Route::get('/form', function (Illuminate\Http\Request $request) use ($BYPASS_KEY_HASH) {
    if (sha1($request->input('bypass_deadline_do_not_use_or_you_will_be_fired')) === $BYPASS_KEY_HASH) {
        return view('form');
    }
    if (Carbon::create(2017, 9, 11, 0, 0, 0, 'Europe/Luxembourg')->gt(Carbon::now())) {
        return view('form.too_early');
    }
    if (Carbon::create(2017, 9, 17, 23, 59, 59, 'Europe/Luxembourg')->lt(Carbon::now())) {
        return view('form.too_late');
    }
    return view('form');
})->name('form');

Route::post('/form')->uses('ApplyController@create')->name('submit');


