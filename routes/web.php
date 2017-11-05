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

$router->get('/', 'ProductController@viewPopularProduct');

$router->get('/product', 'ProductController@viewAllProducts');
$router->get('/product/{productId}', 'ProductController@viewDetailProducts');

$router->get('/category', 'ProductController@viewAllCategories');
$router->get('/category/{categoryId}', 'ProductController@viewProductsByCategory');

$router->group(['prefix' => 'shop-admin', 'as' => 'admin'], function () use ($router) {
    $router->get('/', function () {
            return redirect()->route('admin.statistic.dashboard');
        });

    $router->group(['prefix' => 'manager', 'as' => 'manager'], function () use ($router) {
        $router->get('/', [
            'as' => 'dashboard',
            'use' => function () {
                return view('admin.manager.dashboard');
            }]);
    });

    $router->group(['prefix' => 'statistic', 'as' => 'statistic'], function () use ($router) {
        $router->get('/', [
            'as' => 'dashboard',
            'use' => function () {
                return redirect()->route('admin.manager.dashboard');
            }]);
    });
});
