<?php
class Rp_Cmsnewtab_Model_Observer
{
    public function cmsField($observer)
    {
		$model = Mage::registry('cms_page');

        $form = $observer->getForm();

        $fieldset = $form->addFieldset('rp_customvalue_fieldset', array('legend'=>Mage::helper('cms')->__('Custom Tab'),'class'=>'fieldset-wide'));
        //add new field
        $fieldset->addField('custom_newtab_value', 'text', array(
            'name'      => 'custom_newtab_value',
            'label'     => Mage::helper('cms')->__('Custom Title'),
            'title'     => Mage::helper('cms')->__('Custom Title'),
            'disabled'  => false,
            //set field value
            'value'     => $model->getCustomNewtabValue()
        ));
	}
}
