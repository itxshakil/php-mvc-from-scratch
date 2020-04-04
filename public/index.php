<?php

/**
 * Front Controller
 */

 // Require the controller class
require './App/Controller/Posts.php';
require './Core/Router.php';

$router = new Router;

//Add routes

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);
