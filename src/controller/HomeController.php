<?php

namespace Nilixin\Edu\controller;

use Nilixin\Edu\ViewHandler;

class HomeController
{
    public function index()
    {
        return ViewHandler::make("view/HomeView.php", ["hello" => "world"]);
    }
}