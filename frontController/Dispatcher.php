<?php

include_once("StudentView.php");
include_once("HomeView.php");

/**
 *  A dispatcher is responsible for view management and navigation,
 * managing the choice of the next view to present to the user, and providing the mechanism for
 * vectoring control to this resource.
 */
class Dispatcher
{
    /**
     * To handle the student view request
     *
     * @var StudentView $studentView
     */
    private $studentView;

    /**
     * To handle the teacher view request
     *
     * @var HomeView $homeView
     */
    private $homeView;

    /**
     * To initialize the properties
     */
    public function __construct()
    {
        $this->studentView = new StudentView();
        $this->homeView = new HomeView();
    }

    /**
     * Choose the next view based on the request type
     *
     * @param $request
     * @return void
     */
    public function dispatch($request)
    {
        if($request == "student")
        {
            $this->studentView->show();
        }else{
            $this->homeView->show();
        }
    }
}