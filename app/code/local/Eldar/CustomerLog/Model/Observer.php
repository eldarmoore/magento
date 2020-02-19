<?php

class Eldar_CustomerLog_Model_Observer
{

    public function customerLogin($observer)
    {
        $customer = $observer->getCustomer();
        $email = $customer->getEmail();

        Mage::log($email . '() Hello!'); // Test Log, getting there

        $customer_log = array(
            'email'         => $email,
            'login_counter' => 1,
            'last_visit_at' => now(),
        );

        $model = Mage::getModel('eldar_customerlog/customer_log')->addData($customer_log);

        try {
            $model->save(); //save data
            $insertId = $model->getId();
            Mage::log("Data successfully inserted. Insert ID: " . $insertId);
        } catch (Exception $e) {
            Mage::log($e->getMessage());
        }
    }
}