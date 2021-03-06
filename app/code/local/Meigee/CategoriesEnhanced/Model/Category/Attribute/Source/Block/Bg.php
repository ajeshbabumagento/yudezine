<?php
class Meigee_CategoriesEnhanced_Model_Category_Attribute_Source_Block_Bg extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{	
	public function getAllOptions()
	{
		if (!$this->_options)
		{
			$this->_options = array(
				array('value' => '1',		'label' => 'Left'),
				array('value' => '2',		'label' => 'Right'),
		        array('value' => '3',		'label' => 'Center'),
				array('value' => '4',		'label' => 'Fill with stretching')
			);
        }
		return $this->_options;
    }
}