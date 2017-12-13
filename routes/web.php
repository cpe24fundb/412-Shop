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

$router->get('/', 'ProductController@viewHomeProduct');

$router->get('/product', 'ProductController@viewAllProducts');
$router->get('/product/{productId}', 'ProductController@viewDetailProducts');

$router->get('/category', 'ProductController@viewAllCategories');
$router->get('/category/{categoryId}', 'ProductController@viewProductsByCategory');

$router->get('/feedback', 'FeedbackController@view');
$router->post('/feedback', 'FeedbackController@create');

$router->get('/login', [
    'as' => 'login',
    'use' => function () {
    return view('admin.login');
}]);

$router->post('/login', 'AuthenticationController@login');
$router->get('/logout', 'AuthenticationController@logout');

$router->group(['prefix' => 'shop-admin', 'as' => 'admin'], function () use ($router) {
    $router->get('/', function () {
        return redirect()->route('admin.manager.dashboard');
    });

    $router->group(['prefix' => 'manager', 'as' => 'manager', 'middleware' => 'auth:manager'], function () use ($router) {
        $router->get('/', [
            'as' => 'dashboard',
            'uses' => 'ManageDashboardController@view'
        ]);
        
        $router->group(['prefix' => 'category', 'as' => 'category'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageCategoryController@all'
            ]);

            $router->get('{id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageCategoryController@view'
            ]);

            $router->get('{id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageCategoryController@delete'
            ]);

            $router->post('{id:[0-9]+}', [
                'as' => 'edit',
                'uses' => 'ManageCategoryController@edit'
            ]);

            $router->post('/', [
                'as' => 'create',
                'uses' => 'ManageCategoryController@create'
            ]);
        });

        $router->group(['prefix' => 'product', 'as' => 'product'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageProductController@all'
            ]);

            $router->get('{id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageProductController@view'
            ]);

            $router->get('{id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageProductController@delete'
            ]);

            $router->post('{id:[0-9]+}', [
                'as' => 'edit',
                'uses' => 'ManageProductController@edit'
            ]);

            $router->post('/', [
                'as' => 'create',
                'uses' => 'ManageProductController@create'
            ]);
        });

        $router->group(['prefix' => 'user', 'as' => 'user'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageUserController@all'
            ]);

            $router->get('{id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageUserController@view'
            ]);

            $router->get('{id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageUserController@delete'
            ]);

            $router->post('{id:[0-9]+}', [
                'as' => 'edit',
                'uses' => 'ManageUserController@edit'
            ]);

            $router->post('/', [
                'as' => 'create',
                'uses' => 'ManageUserController@create'
            ]);
        });

        $router->group(['prefix' => 'stock', 'as' => 'stock'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageStockController@all'
            ]);

            $router->get('{stock_id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageStockController@view'
            ]);

            $router->get('{stock_id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageStockController@delete'
            ]);

            $router->post('{stock_id:[0-9]+}', [
                'as' => 'edit',
                'uses' => 'ManageStockController@edit'
            ]);

            $router->post('/', [
                'as' => 'create',
                'uses' => 'ManageStockController@create'
            ]);

            $router->group(['prefix' => '{stock_id:[0-9]+}/item', 'as' => 'item'], function () use ($router) {
                $router->get('{product_id:[0-9]+}/delete', [
                    'as' => 'delete',
                    'uses' => 'ManageStockController@deleteItem'
                ]);
    
                $router->post('/', [
                    'as' => 'create',
                    'uses' => 'ManageStockController@createItem'
                ]);
            });
        });

        $router->group(['prefix' => 'bill', 'as' => 'bill'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageBillController@all'
            ]);

            $router->get('{bill_id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageBillController@view'
            ]);

            $router->get('{bill_id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageBillController@delete'
            ]);

            $router->post('{bill_id:[0-9]+}', [
                'as' => 'edit',
                'uses' => 'ManageBillController@edit'
            ]);

            $router->post('/', [
                'as' => 'create',
                'uses' => 'ManageBillController@create'
            ]);

            $router->group(['prefix' => '{bill_id:[0-9]+}/item', 'as' => 'item'], function () use ($router) {
                $router->get('{product_id:[0-9]+}/delete', [
                    'as' => 'delete',
                    'uses' => 'ManageBillController@deleteItem'
                ]);
    
                $router->post('/', [
                    'as' => 'create',
                    'uses' => 'ManageBillController@createItem'
                ]);
            });
        });

        $router->group(['prefix' => 'feedback', 'as' => 'feedback'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageFeedbackController@all'
            ]);

            $router->get('{bill_id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageFeedbackController@view'
            ]);

            $router->get('{bill_id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageFeedbackController@delete'
            ]);
        });

        $router->group(['prefix' => 'notification', 'as' => 'notification'], function () use ($router) {
            $router->get('/', [
                'uses' => 'ManageNotificationController@all'
            ]);

            $router->get('{notification_id:[0-9]+}', [
                'as' => 'view',
                'uses' => 'ManageNotificationController@view'
            ]);

            $router->post('/', [
                'as' => 'create',
                'uses' => 'ManageNotificationController@create'
            ]);

            $router->get('{notification_id:[0-9]+}/delete', [
                'as' => 'delete',
                'uses' => 'ManageNotificationController@delete'
            ]);
        });
    });

    $router->group(['prefix' => 'statistic', 'as' => 'statistic', 'middleware' => 'auth:founder'], function () use ($router) {
        $router->get('/', [
            'as' => 'popular',
            'uses' => 'StatisticController@popular'
        ]);

        $router->group(['prefix' => 'bill', 'as' => 'bill'], function () use ($router) {
            $router->get('/', [
                'uses' => 'StatisticBillController@view'
            ]);

            $router->get('/{date:[0-9]{4}-[0-9]{2}-[0-9]{2}}', [
                'uses' => 'StatisticBillController@billDate'
            ]);

            $router->get('/{dateF:[0-9]{4}-[0-9]{2}-[0-9]{2}}/{dateT:[0-9]{4}-[0-9]{2}-[0-9]{2}}', [
                'uses' => 'StatisticBillController@billRange'
            ]);

            $router->get('/{month:[0-9]{4}-[0-9]{2}}', [
                'uses' => 'StatisticBillController@billMonth'
            ]);

            $router->get('/{year:[0-9]{4}}', [
                'uses' => 'StatisticBillController@billYear'
            ]);
        });
        
        $router->group(['prefix' => 'daily', 'as' => 'daily'], function () use ($router) {
            $router->get('/',[
                'as' => 'daily',
                'uses' => 'StatisticDailyController@daily'            
            ]);

            $router->post('/',[
                'as' => 'dailyRedirect',
                'uses' => 'StatisticDailyController@dailyRedirect'            
            ]);
            
            $router->get('{created_at:[0-9]+-+[0-9]+-+[0-9]+}', [
                'as' => 'view',
                'uses' => 'StatisticDailyController@view'
            ]);
        });
    });
});