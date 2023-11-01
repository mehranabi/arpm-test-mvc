<?php

require 'route.php';
require 'PageController.php';

$requested_path = $_SERVER['REQUEST_URI'];
[$controller, $method] = route($requested_path);

echo (new $controller())->$method();
