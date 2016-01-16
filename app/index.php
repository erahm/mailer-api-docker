<?php
require 'vendor/autoload.php';
use app\lib\Mailer;

$app = new \Slim\App;

$app->get('/', function ( $request, $response ) {
    return $response->write('Slim is running...');
});

$app->run();
