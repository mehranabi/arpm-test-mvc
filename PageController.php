<?php

require 'view.php';

class PageController
{
    public function index(): string
    {
        return view('index');
    }

    public function notFound(): string
    {
        return view('notFound');
    }

    public function folder1(): string
    {
        return view('folder1');
    }

    public function folder2(): string
    {
        return view('folder2');
    }
}
