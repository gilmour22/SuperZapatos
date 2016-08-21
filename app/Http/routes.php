<?php

Route::group(['prefix'=>'services'], function() {
  Route::group(['prefix'=>'stores'], function() {
    Route::get('', ['uses'=>'ServicesController@DevuelveTiendas','middleware'=>'simpleauth']);
    Route::get('{id}', ['uses'=>'ServicesController@DevuelveArticulosEnTienda','middleware'=>'simpleauth']);
  });
  Route::group(['prefix'=>'articles'], function() {
    Route::get('', ['uses'=>'ServicesController@DevuelveArticulos','middleware'=>'simpleauth']);
  });
});

Route::get('/', function () {
    return view('home');
});


Route::resource('tienda','TiendaController');
Route::resource('producto','ProductoController');
