<?php
class Tofeeq_Files_Model_Mysql4_Uploads_Collection
 extends Mage_Core_Model_Mysql4_Collection_Abstract	{
	
	public function _construct() {
		parent::_construct();
	    $this->_init("tofeeq_files/uploads");
	    
	}

}