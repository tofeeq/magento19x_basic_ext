<?php
/*
	model resource configuration, ie attaching model with db table
*/
class Tofeeq_Files_Model_Mysql4_Uploads
    extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        /**
         * Tell Magento the database table name and primary key field to persist 
         * data to. Similar to the _construct() of our Model, Magento finds 
         * this data from config.xml by finding the <resourceModel/> node 
         * and locating children of <entities/>.
         * 
         * In this example:
         * - tofeeq_files is the Model alias
         * - uploads is the entity (table) referenced in config.xml
         * - id is the name of the primary key column
         * 
         * As a result Magento will write data to the table 
         * 'tofeeq_files_uploads' and any calls to 
         * $model->getId() will retrieve the data from the column 
         * named 'id'.
         */
        $this->_init('tofeeq_files/uploads', 'id');
    }
}