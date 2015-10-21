<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    /**
     * Rutas del sitio web principal
     */
    Route::get('/', [
        'uses' => 'Website@index',
        'as'   => 'website.index'
    ]);
    Route::get('como-funciona', [
        'uses' => 'Website@comoFunciona',
        'as'   => 'website.como-funciona'
    ]);
    Route::get('precios', [
        'uses' => 'Website@precios',
        'as'   => 'website.precios'
    ]);
    Route::get('preguntas-frecuentes', [
        'uses' => 'Website@preguntas',
        'as'   => 'website.preguntas-frecuentes'
    ]);
    Route::get('acceso', [
        'uses' => 'Website@acceso',
        'as'   => 'website.acceso'
    ]);
    Route::get('reclutamiento', [
        'uses' => 'Website@acceso',
        'as'   => 'website.reclutamiento'
    ]);
    Route::get('auth/login', [
        'uses' => 'Website@authLogin',
        'as'   => 'website.auth.login'
    ]);
    Route::post('auth/login', [
        'uses' => 'Auth\AuthController@postLogin',
        'as'   => 'website.post-acceso'
    ]);


    //Cuenta
    Route::group([
        'prefix'     => 'cuenta',
        'middleware' => 'auth'
    ], function () {

        Route::get('/', [
            'uses' => 'Cuenta@index',
            'as'   => 'cuenta.index'
        ]);

    });




