<?php

require_once "Config.php";
require_once "Router.php";
require_once "ControllerFactory.php";
require_once "Validation.php";

$router = new Router('/results');

$controllerFactory = new ControllerFactory;

$controller = $controllerFactory->makeFromRouter($router, new stdClass);

$validation = new Validation;

var_dump($validation->email("test@example.com"));