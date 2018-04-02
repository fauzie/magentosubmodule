<?php

class KS_Megamenu_Model_Category_Attribute_Source_Type extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
	public function getAllOptions()
	{
		if (!$this->_options) {
			$this->_options = array(
				array(
					'value' => 'default',
					'label' => Mage::helper('megamenu')->__('Default'),
				),
				array(
					'value' => 'wide',
					'label' => Mage::helper('megamenu')->__('Wide'),
				),
			);
		}
		return $this->_options;
	}
}
