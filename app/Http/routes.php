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
    $res['success'] = true;
    $res['result'] = "Hello there welcome toweb api using lumen tutorial!";
    return Response($res);
});

$app->post('/login', 'LoginController@index');
$app->post('/register', 'UserController@index');
$app->get('/user/{id}', ['middleware' => 'auth', 'uses' => 'UserController@get_user']);


