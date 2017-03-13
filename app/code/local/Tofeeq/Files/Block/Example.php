<?php
class Tofeeq_Files_Block_Example extends Mage_Core_Block_Template
{
	public function __construct($args = null)
	{
		parent::__construct($args);
	
	}
	
	
	public function display()
	{
		return __FILE__ . " " . __LINE__;		 
	}
	
	
	
}