<?php

class Eldar_CustomerLog_Model_Resource_Log extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('eldar_customerlog/log', 'email');
    }
}