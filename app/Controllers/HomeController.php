<?php

namespace Cookie\Controllers;

class HomeController
{
    public function index(): string
    {
        return "Welcome to our homepage!";
    }
    
    public function about(): string
    {
        return "About Us Page";
    }
}