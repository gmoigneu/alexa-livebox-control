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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/livebox/turnon', [
    'uses' => 'LiveboxPlayController@turnOn'
]);

$app->get('/livebox/turnoff', [
    'uses' => 'LiveboxPlayController@turnOff'
]);

$app->get('/livebox/state', [
    'uses' => 'LiveboxPlayController@getState'
]);

$app->get('/livebox/channel/{channel}', [
    'uses' => 'LiveboxPlayController@changeChannel'
]);

$app->get('/livebox/volume/{direction}/{value}', [
    'uses' => 'LiveboxPlayController@changeVolume'
]);