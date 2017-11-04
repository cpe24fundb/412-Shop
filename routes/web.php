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

$router->get('/', 'ProductController@viewAllProducts');

$router->get('/category', 'ProductController@viewAllCategories');
$router->get('/category/{categoryId}', 'ProductController@viewProductsByCategory');

$router->get('/home', 'ProductController@viewProducts');
