<?php

use Slim\Http\Response;

$app->get('/', function (Response $response) {
    $response->getBody()->write('Hello World!');
    return $response;
});
