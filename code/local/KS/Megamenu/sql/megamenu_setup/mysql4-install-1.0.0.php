<?php
$this->startSetup();

$this->addAttribute('catalog_category', 'megamenu_type', array(
	'group' => 'Mega Menu',
	'type' => 'varchar',
	'input' => 'select',
	'source' => 'megamenu/category_attribute_source_type',
	'label' => 'Dropdown type',
	'note' => "For top-level categories only",
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 100,
));

$this->addAttribute('catalog_category', 'megamenu_layout', array(
	'group' => 'Mega Menu',
	'type' => 'varchar',
	'input' => 'select',
	'source' => 'megamenu/category_attribute_source_layout',
	'label' => 'Dropdown Layout',
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 200,
));

$this->addAttribute('catalog_category', 'megamenu_menu', array(
	'group' => 'Mega Menu',
	'type' => 'int',
	'input' => 'select',
	'source' => 'megamenu/category_attribute_source_yesno',
	'label' => 'Show subcategories',
	'note' => "Show/hide subcategories list",
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 300,
));

$this->addAttribute('catalog_category', 'megamenu_top', array(
	'group' => 'Mega Menu',
	'input' => 'textarea',
	'type' => 'text',
	'label' => 'Top block',
	'note' => "For top-level categories only",
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 400,
));

$this->addAttribute('catalog_category', 'megamenu_bottom', array(
	'group' => 'Mega Menu',
	'input' => 'textarea',
	'type' => 'text',
	'label' => 'Bottom block',
	'note' => "For top-level categories only",
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 500,
));

$this->addAttribute('catalog_category', 'megamenu_right', array(
	'group' => 'Mega Menu',
	'input' => 'textarea',
	'type' => 'text',
	'label' => 'Right block',
	'note' => "For top-level categories only",
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 600,
));

$this->addAttribute('catalog_category', 'megamenu_right_percent', array(
	'group' => 'Mega Menu',
	'type' => 'varchar',
	'input' => 'select',
	'source' => 'megamenu/category_attribute_source_percent',
	'label' => 'Right block width',
	'note' => "Width of right block in percents",
	'backend' => '',
	'visible' => true,
	'required' => false,
	'visible_on_front' => true,
	'wysiwyg_enabled' => true,
	'is_html_allowed_on_front'	=> true,
	'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
	'position' => 700,
));

$this->endSetup();
