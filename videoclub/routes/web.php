<?php

Route::group(['middleware' => 'auth'], function (){
Route::get('/', 'HomeController@getHome');

Route::get('/catalog', 'CatalogController@getIndex');

Route::get('/catalog/show/{id}', 'CatalogController@getShow');

Route::get('/catalog/create', 'CatalogController@getCreate');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');

Route::post('/catalog/create', 'CatalogController@postCreate');

Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


#Route::get('/', function () {
#return view('home');
#});

#Route::get('/login' , function() {
#return view('auth.login');
#});

#Route::get('/logout' , function() {
#return 'Logout usuario';
#});

#Route::get('/catalog/show/{id}' , function() {
#return 'Vista detalle pelicula {id}';
#});

#Route::get('/catalog/create' , function() {
#return 'Añadir pelicula';
#});

#Route::get('/catalog' , function() {
#return view('catalog.index');
#});

#Route::get('/catalog/show/{id}' , function() {
#return view('catalog.show');
#});

#Route::get('/catalog/create' , function() {
#return view('catalog.create');
#});

#Route::get('/catalog/edit/{id}' , function() {
#return view('catalog.edit');
#});
