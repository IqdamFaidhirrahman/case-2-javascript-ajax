<?php

require 'src/core/Router.php';
require 'src/controllers/ChatController.php';

$router = new Router();

$router->addRoute('login', ChatController::class, 'login');
$router->addRoute('logout', ChatController::class, 'logout');

$router->addRoute('', ChatController::class, 'chat');
$router->addRoute('chat', ChatController::class, 'chat');
$router->addRoute('messages', ChatController::class, 'messageList');
$router->addRoute('add-message', ChatController::class, 'addMessage');

