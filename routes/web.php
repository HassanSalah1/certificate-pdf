<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('import', 'EventController@import');
Route::post('import', 'EventController@store')->name('event.import');
Route::post('event-form', 'EventController@getCertificate')->name('event.form');
