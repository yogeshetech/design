<?php

class Etech_Mydata_Block_Mydata extends Mage_Core_Block_Template {

    public function _prepareLayout() {
        return parent::_prepareLayout();
    }

    public function getMydata() {
        if (!$this->hasData('mydata')) {
            $this->setData('mydata', Mage::registry('mydata'));
        }
        return $this->getData('mydata');
    }

    public function loadByField() {
        $model = Mage::getModel('mydata/mydata')->loadByField();
        return $model;
    }

}
