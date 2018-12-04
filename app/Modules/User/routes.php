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

Route::group(['prefix' => 'api/user', 'namespace' => 'App\Modules\User\Controllers'], function () {
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');

    Route::group(['middleware' => 'jwt.auth'], function() {
        Route::get('view', 'UserController@user');
        Route::post('logout', 'UserController@logout');
    });

    Route::group(['middleware' => 'jwt.refresh'], function() {
        Route::get('refresh', 'UserController@refresh');
    });
});