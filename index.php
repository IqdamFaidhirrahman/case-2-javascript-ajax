<?php

require 'src/routes.php';

$root_dir = strtolower(str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
$uri = str_replace($root_dir, '', $_SERVER['REQUEST_URI']);

$router->dispatch($uri);