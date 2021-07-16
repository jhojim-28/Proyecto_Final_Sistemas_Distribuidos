<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
| Rutas del servicio
*
*/

/**
 * referencia al grupo de rutas de client.credential para el proceso de autenticacion
 */
$router->group(['middleware'=>'client.credentials'], function() use($router){

/**
 * cliente rutas
 */

$router->get('/authors', 'AuthorController@index');
$router->post('/authors', 'AuthorController@store');
$router->get('/authors/{author}', 'AuthorController@show');
$router->put('/authors/{author}', 'AuthorController@update');
$router->patch('/authors/{author}', 'AuthorController@update');
$router->delete('/authors/{author}', 'AuthorController@destroy');

/**
 * Taxis rutas
 */
$router->get('/taxis', 'TaxisController@index');
$router->post('/taxis', 'TaxisController@store');
$router->get('/taxis/{taxis}', 'TaxisController@show');
$router->put('/taxis/{taxis}', 'TaxisController@update');
$router->patch('/taxis/{taxis}', 'TaxisController@update');
$router->delete('/taxis/{taxis}', 'TaxisController@destroy');

});




