<?php

#Route::get('/', function () {
#return view('home');
#});

Route::get('/login' , function() {
return view('auth.login');
});

Route::get('/catalog' , function() {
return view('catalog.index');
});

Route::get('/catalog/show/{id}' , function($id) {
return view('catalog.show', array('id'=>$id));
});

Route::get('/catalog/create' , function() {
return view('catalog.create');
});

Route::get('/catalog/edit/{id}' , function($id) {
return view('catalog.edit', array('id'=>$id));
});

Route::get('/logout' , function() {
return 'Logout usuario';
});

#Route::get('/catalog/show/{id}' , function() {
#return 'Vista detalle pelicula {id}';
#});

#Route::get('/catalog/create' , function() {
#return 'Añadir pelicula';
#});

#CONTROLLERS

Route::get('/', 'HomeController@getHome');

Route::get('/catalog', 'CatalogController@getIndex');

Route::get('/catalog/show/{id}', 'CatalogController@getShow');

Route::get('/catalog/create', 'CatalogController@getCreate');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');


?>