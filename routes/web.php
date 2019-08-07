<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('pages','PagesController@show');
Route::get('pages/{page}','PagesController@onepage');
Route::post('pagesstore','PagesController@store');
Route::get('pages/{page}/delete','PagesController@delete');
Route::get('pages/{page}/deleteall','PagesController@deleteall');

Route::post('pages/{page}/notesstore','NotesController@store');
Route::get('notes/{note}/edit','NotesController@edit');
Route::post('notes/{note}/update','NotesController@update');
Route::get('notes/{note}/delete','NotesController@delete');
