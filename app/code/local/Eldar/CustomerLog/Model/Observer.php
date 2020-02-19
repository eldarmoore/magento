<?php

class Eldar_CustomerLog_Model_Observer
{

    public function customerLogin($observer)
    {
        $customer = $observer->getCustomer();
        $email = $customer->getEmail();
        Mage::log($email. '() Hello!');
    }

}