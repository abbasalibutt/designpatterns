<?php

include_once("Dispatcher.php");
/**
 *  A helper is responsible for helping a view or controller complete its processing. Thus, helpers have numerous
 * responsibilities, including gathering data required by the view and storing this intermediate model,
 * in which case the helper is sometimes referred to as a value bean.
 */
class FrontController
{
    /**
     * Dispatcher of the front controller design pattern
     * @var Dispatcher $dispatcher
     */
    private $dispatcher;

    /**
     * To initialize the dispatcher.
     */
    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
    }

    /**
     * Validate the request have privilege to access or not.
     * @return true
     */
    private function isAuthenticUser()
    {
        echo "Authentication successful. <br/>";
        return true;
    }

    /**
     * Track the request to keep the records of the access
     *
     * @param $request
     * @return void
     */
    private function trackRequest($request)
    {
        echo "Requested View: ".$request." <br/>";
    }

    /**
     * Connect the request with dispatcher after track and authentication.
     *
     * @param $request
     * @return void
     */
    public function dispatchRequest($request)
    {
        $this->trackRequest($request);

        if($this->isAuthenticUser())
        {
            $this->dispatcher->dispatch($request);
        }
    }
}