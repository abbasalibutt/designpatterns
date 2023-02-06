<?php

/**
 * It is an object example of any database etc
 */
class Customer
{
    /**
     * Customer Id
     * @var id
     */
    public $id;
    /**
     * Customer first name
     *
     * @var $firstName
     */
    public $firstName;
    /**
     * Customer last Name
     *
     * @var $lastName
     */
    public $lastName;

    /**
     * Customer email
     *
     * @var $email
     */
    public $email;

    /**
     * Assign default values on the object creation
     *
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $email
     */
    public function __construct($id, $firstName, $lastName, $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }
}