<?php 

$installer = $this;
$installer->startSetup();

/*
$installer->getConnection()
    ->addColumn($installer->getTable('checkoutstep/orderdata'),
    'status',
	    array(
	        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
	        'nullable' => true,
	    	'length' => 25,
	        'default' => null,
	        'comment' => 'Status of the order'
	    )		
	);
$installer->getConnection()
	->addColumn($installer->getTable('checkoutstep/orderdata'),
			'updated_on',
			array(
					'type' => Varien_Db_Ddl_Table::TYPE_INTEGER,
					'nullable' => true,
					'default' => null,
					'comment' => 'order status updated on '
			)
);
 
$installer->endSetup();
*/