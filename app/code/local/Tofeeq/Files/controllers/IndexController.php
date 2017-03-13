<?php

class Tofeeq_Files_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{

		$collection = Mage::getModel('tofeeq_files/uploads')
			->getCollection();

		$this->loadLayout();
		$this->getLayout()
			->getBlock('tofeeq.files.uploads')
			->setData('files', $collection);

		$this->renderLayout();
	}
}
