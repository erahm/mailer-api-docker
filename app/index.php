<?php
require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function ( $request, $response ) {
    return $response->write('Slim is running...');
});

$app->run();
