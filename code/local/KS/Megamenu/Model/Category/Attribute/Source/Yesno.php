<?php

class KS_Megamenu_Model_Category_Attribute_Source_Yesno extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{

	public function getAllOptions()
	{
		if (!$this->_options) {
			$this->_options = array(
				array(
					'value' => 1,
					'label' => Mage::helper('megamenu')->__('Yes'),
				),
				array(
					'value' => 2,
					'label' => Mage::helper('megamenu')->__('No'),
				),
			);
		}
		return $this->_options;
	}

}
