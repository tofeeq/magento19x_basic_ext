<?php
class Tofeeq_Files_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_CONFIG_PATH = 'files/settings/';

	public function isEnabled()
	{
		return (bool) $this->_getConfigValue('enabled');
	}

	protected function _getConfigValue($key)
	{
		return Mage::getStoreConfig(self::XML_CONFIG_PATH . $key);
	}
}
