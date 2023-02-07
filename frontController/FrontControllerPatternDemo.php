<?php

include_once("FrontController.php");
class FrontControllerPatternDemo
{
    private $frontController;
    public function __construct()
    {
        $this->frontController = new FrontController();
    }

    public function main()
    {
        $this->frontController->dispatchRequest("home");
        $this->frontController->dispatchRequest("student");
    }
}