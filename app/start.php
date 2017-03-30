<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim();

// database
$app->container->singleton('db', function() {
  return new PDO('mysql:host=127.0.0:1;dbname=project', 'root', 'root');
});

// route
$app->get('/', function() {
  echo 'Hello';
});

$app->run();
