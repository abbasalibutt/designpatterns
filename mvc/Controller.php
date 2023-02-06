<?php

include_once("Model.php");

/**
 * The Controller receives the request, parses it, and then it initializes and invokes the Model.
 * The Controller, then, takes the model response and sends it to the View layer.
 * It’s practically the bridge between the Model and the View.
 */
class Controller
{
    /**
     * model object which will contain customers information
     *
     * @var $model
     */
    private $model;

    /**
     * Class construction which will initialize the model object
     */
    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if(!isset($_GET['customer']))
        {
            $customers = $this->model->getCustomerList();
        }else{
            $customers = [$this->model->getCustomer($_GET['customer'])];
        }

        include('./view.php');
    }
}