<?php

$index = "<h1>Hi</h1><div>I'm in the homepage</div>";
$folder1 = "<h1>Hi</h1><div>I'm in folder1</div>";
$folder2 = "<h1>Hi</h1><div>I'm in folder2</div>";
$notFound = "<div>The page is not found!</div>";

$views = compact('index','folder1', 'folder2', 'notFound');

function view(string $name): string
{
    global $views;
    if (array_key_exists($name, $views)) return $views[$name];
    return $views['notFound'];
}
