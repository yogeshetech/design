<?php

class Etech_Mydata_Model_User extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('mydata/user');
    }

  
    
  
     public function firstData($username) {
        return $this->setData($username)->save();
    }
    

}
