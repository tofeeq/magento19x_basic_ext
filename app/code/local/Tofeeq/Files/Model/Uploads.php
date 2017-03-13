<?php
/*
This is kind of a mapper which is itneracting with resource, can be found in Mysql4 folder
*/

class Tofeeq_Files_Model_Uploads
    extends Mage_Core_Model_Abstract
{


	protected function _construct()
    {
    	/**
         * This tells Magento where the related Mysql4 Model can be found.
         * 
         * For a Mysql4 Model, Magento will use the standard Model alias,
         * in this case 'tofeeq_files' and look in 
         * config.xml for a child node <resourceModel/>. This will be the
         * location Magento will look for a Model when 
         * Mage::getResourceModel() is called. In our case:
         * Tofeeq_Files_Model_Mysql4
         */

        $this->_init('tofeeq_files/uploads');
    }

    protected function _beforeSave()
    {
        parent::_beforeSave();
        
        /**
         * Perform some actions just before a Brand is saved.
         */
        //$this->_updateTimestamps();
        //$this->_prepareUrlKey();
        
        return $this;
    }
    
    protected function _afterSave()
    {
    	parent::_afterSave();
    	return $this;
    }
}