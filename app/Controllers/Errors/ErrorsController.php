<?php

namespace Cookie\Controllers;

class ErrorsController
{
    public function index(int $error): string
    {
        if ($error === 404) {
            return "404 Not Found !";
        }

        return "";
    }
}