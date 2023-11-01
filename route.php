<?php

$routes = [
    '/folder1' => [PageController::class, 'folder1'],
    '/folder2' => [PageController::class, 'folder2'],
    '/' => [PageController::class, 'index'],
];

function route(string $path): array
{
    global $routes;
    if (array_key_exists($path, $routes)) return $routes[$path];
    return [PageController::class, 'notFound'];
}
