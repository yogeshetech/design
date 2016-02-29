<?php

class Etech_Mydata_Model_Profile extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('mydata/profile');
    }
    
     public function profileData() {

        $model = $this->getCollection();
       
        return $model;
    }
    
    
    
     public function lastData($post) {
        return $this->setData($post)->save();
    }
    
  
}
     
