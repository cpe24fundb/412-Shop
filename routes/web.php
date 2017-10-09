<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->group(['prefix' => 'category'], function () use ($router) {
        $router->get('/', 'CategoryController@list');
        $router->get('/{id}/edit', 'CategoryController@editForm');
        $router->post('/create', 'CategoryController@create');
        $router->post('/{id}/update', 'CategoryController@update');
        $router->get('/{id}/delete', 'CategoryController@delete');
    });
});
