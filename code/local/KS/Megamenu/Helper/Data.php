<?php

class KS_Megamenu_Helper_Data extends Mage_Core_Helper_Abstract
{

	private $_processor;

	public function getCfg($path, $section = 'athlete', $store = NULL)
	{
    if ($store == NULL) {
			$store = Mage::app()->getStore()->getId();
		}
		$path = 'megamenu/' . $path;
    $path = $section . '/' . $path;

		return Mage::getStoreConfig($path, $store);
	}

	public function processCmsBlock($content)
	{
		if (!$this->_processor) {
			$this->_processor = Mage::helper('cms')->getBlockTemplateProcessor();
		}
		return $this->_processor->filter($content);
	}
}
