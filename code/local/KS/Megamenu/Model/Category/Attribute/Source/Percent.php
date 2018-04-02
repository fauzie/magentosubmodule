<?php

class KS_Megamenu_Model_Category_Attribute_Source_Percent extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
	public function getAllOptions()
	{
		if (!$this->_options) {
			$this->_options = array(
				array(
					'value' => '',
					'label' => '--'
        ),
				array(
					'value' => 1,
					'label' => Mage::helper('megamenu')->__('16%'),
				),
				array(
					'value' => 2,
					'label' => Mage::helper('megamenu')->__('33%'),
				),
				array(
					'value' => 3,
					'label' => Mage::helper('megamenu')->__('50%'),
				),
				array(
					'value' => 4,
					'label' => Mage::helper('megamenu')->__('66%'),
				),
				array(
					'value' => 5,
					'label' => Mage::helper('megamenu')->__('83%'),
				),
				array(
					'value' => 6,
					'label' => Mage::helper('megamenu')->__('100%'),
				)
			);
		}
		return $this->_options;
	}
}
