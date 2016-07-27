<?php

require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/hellos', function ($request,$response) {
	 $data = array(
	 				array('name' => 'june', 'age' => 40),
	 				array('name' => 'june', 'age' => 40),
	 				array('name' => 'june', 'age' => 40),
	 				);
    $response->withJson($data);
  

    return $response;
});
$app->get('/ayos', function ($request,$response) {
	 $data = array(
	 				array('name' => 'juner', 'age' => 40),
	 				array('name' => 'juner', 'age' => 40),
	 				array('name' => 'juner2', 'age' => 40),
	 				);
    $response->withJson($data);
  

    return $response;
});

$app->run();