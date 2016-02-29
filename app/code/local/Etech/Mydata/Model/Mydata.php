<?php

class Etech_Mydata_Model_Mydata extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('mydata/mydata');
    }

    public function loadByField() {
        $data = $this->getResource()->loadByField();
        return $data;
    }

}
