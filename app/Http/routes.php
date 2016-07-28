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

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@index');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::post('/api', 'ApiController@post');

Route::post('/telegram/webhook/'.getenv('TELEGRAM_WEBHOOK_TOKEN'), 'TelegramController@webhook');
