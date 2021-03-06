<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post(        '/register',                        'API\Auth\AuthController@register');
Route::post(        '/login',                           'API\Auth\AuthController@login');

Route::group(['middleware'=>'api-auth'],function (){
    Route::post(        '/task/create',             'API\Tasks\TasksController@store');
    Route::get(         '/tasks/all',               'API\Tasks\TasksController@all');
    Route::post(        '/task/delete',             'API\Tasks\TasksController@destroy');
    Route::post(        '/task/update',             'API\Tasks\TasksController@update');
    Route::post(        '/comment/create',          'API\Tasks\CommentsController@store');
    Route::post(        '/comment/delete',          'API\Tasks\CommentsController@destroy');
});


