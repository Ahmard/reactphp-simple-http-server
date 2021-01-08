<?php

use QuickRoute\Route;

Route::get('/', 'MainController@index');
Route::get('/list', 'MainController@list');

Route::prefix('func')
    ->namespace('Func\\')
    ->group(function () {
        Route::prefix('form')->group(function (){
            //Regular form
            Route::get('/', 'FormController@show');
            Route::post('submit', 'FormController@submit');

            //File
            Route::get('file', 'FormController@file');
            Route::post('upload', 'FormController@upload');
        });
    });