<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

/**
 * Create table 'customer_log'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('customer_log'))
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'primary'   => true,
        'nullable'  => false,
    ), 'Email')
    ->addColumn('login_counter', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable'  => false,
        'default'   => '0',
    ), 'Login Counter')
    ->addColumn('last_login', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'Last Login')
    ->setComment('Customer Log');

$installer->getConnection()->createTable($table);
$installer->endSetup();