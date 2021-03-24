<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@index');
Route::get('registrar', 'PagesController@registro')->name('registro');
Route::get('lista/{datos?}', 'PagesController@lista')->name('lista');
Route::get('/detalles/{id}', 'PagesController@detalle')->name('peliculas.detalles');
Route::post('/', 'PagesController@crear')->name('peliculas.crear');
Route::get('editar', 'PagesController@editar')->name('editar');
Route::get('/modificar/{id}','PagesController@modificar')->name('peliculas.modificar');

Route::put('/modificar/{id}','PagesController@update')->name('peliculas.update');
Route::delete('eliminar/{id}',  'PagesController@delete')->name('peliculas.eliminar');
