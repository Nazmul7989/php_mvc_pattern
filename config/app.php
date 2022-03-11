<?php

class App{

    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];

    public function __construct()
    {
        echo $_SERVER['REQUEST_URI'];
    }

}