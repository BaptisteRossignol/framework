<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/vendor/autoload.php';

$request = Request::createFromGlobals();

$name = $request->query->get('name', 'World');
// $name = isset($_GET['name']) ? $_GET['name'] : 'World';

$response = new Response();
$response->headers->set('Content-Type', 'text/html; charset=utf-8');
$response->setContent(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES)));
$response->send();
// header('Content-Type: text/html; charset=utf-8');