<?php
include_once("Customer.php");

/**
 * In a proper implementation of the MVC pattern, we only expose entity classes(objects) by the Model, and these objects cannot encapsulate any business logic.
Their sole purpose in an entity class is to keep data. Depending on the implementation, an Entity object can be in XML or JSON format.
 */
class Model
{
    /**
     * It will return all customers in the form of customers object
     *
     * @return Customer[]
     */
    public function getCustomerList()
    {
        return array(
            "1" => new Customer("1", "Abbas Ali", "Butt", "abbasalibutt@gmail.com"),
            "2" => new Customer("2", "Imran", "Ali", "imranali@gmail.com"),
            "3" => new Customer("3", "Aattqa", "Nadeem", "aattqanadeem@gmail.com")
        );
    }

    /**
     * This function will return the specific customer based on it's id
     *
     * @param $id
     * @return Customer
     */
    public function getCustomer($id)
    {
        $allCustomers = $this->getCustomerList();
        return $allCustomers[$id];
    }
}