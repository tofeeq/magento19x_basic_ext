<?php

$installer = $this;
 
$installer->startSetup();
 


$installer->run("
DROP TABLE IF EXISTS {$installer->getTable('tofeeq_files/uploads')};
CREATE TABLE {$installer->getTable('tofeeq_files/uploads')} (
 `id` int(11) unsigned NOT NULL auto_increment,
  `file_name` varchar(20),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();