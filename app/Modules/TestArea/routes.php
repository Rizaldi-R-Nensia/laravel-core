<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, Authorization');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization, tenant');
/*
|--------------------------------------------------------------------------
| Application Routes For Module User
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api/test', 'namespace' => 'App\Modules\TestArea\Controllers'], function () {
    // Route::post('register', 'UserController@register');
    // Route::post('login', 'UserController@login');

    Route::group(['middleware' => 'jwt.auth'], function() {
        Route::get('testMysqlConn', 'TestAreaController@testMysqlConn');
        Route::get('testPostgreConn', 'TestAreaController@testPostgreConn');
        // Route::post('logout', 'UserController@logout');
    });

    Route::group(['middleware' => 'jwt.refresh'], function() {
        // Route::get('refresh', 'UserController@refresh');
        Route::get('test1', 'TestAreaController@db1');
        Route::get('test2', 'TestAreaController@db2');
        Route::get('test3', 'TestAreaController@db3');
        Route::get('test4', 'TestAreaController@db4');
        Route::get('test5', 'TestAreaController@db5');
        Route::get('test6', 'TestAreaController@db6');
        Route::get('test7', 'TestAreaController@db7');
        Route::get('test8', 'TestAreaController@db8');
        Route::get('test9', 'TestAreaController@db9');
        Route::get('test10', 'TestAreaController@db10');
        Route::get('test11', 'TestAreaController@db11');
        Route::get('test12', 'TestAreaController@db12');
        Route::get('test13', 'TestAreaController@db13');
        Route::get('test14', 'TestAreaController@db14');
        Route::get('test15', 'TestAreaController@db15');
    Route::get('test', 'TestAreaController@qwe')        ;
    });
});
