<?php

$router->get('/', function () {
    return view('intro');
});

$router->get('/version', function () use ($router) {
    return $router->app->version() . '. Created by <a href="https://iamnapo.me">iamnapo</a>.';
});

$router->get('/users', ['uses' => 'UserController@getAllUsers']);
$router->post('/users', ['uses' => 'UserController@createUser']);
$router->get('/users/{user_id}', ['uses' => 'UserController@getUser']);
$router->get('/users/{user_id}/inbox', ['uses' => 'UserController@getInbox']);
$router->get('/users/{user_id}/sent', ['uses' => 'UserController@getSent']);
$router->put('/users/{user_id}', ['uses' => 'UserController@updateUser']);
$router->delete('/users/{user_id}', ['uses' => 'UserController@deleteUser']);

$router->get('/messages', ['uses' => 'MessageController@getAllMessages']);
$router->get('/messages/conversation', ['uses' => 'MessageController@getConversation']);
$router->post('/messages', ['uses' => 'MessageController@createMessage']);
$router->get('/messages/{message_id}', ['uses' => 'MessageController@getMessage']);
$router->put('/messages/{message_id}', ['uses' => 'MessageController@updateMessage']);
$router->delete('/messages/{message_id}', ['uses' => 'MessageController@deleteMessage']);
