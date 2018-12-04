<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, Authorization');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization, tenant');
/*
|--------------------------------------------------------------------------
| Application Routes For Module Sdm
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'api/client', 'namespace' => 'App\Modules\Clients\Controllers'], function () {
    Route::group(['middleware' => 'jwt.auth'], function() {
        Route::get('list', 'ClientController@list');
        Route::get('detail', 'ClientController@detail');
        Route::post('create', 'ClientController@create');
        Route::post('delete', 'ClientController@delete');
        Route::post('update', 'ClientController@update');
    });

    Route::group(['middleware' => 'jwt.refresh'], function(){
        Route::get('test', 'ClientController@test');

    });
});
